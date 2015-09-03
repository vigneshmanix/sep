<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/'					,'HomeController@index');
Route::get('/area_of_training'	,'HomeController@area_of_training');
Route::get('/target_audience'	,'HomeController@target_audience');
Route::get('/resource_person'	,'HomeController@resource_person');
Route::get('/registration'	,'HomeController@registration');
Route::get('/sponsorship_opportunity','HomeController@sponsorship_opportunity');