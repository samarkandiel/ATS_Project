@extends('layout')
@section('page-styles')
{{-- <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/multi-select.css') }}"> --}}
@endsection
@section('content')
@csrf
<div class="wrapper">
  <h5>{{ $airlines->airline_active}}</h5>   
  <h5>Airline:{{ $airlines->airline_code}}</h5>
 <br>
    <a href="">Go To Net Contract</a><br>
    <a href="">Go To Expired Contract</a><br>
@forelse ($contracts as $contract) 
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
       <tr>
         <td style="width:10px"></td>
         <td class="code"><a href="{{ url("contractdetails/{$contract->name}") }}">{{ $contract->airline_code }}</a></td>
         <td>{{ $contract->name }}</td>
         <td>{{ $contract->group->group_name}}</td>  
       </tr>
        @endforeach
    </table>
    @empty
    <p>No Published Contracts</p>
    @endforelse

@endsection
@section('page-scripts')
{{-- <script type="text/javascript"  src="{{ asset('js/nicEdit.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.multi-select.js') }}" ></script>
<script  src="{{ asset('js/jquery.quicksearch.min.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.basictable.js') }}" ></script>
<script  src="{{ asset('js/ckeditor.js') }}"></script> --}}
{{-- <script src="js/core.min.js"></script>
<script src="js/script.js"></script> --}}
@endsection