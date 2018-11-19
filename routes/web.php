<?php

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
use App\Document;
use Illuminate\Support\Facades\Input;
Route::get('/', function () {
    return view('welcome');
});


Route::get('addDocument', 'DocumentController@create' )->name('file');

Route::get('allDocuments', 'DocumentController@index');
Route::post('addDocument','DocumentController@store');
// Route::get('search','DocumentController@search');

Route::any('/search',function(){
    $q = Input::get('q');
  $doc = Document::where('serialNumber','LIKE','%'.$q.'%')->orWhere('name','LIKE','%'.$q.'%')->get();
    if(count($doc) > 0 )
       return view('pages.search')->withDetails($doc)->withQuery($q);

    else
     return view('pages.search')->withMessage('No Records Found');

});

Route::get('document/{id}', 'DocumentController@show');
