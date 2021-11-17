

{{-- @extends('admin.fixed.sidebar') --}}
@extends('admin.master')
@section('content')

<h1 style="font-family:courier; color:rgb(103, 45, 129); background-color:rgb(245, 231, 247); text-align:center;">"The journey to finding your best self starts </h1>
<h1 style="font-family:courier; color:rgb(103, 45, 129); background-color:rgb(236, 217, 238); text-align:center;">by giving your best self to others"</h1>
<hr>
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
  border:1px solid black;
}
.button {
    background-color: #561f5e;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
    border-radius: 8px;
  }
  .button:hover {
    background-color: #864077;
    color: white;
  }

</style>
</head>
<body>



<a href="{{route('create.donation')}}" class="button" style="text-decoration:none; color:white;">Donate</a>

  <table class="table" style="width:100%">
    <thead>
      <tr>
        <th scope="col">Donor ID</th>
        <th scope="col">Crisis Name</th>
        <th scope="col">Crisis Type</th>
        <th scope="col">Donation Amount</th>

       
      </tr>

    </thead>  
@endsection