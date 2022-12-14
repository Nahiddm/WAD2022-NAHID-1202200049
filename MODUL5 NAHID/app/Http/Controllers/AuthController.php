<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function authenticating(Request $request){
        $credentials = $request->validate([
            //
            //
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'login wrong');

        return redirect('/login');
    }
}
