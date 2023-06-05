<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
  public function createLoginForm(Request $request) {
    return view('login');
  }
      
    public function customLogin(Request $request)
    { 
      $credentials = $request->only('email', 'password');
       if (Auth::attempt($credentials)) {
          if(auth()->user()->role == 1){
            $user = User::where('email','=',$request->email)->first();
          if($user){
          $request->session()->put('adminEmail', $user->email);
          }
            return redirect()->route('login.custom');
          }else if(auth()->user()->role == 0){
             $user = User::where('email','=',$request->email)->first();
             if($user){
             $request->session()->put('studentEmail', $user->email);
             }
            return redirect('student/courses');
          }else if(auth()->user()->role == 2){
            $user = User::where('email','=',$request->email)->first();
            if($user){
            $request->session()->put('professorEmail', $user->email);
            }
            return redirect('professor/schedule');
          }
    }
    return redirect('login');
}

public function logout(){
  if(Session::has('adminEmail')){
    Session::pull('adminEmail');
  }
  if(Session::has('studentEmail')){
    Session::pull('studentEmail');
  }
  if(Session::has('professorEmail')){
    Session::pull('professorEmail');
  }
   return redirect('login');
}

}