<?php

namespace App\Http\Controllers;
use App\Donation;
use App\User;
use Validator;
use Auth;
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
     $donation->donation_type=request('donation_type');
     $donation->description=request('description');
     $donation->save();
     // $input=$request->all();

     // $input['user_id']=$user_id;
     // $donation=Donation::create($input);
     return redirect('/payment_mode')->with('success','Complete your donation');

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
  $donors=User::where(['account_type'=>'DONOR'])->get();
  return view('gms.collaborate')->with('donors',$donors);
}

}
