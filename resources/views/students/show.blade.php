@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Student Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $students->nama }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection