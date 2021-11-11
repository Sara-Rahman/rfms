 @extends('admin.master') 
@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #691674;
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
  background-color: #c01e9d;
  color: white;
}

</style>
</head>
<body>

<h2>Crisis</h2>


<a href="{{url('/create/crisis')}}" class="button" style="text-decoration:none; color:white;">Create Crisis</a>
<a href="#" class="button" style="text-decoration:none; color:white;">View Crisis</a>


</body>
</html>





@endsection
{{-- @include('admin.fixed.header')
@include('admin.fixed.sidebar')
<h1>kodeeo</h1> --}}
