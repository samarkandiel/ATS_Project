<?php

namespace App\Http\Controllers;
use App\Models\airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Database\Seeders\AirlineSeeder;
use Illuminate\Support\Facades\storage;

class AirlineController extends Controller
{
public function index(){

   $airlines = airline::select('airline_code','airline_name','airline_active')->get();
   //dd($airlines);
   return view('commissions',['airlines' => $airlines]);
}
public function show($airline_code){
 $airlines = airline::findOrFail($airline_code);
 //dd($airlines);
 return view('select',['airlines'=>$airlines]);
}
}