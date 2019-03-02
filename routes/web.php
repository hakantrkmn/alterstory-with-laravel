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


Route::get('/signin', 'HomeController@signin')->name('signin');

Route::get('createrootstory', 'HomeController@createrootstory')->name('createrootstory');

Route::get('rootdetail/{rootstory}', 'storyController@rootdetail')->name('storydetay');
Route::post('addalter/{id}', 'storyController@addalter')->name('addalter');
Route::get('login', 'HomeController@login')->name('login');
Route::post('loginUser', 'userController@loginUser')->name('loginUser');

Route::get('logoutuser', 'userController@logoutuser')->name('logoutuser');

Route::post('signinUser', 'userController@signinUser')->name('signinUser');
Route::post('addRootStory', 'storyController@addRootStory')->name('addRootStory');
Route::get('alterdetail/{firstalter}', 'storyController@alterdetail')->name('alterdetay');
Route::get('profil/{name}', 'userController@userdetail')->name('profil');




Route::get('{page}', 'storyController@liste')->name('stories');




