<?php

namespace App\Http\Controllers;
use App\Beneficiary;
use Validator;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
  public function claim_donation(){
    $this->validate(request(),[
      'organization_name'=>'required',
      'category'=>'required',
      'location'=>'required',
      'population_benefitting'=>'required',
    ]);
    $beneficiary=Beneficiary::create(request(['organization_name','category','location','population_benefitting']));

    return back()->with('success','Apllication successfully!!You will be notified when it has been approved!!');
  }

}
