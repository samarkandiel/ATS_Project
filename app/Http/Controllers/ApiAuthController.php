<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Str;
class ApiAuthController extends Controller
{
  
    public function register(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email|max:255',
            'password'=>'required|string|min:5|max:30|confirmed',
        ]);
        $data['password']= bcrypt($data['password']);
        $data['access_token']=Str::random(64);
        $user = User::create($data);
        return response()->json([
            'access_token'=>$data['access_token'],
            'success_msg'=>'Registered',
        ]);
    }
   
    public function login(Request $request){
        $data = $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|string|min:5|max:30',
        ]);  
       $isLogin= auth()->attempt(['email' => $data['email'], 'password' => $data['password']]);
       if (! $isLogin){
        return response()->json([
            'error_msg'=>'credentials not correct',
        ],422);
       }
       $accessToken=Str::random(64);
       auth()->user()->update([
       'access_token'=>$accessToken,
       ]);
       return response()->json([
        'access_token'=>$accessToken,
        'success_msg'=>'Login',
    ]);
    }
    public function logout(Request $request){
        $accessToken=$request->header('Access-Token');
        User::where('access_token',$accessToken)->first()->update([
            'access_token'=> null,
        ]);
        return response()->json([
            'success_msg'=>'logout',
        ]);
    }
}
