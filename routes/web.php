<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/search', function () {
    return view('welcome');
});

Route::prefix('api')->group(function ()
{
//    Route::get('fetch-ayah', [ClientController::class, 'fetchAyah']);
   Route::post('fetch-topic', [ClientController::class, 'fetchTopic']);

});
Route::get('/ayah/{id}', [ClientController::class, 'fetchAyah']);

Route::get('/result', [ClientController::class, 'elasticsearchQueries']);