<?php
mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 
mysql_select_db("ktmbook") or die("Cannot select the database!");
$output='';	
if(isset($_POST['search'])){
	$searchq=mysql_real_escape_string($_POST['search']);
	//$searchq=preg_replace("#[^0-9a-z]#i","","$searchq");
	$query=mysql_query("SELECT name FROM form WHERE name LIKE'%$searchq%'") or die("could not search");
	$count=mysql_num_rows($query);
	if($count==0)
	{
		$output='There is no search results';
	}
	else{
		while($row=mysql_fetch_assoc($query)){
			 $name=$row['name'];
			 $output.='<div>'.$name.'</div>';
		}
	}
	}
	?>
?>