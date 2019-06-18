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
Route::view('birthdays', 'pages.birthdays');
Route::view('weddings', 'pages.weddings');
Route::view('anniversaries', 'pages.anniversaries');
Route::view('corporate', 'pages.cooperate');

Route::get('order', 'OrderController@index');
Route::post('order', 'OrderController@store');

Route::view('payment', 'pages.payment');
Route::view('confirmation', 'pages.confirmation');

Route::get('orders', 'ReceptionController@index');
Route::get('orders/{id}', 'ReceptionController@show');
Route::get('update/{id}', 'ReceptionController@showDetails');
Route::put('/update/{id}', 'ReceptionController@update');

Route::get('mail', 'OrderController@store');

Route::view('/admin', 'admin.admin');
Route::get('orderDetails', 'AdminController@index');
Route::get('paymentDetails', 'AdminController@index2');
Route::get('users', 'AdminController@index3');

//paypal info and controller routes
Route::get('/paypal/{order?}','PayPalController@form')->name('order.paypal');
Route::post('/checkout/payment/{order}/paypal','PayPalController@checkout')->name('checkout.payment.paypal');
Route::get('/paypal/checkout/{order}/completed','PayPalController@completed')->name('paypal.checkout.completed');
Route::get('/paypal/checkout/{order}/cancelled','PayPalController@cancelled')->name('paypal.checkout.cancelled');
Route::post('/webhook/paypal/{order?}/{env?}','PayPalController@webhook')->name('webhook.paypal.ipn');
Route::get('payment-completed/{order}','PayPalController@paymentCompleted')->name('paymentCompleted');
//end of paypal info and controller routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->middleware('admin')->name('admin');
Route::get('/reception', 'HomeController@reception')->middleware('reception')->name('reception');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
