<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth;
use App\Payment;
use App\Donation;
use App\Beneficiary;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function show(){
    return view('admin.pages.login');
  }

  public function account_login(Request $request){
      if (Auth::guard('admin')->attempt(request(['username','password']))==false) {
      return view('inc.dashboard');
      }
      else {
        return back()->with('error','Username or Password incorrect');
      }
      return back()->withInput($request->only('username','password'));
  }

  public function viewDonors(){
    $donors=User::where('account_type','=' ,'DONOR')->get();
    // $donors=$user->userApplications;
    return view('admin.pages.donors.view_donors')->with('donors',$donors);
  }
  public function viewBeneficiaries(){
    $beneficiaries=Beneficiary::all();
    // $beneficiaries->user;
    return view('admin.pages.beneficiaries.view_beneficiaries')->with('beneficiaries',$beneficiaries);
  }
  public function viewDonations(){
    $donations=Donation::all();
    return view('admin.pages.donations.view_donation')->with('donations',$donations);
  }
  public function viewPayments(){
    $payments=Payment::all();
    return view('admin.pages.payments.payment_details')->with('payments',$payments);
  }
  public function viewApplications(){
    $applications=Beneficiary::all();
    return view('admin.pages.applications.view_applications')->with('applications',$applications);
  }

  public function accept_application(Request $request,$id){
    // $application_id=
    $application=Beneficiary::find($id);
    $application->status=1;
    $application->save();

    return back()->with('success','Application accepted Successfully!!');

  }
  public function reject_application(Request $request,$id){
    // $application_id=
    $application=Beneficiary::find($id);

    $application->status=2;
    $application->save();

    return back()->with('success','Application rejected Successfully!!');

  }

  // public function destroy($id){
  //   $student = Student::find($id);
  //       $student->delete();
  //       return redirect()->route('student.index')->with('success', 'Data Deleted');
  // }
}
