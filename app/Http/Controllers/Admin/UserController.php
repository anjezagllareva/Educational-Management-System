<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function usersTable(){
        $users = User::all();
        return view('../admin.admin', ['users' => $users]);
     
    }
    public function index()
    {
        $users = User::all();
        return view ('../admin.admin')->with('users', $users);
    }
    public function create()
    {
        return view('../admin.usersadd');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = $request->all();
        $role = intval($request->input('role'));
             // Form validation
             $this->validate($request, [
                'name' =>   'required|string|min:3|max:20',
                'email' =>  'required|email|unique:users,email',
                'password' => 'required|min:6',
                'cpassword'=>'required|same:password',
                'role' => 'required|max:1'
             ]);
        Users::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'cpassword' => Hash::make($request->input('cpassword')),
            'role' => $role
         
        ]);
        return redirect('admin')->with('flash_message', 'User Addedd!');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('../admin.usersshow')->with('users', $users);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('../admin.usersedit')->with('users', $users);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users = $request->all();
        $users->update($users);
        return redirect('../admin/admin')->with('flash_message', 'User Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('../admin/admin')->with('flash_message', 'User deleted!');  
    }

    public function deleteUser($id){
        User::where('id', '=',$id)->delete();
        return redirect()->back();

    }
}

