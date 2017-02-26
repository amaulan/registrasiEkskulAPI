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

// Route::group(['prefix' => 'user'], function(){
//     Route::get('/',                 '')
// });

Route::post('/auth', 'LoginController@auth');

Route::group(['prefix' => 'ekskul'], function(){
    Route::post('/',                 'EkskulController@index');
    Route::post('/show',             'EkskulController@show');
});

Route::group(['prefix' => 'siswa-ekskul'], function(){
    Route::post('/create',           'EkskulSiswaController@store');
});