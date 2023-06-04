<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
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
}