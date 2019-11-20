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
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getWeatherStation', 'ControlController@getWeather')->name('getWeather');
Route::get('/getDailyProgram', 'ControlController@getDailyProgram')->name('getDailyProgram');
Route::get('/getSighting', 'ControlController@getSighting')->name('getSighting');
Route::get('/getTimePage', 'ControlController@getTimePage')->name('getTimePage');
Route::get('/getInformation' , 'ControlController@getInformation')->name('getInformation');
Route::get('/getDailyProgram2' , 'ControlController@getDailyProgramNew');
