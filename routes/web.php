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
    return view('gms.index');
});
Route::post('/donation','DonorController@donation');
Route::post('/claim_donation','BeneficiaryController@claim_donation');
Route::get('/login','UserController@login');
Route::get('/register','UserController@register');
Route::get('/apply_donation','DonorController@apply_donation');
Route::get('/donate','DonorController@donate');
Route::post('/create_account','UserController@store');
Route::get('/logout','UserController@destroy');
Route::post('/accountAccess','UserController@accountLogin');
Route::get('/payment_mode','DonorController@payment');
