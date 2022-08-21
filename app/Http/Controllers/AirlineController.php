<?php

namespace App\Http\Controllers;
use App\Models\airline;
use App\Models\contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Database\Seeders\AirlineSeeder;
use Illuminate\Support\Facades\storage;

class AirlineController extends Controller
{
public function index(){

   $airlines = airline::select('airline_code','airline_name','airline_active')->get();
   return view('commissions',['airlines' => $airlines]);
}
public function show($airline_code){
 $airlines = airline::findOrFail($airline_code);
 $contracts = contract::select('airline_code','name','group_id')
 ->where('airline_code','=',$airline_code)->with('group')->get();
// $contracts = contract::with(['group'])->where('airline_code','=',$airline_code)->get();
 return view('select',['airlines'=>$airlines,'contracts' => $contracts]);
}
}