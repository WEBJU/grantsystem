<?php

namespace App\Http\Controllers;
use App\Beneficiary;
use Validator;
use App\User;
use Auth;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
  public function claim_donation(Request $request){
    $this->validate(request(),[
      'organization_name'=>'required',
      'category'=>'required',
      'amount'=>'required',
      'population_benefitting'=>'required',
    ]);
    $beneficiary=new Beneficiary();
    $user_id=auth()->user()->id;
    $beneficiary->user_id=$user_id;
    $beneficiary->organization_name=request('organization_name');
    $beneficiary->category=request('category');
    $beneficiary->amount=request('amount');
    $beneficiary->population_benefitting=request('population_benefitting');
    // $beneficiary=Beneficiary::create(request(['user_id','organization_name','category','amount','population_benefitting']));
    $beneficiary->save();
    return back()->with('success','Apllication successfully!!You will be notified when it has been approved!!');
  }
  // public function application_history(){
  //
  // }
  public function myapplications(){
    $user_id=auth()->user()->id;
    $donor=User::find($user_id);
    return view('gms.myapplications')->with('userApplications',$donor->userApplications);

  }
}
