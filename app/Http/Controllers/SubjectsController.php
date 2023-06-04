<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subjects;

class SubjectsController extends Controller
{
    public function subjectTable(){
        $subject = subjects::all();
        return view('../admin.subjects', ['subject' => $subject]);
     
    }
}
