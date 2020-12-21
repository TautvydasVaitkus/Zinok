<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\After;
use Symfony\Component\Console\Input\Input;

class AfterStudentsController extends Controller
{
    public function create()
    {
        $data = After::all(['pavadinimas','pradzios_data','id']);
        return view('pages.afterSchool.registerform')->with('data',$data);
    }
}
