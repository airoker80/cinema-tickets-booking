<?php
$link=mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 
mysql_select_db("ktmbook",$link) or die("Cannot select the database!");

//initialize variable
//$output='';
//$searchq=' ';
//$i=0;

//collect
if(isset($_POST['search'])){
	$searchq = $_POST['search'];
    $searchq=mysql_real_escape_string($_POST['search']);
	//$searchq = preg_replace ('#[^a-zA-Z0-9?!]#i','', $searchq);
	if ($_POST['filter1']=="search by name"){
		$query = "SELECT * FROM user_info WHERE name LIKE '%$searchq%'  ORDER BY address ASC" ;

	}elseif($_POST['filter1']=="search by address"){
		$query = "SELECT * FROM user_info WHERE address LIKE '%$searchq%'  ORDER BY address ASC" ;
	}elseif($_POST['filter1']=="search by age"){
		$query = "SELECT * FROM user_info WHERE age LIKE '%$searchq%'  ORDER BY age ASC" ;
	}
		$resource = mysql_query($query,$link);
		$row = mysql_fetch_array($resource);
        
	
	
	//$result= $conn->query($query)or die ("could not search");
	if(!$row){
		echo "No Results Found.";
	}elseif($searchq==''){
		echo " No results Found";
	}
	
	else{
		do{
			$name=$row['name'];
			$address=$row['address'];
			$age=$row['age'];
			 //$output.='<div>'.$name.'</div>';
			// echo '<div>' .$address.'</div>';
			echo " 
			<table  align=\"center\" width=600 border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>name</th>
		<th>address</th>
		<th>age</th>
	</tr>
	<tr>
		 	<td>".$row['name']."</td>
			<td>".$row['address']." </td>
			<td>".$row['age']."</td>
		</tr>";
		}while($row = mysql_fetch_array($resource));
	}
	//if(!$result) mysql_error() ;
	//$count= $result->num_rows;
	/*if ($count>0){
		while ($row = $result->fetch_assoc()){
			$cname =$row ['customer_name'];
			$cstreet = $row ['customer_street'];
			$ccity = $row ['customer_city'];
			//'<div>'.$cname.' '.$cstreet.' '.$ccity.'</div>';
			
			$output .= $count . " result found <br/> <br/> 
			<table width=600 border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>name</th>
		<th>address</th>
		<th>age</th>
	</tr>
	<tr>
		 	<td>".$row["name"]."</td>
			<td>".$row["address"]." </td>
			<td>".$row["age"]."</td>
		</tr>"; 
			}
	}
	else {
		$output="no results found";
		}
}
$conn->close();*/
}
?>