<?php

namespace App\Http\Controllers;
use App\Donation;
use App\User;
use Validator;
use Auth;
use App\Collaborate;
use App\Payment;
use Illuminate\Http\Request;
class DonorController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  public function donate(){

    return view('gms.donate');
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
       'description'=>'required',

     ]);
     if ($validator->fails()) {
       return back()->with(['error'=>$validator->errors()]);
     }
     $donation=new Donation();
     $user_id=auth()->user()->id;
     $donation->user_id=$user_id;
     $donation->organization_name=request('organization_name');
     $donation->address=request('address');
     $donation->country=request('country');
     $donation->payment_mode=request('payment_mode');
     $donation->amount=request('amount');
     $donation->donation_type=request('donation_type');
     $donation->description=request('description');

     if ( $donation->save()) {
      // $donations=auth()->user()->userDonations;
      // foreach ($donations as $donation) {
        $donation_id=Donation::find($donation->id);
        return redirect('/payment_mode')->with('success','Complete your donation')->with('donation_id',$donation_id);
      // }
     }

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

  return view('gms.collaborate');
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
     'grant_type'=>'required',
     'category'=>'required',
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
}
