<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::get('chocolate', 'ChocolateController@index');
Route::get('chocolate/destroy/{chocolateType}', 'ChocolateController@destroy');
Route::get('chocolate/upvotePreference/{chocolateType}', 'ChocolateController@upvotePreference');
Route::get('chocolate/create/{chocolateType}','ChocolateController@create');
Route::get('/', function()
{
	return View::make('hello');
});


