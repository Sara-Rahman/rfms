<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  /* background-image: "/public/images/pic2.png";  */
  
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 271px;
  background-color: white;
  background-image: url("public\images\pic2.png");


}
img{
  max-width: 100%;
    height: auto;
  /* height: 500%;
  width: 95%; */


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
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  border-radius: 10px;
  font-size: 25px;

  color: #f1f1f1;
  padding: 17px 27px;
    margin: 12px 4px;
    border: none;
    cursor: pointer;
    width: 31%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
/* img {
height: 550%;
width: 550px ;
} */

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
   
   
    

 

    
  <picture><img src="/images/pic2.png" alt="User name"></picture>
    <button type="submit" class="registerbtn">Admin</button>
    <button type="submit" class="registerbtn">Donor</button>
    <button type="submit" class="registerbtn">Volunteer</button>
  </div>
  
  <div class="container signin">
  
  </div>
</form>

</body>
</html>
