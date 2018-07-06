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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();




Route::resource('users', 'UserController');
Route::put('me', 'UserController@updateProfile');
Route::put('users/{id}/activate', 'UserController@activate');
Route::get('me', 'UserController@show');
Route::get('img/{id}/delete', 'AdsController@deleteImage');
Route::Resource('customers', 'CustomerController');



Route::resource('ads', 'AdsController');
Route::resource('apartments', 'ApartmentController');
Route::resource('cars', 'CarController');
Route::resource('categories', 'CategoryController');
Route::resource('articles', 'ArticleController');
Route::resource('blog', 'BlogController');

Route::prefix('a')->group(function () {

});
Route::prefix('u')->group(function () {

    Route::get('dashboard', 'CustomerController@dashboard');
    Route::get('profile', 'CustomerController@profile');
    Route::get('ads', 'CustomerController@ads');
    Route::get('add-ad', 'CustomerController@addAd');


});
Route::get('contact', 'HomeController@contact');
Route::get('faq', 'HomeController@faq');
Route::get('about', 'HomeController@about');
Route::get('all-ads', 'HomeController@allAds');
Route::get('*', function() {
    return view('/') ;
});
