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

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/imoveis','PropertyController@index');

 Route::get('/imoveis/cad','PropertyController@dado');

 Route::get('/imoveis/{name}','PropertyController@show');

 Route::post('/imoveis/store','PropertyController@store');


Route::middleware('auth')->group(function(){


Route::resource('clients', 'ClientsController');
});




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


