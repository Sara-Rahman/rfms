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

<form action="{{route('volunteer.store')}}" method="POST">
    @csrf
  <div class="container">
    <h1>Create Volunteer Account</h1>

   <hr>

    @if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif
    <br>

    <label for="name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="name" id="name" required><br><br>

    <label for="email"><b>Email Address</b></label><br>
    <input type="email" placeholder="Enter Email Address" name="email" id="email" required><br><br>

    <label for="age"><b>Age</b></label>
    <input type="number" placeholder="Enter Age" name="age" id="age" required><br><br>

    <label for="education"><b>Educational Background</b></label>
    <input type="text" placeholder="Enter Educational Background" name="education" id="education" required><br><br>

    <label for="education"><b>Occupation</b></label>
    <input type="text" placeholder="Enter Occupation" name="occupation" id="occupation" required><br><br>
    
    <label for="phn_number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phn_number" id="phn_number" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter  Address" name="address" id="address" required>

    <label>   
        <b>Gender :  </b><br>
        </label><br>  
        <input type="radio" value="Male" name="gender" checked > Male   
        <input type="radio" value="Female" name="gender"> Female   
        <input type="radio" value="Other" name="gender"> Other  
          <br><br>

    <label for="crisis"><b>Choose Crisis </b></label>
    <input type="text" placeholder="Enter Crisis" name="crisis" id="crisis" required>
    
    
<br><br>
<label for="password"><b>Password </b></label>
<input type="password" placeholder="Enter password" name="password" id="password" required>
    

    

    <button type="submit" class="registerbtn"><a href="/"></a>Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
  
  
</form>

</body>
</html>


@endsection