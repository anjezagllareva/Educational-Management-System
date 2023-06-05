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
      $user = User::where('email','=',$request->email)->first();
      if($user){
        $request->session()->put('loginEmail', $user->email);
      }
      $credentials = $request->only('email', 'password');
  if (Auth::attempt($credentials)) {
          if(auth()->user()->role == 1){
            return redirect()->route('login.custom');
          }else if(auth()->user()->role == 0){
            return redirect('student/courses');
          }else if(auth()->user()->role == 2){
            return redirect('professor/schedule');
         
        }
    }
    return redirect('login');
}

public function logout(){
  if(Session::has('loginEmail')){
    Session::pull('loginEmail');
  }
   return redirect('login');
}


}