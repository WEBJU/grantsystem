<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
      return view('gms.login');
    }

    public function register(){
      return view('gms.register');
    }

    public function store(){
      $this->validate(request(),[
        'name'=>'required',
        'email'=>'required',
        'phone_number'=>'required',
        'account_type'=>'required',
        'username'=>'required',
        'password'=>'required',
        'confirm'=>'same:password'
      ]);

      $user=User::create(request(['name','email','phone_number','account_type','username','password']));
      auth()->login($user);
      return redirect('/');
    }
    // public function store(Request $request){
    //    $this->validate($request,[
    //     'name'=>'required',
    //     'phone'=>'required',
    //     'account_type'=>'required',
    //     'email'=>'required',
    //     'username'=>'required',
    //     'password'=>'required'
    //   ]);
    //   $input=$request->all();
    //   $input['password']=bcrypt($input['password']);
    //   $user=User::create($input);
    //
    //   return redirect('/login')->with('success','Account created successfully..Login to continue');
    // }

    public function accountLogin(){
      if (auth()->attempt(request(['username','password']))==false) {
        return back()->withErrors([
          'message'=>'Username or password incorrect'
        ]);
        }
        else {
            return redirect()->to('/');
        }


    }
    public function destroy(){
      auth()->logout();
      return redirect('/login');
    }
}
