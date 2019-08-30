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

Route::get('/comments', 'CommentsController@index');
Route::post('/comments', 'CommentsController@store');
Route::get('/memos', 'MemosController@index');
Route::post('/memos', 'MemosController@store');

Route::get('/commentsmemos', 'CommentsMemosController@index');
