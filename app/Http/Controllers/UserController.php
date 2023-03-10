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
        $tweets = User::find(Auth::user()->id)->tweets->sortByDesc('created_at');
        
        return view('user',[
            'user' => $user,
            'tweets' => $tweets,
        ]);
    }

}
