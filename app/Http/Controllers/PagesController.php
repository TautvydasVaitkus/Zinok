<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\After;

class PagesController extends Controller
{
    public function work()
    {
        return view('pages.work');
    }

    public function feedback()
    {
        return view('pages.feedback');
    }

    public function afterSchool()
    {
        if (auth()->check()) {
            if (auth()->user()->role == 'Mokytojas') {
                $user_id = auth()->user()->id;
                $user = After::where('mokytojo_id',$user_id)->get();
                return view('pages.afterSchool.teacher')->with('afters', $user);
            } else if (auth()->user()->role == 'Mokinys') {
                return view('pages.afterSchool.student');
            } else return view('home');
        } else {
            return redirect('/');
        }
    }

    public function newAfterSchool()
    {
        return view('pages.afterSchool.createnewform');
    }

    public function afterSchoolPage($id){
        if (auth()->check()) {
            if (auth()->user()->role == 'Mokytojas') {
                $page = After::where('mokytojo_id',$id)->first();
                return view('pages.afterSchool.teacherPage')->with('page', $page);
            } else if (auth()->user()->role == 'Mokinys') {
                return view('pages.afterSchool.page.student');
            } else return view('home');
        } else {
            return redirect('/');
        }
    }
}
