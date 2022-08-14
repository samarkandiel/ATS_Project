<?php

use App\Models\airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\ContractController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/overview', function () {
    return view('overview');
});


// Route::get('/contacts', function () {
//     return view('contacts');
// });
// Route::get('/commissions/addcontract', function () {
//     return view('addcontract');
// });
Route::get('/platform', function () {
    return view('platform');
});
// Route::get('/show', function () {
//     return view('show');
// });
Route::get('/commissions',[AirlineController::class,'index']);
Route::get('/commissions/addcontract',[ContractController::class,'create']);
Route::get('/commissions/{airline}',[AirlineController::class,'show']);
Route::get('/commissions/{airline}/show',[ContractController::class,'index']);
Route::post('/commissions',[ContractController::class,'store']);
Route::get('/contractdetails/{name}',[ContractController::class,'show']);
Route::get('/login',[AuthController::class,'loginForm']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'registerForm']);
Route::post('/register',[AuthController::class,'register']);