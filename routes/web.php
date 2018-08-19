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

/*Route::post('/api/auth/register', 'AuthController@register');

Route::post('/api/auth/login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function(){
    Route::get('/api/auth/user', 'AuthController@user');
    Route::post('/api/auth/logout', 'AuthController@logout');
});
Route::group(['middleware' => 'jwt.refresh'], function(){
    Route::get('/api/auth/refresh', 'AuthController@refresh');
});*/



