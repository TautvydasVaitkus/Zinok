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
}
