<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function doLogin(){
        $input = request()->only(['username','password']);
        if(auth()->guard('admin')->attempt($input)){
            //return("login success");
            return redirect()->route('admin.dashboard');
        }
        else{
            return("login error");
        }
    }
    public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
