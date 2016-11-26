 <?php
$name = $_POST['name'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phoneno'];
$password=$_POST['password'];
$role = "role";// role is set to 0 and 1 ( 1 refers to admin and 0 to normal user)
$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 

mysql_select_db("ktmbook", $link) or die("Cannot select the database!");
$query = "INSERT INTO user_info (name,address,age,gender,email,phone_no,password,role) values('". $name ."','". $address ."','". $age ."','". $gender ."','". $email ."','". $phone ."','". $password ."','". $role ."')";// name' set to UNIQUE 

if (!mysql_query($query, $link)) {
	 die("This username already exists...");
} else {
    echo "New record saved successfully!";
    header("Location:" . "form.php");
}
?>
