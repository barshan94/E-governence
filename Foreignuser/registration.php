<?php include "control/allproc.php"; ?>


<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Css/style2.css"> 
    <script src="js/myJS.js"></script>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/reg.js"></script>
   

</head>

<body>
<div class="container">
<h1>Registration Form </h1>
<hr>
<!-- <form action="process.php" method="post" enctype="multipart/form-data"> -->
<!-- <form action="" method="post" enctype="multipart/form-data"> -->

<p id="pgg">Please fill in this form to create an account.</p>
<hr>
<h4 id="mytext"> </h4>
<form action=""  onsubmit="return validateForm()" method="post" enctype="multipart/form-data"> 
<form action="" method="post" enctype="multipart/form-data">
<div class="input">
     
<label for="First Name"><b>First Name</b></label>
    <td><input  type="text"  id="fname" name="fname"  placeholder="Enter your first name" > <br></td>
    </div>	
    

     
        <p class="input">
    <label for="Last Name"><b>Last Name</b></label>
		<input type="text"  id="lname" name="lname"  placeholder="Enter your last name" >  <br>
	    </p>
        

        
        <p class="input">
    <label for="User Name"><b>User Name</b></label>
    <h4 id="usr"> </h4>
		<input type="text"  id="username" name="username"  placeholder="Enter your user name" onkeyup="myajaxfunc()" >  <br>
	    </p>
      

        
        <p class="input">
    <label for="Age"><b>Age</b></label>
		<input type="number"  id="age" name="age"  placeholder="Enter your age" > <br>
	    </p>

     <br>   
        
	    
        
         
        <p class="input">
    <label for="email"><b>Email</b></label>
		<input type="text"  id="email" name="email" placeholder="Enter your E-mail ID" > <br>
        <h2 id="message"></h2>
		</p>
        
        <p class="input">
        <label for="Passport Number"><b>Passport Number</b></label>
        <input type="text"  id="passport" placeholder="AC0215425" name="passport" >

       

        <p class="input">
    <label for="Password"><b>Password</b></label>
		<input type="text"  id="password" name="password" placeholder="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" > <br>
		</p>
 
        

        
        


    
    <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>
   
    
<div class="clearfix">
  <input type="reset" value="Reset" id="reset">
  <input type="submit" value="Sign-up" id="submit">
  <p>Already an user! please login</p>
  <h3> <a href="view/login.php">Login</a></h3>
  <h3> <a href="decision.php">Back</a></h3>
</div>

</h1>



</form>

<h2>Welcome to E-Governence Service</h2>

<br>

<h2>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</h2>

<br>

<h2>Our ambition is to provide services all around Bangladesh</h2>

<br>

<h2>This is the page for Service Provider Page</h2>

<br>

<h2>It is humbly requested to all the service provider to provide their information properly</h2>

<br>

<h2>If any user wrongly visits this page please go to User Log in page</h2>

<br>

<button  class="button" id="h"> Hide Instructions</button>

<button  class="button" id="s">Show Instructions</button>
</body>
</html>


