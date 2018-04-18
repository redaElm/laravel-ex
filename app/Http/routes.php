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

Route::group(['middleware' => 'Checkpermission'], function () {
	Route::get('admin/users','HomeController@admin');
  	Route::resource('admin/users','UserController'); 
 });

Route::group(['middleware' => 'Checkdefault1'], function () {
	Route::get('default1','HomeController@default1');
	Route::get('default1/profile','HomeController@default1Profile');
	Route::get('default1/table','HomeController@default1Table');
	//Route::post('default1/profile','default1Controller@update'); 
  
 });

Route::group(['middleware' => 'Checkdefault2'], function () {
	Route::get('default2','HomeController@default2');
	Route::get('default2/profile','HomeController@default2Profile');
  	Route::get('default2/table','HomeController@default2Table');
 });

Route::group(['middleware' => 'Checkdefault3'], function () {
	Route::get('default3','HomeController@default3');
	Route::get('default3/table','HomeController@default3Table');
	Route::get('default3/profile','HomeController@default3Profile');
	Route::resource('default3/profile','default3Controller'); 

 });

	Route::group(['middleware' => 'auth'], function () {
	Route::get('notactive','HomeController@notactive');
	Route::get('notactive/profile','HomeController@notactiveprofile');
  	
  	
 });



   




Route::get('ab', function()
{
	return view('layouts/dashboardAdmin');
}


);
