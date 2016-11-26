<?php
$link=mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 
mysql_select_db("ktmbook",$link) or die("Cannot select the database!");
//$output='';	
if(isset($_POST['search'])){
	$searchq=mysql_real_escape_string($_POST['search']);
	//$searchq=preg_replace("#[^0-9a-z]#i","","$searchq");
	$query = "SELECT address FROM userform WHERE name LIKE'%$searchq%'";
	$resource = mysql_query($query,$link);
	//$output='';
	$row = mysql_fetch_array($resource);
	if(!$row){
		echo "No Results Found.";
	}elseif($searchq==''){
		echo " No results Found";
	}
	else{
		do{
			$address=$row['address'];
			 //$output.='<div>'.$name.'</div>';
			 echo '<div>' .$address.'</div>';
		}while($row = mysql_fetch_array($resource));
	}

}
	/*$results = mysql_fetch_array($resource);
	
	//$query=mysql_query("SELECT name FROM userform WHERE name LIKE'%$searchq%'") or die("could not search");
	//$count=mysql_num_rows($query);
	if($count==0)
	{
		$output='There is no search results';
	}
	else{
		while($row=mysql_fetch_assoc($query)){
			 $name=$row['name'];
			 //$output.='<div>'.$name.'</div>';
			 echo '$name';
		}
	}
	}
	?>*/
?>