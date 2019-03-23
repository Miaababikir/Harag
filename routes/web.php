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

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.social');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


//after Auth routes
Auth::routes(['verify' => true]);

//Home
Route::get('/', 'HomeController@index')->name('home');
//Contact
Route::get('/contact', 'HomeController@contact')->name('contact');
//Advertises
Route::resource('advertises', 'Advertises\AdvertiseController');

Route::view('/user-panel', 'user-panel.index');
Route::view('/user-panel/profile', 'user-panel.profile.edit');
Route::view('/user-panel/advertises', 'user-panel.advertises.index');
Route::view('/user-panel/advertises/create', 'user-panel.advertises.create');
Route::view('/user-panel/advertises/edit', 'user-panel.advertises.edit');

Route::get('/control-panel/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/control-panel/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('/control-panel/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::prefix('control-panel')->middleware('auth:admin')->group(function () {

    Route::resource('categories', 'ControlPanel\Categories\CategoryController')->except(['create', 'edit', 'show']);
    Route::resource('tags', 'ControlPanel\Tags\TagController')->except(['create', 'edit', 'show']);


    Route::view('', 'controlPanel.index')->name('admin.home');
    Route::view('admins', 'controlPanel.admins.index');
    Route::view('cities', 'controlPanel.cities.index');
    Route::view('users', 'controlPanel.users.index');

});


