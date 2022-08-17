<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiAuthenticate;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiAirlineController;
use App\Http\Controllers\ApiContractController;
Route::middleware(['api-auth'])->group(function () {
    Route::get('/commissions',[ApiAirlineController::class,'index']);  
    Route::get('/commissions/addcontract',[ApiContractController::class,'create']);
    Route::get('/commissions/{airline}',[ApiAirlineController::class,'show']);
    Route::get('/commissions/{airline}/show',[ApiContractController::class,'index']);
    Route::get('/contractdetails/{name}',[ApiContractController::class,'show']);
});
Route::post('/commissions',[ApiContractController::class,'store']);
Route::post('/register',[ApiAuthController::class,'register']);
Route::post('/login',[ApiAuthController::class,'login']);
Route::post('/logout',[ApiAuthController::class,'logout']);
