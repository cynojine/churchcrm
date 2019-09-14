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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('main');
});

Route::match(['get','post'],'/admin','AdminController@login')->name('admin_login');
Route::get('/logout','AdminController@logout');
Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/{user}/dashboard','AdminController@dashboard')->name('dashboard');
	Route::get('/admin/{user}/settings','AdminController@settings')->name('admin_settings');
	Route::post('/admin/{user}/settings/post','AdminController@postSettings')->name('post_admin_settings');
	
	//fafilies route admin
Route::match(['get','post'],'/admin/add-families','FamiliesController@addFamilies');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

