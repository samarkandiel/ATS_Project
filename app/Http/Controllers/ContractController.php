<?php

namespace App\Http\Controllers;

use App\Models\airline;
use App\Models\contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{   
    public function index($airline_code){
   
        $contracts = contract::select('airline_code','name','group_id')
        ->where('airline_code','=',$airline_code)->get();
       // dd($contracts);
      return view('show',['contracts' => $contracts]);
    }
    public function show($name){
      $contracts = contract::get()->where('name','=',$name);
    //dd($contracts);
     return view('contractdetails',['contracts'=>$contracts]);
     }
    public function create(){
      return view('addcontract');
     }
     public function store(Request $request){
        //dd($request->com_code);
        contract::create([
         'order' => $request->terms_no,
         'name' => $request->terms_name,
         'group_id' => $request->com_region,
         'airline_code' => $request->com_code[0],
         'ticketing_start' => $request->terms_start,
         'ticketing_end' => $request->terms_end,
         'terms_conditiaons' => $request->terms_details
        
     ]);
       //dd($request->all());
    return view('show');
   
     }
  
}
