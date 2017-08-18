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

Route::get('/','TeamsController@index');
Route::get('/team/{id}','TeamsController@show');

Route::get('/players/{id}','PlayersController@show');

Route::post('/register','RegisterController@store');
Route::get('/register','RegisterController@create');

Route::get('/logout','LoginControllers@destroy');
Route::get('/login','LoginControllers@create')->name('login');
Route::post('/login','LoginControllers@store');

Route::post('/comment/{id}','CommentsController@store');

Route::get('/news','NewsController@index');


Route::get('/news/team/{team}','TeamsController@getTeamNews');
Route::get('/news/create','NewsController@create');
Route::post('/news/store','NewsController@store');


Route::get('/news/{team_id}','NewsController@show');