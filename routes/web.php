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
Route::get('category', 'PagesController@category');
Route::get('product', 'PagesController@product');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('login', 'PagesController@login');
Route::get('register', 'PagesController@register');
Route::get('sitemap', 'PagesController@sitemap');
Route::get('checkout', 'PagesController@checkout');

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