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

Route::resource('/', 'BetsController');

Route::auth();
Route::resource('/admin', 'AdminController');
Route::resource('/admin-teams', 'AdminTeamsController');
Route::get('/admin-teams-deactivate/{id}', 'AdminTeamsController@deactivate');
Route::get('admin-teams-activate/{id}', 'AdminTeamsController@activate');
Route::get('/home', 'BetsController@index');