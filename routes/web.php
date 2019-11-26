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
Auth::routes();
Route::get('/', function () {
    return view('gms.index');
});
Route::get('/collaborate','DonorController@collaborate');
Route::get('/my_donations','DonorController@donation_history');
Route::get('/application_history','BeneficiaryController@application_history');
Route::get('/myapplications','BeneficiaryController@myapplications');
Route::post('/donation','DonorController@donation');
Route::post('/claim_donation','BeneficiaryController@claim_donation');
// Route::get('/login','UserController@login');
Route::get('/login', [ 'as' => 'login', 'uses' => 'UserController@login']);
// Route::group(['middleware' => 'auth'], function () {
  Route::get('/logout','UserController@destroy');
  Route::get('/apply_donation','DonorController@apply_donation');
  Route::get('/donate','DonorController@donate');
 // });
Route::get('/register','UserController@register');
Route::post('/create_account','UserController@store');

Route::post('/accountAccess','UserController@accountLogin');
Route::get('/payment_mode','DonorController@payment');

// Route::get('/payment_mode','DonorController@payment');
