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
Route::view('/', 'pages.home');
Route::view('contact', 'pages.contact');
Route::view('about', 'pages.about');
Route::get('order', 'OrderController@index');
Route::get('reception', 'ReceptionController@index');


Route::view('/admin', 'admin.admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->middleware('admin')->name('admin');
Route::get('/reception', 'HomeController@reception')->middleware('reception')->name('reception');
