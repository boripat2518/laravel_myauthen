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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('facebook', function () {
    return view('facebook');
});
Route::get('facebook/redirect', 'Auth\FacebookController@redirectToFacebook');
Route::get('facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

Route::get('terms','TermController@index');
