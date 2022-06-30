<?php

namespace App\Http\Controllers;

use App\Models\Surah;
use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use ONGR\ElasticsearchDSL\Query\Compound\BoolQuery;
use ONGR\ElasticsearchDSL\Query\FullText\MatchQuery;
use ONGR\ElasticsearchDSL\Query\FullText\MatchPhraseQuery;
use ONGR\ElasticsearchDSL\Query\Joining\NestedQuery;
use ONGR\ElasticsearchDSL\Query\TermLevel\TermQuery;
use ONGR\ElasticsearchDSL\Highlight\Highlight;
use ONGR\ElasticsearchDSL\Search;
use ONGR\ElasticsearchDSL\Query\Specialized\MoreLikeThisQuery;


class ClientController extends Controller
{



    protected $elasticsearch;

    //Set up our client
    public function __construct()
    {
        $this->elasticsearch = ClientBuilder::create()->build();

    }
    public function elasticsearchQueries(Request $request){
        // dd($request->kt_docs_repeater_advanced);
        // $validator = Validator::make($request->kt_docs_repeater_advanced, [
        //     '*.paraghraphe.text' => 'required',
        // ], $messages = [
        //     'required' => 'أدخل كلمات البحث.',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator);
        // }
        $items=$this->searchOnElasticsearch($request);
        return view('results')->with('result',$this->buildCollection($items))->with('count',$this->getTotal($items));
    }
    public function fetchAyah(Request $request)
    {
        $items = $this->findAyahXML($request->id);
        // dd($items);
        return view('ayah')->with('result',$items['_source']);
    }

    private function findAyahXML(string $query = ''): array
    {
        $params = [
            'index' => 'my-tafsir',
            'id'    => $query
        ];
        
        $items = $this->elasticsearch->get($params);

        return $items;
    }


    private function searchOnElasticsearch(Request $request)
    {
        


        $requestParams = $request->kt_docs_repeater_advanced;

        $search = new Search();

        foreach ($requestParams as $key => $param) {
            $boolQuery = new BoolQuery();

            $param=array_filter($param);
            $searchType=$param['search_type'];
            if(isset($param['type'])){
                $boolOperator=$param['type'];   
            }else{
                $boolOperator='MUST';

            }
            switch ($boolOperator) {
                case 'MUST':
                    $BoolQueryOperator=BoolQuery::FILTER;
                    break;
                case 'SHOULD':
                    $BoolQueryOperator=BoolQuery::SHOULD;
                    break;
                default:
                $BoolQueryOperator=BoolQuery::MUST_NOT;
                    break;
            }

            
            foreach ($param as $key => $field) {
                if($key === 'paraghraphe.text' ){
                    switch ($searchType) {
                        case 'default':
                            $boolQuery->add(new MatchQuery('content.rebuilt_arabic', $field), BoolQuery::SHOULD);
                            
                            break;
                        case 'exact':
                            $boolQuery->add(new MatchPhraseQuery('content', $field), BoolQuery::SHOULD);
                            
                            break;
                        case 'synonym':
                            $boolQuery->add(new MatchQuery('content.arabic_synonym_normalized', $field), BoolQuery::SHOULD);
                            
                            break;
                        default:
                            $moreLikeThisQuery = new MoreLikeThisQuery(
                                $field,
                                [
                                    'fields' => ['content.arabic_synonym_normalized'],
                                    'min_term_freq' => 1,
                                    'max_query_terms' => 12,
                                ]
                            );
                            
                            $boolQuery->add($moreLikeThisQuery, BoolQuery::SHOULD);
                            
                            break;
                    }

                }
                elseif ($key === 'paraghraphe.topic' || $key === 'paraghraphe.subtopic') {
                    $boolQuery->add(new MatchQuery($key, $field), BoolQuery::SHOULD);
            
                } elseif($key!='search_type' AND $key!='type') {
                    $boolQuery->add(new MatchQuery($key, $field), $BoolQueryOperator);

                }
            }


            $search->addQuery($boolQuery, BoolQuery::FILTER);
            

            
        }
        $requestFilter = $request->filter;

        if(isset($requestFilter)){
            foreach ($requestFilter as $key => $value) {
            
                if( $key === 'surah'){
                    foreach ($value as $key => $term) {
                        $filter = new TermQuery('chapter',  $term);
                        $search->addQuery($filter, BoolQuery::FILTER);
                        
                    }
    
                }
                if( $key === 'type'){
                    foreach ($value as $key => $term) {
                        $filter = new TermQuery('type',  $term);
                        $search->addQuery($filter, BoolQuery::FILTER);
                        
                    }
    
                }
                if( $key === 'topic'){
                    foreach ($value as $key => $term) {
                        $filter = new TermQuery('topic',  $term);
                        $search->addQuery($filter, BoolQuery::FILTER);
                        
                    }
    
                }
                if( $key === 'subtopic'){
                    foreach ($value as $key => $term) {
                        $filter = new TermQuery('subtopic',  $term);
                        $search->addQuery($filter, BoolQuery::FILTER);
                        
                    }
    
                }
            }
        }


        $higlight = new Highlight();
        $higlight->addField('content');
        $higlight->addField('content.arabic_synonym_normalized');
        $higlight->addField('content.rebuilt_arabic');
        $higlight->setTags(["<a class='ls-2 fw-bolder' style='text-decoration: underline;'>"],["</a>"]);
        $higlight->setFragmentSize(0);
        $higlight->setNumberOfFragments(2);
        $search->addHighlight($higlight);
        $searchParams = [
            'index' => 'my-tafsir',
            'from'=>0,
            'size'=>100,
            'body' => $search->toArray(),
        ];
        $items = $this->elasticsearch->search($searchParams);
    //    dd(json_encode($searchParams));
         return $items;
    
        

    }
    private function buildCollection(array $items)
    {
        return $items['hits']['hits'];
    }
    private function getTotal(array $items){
        $count=$items['hits']['total'];
        return $count;
    }

}


