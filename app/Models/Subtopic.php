<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use League\Csv\Reader;
use Sushi\Sushi;



class Subtopic extends Model
{
    use Sushi;

    /**
     * Setup schema for columns
     */
    protected $schema = [
        'id'           => 'integer',
        'name'     => 'string',
    ];


    /**
     * Process data via CSV
     * @return array
     */
    public function getRows()
    {
        $records = Reader::createFromPath(__DIR__ . '/../../resources/fixtures/subtopic.csv', 'r')
            ->setHeaderOffset(0)
            ->getRecords();

        return collect($records)
            ->values()
            ->toArray();
    }
}