<?php

namespace App\Http\Controllers;
use App\Donation;
use Illuminate\Http\Request;
use Validator;
class DonorController extends Controller
{
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
     $input=$request->all();

     $donation=Donation::create($input);
     return redirect('/payment_mode')->with('success','Complete your donation');

}
}
