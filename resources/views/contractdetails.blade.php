@extends('layout')
@section('page-styles')
<style>
h5 {
    color: midnightblue;
    font-weight: bold;
  }
  </style>
@endsection
@section('content')
@csrf
@foreach ($contracts as $contract )
<h5>ID:{{ $contract->id}}</h5><br>
<h5>Airline:{{ $contract->airline_code}}</h5><br>
<h5>name:{{ $contract->name}}</h5><br>
<h5>order:{{ $contract->order}}</h5><br>
<h5>ticketing_start:{{ $contract->ticketing_start}}</h5><br>
<h5>ticketing_end:{{ $contract->ticketing_end}}</h5><br> 
<h5>terms_conditiaons:{{ $contract->terms_conditiaons}}   
@endforeach
@endsection