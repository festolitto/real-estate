<!DOCTYPE html>
<html>
<head>
  <title>Houses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
           
		   
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		   
		   
		   <?php
		      
		       include('connection.php');
		       include('timeout.php');
			   ob_start();
			   
			   
			   include('tenantsession.php');
			   $custid=$_SESSION['user'];

			   if(!isset($custid)){
			   	header('location:tenantlogin.php');

			   }

			   $queryname="select * from tenant where id='$custid'";
			   $resname=mysqli_query($conn,$queryname);
			   $rowname=mysqli_fetch_array($resname);
			   $name=$rowname['firstname'];



			   
		   ?>
		   
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.log {
  float: left;
  overflow: hidden;
}

.log .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index:10000;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  
}

.topnav a:hover, .log:hover .dropbtn {
  background-color: #555;
  color: white;
  
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
  
}

.log:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .log .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .log{float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .log .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
a .topnav{
  font-size: 2em;
}
.ft{
background-color: black;

}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 3em;
  padding: 8px 12px;
  position: absolute;
  bottom: 50%;
  width: 100%;
  text-align: center;
  font-weight: bolder;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.ft{
background-color: black;
clear: both;

}
.foot{
  background-color: black;
  

}
.color-21{
  color: white;
  font-size: 2em;


}
.color-20{
  color: white;
  font-size: 1.5em; 
}
.fot .color-20{
  float: right;
  margin-right: 25%;
}



#search label{
	margin-left:10%;
	
}
.sldimg{
	height:100%;
	width:100%;
}
footer{
	background:black;
	min-height:30vh;
	width:100%;
	margin-top:5%;
}
#social{
	height:8vh;
	width:30%;
	margin-left:35%;
	position:absolute;
	margin-top:5vh;

}
i{
	float:left;
	width:20%;
	margin-left:4%;
	height:80%;
	padding-top:2%;
	color:white;
	padding-left:9%;
	font-size:20;
	background:teal;
	border-radius:5px;
	
}

	
}
#success{
		color:green;
		margin-left:32.5%;
	}
	#fail{
		color:red;
		margin-left:32.5%;
		
	}
	.all{
		height:73vh;
		width:23%;
		margin-left:2%;
		margin-top:4%;
		float:left;
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		background:white;
		position:relative;
	}
	#session{
		color:white;
		float: right;
	}
	
	
	#tenantportal{
		margin-right:5%;
		font-size: 28px;
	}
	.content{
		  width:100%;
          min-height:40vh;
          background: #ffffff;
          border:1px solid green;
	}
	body{
		background: #f0f0f0;
	}
	#header{
		background: #2E151B;
		text-align: center;
		height:8vh;
		font-size: 20px;
	}
	th{
		background: #2E151B;
		color:white;
	}
	#active a{
    height:11vh; 
    background: #116466;
   }
	
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <div id="tenantportal" style="float: left; color:white;">Tenant Portal</div>
  <a href="viewhouses.php">View Houses</a>
  <div id="active"><a href="#">My Booking</a></div>
  <a href="tenanthistory.php">History</a>
  <h2 style="float:left; color:#4CBB17;">Urithi Online House Boooking</h2>

  
 
  <div id="session"><p>Welcome <?php echo$name ?></p><a href="logout.php">LOGOUT</a></div>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="content">
  <?php
	$query="select * from orders o join tenant t on(o.customerid=t.id) join apartment ap on(ap.apartmentid=o.apartmentid) where o.customerid='$custid' and o.status in('allocated','waiting','checkedin') order by o.orderid desc";
	$res=mysqli_query($conn,$query);
    $rowcheck=mysqli_num_rows($res);

    if($rowcheck>0){
    	 echo'<table class="table border"><tr><th colspan="9" id="header">My Active Bookings</th></tr>
    	             <tr id="th"><th>ORDER ID</th><th>ID</th><th>APARMENT NAME</th><th>TYPE</th><th>LOCATION</th><th>BOOKING DATE</th><th>REPORTING DATE</th><th>AMOUNT PAID</th><th>STATUS</th></tr>

    	 ';
    	while($row=mysqli_fetch_array($res)){
    		echo'<tr>
    		         <td>'.$row['orderid'].'</td>
    		         <td>'.$row['customerid'].'</td>
    		         <td>'.$row['apartmentname'].'</td>
    		         <td>'.$row['roomtype'].'</td>
    		         <td>'.$row['location'].'</td>
    		         <td>'.$row['bookingdate'].'</td>
    		         <td>'.$row['datein'].'</td>
    		         <td>'.$row['commitment'].'</td>
    		         <td>'.$row['status'].'</td>




    		    </tr>';
        
	}

	echo'</table>';
	 }
	else{
		echo'<div id="info">No active bookings at the moment</div>';
	}

   


	
  ?>
	
</div>
</body>
</html>