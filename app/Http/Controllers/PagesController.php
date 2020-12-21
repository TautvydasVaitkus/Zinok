<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function work(){
        return view('pages.work');
    }

    public function feedback(){
        return view('pages.feedback');
    }

    public function afterSchool($role){
        if($role == "Teacher"){
            return view('pages.afterSchool.teacher');
        }
        else if($role == "Student"){
            return view('pages.afterSchool.student');
        }
        else return view('home');
    }

    public function newAfterSchool(){
        return view('pages.afterSchool.createnewform');
    }

    
}
