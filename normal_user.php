<p><b> Welcome to Personal User Page</b></p>
<?php
session_start();
echo $_SESSION['email'];
if(!isset($_SESSION['email']))
{
	header("Location:" . "roleform.php");
}

?>
<b>
<a href="logout.php">Logout</a>
</b>