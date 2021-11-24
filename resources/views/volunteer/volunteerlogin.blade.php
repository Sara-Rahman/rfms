@extends('admin.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <button type="button" class="btn btn-secondary btn-lg"><a href="{{route('create.volunteer')}}" class="button" style="text-decoration:none; color:white;">Create Volunteer</a></button><br><br>

  </div>
</body>
</html>
<h1>Volunteer List</h1><br>



<table class="table" style="width:100%">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Email</th>
      <th scope="col"> Age</th>
      <th scope="col"> Education</th>
      <th scope="col"> Occupation</th>
      <th scope="col"> Phone Number</th>
      <th scope="col"> Address</th>
      <th scope="col"> Gender</th>
      <th scope="col">Crisis</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    @foreach($volunteerlist as $volun_list)
    <tr>
      <th>{{$volun_list->id}}</th>
      <td>{{$volun_list->name}}</td>
      <td>{{$volun_list->email}}</td>
      <td>{{$volun_list->age}}</td>
      <td>{{$volun_list->education}}</td>
      <td>{{$volun_list->occupation}}</td>
      <td>{{$volun_list->phn_number}}</td>
      <td>{{$volun_list->address}}</td>
      <td>{{$volun_list->gender}}</td>
      <td>{{$volun_list->crisis}}</td>
      <td>{{$volun_list->password}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection