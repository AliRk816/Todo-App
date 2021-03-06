<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', 'TodoController@index');

Route::get('/edit/{id}', 'TodoController@edit');


Route::resource('todos', 'TodoController');

Route::post('/walo', 'TodoController@store');

Route::post('/edit/{id}', 'TodoController@update');

Route::get('/delete/{id}', 'TodoController@destroy');

Route::get('/completed/{id}', 'TodoController@completed');




