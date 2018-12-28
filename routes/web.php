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
use App\Device;
use App\Card;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('auth.login');
});



Route::get('addDocument', 'DocumentController@create')->name('file')->middleware('auth');
Route::get('addCard','CardController@create')->name('addCard')->middleware('auth');
Route::get('addDevice','DeviceController@create')->name('addDevice')->middleware('auth');
Route::get('device/{id}', 'DeviceController@show');

// Route::get('allDocuments', 'DocumentController@index');
Route::post('addDocument', 'DocumentController@store')->middleware('auth');
Route::post('addCard','CardController@store')->middleware('auth');
Route::get('card/{id}','CardController@show');
Route::post('addDevice','DeviceController@store')->middleware('auth');
// Route::get('search','DocumentController@search');

Route::any('/search', function () {
    $q = Input::get('q');
    $doc = Document::where('serialNumber', 'LIKE', '%' . $q . '%')->
    orWhere('name', 'LIKE', '%' . $q . '%')->get();
    if (count($doc) > 0)
        return view('pages.search')->withDetails($doc)->withQuery($q);

    else
        return view('pages.search')->withMessage('No Records Found');

})->middleware('auth');

Route::any('/searchDevice',function(){
    $q = Input::get('q');
    $device = Device::where('serialNumber', 'LIKE', '%'.$q.'%' )->
    orWhere('type','LIKE', '%'.$q.'%')->get();
    if (count($device) > 0)
        return view('pages.searchDevices')->withDetails($device)->withQuery($q);

    else
        return view('pages.searchDevices')->withMessage('No Records Found');
});


Route::any('/searchCard', function () {
    $q = Input::get('q');
    $device = Card::where('serialNumber', 'LIKE', '%' . $q . '%')->orWhere('type', 'LIKE', '%' . $q . '%')->get();
    if (count($device) > 0)
        return view('pages.searchCard')->withDetails($device)->withQuery($q);

    else
        return view('pages.searchCard')->withMessage('No Records Found');
});

Route::get('document/{id}', 'DocumentController@show')->middleware('auth');

Route::resource('document', 'DocumentController')->middleware('auth');
 Route::resource('card', 'CardController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

 Route::post('/documents/{id}', 'DocumentController@updateDocument')->middleware('auth');

Route::get('/viewitems', 'DocumentController@viewItems');
