<?php

namespace App\Http\Controllers;

use App\Models\contract;
use Illuminate\Http\Request;
use App\Http\Resources\ContractResource;
use App\Http\Resources\ContractDetailsResource;

class ApiContractController extends Controller
{
    public function index($airline_code){
   
        $contracts = contract::select('airline_code','name','group_id')
        ->where('airline_code','=',$airline_code)->get();
        
        return ContractResource::collection($contracts);
    
    }
     public function show($name){
        $contract = contract::get()->where('name','=',$name);
       return ContractDetailsResource::collection($contract);
       }
       public function store(Request $request){
        contract::create([
         'order' => $request->terms_no,
         'name' => $request->terms_name,
         'group_id' => $request->com_region,
         'airline_code' => $request->com_code,
         'ticketing_start' => $request->terms_start,
         'ticketing_end' => $request->terms_end,
         'terms_conditiaons' => $request->terms_details
        ]);
       return response()->json([
        'success'=>'add contract successfully' ]);  
       }
}
