<?php session_start(); ?>
<?php
$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 
mysql_select_db("ktmbook", $link) or die("Cannot select the database!");
if(isset($_POST['log'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$query = "SELECT * FROM user_info WHERE email='$email'and password='$pass' ";
	$resource = mysql_query($query,$link);
	$data = mysql_fetch_array($resource);
	$emailid=$data['email'];
	$password=$data['password'];
	//$type=$data['type'];
	$name=$data['name'];
	$role=$data['role'];
	
	if($email==$emailid && $pass=$password){
	    session_start();
		$_SESSION['name']=$name;
		
		if($role=='1'){
            header("Location:" . "admin.php");
		}else{
			header("Location:" . "userhomepage.html");
			
		}
			
		
	} 
	else{
		 $_SESSION["NEW_USER"] = "PLEASE,SIGN UP FIRST";
	
		header("Location:form.php");
		//header("Location:"."form.php?message='Please sign up first'");
	}
	
}
?>
