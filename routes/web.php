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
Auth::routes(['verify' => true]);

Route::group(['prefix' => 'users', 'middleware'=>'auth'], function(){
    Route::get('/', 'Admin\UserController@listUsers');
    Route::get('/{id}', 'Admin\UserController@getUser');
    Route::post('/manage/delete', 'Admin\UserController@deleteUser');
    Route::post('/manage/create', 'Admin\UserController@createUser');
});
Route::get('/home', 'HomeController@index')->name('home');