<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;

class testController extends Controller {
    // Create Contact Form
    public function createTestForm(Request $request) {
      return view('test');
    }
    // Store Contact Form data
    public function TestForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'cpassword'=>'required'
         ]);
        //  Store data in database
        Users::create($request->all());
        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}