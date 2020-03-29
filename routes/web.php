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

Route::redirect('/','/home');
//Route::redirect('/logout','/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
return redirect('/home')->with(Auth::logout());
})->name('logout');
Route::get('/addtocart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

Route::get('/cart/destroy/{itemid}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{rowid}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::resource('orders', 'OrderController')->middleware('auth');


Route::get('/paypal/checkout', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('/paypal/checkout-success', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('/paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');
