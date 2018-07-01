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
Route::Resource('customers', 'CustomerController');



Route::resource('ads', 'AdsController');
Route::resource('categories', 'CategoryController');
Route::resource('articles', 'ArticleController');

Route::prefix('a')->group(function () {

});
Route::prefix('u')->group(function () {

});
Route::get('*', function() {
    return view('/') ;
});
