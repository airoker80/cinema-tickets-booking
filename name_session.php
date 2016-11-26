 <?php
 session_start();
 
$name = $_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$password=$_POST['password'];


$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 

mysql_select_db("ktmbook", $link) or die("Cannot select the database!");
$query = "INSERT INTO form (name,address,phoneNumber,password) values('". $name ."','". $address ."','". $phone ."','". $password ."')";
$result = mysql_query($query, $link) or die (mysql_error().$query);    
$content = mysql_fetch_array($result);
if($content==false)
{
    $_SESSION["name_already_exist"] = "This username has been already taken,please try next.....";
	
		header("Location:form.php");
	//header("Location:"."form.php?message='Please sign up first'");
	}
	
	else
	{
		
	header("Location:"."form.php");
}
?>
