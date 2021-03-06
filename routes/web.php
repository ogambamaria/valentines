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
Route::view('order', 'pages.order');

Route::view('/admin', 'admin.admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@admin')->middleware('admin')->name('admin');
