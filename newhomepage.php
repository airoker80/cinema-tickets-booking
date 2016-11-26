<!DOCTYPE html>
<html>
<head>
  <title>KTM Movies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style>
  #img1 {
  height:670px;
  width:1557px;
  }
  </style>
 <!-- <style>
  body {
      position: relative; 
  }
  
  #section3 {padding-top:50px;height:668px;color: #fff; background-color: #ff9800;}
  #section4 {padding-top:50px;height:668px;color: #fff; background-color: #00bcd4;}
  #section5 {padding-top:50px;height:668px;color: #fff; backgroundcolor: #009688;}
 
  </style>-->
<style>

#navcss.navbar-inverse {
font-family:"calibria";
    font-size: 20px;
    background-color: rgba(7, 7, 38, 1);
    background: -webkit-linear-gradient(top, rgba(23, 1, 1, 1) 0%, rgba(7, 7, 38, 1) 100%);
    background: linear-gradient(to bottom, rgba(23, 1, 1, 1) 0%, rgba(7, 7, 38, 1) 100%);
    border-bottom-width: 0px;
}
#navcss.navbar-inverse .navbar-nav>li>a:hover,
#navcss.navbar-inverse .navbar-nav>li>a:focus {
    color: rgba(223, 223, 237, 1);
    background-color: rgba(2, 8, 3, 1);
    background: -webkit-linear-gradient(top, rgba(9, 18, 87, 1) 0%, rgba(2, 8, 3, 1) 100%);
    background: linear-gradient(to bottom, rgba(9, 18, 87, 1) 0%, rgba(2, 8, 3, 1) 100%);
}
#navcss.navbar-inverse .navbar-nav>.active>a,
#navcss.navbar-inverse .navbar-nav>.active>a:hover,
#navcss.navbar-inverse .navbar-nav>.active>a:focus {
    color: rgba(240, 231, 216, 1);
    background-color: rgba(2, 1, 15, 1);
}

</style>





</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<nav id="navcss"class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><strong>KTM MOVIES</strong></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cinema Halls <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">QFX Civil Mall</a></li>
              <li><a href="#">QFX Kumari</a></li>
			  <li><a href="#">QFX Jai Nepal</a></li>
			  <li><a href="#">FCube Cinemas</a></li>
			  <li><a href="#">Big Movies</a></li>
			  <li><a href="#">Gopi Krishna Movies</b></a></li>
            </ul>
          </li>
          <li><a href="#">Movies Now</a></li>
		  <li><a href="#">Movies Upcoming</a></li>
		  <li><a href="#">About Us</a></li>
				<li><a href="#">FAQ</a></li>
				</ul>

		  	  
			  
<ul class="nav navbar-nav navbar-right">
		
			  <li><a href="form.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
              <li><a href="roleform.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
       
      </ul>
      </div>
    </div>
  </div>
</nav>  

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/civilmall.jpg" alt="Civil Mall"  id="img1">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="img/fcube.png" alt="FCUBECinemasNepal" id="img1">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="img/Cine-De-Chef.jpg" alt="Cine-De-Chef.jpg" id="img1">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="img/gk.jpg" alt="Gopi Krishna Movies" id="img1">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
 <!--<p><h3><center><b>User Details</b></center></h3></p>-->
  
               
                   
                    
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
	

</body>
</html>
