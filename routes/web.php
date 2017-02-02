<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('profile', 'PagesController@profile');
Route::get('setting', 'PagesController@setting');

Route::get('/home', 'HomeController@index');
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);

Route::get('users', ['uses' => 'UsersController@index']);

// Route::get('users', function () {
//     $users = [
//     	'0' => [
//     			'first_name' => 'Renato',
//     			'last_name' => 'Hysa',
//     			'location' => 'Albania'
//     	],
//     	'1' => [
//     			'first_name' => 'Jameica',
//     			'last_name' => 'Alba',
//     			'location' => 'THAILAND'
//     	]
//     ];
//     return $users;
// });