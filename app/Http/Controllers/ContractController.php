<?php

namespace App\Http\Controllers;

use App\Models\airline;
use App\Models\contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{   
    public function show($name){
      $contracts = contract::get()->where('name','=',$name);
     return view('contractdetails',['contracts'=>$contracts]);
     }
    public function create(){
      return view('addcontract');
     }
     public function store(Request $request){
      $request->validate([
        'terms_no'=>'required|string|max:25',
        'terms_name'=>'required|string',
        'terms_start'=>'required|date|after:tomorrow',
        'terms_end'=>'required|date|after:terms_start',
        'terms_details'=>'required|text'
      ]);
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
    return view('addcontract');
   
     }
  
}
