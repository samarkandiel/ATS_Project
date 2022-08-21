<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\storage;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }
    
    public function register(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email|max:255',
            'password'=>'required|string|min:5|max:30|confirmed',
        ]);
        $data['password']= bcrypt($data['password']);
        $user = User::create($data);
        Auth ::login($user); //after register make login
       return redirect(url('/welcome'));
    }
    public function loginForm(){
        return view('auth.login'); 
    }
    public function login(Request $request){
        $data = $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|string|min:5|max:30',
        ]);  
       $isLogin= Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
       if (! $isLogin){
        return back()->withErrors([
            'credentials not correct'
        ]);
       }
       return redirect(url('/welcome'));
    }
}
