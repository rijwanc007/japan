<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function career(){
        return view('pages.career_at_japan');
    }
    public function courses(){
        return view('pages.courses');
    }
    public function admission(){
        return view('pages.admission');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function demo(){
        return view('pages.demo');
    }

    public function blogShow(){
        return view('pages.single_blog');
    }
}
