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

Route::get('/', 'MonController@index');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('{n}', function ($n) {
//     return 'Je suis la page '.$n.' !';
// })->where('n','[0-9]+');
// Route::get('flights/{id}/edit', 'HomeController@edit');
// Route::get('flights/{id}/delete', 'HomeController@delete');
Route::get('flights/add', 'HomeController@create')->name('createFlight');
Route::post('flights', 'HomeController@store')->name('storeFlight');
Route::get('flights/{id}', 'HomeController@flight')->name('show')->middleware('auth');
// Route::get('test', function () {
//     // return ['un','2','Troie'];
//     return response('teeeeeeeest...',503);
// });
// Route::get('vue/{n}', function ($n) {
//     return view('vue1')->with('numero', $n);
// });
// Route::get('controller/{n}', 'MonController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
