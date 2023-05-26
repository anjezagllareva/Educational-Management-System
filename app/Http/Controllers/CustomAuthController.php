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
            return redirect()->intended('admin/admin');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
}