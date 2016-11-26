<?php
//$searchterm=$_POST['search'];
mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 
mysql_select_db("ktmbook") or die("Cannot select the database!");	
if(isset(S_POST['search'])){
	$searchq=$_POST['search'];
	$searchq=preg_replace("#[^0-9a-z]#i","","$searchq");
	$query=mysql_query("SELECT * FROM userform WHERE name LIKE'%$searchq%'") or die("could not search");
	$count=mysql_num_rows($query);
	if($count==0)
	{
		$output='There is no search results';
	}
	else{
		while($row=mysql_fetch_array($query)){
			 $name=$row['name'];
			 $output.='<div>'.$name.'</div>';
		}
	}
	}
//$query = "SELECT * FROM userform where name like '%$name%"; or die("could not query the database!);
//$find_name = mysql_query($query) or die (mysql_error().$query);    
//$row = mysql_fetch_array($find);
//while($row = mysql_fetch_array($find_name))
//{
	//$name=$row['name'];
	//echo " <a href='#'>$name</a><br/>";
	//echo " <a href='#'>$address</a><br/>";
//}
?>