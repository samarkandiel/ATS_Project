@extends('layout')
@section('page-styles')
<link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/multi-select.css') }}">
@endsection
@section('content')
@csrf
<div class="wrapper">
  
<h5>{{ $airlines->airline_active}}</h5>   
 <h5>Airline:{{ $airlines->airline_code}}</h5>
 
       <br>
  <a href="">Go To Net Contract</a><br>
  <a href="">Go To Expired Contract</a><br>

  <a href="{{ url("commissions/{$airlines->airline_code}/show") }}">
    No Published Contracts</a>
    {{-- <a href="{{ url("/show/{$airline->airline_code}") }}">
      {{ $airline->airline_code }}</a> --}}

  </div>

@endsection
@section('page-scripts')
<script type="text/javascript"  src="{{ asset('js/nicEdit.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.multi-select.js') }}" ></script>
<script  src="{{ asset('js/jquery.quicksearch.min.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.basictable.js') }}" ></script>
<script  src="{{ asset('js/ckeditor.js') }}"></script>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
@endsection