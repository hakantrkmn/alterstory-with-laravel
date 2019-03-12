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

Route::post('apibancheck', 'myAPI@apiban')->name('apiban'); //kullanıcı çıkış yapma
Route::post('apisignin', 'myAPI@apisignin')->name('apisignin'); //kullanıcı çıkış yapma
Route::post('apicheckname', 'myAPI@apicheckname')->name('apicheckname'); //kullanıcı çıkış yapma
Route::post('apilogin', 'myAPI@apilogin')->name('apilogin'); //kullanıcı çıkış yapma




Route::post('loginuser', 'userController@loginUser')->name('loginUser');  //kullanıyı login etme
Route::get('logoutuser', 'userController@logoutuser')->name('logoutuser'); //kullanıcı çıkış yapma
Route::get('edituser/{user}', 'userController@edituser')->name('edituser'); //kullanıcı edit 
Route::post('/edituser/{user}', 'userController@useredit')->name('useredit'); //kullanıcı çıkış yapma
Route::get('profil/{name}', 'userController@userdetail')->name('profil');
Route::post('/user/signinUser', 'userController@signinUser')->name('signinUser'); //kullanıcı kayıt etme


Route::post('savealter', 'storyController@savealter')->name('savealter'); //alternatif kayıt etme
Route::post('addRootStory', 'storyController@addRootStory')->name('addRootStory'); //anahikaye kayıt etme
Route::get('firstalters/{rootstory}', 'storyController@rootdetail')->name('storydetay');
Route::post('addalter/{id}', 'storyController@addalter')->name('addalter')->middleware("checkuser"); //alternatif ekleme arayüzü
Route::post('', 'storyController@delete')->name('deletestory'); //hikaye silme

Route::get('secondalters/{firstalter}', 'storyController@alterdetail')->name('alterdetay'); //firstalter detay arayüzü
Route::get('allstory/{story}', 'storyController@allstory')->name('allstory'); //tüm hikaye okuma arayüzü
Route::get('', 'storyController@liste')->name('stories');
Route::get('{page}', 'storyController@liste')->name('stories')->where('page', '[0-9]+');



Route::get('signin', 'HomeController@signin')->name('signin'); //kullanıcı kayıt etme arayüzü
Route::get('createrootstory', 'HomeController@createrootstory')->name('createrootstory')->middleware("checkuser"); //anahikaye oluşturma ara yüzü
Route::get('login', 'HomeController@login')->name('loginuser');  //loginarayüzü






