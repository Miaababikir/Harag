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



Auth::routes();

Route::view('/', 'home')->name('home');

Route::view('/advertises/detail', 'advertises.show');
Route::view('/advertises', 'advertises.index');




Route::view('/control-panel', 'controlPanel.index');
Route::view('/control-panel/admins', 'controlPanel.admins.index');
Route::view('/control-panel/categories', 'controlPanel.categories.index');
Route::view('/control-panel/cities', 'controlPanel.cities.index');
Route::view('/control-panel/tags', 'controlPanel.tags.index');
Route::view('/control-panel/users', 'controlPanel.users.index');
