<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fetching Into Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style>
body {
   background-color: #b0c4de;
	<!--background-image: url("img/civilmall.jpg");-->
}
p .h3{
    font-family: "Lucida Console";
}
</style>
</head>
<body>

<div class="container-fluid" bgcolor="red">
 
  <p><h3><center><b>User Details</b></center></h3></p>
  
               
                   
                    <p>
                        <?php
                        $link = mysql_connect("localhost", "root", "");
                        if(!$link)
                            echo("Cannot Connect to the database!");

                        mysql_select_db("ktmbook", $link) or die("Cannot select the database!");
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
        if(!$row){
		echo "No Results Found.";
	}elseif($searchq==''){
		echo " No results Found";
	}
    else{
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
	
					
						do
	                    {
	echo "
	<tr>
	<td ><center>" . $row[0] . "</center></td>
	<td ><center>" . $row[1] . "</center></td>
	<td ><center>" . $row[2] . "</center></td>
	<td ><center>" . $row[3] . "</center></td>
	<td ><center>" . $row[4] . "</center></td>
	<td ><center>" . $row[5] . "</center></td>
	<td ><center>" . $row[6] . "</center></td>
	</tr>";
	       }while($row=mysql_fetch_array($resource));
	}
						}
	?>
	</p>
	
	
   <!-- <table id="mytable" class="table table-striped">                     
    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Address</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Phone Number</th>
		
      </tr>
    </thead>
	</table>-->
	
	

	
   				
                          

                    
					
  
  
</div>

</body>
</html>
