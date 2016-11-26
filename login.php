<?php session_start(); ?>
<?php 
$email = $_POST['email'];
$password=$_POST['password'];


$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 

mysql_select_db("ktmbook", $link) or die("Cannot select the database!");
$query = "SELECT email,password FROM user_info where email='$email' and password='$password' ";
$result = mysql_query($query, $link) or die (mysql_error().$query);    
$content = mysql_fetch_array($result);
if($content<=0)
{
    $_SESSION["NEW_USER"] = "PLEASE,SIGN UP FIRST";
	
		header("Location:form.php");
	//header("Location:"."form.php?message='Please sign up first'");
	}
	
	else
	{
		
	header("Location:"."userhomepage.html");
}
?>
