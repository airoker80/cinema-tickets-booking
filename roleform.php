<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
  function validateForm() {
    var x = document.forms["myform"]["email"].value;
	var y = document.forms["myform"]["pass"].value;
 if (x == null || x == "") {
        alert("Username must be filled out");
        return false;
    }
	 if (y == null || y == "") {
        alert(" Password must be filled out");
        return false;
    }
}
  </script>

</head>
<body>

<div class="container">
  <h2>Login</h2>
    
  <form name="myform" onsubmit="return validateForm()" role="form" action="rolelogin.php" method="post">
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter the email" style="max-width:300px">
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter the password" style="max-width:300px">
    </div>
	
   
    
    <button type="submit" name="log" class="btn btn-primary">login</button>
	<br>
	<br>
  </form>
</div>

</body>
</html>
