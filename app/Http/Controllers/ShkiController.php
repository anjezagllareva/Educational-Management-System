<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shki;

class ShkiController extends Controller
{
    public function createForm(){
        return view('shkenca1add');
      }

      public function scheduleTable(){
        $fileModel = shki::all();
        return view('../professor.shkenca1', ['fileModel' => $fileModel]);
     
        }
    public function fileUpload(Request $req){
            $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'title' => 'required|min:3',
            'text' => 'required|min:3'
            ]);
            $title = $req->title;
            $text = $req->text;
            
            $fileModel = new shki();
            $fileModel->title =$title;
            $fileModel->text =$text;

            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
       }
}
