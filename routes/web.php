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

Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/logout','AdminController@logout');
Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');
	Route::get('/admin/settings','AdminController@settings');
	
	//fafilies route admin
Route::match(['get','post'],'/admin/add-families','FamiliesController@addFamilies');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

