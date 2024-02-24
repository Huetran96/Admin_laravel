<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function login(){
        return view('home.login');
    }
    public function checkLogin(Request $request){
        $request->validate([
            'email'=>'required|exists:users',
            'password'=>'required',
        ]);
        return redirect()->route('admin-index')->with('success','Đăng nhập thành công');

    }
    public function register()
    {
        return view('home.register');
    }
    public function checkRegister(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:5',
            'confirm_password' => 'required|same:password',
        ]);
        $user = $request->all(['name','email','password']);
        User::create($user);

        return redirect()->route('login');

    }
}
