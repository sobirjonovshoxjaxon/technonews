<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function categoryPost(){
        return view('category');
    }

    public function contact(){
        return view('contact');
    }

    public function postdetail(){
        return view('postdetail');
    }
}
