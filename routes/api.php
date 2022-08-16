<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAirlineController;
use App\Http\Controllers\ApiContractController;

Route::get('/commissions',[ApiAirlineController::class,'index']);
Route::get('/commissions/addcontract',[ApiContractController::class,'create']);
Route::get('/commissions/{airline}',[ApiAirlineController::class,'show']);
Route::get('/commissions/{airline}/show',[ApiContractController::class,'index']);
Route::post('/commissions',[ApiContractController::class,'store']);
Route::get('/contractdetails/{name}',[ApiContractController::class,'show']);