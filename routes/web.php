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
Route::post('loginCustomer', 'Auth\LoginController@login');




Route::resource('ads', 'AdsController');
Route::resource('apartments', 'ApartmentController');
Route::resource('cars', 'CarController');
Route::resource('others', 'OtherController');
Route::resource('categories', 'CategoryController');
Route::resource('articles', 'ArticleController');
Route::resource('blog', 'BlogController');
Route::resource('comments', 'CommentController');

Route::prefix('a')->group(function () {

});
Route::prefix('u')->group(function () {

    Route::get('dashboard', 'CustomerController@dashboard');
    Route::get('profile', 'CustomerController@profile');
    Route::get('ads', 'CustomerController@ads');
    Route::get('add-ad', 'CustomerController@addAd');
    Route::get('add-ad/{type}', 'CustomerController@addAdType');
    Route::get('edit-ad/{id}', 'CustomerController@editAd');


});

Route::get('contact', 'HomeController@contact');
Route::post('contact', 'HomeController@storeContact');
Route::get('faq', 'HomeController@faq');
Route::get('about', 'HomeController@about');
Route::get('show-ads/{type}', 'HomeController@allAds');
Route::get('all-ads/{id}', 'HomeController@showAd');

Route::get('*', function() {
    return view('/') ;
});
