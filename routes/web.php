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


Route::view('/user-panel', 'user-panel.index');
Route::view('/user-panel/profile', 'user-panel.profile.edit');
Route::view('/user-panel/advertises', 'user-panel.advertises.index');
Route::view('/user-panel/advertises/create', 'user-panel.advertises.create');
Route::view('/user-panel/advertises/edit', 'user-panel.advertises.edit');


Route::view('/control-panel', 'controlPanel.index');
Route::view('/control-panel/admins', 'controlPanel.admins.index');
Route::view('/control-panel/categories', 'controlPanel.categories.index');
Route::view('/control-panel/cities', 'controlPanel.cities.index');
Route::view('/control-panel/tags', 'controlPanel.tags.index');
Route::view('/control-panel/users', 'controlPanel.users.index');
