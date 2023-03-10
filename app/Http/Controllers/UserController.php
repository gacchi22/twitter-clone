<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUserPage()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $tweets = Tweet::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        
        return view('user',[
            'user' => $user,
            'tweets' => $tweets,
        ]);
    }

}
