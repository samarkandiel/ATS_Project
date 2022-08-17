<?php

namespace App\Http\Controllers;
use App\Models\airline;
use Illuminate\Http\Request;
use App\Http\Resources\AirlineResource;
use App\Http\Resources\AirlineCollection;

class ApiAirlineController extends Controller
{
    public function index(){
      
        $airlines = airline::select('airline_code','airline_name','airline_active')->get();
        return  AirlineResource::collection($airlines);
    
     }
     public function show($airline_code){
       $airline = airline::findOrFail($airline_code);
        return new AirlineResource ($airline);
    
       }
}
