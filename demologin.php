<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['password']=$_POST['password'];
// check username and password information
if(($_SESSION['name']=='name') and ($_SESSION['password']==password)) 

	echo" You have access to view the information";
 
 else 

	 echo "Go Home! You have no access to view the information";
	 exit();

?>
