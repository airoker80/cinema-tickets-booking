<?php

 session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['address']=$_POST['address'];
$_SESSION['phone']=$_POST['phone'];
// check username and password information
if(($_SESSION['name']=='Shramik') and ($_SESSION['phone']=='9808590013') and ($_SESSION['address']=='tokha')) 

	echo " You have access to view the information";
 
 else 

	 echo "Go Home! You have no access to view the information";

	 exit();

?>
