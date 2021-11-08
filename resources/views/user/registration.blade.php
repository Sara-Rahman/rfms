<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #008080;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;

  background-color: #CEF6F5;

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
<<<<<<< HEAD
  border: 1px solid #0B4C5F;
=======
  border: 1px solid #f1f1f1;
>>>>>>> 0603c27f1eb3e276bbc209f79386bb0e348db0a2
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
<<<<<<< HEAD
  background-color: #008080;
=======
  background-color: #04AA6D;
>>>>>>> 0603c27f1eb3e276bbc209f79386bb0e348db0a2
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
<<<<<<< HEAD
  
=======
>>>>>>> 0603c27f1eb3e276bbc209f79386bb0e348db0a2
}

.registerbtn:hover {
  opacity: 1;
<<<<<<< HEAD
 
=======
>>>>>>> 0603c27f1eb3e276bbc209f79386bb0e348db0a2
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

<form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

<<<<<<< HEAD
    <label for="name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="name" id="name" required>

=======
>>>>>>> 0603c27f1eb3e276bbc209f79386bb0e348db0a2
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<<<<<<< HEAD
    <button type="submit" class="registerbtn"><a href="/"></a>Register</button>
=======
    <button type="submit" class="registerbtn">Register</button>
>>>>>>> 0603c27f1eb3e276bbc209f79386bb0e348db0a2
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
