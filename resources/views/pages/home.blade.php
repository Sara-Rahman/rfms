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
  position: relative;
  padding: 271px;
  background-color: white;
  background-image: url("public\images\pic2.png");


}
.center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 18px;
}
img{
  max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
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
  text-decoration: none;
    border-radius: 18px;
    font-size: 21px;
    color: #f1f1f1;
    padding: 13px 25px;
    margin: 12px 3px;
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
max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
} */

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>


  <div class="container">
   
   
    

 

    
  <picture><img src="/images/pic2.png" alt="User name"></picture>
    <button type="submit" class="registerbtn"><a href="{{ url('/adminLogin') }}" style="text-decoration: none; color:white;">Admin</a></button>
    <button type="submit" class="registerbtn"><a href="{{ url('/donorLogin') }}" style="text-decoration: none; color:white;">Donor</a></button>
    <button type="submit" class="registerbtn"><a href="{{ url('/volunteerLogin') }}" style="text-decoration: none; color:white;">Volunteer</a></button>
  </div>
  
  

</body>
</html>
