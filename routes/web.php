<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
  return view('auth.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/websites', 'WebsiteController@websites')->name('admin.websites');
Route::get('/admin/website/view/{id}', 'WebsiteController@websiteView')->name('website.view');
Route::get('/admin/website/create', 'WebsiteController@websiteCreate')->name('website.create');
Route::post('/admin/website/store', 'WebsiteController@websiteStore')->name('website.store');
Route::get('/website/slider/{id}', 'WebsiteController@websiteSlider')->name('website.slider');
Route::post('/website/slider/{id}', 'WebsiteController@sliderStore')->name('slider.store');
