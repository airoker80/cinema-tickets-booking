<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script>
function validateForm() {
    var x = document.forms["myform"]["name"].value;
	var y = document.forms["myform"]["address"].value;
	var z = document.forms["myform"]["age"].value;
	var a = document.forms["myform"]["gender"].value;
	var b = document.forms["myform"]["email"].value;
	var c = document.forms["myform"]["phoneno"].value;
	var d = document.forms["myform"]["password"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
	if (y == null || y == "") {
        alert("Address must be filled out");
        return false;
    }
	if (z == null || z == "") {
        alert("Age must be filled out");
        return false;
    }
	if (z <=0) {
        alert("Age cannot be negative");
        return false;
    }
	if (a == null || a == "") {
        alert("Gender must be filled out");
        return false;
    }
	if (b == null || b == "") {
        alert("Email must be filled out");
        return false;
    }
	if (c == null || c == "") {
        alert("Phone Number must be filled out");
        return false;
    }
	if (d == null || d == "") {
        alert("You need Password to login,Don't You ?? ");
        return false;
    }
}
</script>

</head>
<body>

<div class="container">
  <h2>Sign up</h2>
  <p><?php 
		if(isset($_SESSION["NEW_USER"])){
			echo $_SESSION["NEW_USER"];
			$_SESSION["NEW_USER"] ="";
		}
		//$message = $_GET["message"];
		//if($message != null)
		//	echo $message;
		?></p>
		
		
		
	
		

  <form role="form" name="myform" onsubmit="return validateForm()" action="myform.php" method="post">
    <div class="form-group">
      <label for="Name">Name:</label> 
	  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" style="max-width:300px">
	 
    </div>
	<div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" style="max-width:300px">
    </div>
	<div class="form-group">
      <label for="Age">Age:</label>
      <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" style="max-width:300px">
    </div>
	
	<div class="form-group">
      <label for="Gender">Gender:</label>
      <input type="text" class="form-control" id="gender" name="gender" placeholder="Male/Female" style="max-width:300px">
    </div>
	<div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" style="max-width:300px">
    </div>
	<div class="form-group">
      <label for="PhoneNumber">Phone Number:</label>
      <input type="number" class="form-control" id="phoneno" name="phoneno" placeholder="Enter your phone number" style="max-width:300px">
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" style="max-width:300px">
    </div>
   

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <br>
  <p>Already have an account???<a href="roleform.php">Login Here</a></p>
    
</div>

</body>
</html>
