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


Route::get('/signin', 'HomeController@signin')->name('signin'); //kullanıcı kayıt etme arayüzü

Route::get('createrootstory', 'HomeController@createrootstory')->name('createrootstory')->middleware("checkuser"); //anahikaye oluşturma ara yüzü

Route::get('rootdetail/{rootstory}', 'storyController@rootdetail')->name('storydetay');
Route::post('addalter/{id}', 'storyController@addalter')->name('addalter')->middleware("checkuser"); //alternatif ekleme arayüzü
Route::get('login', 'HomeController@login')->name('login');  //loginarayüzü
Route::post('loginUser', 'userController@loginUser')->name('loginUser');  //kullanıyı login etme

Route::get('logoutuser', 'userController@logoutuser')->name('logoutuser'); //kullanıcı çıkış yapma

Route::post('signinUser', 'userController@signinUser')->name('signinUser'); //kullanıcı kayıt etme
Route::post('addRootStory', 'storyController@addRootStory')->name('addRootStory'); //anahikaye kayıt etme
Route::post('savealter', 'storyController@savealter')->name('savealter'); //alternatif kayıt etme
Route::post('', 'storyController@delete')->name('deletestory'); //hikaye silme

Route::get('alterdetail/{firstalter}', 'storyController@alterdetail')->name('alterdetay'); //firstalter detay arayüzü
Route::get('allstory/{story}', 'storyController@allstory')->name('allstory'); //tüm hikaye okuma arayüzü

Route::get('profil/{name}', 'userController@userdetail')->name('profil');




Route::get('{page}', 'storyController@liste')->name('stories');




