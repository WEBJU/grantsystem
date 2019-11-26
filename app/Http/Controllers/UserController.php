<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  // protected $redirectAfterLogout = '/login';
    public function __construct(){
      // $this->middleware('auth');
      // $this->middleware('guest', ['except' => 'logout']);


    }
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
      return redirect('/login')->with('success','Your account has been created..Login now!!');
    }


    public function accountLogin(){
      if (auth()->attempt(request(['username','password']))==false) {
        return back()->withErrors([
          'message'=>'Username or password incorrect'
        ]);
        }
        else {
            $user_id=auth()->user()->id;
            $user=User::find($user_id);
            $user->is_logged_in=1;
            $user->save();
            return redirect()->to('/');
        }


    }
    public function destroy(){
      $user_id=auth()->user()->id;
      $user=User::find($user_id);
      $user->is_logged_in=0;
      $user->save();
      auth()->logout();
      return redirect('/login');
    }
}
