<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){

        $posts = Post::latest()->limit(4)->get();
        return view('index',compact('posts'));
    }

    public function categoryPost(){
        return view('category');
    }

    public function contact(){
        return view('contact');
    }

    public function postdetail($postId){

        $post = Post::findOrFail($postId);
        return view('postdetail',compact('post'));
    }
}
