<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('users.login');
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
    public function signup(){
        return view('users.signup');
    }
    public function register(UserRegisterRequest $request){
        $input = $request->validated();
        User::create($input);
        return redirect()->route('users.login');
    }
}
