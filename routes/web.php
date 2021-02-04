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
Route::get('/feature', function () {
    $nama = 'Ary Boby Siregar';
    return view('feature',['namaku'=>$nama]);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/truck', 'trucksController@index');
Route::get('/truck/create', 'trucksController@create');
Route::get('/truck/{truck}', 'trucksController@show');
Route::post('/truck', 'trucksController@store');

