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

Route::get('/', 'FrontendController@welcome');

Route::get('aboutUs','pageController@aboutus');

Route::get('home','FrontendController@welcome');

/*-----------------ADMIN-PANEL--------------------------------------*/
Route::get('admin', 'AdminController@dashboard');

Route::get('dashboard', 'AdminController@dashboard');

Route::get('homeSetting', 'AdminController@homeSetting');
	
Route::resource('categories','CategoryController');

Route::resource('setups','SetupController');

Route::resource('socials','SocialController');