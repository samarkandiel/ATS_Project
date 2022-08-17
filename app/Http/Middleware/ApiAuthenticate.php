<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class ApiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $accessToken=$request->header('Access-Token');
        if($accessToken!==null){
        $user=User::where('access_token',$accessToken)->first();
        if($user==null){
            return response()->json([
                'error_msg'=>'token not correct'
            ]);
    }
        return $next($request);
    }else{
        return response()->json([
            'error_msg'=>'token not send'
        ]);
    }
    }
}
