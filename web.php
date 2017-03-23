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

Route::get('/', function() {
    return view('welcome');
});
Route::get('/home', function() {
    return view('index');
});

Route::post('/save' , 'myController@save');

Route::get('/list', 'myController@slist');

Route::get('/delete/{id}' , 'myController@delete');

Route::get('/edit/{id}' , 'myController@edit');

Route::post('/update' , 'myController@update');

Route::get('/trial' , function(){
	return view('home');
});