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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list', 'ListController@index');
Route::post('/list', 'ListController@search');

Route::get('/detail/{id}', 'DetailController@index');

Route::get('/create', 'CreateController@index');
Route::post('/create', 'CreateController@create');

Route::get('/update/{id}', 'UpdateController@index');
Route::post('/update/{id}', 'UpdateController@update');

Route::get('/delete/{id}', 'DeleteController@index');
Route::post('/delete/{id}', 'DeleteController@delete');

Route::get('/logout', 'LogoutController@getLogout');

Route::get('/userRegister', 'UserRegisterController@getRegister');
