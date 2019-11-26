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
Route::get('flights/{id}/edit', function () {
    return 'Je suis la page de modification';
});
Route::get('flights/{id}/delete', function () {
    return 'Je suis la page de suppression';
});
Route::get('flights/add', function () {
    return 'Je suis la page d\'ajout';
});
Route::get('flights/{id}', 'HomeController@flight')->name('show');
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
