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
    <button type="button" class="btn btn-secondary btn-lg"><a href="{{route('create.volunteer')}}" class="button" style="text-decoration:none; color:white;">Create Volunteer</a></button>

  </div>
</body>
</html>
@endsection