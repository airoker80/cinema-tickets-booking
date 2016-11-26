<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fetching Into Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="container-fluid" bgcolor="red">
<p><h3><center><b>User Details</b></center></h3></p>
<p>
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
		echo "<table align=\"center\" border=\"0\" width=\"70%\" class=\"table table-hover\">
                                <tr>
								    <td class=\"info\"><center><b>SN</b></center></td>
                                    <td class=\"danger\"><center><b>Name</b></center></td> 
                                    <td class=\"active\"><center><b>Address</b></center></td>
                                    <td class=\"success\"><center><b>Age</b></center></td>
                                    <td class=\"warning\"><center><b>Gender</b></center></td>
									<td class=\"info\"><center><b>Email</b></center></td>
                                    <td class=\"danger\"><center><b>Phone Number</b></center></td> 
                                    
                                    
                                </tr> ";
								echo "
	<tr>
	<td ><center>" . $row['user_id'] . "</center></td>
	<td ><center>" . $row['name'] . "</center></td>
	<td ><center>" . $row['address'] . "</center></td>
	<td ><center>" . $row['age'] . "</center></td>
	<td ><center>" . $row['gender'] . "</center></td>
	<td ><center>" . $row['email'] . "</center></td>
	<td ><center>" . $row['phone_no'] . "</center></td>
	</tr>";
					
		}while($row=mysql_fetch_array($resource));
	                    
	
	
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
</p>

  
</div>

</body>
</html>