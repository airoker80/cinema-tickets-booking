
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<body>



<div class="w3-container w3-half w3-margin-top">

<form class="w3-container w3-card-4">
  <h2 class="w3-text-theme">Login</h2>
  <div class="w3-group">      
    <input class="w3-input" type="text" required>
    <label class="w3-label">Name</label>
  </div>
  <div class="w3-group">      
    <input class="w3-input" type="password" required>
    <label class="w3-label">Password</label>
  </div>

  <label class="w3-checkbox">
    <input type="radio" name="gender" value="male" checked>
    <div class="w3-checkmark"></div> Male
  </label><br>
  <label class="w3-checkbox">
    <input type="radio" name="gender" value="female">
    <div class="w3-checkmark"></div> Female
  </label>
  <br><br>
  <label class="w3-checkbox">
    <input type="checkbox" checked="checked">
    <div class="w3-checkmark"></div> Stay Logged In
  </label>

  <br><br>
  <button class="w3-btn w3-theme"> Log in </button>
  <br><br>
</form>

</div>

</body>
</html> 
