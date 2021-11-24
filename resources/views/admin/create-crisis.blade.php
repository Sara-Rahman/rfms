{{-- <link rel="stylesheet" href="./css/style.min.css"> --}}
@extends('admin.master')


@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f7f7f8;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;

  background-color: #8b9ce7;

  background-color: white;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #33146e;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #351157;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  
}

.registerbtn:hover {
  opacity: 1;
 
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="#" method="POST">
    @csrf
  <div class="container">
    <h1>Create Crisis</h1>
   
    <hr>
@if(session()->has)

    <label for="id"><b>Crisis ID</b></label>
    <input type="number" placeholder="Enter Crisis ID" name="id" id="id" required><br><br>

    <label for="name"><b>Crisis Name</b></label>
    <input type="text" placeholder="Enter Crisis Name" name="name" id="name" required>

    <label for="type"><b>Crisis Type</b></label>
    
    <select id="type" name="type">
      <option value="">Type</option>
      <option value="food">Food</option>
      <option value="flood">Flood</option>
      <option value="health">Health</option>
    </select>
<br><br>
    <label for="amount"><b>Amount</b></label>
    <input type="number" placeholder="Enter Amount" name="amount" id="amount" required>

    

    

    <button type="submit" class="registerbtn"><a href="/"></a>Submit</button>
  </div>
  
  
</form>

</body>
</html>


@endsection