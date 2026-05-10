<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){

        $user = User::where('user_type','admin')->first();
        return view('admin.index',compact('user'));
    }

    public function logout(){

        Auth::logout();
        return to_route('index.page');
    }
}
