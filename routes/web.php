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
use Illuminate\Http\Request;

Auth::routes();
Route::get('/', function () {
    return view('gms.index');
});
Route::get('/view_donors','DonorController@view_donors');
Route::post ( '/save_payment', function (Request $request) {
    \Stripe\Stripe::setApiKey ( 'sk_test_TifqxRspRHbGbEd0OvzftWXj00zUokDFrb' );
    try {
        \Stripe\Charge::create ( array (
                "amount" => 300 * 100,
                "currency" => "usd",
                "source" => $request->input( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Test payment."
        ) );
        $amount=0;
        Session::flash ( 'success-message', 'Payment done successfully !' );
        return view('gms.payment')->with('amount',$amount);
    } catch ( \Exception $e ) {
        Session::flash ( 'fail-message', "Error! Please Try again." );
          return view('gms.payment')->with('amount',$amount);
    }
} );
Route::get('/admin','AdminController@show');
Route::post('admin_account_login','AdminController@account_login');
// Route::get('/dashboard',function () {
//     return view('inc.dashboard');
// });
Route::get('/collaborate','DonorController@collaborate');
Route::get('/my_donations','DonorController@donation_history');
Route::get('/application_history','BeneficiaryController@application_history');
Route::get('/myapplications','BeneficiaryController@myapplications');

Route::post('/donation','DonorController@donation');
Route::post('/collaborate_now','DonorController@colloborate_now');
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
// Route::post('/save_payment','DonorController@save_payment');
// Route::get('/payment_mode','DonorController@payment');
Route::get('/viewDonors','AdminController@viewDonors');
Route::get('/viewBeneficiaries','AdminController@viewBeneficiaries');
Route::get('/viewDonations','AdminController@viewDonations');
Route::get('/viewPayments','AdminController@viewPayments');
Route::get('/viewApplications','AdminController@viewApplications');

Route::post('/acceptApplication/{id}','AdminController@accept_application');
Route::post('/rejectApplication/{id}','AdminController@reject_application');
Route::get('/payment','DonorController@payment');
