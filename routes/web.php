<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/checkin', 'CheckinController@index');
Route::get('/checkin/create', 'CheckinController@create');
Route::post('/checkin', 'CheckinController@store');

Route::get('/checkout', 'CheckoutController@index');
Route::get('/checkout/create', 'CheckoutController@create');
Route::post('/checkout', 'CheckoutController@store');

Route::get('/guests', 'GuestController@index');
Route::get('/guests/create', 'GuestController@create');
Route::post('/guests', 'GuestController@store');

Route::get('/checkins', 'CheckinController@index');
Route::get('/checkins/{id}', 'CheckinController@show');
Route::get('/checkins/{id}/edit', 'CheckinController@edit');
Route::patch('/checkins/{id}', 'CheckinController@update');
Route::delete('/checkins/{id}', 'CheckinController@destroy');

Route::get('/checkouts', 'CheckoutController@index');
Route::get('/checkouts/{id}', 'CheckoutController@show');
Route::get('/checkouts/{id}/edit', 'CheckoutController@edit');
Route::patch('/checkouts/{id}', 'CheckoutController@update');
Route::delete('/checkouts/{id}', 'CheckoutController@destroy');

//route guest
Route::get('/guests', 'GuestController@index');
Route::get('/guests/create', 'GuestController@create');
Route::post('/guests', 'GuestController@store');
Route::get('/guests/{id}', 'GuestController@show');
Route::get('/guests/{id}/edit', 'GuestController@edit');
Route::patch('/guests/{id}', 'GuestController@update');
Route::delete('/guests/{id}', 'GuestController@destroy');

//route checkin
Route::get('/checkins', 'CheckinController@index');
Route::get('/checkins/create', 'CheckinController@create');
Route::post('/checkins', 'CheckinController@store');
Route::get('/checkins/{id}', 'CheckinController@show');
Route::get('/checkins/{id}/edit', 'CheckinController@edit');
Route::patch('/checkins/{id}', 'CheckinController@update');
Route::delete('/checkins/{id}', 'CheckinController@destroy');

//route checkout
Route::get('/checkouts', 'CheckoutController@index');
Route::get('/checkouts/create', 'CheckoutController@create');
Route::post('/checkouts', 'CheckoutController@store');
Route::get('/checkouts/{id}', 'CheckoutController@show');
Route::get('/checkouts/{id}/edit', 'CheckoutController@edit');
Route::patch('/checkouts/{id}', 'CheckoutController@update');
Route::delete('/checkouts/{id}', 'CheckoutController@destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
