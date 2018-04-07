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

Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/login','Auth\AuthController@getLogin');
 Route::post('auth/login','Auth\AuthController@postLogin');


Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

Route::get('auth/logout','Auth\AuthController@logout');

Route::get('admin','HomeController@admin')->middleware('Checkpermission');

Route::get('default1','HomeController@default1');

Route::resource('users','UserController');    




Route::get('ab', function()
{
	return view('layouts/dashboardAdmin');
}


);