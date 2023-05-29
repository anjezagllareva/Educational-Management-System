<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;


class UserController extends Controller
{
    public function usersTable(){
        $users = User::all();
        return view('../admin.admin', ['users' => $users]);
     
    }
}
