<?php

namespace App\Http\Controllers;
use App\Donation;
use App\User;
use Validator;
use Auth;
use App\Beneficiary;
use App\Collaborate;
use App\Payment;
use Illuminate\Http\Request;
class DonorController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  public function donate(){
    $beneficiary=Beneficiary::all();
    return view('gms.donate')->with('beneficiary',$beneficiary);
  }

  public function apply_donation(){
    return view('gms.apply_donation');
  }

  public function donation(Request $request){
     $validator=Validator::make($request->all(),[
       'organization_name'=>'required',
       'address'=>'required',
       'country'=>'required',
       'payment_mode'=>'required',
       'donation_type'=>'required',
       'receiver'=>'required',
       'amount'=>'required'

     ]);
     // if ($validator->fails()) {
     //   return back()->with(['error'=>$validator->errors()]);
     // }
     $donation=new Donation();
     $user_id=auth()->user()->id;
     $donation->user_id=$user_id;
     $donation->organization_name=request('organization_name');
     $donation->address=request('address');
     $donation->country=request('country');
     $donation->payment_mode=request('payment_mode');
     $donation->amount=request('amount');
     $donation->donation_type=request('donation_type');
      $donation->purpose=request('purpose');
     $donation->receiver_orgnization=request('receiver');
     $donation->save();
     $amount=request('amount');

     // if ( $donation->save()) {
      // $donations=auth()->user()->userDonations;
      // foreach ($donations as $donation) {
        // $donation_id=Donation::find($donation->id);
        return view('gms.payment')->with('success','Complete your donation')->with('amount',$amount);
      // }
     // }

     // $input=$request->all();

     // $input['user_id']=$user_id;
     // $donation=Donation::create($input);
     // return redirect('/payment_mode')->with('success','Complete your donation');

}
public function payment(){
  return view('gms.payment');
}

public function donation_history(){
  $user_id=auth()->user()->id;
  $donor=User::find($user_id);
  return view('gms.donation_history')->with('userDonations',$donor->userDonations);

}
public function collaborate(){
  $donor_organization=Donation::all();
  return view('gms.collaborate')->with('donor_organization',$donor_organization);
}

public function save_payment(Request $request){
   $validator=Validator::make($request->all(),[
     // 'amount'=>'required',
     'date'=>'required',
     'option'=>'required',
     'code'=>'required',


   ]);
   if ($validator->fails()) {
     return back()->with(['error'=>$validator->errors()]);
   }
   $payment=new Payment();
   $user_id=auth()->user()->id;
   $payment->user_id=$user_id;
   $payment->payment_date=request('date');
   $payment->payment_option=request('option');
   $payment->code=request('code');
   $payment->save();
   // $input=$request->all();

   // $input['user_id']=$user_id;
   // $donation=Donation::create($input);
   return redirect('/donate')->with('success','Thank you for your donation!!Donate another one!!');
}
public function colloborate_now(Request $request){
   $validator=Validator::make($request->all(),[
     'donation_type'=>'required',
     'purpose'=>'required',
     'amount'=>'required',

   ]);
   if ($validator->fails()) {
     return back()->with(['error'=>$validator->errors()]);
   }
   $collobarate=new Collaborate();
   $user_id=auth()->user()->id;
   // $collobarate->user_id=$user_id;
   $collobarate->grant_type=request('grant_type');
   $collobarate->category=request('category');
   $collobarate->purpose=request('purpose');
   $collobarate->amount=request('amount');
   $collobarate->save();

      return back()->with('success','New Colloboration added Successfully.You can now invite others!!');

   }


   // public function payment(){
   //
   //   return view('gms.payment');
   //
   //

   public function view_donors(){

   }
}
