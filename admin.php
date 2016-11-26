<h1><b>Logged in as :</b>
<?php
session_start();
echo $_SESSION['name'];
if(!isset($_SESSION['name']))
{
	header("Location:" . "roleform.php");
}
?>
</h1>
<b>
<a href="logout.php">Logout</a>
</b>