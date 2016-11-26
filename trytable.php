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
 #body {
	 bgcolor:#DAD7C7;
 }
 </style>
</head>
<body>

<div class="container-fluid">
 
  <p><h3><center><b>Movie Details</b></center></h3></p>
  
               
                   
                    <p>
                        <?php
                        $link = mysql_connect("localhost", "root", "");
                        if(!$link)
                            echo("Cannot Connect to the database!");

                        mysql_select_db("ktmbook", $link) or die("Cannot select the database!");
                        $query = "SELECT * FROM moviedetails";
                        $resource = mysql_query($query, $link);
					echo "<table align=\"center\" border=\"0\" width=\"70%\" class=\"table table-hover\">
                                <tr>
								    <td class=\"info\"><center><b>SN</b></center></td>
                                    <td class=\"danger\"><center><b>Movies Now</b></center></td> 
                                    <td class=\"active\"><center><b>Movies Upcoming</b></center></td>
                                    <td class=\"success\"><center><b>Show time</b></center></td>
                                    <td class=\"warning\"><center><b>Release Date</b></center></td>
                                    
                                </tr>";
					
						while($row=mysql_fetch_array($resource))
	                    {
	echo "
	<tr>
	<td ><center>" . $row[0] . "</center></td>
	<td ><center>" . $row[1] . "</center></td>
	<td ><center>" . $row[2] . "</center></td>
	<td ><center>" . $row[3] . "</center></td>
	<td ><center>" . $row[4] . "</center></td>
	</tr>";
	}
	echo "</table>";
	
	?>
	</p>
	
	
   <!-- <table id="mytable" class="table table-striped">                     
    <thead>
      <tr>
        <th>S.N</th>
        <th>Movies Now</th>
        <th>Movies Upcoming</th>
		<th>ShowTime</th>
		<th>ReleaseDate</th>
      </tr>
    </thead>
	</table>-->
	
	

	
   				
                          

                    
					
  
  
</div>

</body>
</html>
