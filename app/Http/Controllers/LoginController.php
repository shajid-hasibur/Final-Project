<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\actor;

class LoginController extends Controller
{
   public function login(){
       return view('auth.login');
   }
   public function checkIn(Request $req)
    {
        $userInfo=$req->except('_token');

        if(Auth::attempt($userInfo)){
            return redirect()->route('farmer-list')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login')->with('message','Logged out.');
    } 
}
