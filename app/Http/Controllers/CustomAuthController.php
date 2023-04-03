<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
   public function login()
   {
     return view('login');
   }

   public function signup()
   {
    return view('signup');
   }

   public function signupUser(Request $request)
   {
    $request->validate([
      'email'=>'required|email|unique:users',
      'first_name'=>'required',
      'last_name'=>'required',
      'password'=>'required|min:6|max:12',
      'confirm_password'=>'required|min:6|max:12'
    ]);
       $user = new User();
       $user->email = $request->email;
       $user->first_name = $request->first_name;
       $user->last_name = $request->last_name;
       $user->password = Hash::make($request->password);
       $user->confirm_password = Hash::make($request->confirm_password);

       $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully');

        }else{
            return back()->with('fail', 'something wrong');
        }
   }
    public function loginUser(Request $request){

      $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:6|max:12'
      ]);
      $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request -> password, $user -> password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else{
                return back()-> with('fail','Please enter the correct password');
            }

        }else{
            return back()-> with('fail','This email is not registerd.');
    }
}
public function dashboard(){
  $data=array();
  if(Session::has('loginId')){
      $data= User::where('id', '=',Session::get ('loginId'))->first();
  }
  return view('dashboard',compact('data'));
}

public function logout(){

  if(Session::has('loginId')){
      Session::pull('loginId');
      return redirect('login');
  }
}

}