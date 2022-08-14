@extends('layout')
@section('content')
<div class="wrapper"> 
   Expired Contracts         
     <div class="header">
       <span class="lt"><i class="fas fa-file-contract"></i> Contract Select</span>
     </div> 
   <div class="mobile_flow">
   <table  class="table table-bordered text-center" id="contract">
     <thead>
     <tr>
       <th class="text-center text-bold" style="width:10px"></th>
       <th class="text-center text-bold">Airlines</th>
       <th class="text-center text-bold">Name</th>
       <th class="text-center text-bold">Contract Group</th>
       </tr>
     </thead>
     @foreach ($contracts as $contract )
     <tbody>
     <tr>
       <td style="width:10px">1</td>
       <td class="code"><a href="{{ url("contractdetails/{$contract->name}") }}">{{ $contract->airline_code }}</a></td>
       <td>{{ $contract->name }}</td>
       <td>{{ $contract->group_id}}</td>  
     </tr>
       </tbody>
       @endforeach
   </table>
   </div>
   </div>
@endsection