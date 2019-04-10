<!DOCTYPE html>
<html>
<head>
  <title>Houses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
           
		   
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
#footer{
	position: relative;
	height:20vh;
	background:black;
	width:100%;
}
#social{
	height:8vh;
	width:30%;
	margin-left:35%;

	
	

}
#active a{
    height:11vh; 
    background: #116466;
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
#slideimage{
	height:100%;
	width:100%;
	
}
#info{
	position:absolute;
	color:red;
	font-size:20%;
	top:40%;
	z-index:3;
}

#child{

	background:;
	min-height:200vh;
	
}
#search{
	margin-left:-10%;
	margin-top:5vh ;
	background:;
	width:1200px;
		
}
#search, select{
	height:7vh;
	width:100%;
	border-radius:17px;
	
	
}
#search, select,input{
	float:left;
	
	
}
#choose{
	margin-left: 40%;
}
#search label{
	color:maroon;
	font-size:26;
	margin-top:2vh;
}
#search table{
	width:100%;
}
#searchbtn{
	margin-left: 5%;
	border:1px solid green;
	width: 70%;
}
#houses{
	width:100%;
	background:;
	border:;
	position:relative;
	min-height:50vh;

}
#houses2{
	width:100%;
	background:;
	border:solid 1px orange;
	position:relative;
	
}
.lgform{
	height:50%;
	width:33%;
	background:#ffffff;
	margin-left:37%;
	margin-top:2vh;
	opacity:0.8;
	display:none;
}
.lgform input{
	display:block;
	height:6vh;
	width:90%;
	border-radius:5px;
	margin-left:5%;
	margin-bottom:2vh;
}
.lgform label{
	margin-left:5%;
}
#top{
	min-height:10vh;
	background:teal;
	width:100%;
	text-align:center;
	
}
#top p{
	padding-top:5%;
}
#loginbtn{
	height:6vh;
	width:100%;
	background:transparent;
	border:none;
}

.regform{
	height:100%;
	width:35%;
	background:#ffffff;
	margin-left:32.5%;
	margin-top:2vh;
	opacity:0.8;
	display:none;
	
}
.regform1{
	height:100%;
	width:35%;
	background:#ffffff;
	margin-left:32.5%;
	margin-top:2vh;
	opacity:0.8;
	
	
}
.regform1 input{
	display:block;
	height:5vh;
	width:90%;
	border-radius:5px;
	margin-left:5%;
	margin-bottom:1vh;
}
.regform1 label{
	margin-left:5%;
}
.regform input{
	display:block;
	height:5vh;
	width:90%;
	border-radius:5px;
	margin-left:5%;
	margin-bottom:1vh;
}
.regform label{
	margin-left:5%;
}
@media only screen and (max-width: 600px) {
	.regform,.lgform{
		width:100%;
		margin:0%;
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
		margin-left:;
		margin-top:4%;
		height: 73vh;
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		background:white;
		position:relative;
	}
	#pics{
		height:43%;
		margin-left: -5%
		
	}
	#details{
		width:100%;
		height:57%;
		font-size:15px;
		padding: 7px;
	}
	#details label{
		font-weight:bold;
	}
		#picture{
		height:75vh;
		width:90%;
		margin-left:5%;
	}
	#desc{
		min-height:40vh;
		
		margin-left:5%;
		width:90%;
	}
	#apid{
		display:none;
	}
	#book{
		width:90%;
		height:5vh;
		background-color:#4DBB49;
		border:none;
		color:white;
		margin-left:5%;
		margin-top:1.5vh;
		
	}
	#view{
		width:50%;
		height:4vh;
		color:#4DBB49;
		background:transparent;
		border:1px solid #4DBB49;
		margin-left:25%;
	}
	#more{
		min-height:100vh;
		background:;
		margin-top:5vh;
		
	}
	#bookformbtn{
		
		width:20%;
		margin-left:30%;
		float:left;
		
	}
	#seeformbtn{
		
		width:20%;
		margin-left:15%;
		float:left;

	}
	#bookbtn{
		height:6vh;
		width:80%;
		margin-left:60%;
		background:#4DBB49;
		border:none;
		font-weight: bold;
		color:white;
		border-radius:3px;
	}
	#viewbtn{
		height:6vh;
		width:80%;
		margin-left:4%;
		border:1px solid orange;
		border-radius: 3px;
	}
	#apname{
		margin-left:40%;
		color:green;
	}
	
	.item{
		height:70vh;
	}
	td{
		text-align:center;
	}
	table input{
		height:5vh;
		width:50%;
	
	}
	#slideimages{
		height:70vh;
	}
	#session{
		color:white;
		float: right;
	}
	h4{
		text-transform: capitalize;
	}
	p{
		text-transform: capitalize;
	}
	#tenantportal{
		margin-right:5%;
		font-size: 28px;
	}
	.allocated{
		background:;
		opacity:0.8;
		height: 5Vh;
		border-radius:5px;
		width:88%;
		margin-left: 6%;
		margin-top: 2vh;
		padding-top: 5px;
		color:green;
		font-weight:bold;
		text-align: center;
	}
	
</style>
</head>
<body id="viewbody">

<div class="topnav" id="myTopnav">
  <div id="tenantportal" style="float: left; color:white;">Tenant Portal</div>
  <div id="active"><a href="viewhouses.php">View Houses</a></div>
  <a href="tenantbookings.php">My Booking</a>
  <a href="tenanthistory.php">History</a>
  <h2 style="float:left; color:#4CBB17;">Urithi Online House Boooking</h2>

  
 
  <div id="session"><p>Welcome <?php echo$name ?></p><a href="logout.php">LOGOUT</a></div>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<?php
   
		    
		    
			    if(isset($_POST['tenantloginbtn'])){
				$tusername=$_POST['tusername'];
				$tpass=$_POST['tpass'];
				
				$query4="select * from tenant where username='$tusername' and password='$tpass'";
				$result4=mysqli_query($conn,$query4);
				$row4=mysqli_fetch_array($result4);
				$rowcheck4=mysqli_num_rows($result4);
				if($rowcheck4>0){
					$_SESSION['username']=$row4['id'];
					echo'<p id="success">Logged in successfully. Welcome '.$row4['firstname'].' of id number '.$_SESSION["user"].'!</p>';
					
					
				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
			   
				}
			}
				$queryap="select ap.apartmentid,ap.apartmentname as apartname,ap.price as price from apartment ap join orders o on(ap.apartmentid=o.apartmentid) where o.customerid='$custid' and status='allocated' and commitment is null";
				$resap=mysqli_query($conn,$queryap);
				$count=mysqli_num_rows($resap);
				$rowap=mysqli_fetch_array($resap);
				$apartid=$rowap['apartmentid'];
				$apartname=$rowap['apartname'];
				$deposit=$rowap['price'];
				

             
			    $query1="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3 from apartment";
				$result1=mysqli_query($conn,$query1);
				echo'<div id="houses">';
				if($apartname){
				  echo'<div class="allocated">Great News '.$name.'! You have been allocated a house in '.$apartname.' Appartment. Please pay deposit of ksh.'.$deposit.' within 24hrs to avoid loosing it.<a href="payment.php"><button>PAY HERE</button></a></div>';
				}				   echo'<div id="child">
       <form id="search" method="POST">
	     <table><tr>
		  <td><label id="choose">Choose Location</label></td><td><select name="loc">';
			                                     $queryloc="select distinct location from apartment";
			                                     $locresults=mysqli_query($conn,$queryloc);
			                                     echo'<option>All</option>';
			                                     while($rows=mysqli_fetch_array($locresults)){
			                                     	echo'<option>'.$rows['location'].'</option>';
                                                }
			                                echo'</select></td><td><input type="submit" name="searchbtn" value="search" id="searchbtn"></td>
		</tr></table>									
	</form>
		 
		  ';
				while($row1=mysqli_fetch_array($result1)){
				  echo'<div class="col-md-3 all">
                         <div id="pics">
			                   <img src="images/'.$row1["photo1"].'" height="100%" width="100%">
			            </div>
						
			            <div id="details">
						     <h4>'.$row1['apartmentname'].' Apartments</h4>
				             <p><label>Location</label>&nbsp &nbsp &nbsp: '.$row1["location"].'</p>
				             <p><label>Vacancies:</label> &nbsp: '.$row1["vacancies"].'</p>
				             <p><label>Type:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row1["type"].'</p>
				             <p><label>Price:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row1["price"].'</p>
							 <form method="POST"><input id="apid" type="text" name="apid" value="'.$row1["apartmentid"].'"><input id="view" type="submit" name="view" value="CHECK IT OUT"></form>
							 <form method="POST" action="book.php"><input id="apid" type="text" name="cust" value="'.$custid.'"><input id="apid" type="text" name="apid" value="'.$row1["apartmentid"].'"><input id="book" type="submit" name="bookbtn" value="BOOK NOW"></form>
							 
				       </div>

			   
                    </div>

					';
					
				}
				echo'</div></div>';
				
			?>
		    <?php
			       if(isset($_POST['view'])){
				   
				      $id=$_POST['apid'];

				      echo $_POST['view'] ;
					  
					  $sql="select * from apartment where apartmentid=$id";
					  $res=mysqli_query($conn,$sql);
					  $output=mysqli_fetch_array($res);
					  $photo1=$output["photo1"];
					  $photo2=$output["photo2"];
					  $photo3=$output["photo3"];

					  $apname=$output['apartmentname'];
					  $description=$output['apartmentdesc'];

				   
					 echo'
					     <style>
						     #detail,#child,#search{
								 display:none;
							 }
							 #houses{
								 min-height:0vh;
							 }
						 </style>
						 
						 <div id="more">
						 ';
						   
						   if(($photo1) &&(!$photo2) && (!$photo3)){
						      echo'
							     <div class="container">
                                   <div id="apname"><h2>'.$apname.' Apartments</h2></div>  
                                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                   <!-- Indicators -->
                                   <ol class="carousel-indicators">
                                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                         
                                  </ol>

                                   <!-- Wrapper for slides -->
                                   <div class="carousel-inner">
                                       <div class="item active">
                                            <img src="images/'.$photo1.'" alt="Los Angeles" class="itemimage" style="width:100%;">
                                       </div>

                                       
                                 </div>

                                <!-- Left and right controls -->
                               
                             </div>
                           </div>
								  
								  ';
						   }
						   if(($photo1) &&($photo2) && (!$photo3)){
						      echo'
							     <div class="container">
                                   <div id="apname"><h2>'.$apname.' Apartments</h2></div>  
                                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                   <!-- Indicators -->
                                   <ol class="carousel-indicators">
                                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                         <li data-target="#myCarousel" data-slide-to="1"></li>
                                         <li data-target="#myCarousel" data-slide-to="2"></li>
                                  </ol>

                                   <!-- Wrapper for slides -->
                                   <div class="carousel-inner">
                                       <div class="item active">
                                            <img src="images/'.$photo1.'" alt="Los Angeles" class="itemimage" style="width:100%;">
                                        </div>

                                       <div class="item">
                                            <img src="images/'.$photo2.'" alt="Chicago" class="itemimage" style="width:100%;">
                                       </div>
    
                                 </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                     <span class="glyphicon glyphicon-chevron-right"></span>
                                     <span class="sr-only">Next</span>
                                </a>
                             </div>
                           </div>';
						   }
						   if(($photo1) &&($photo2) && ($photo3)){
						      echo'
							       <div class="container">
                                   <div id="apname"><h2>'.$apname.' Apartments</h2></div>  
                                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                   <!-- Indicators -->
                                   <ol class="carousel-indicators">
                                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                         <li data-target="#myCarousel" data-slide-to="1"></li>
                                         <li data-target="#myCarousel" data-slide-to="2"></li>
                                  </ol>

                                   <!-- Wrapper for slides -->
                                   <div class="carousel-inner">
                                       <div class="item active">
                                            <img src="images/'.$photo1.'" alt="Los Angeles" class="itemimage" style="width:100%;">
                                        </div>

                                       <div class="item">
                                            <img src="images/'.$photo2.'" alt="Chicago" class="itemimage" style="width:100%;">
                                       </div>
    
                                       <div class="item">
                                            <img src="images/'.$photo3.'" alt="New york" class="itemimage" style="width:100%;">
                                       </div>
                                 </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                     <span class="glyphicon glyphicon-chevron-right"></span>
                                     <span class="sr-only">Next</span>
                                </a>
                             </div>
                           </div> ';
						   }
						  
						   echo'<div id="desc">
						     <h2>Description</h2>
							 <p>'.$description.'</p>
						    
						    <form method="POST" action="book.php" id="bookformbtn"><input id="apid" name="apid" type="text" value="'.$id.'"><input id="bookbtn" type="submit" name="bookbtn" value="Book now"></form><form method="POST" id="seeformbtn"><input id="viewbtn" type="submit" name="othersbtn" value="See Others"></form>
						   </div>
						 </div>
					 
					 ';
					 }
           ?>
			<?php
                 if(isset($_POST['searchbtn'])){
					$area=$_POST['loc'];
					 echo'<style>
					             #houses{
                                      display:none;
					            }
					      </style>';
                if($area=='All'){
                	$query3="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3 from apartment";
				          $result3=mysqli_query($conn,$query3);
				echo'<div id="houses2">';
				
				   echo'<div id="child">
       <form method="POST" id="search" >
	     <table><tr>
		  <td><label id="choose">Choose Location</label></td><td><select name="loc">
			                                     <option>All</option>';
			                                     $queryloc="select distinct location from apartment";
			                                     $locresults=mysqli_query($conn,$queryloc);
			                                     while($rows=mysqli_fetch_array($locresults)){
			                                     	             
			                                     	          echo'  <option>'.$rows['location'].'</option>';
                                                }
			                                echo'</select></td><td><input type="submit" name="searchbtn" value="search" id="searchbtn"></td>
		</tr></table>									
	</form>
		 
		  ';
				while($row3=mysqli_fetch_array($result3)){
				  echo'<div class="col-md-3 all">
                         <div id="pics">
			                   <img src="images/'.$row3["photo1"].'" height="100%" width="100%">
			            </div>
						
			            <div id="details">
						     <h4>'.$row3['apartmentname'].' Apartments</h4>
				             <p><label>Location</label>&nbsp &nbsp &nbsp: '.$row3["location"].'</p>
				             <p><label>Vacancies:</label> &nbsp: '.$row3["vacancies"].'</p>
				             <p><label>Type:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row3["type"].'</p>
				             <p><label>Price:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row3["price"].'</p>
							 <form method="POST"><input id="apid" type="text" name="apid" value="'.$row3["apartmentid"].'"><input id="view" type="submit" name="view" value="CHECK IT OUT"></form>
							 <form method="POST" action="book.php"><input id="apid" type="text" name="apid" value="'.$row3["apartmentid"].'"><input id="book" type="submit" name="bookbtn" value="BOOK NOW!"></form>
							 
				       </div>
			   
                    </div>
					';
					
				}
				echo'</div></div>';
            }
                else{
					      $query3="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3 from apartment where location='$area'";
				          $result3=mysqli_query($conn,$query3);
				echo'<div id="houses2">';
				
				   echo'<div id="child">
       <form method="POST" id="search" >
	     <table><tr>
		  <td><label id="choose">Choose Location</label></td><td><select name="loc">
			                                     <option>All</option>';
			                                     $queryloc="select distinct location from apartment";
			                                     $locresults=mysqli_query($conn,$queryloc);
			                                     while($rows=mysqli_fetch_array($locresults)){
			                                     	             
			                                     	          echo'  <option>'.$rows['location'].'</option>';
                                                }
			                                echo'</select></td><td><input type="submit" name="searchbtn" value="search" id="searchbtn"></td>
		</tr></table>									
	</form>
		 
		  ';
				while($row3=mysqli_fetch_array($result3)){
				  echo'<div class="col-md-3 all">
                         <div id="pics">
			                   <img src="images/'.$row3["photo1"].'" height="100%" width="100%">
			            </div>
						
			            <div id="details">
						     <h4>'.$row3['apartmentname'].' Apartments</h4>
				             <p><label>Location</label>&nbsp &nbsp &nbsp: '.$row3["location"].'</p>
				             <p><label>Vacancies:</label> &nbsp: '.$row3["vacancies"].'</p>
				             <p><label>Type:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row3["type"].'</p>
				             <p><label>Price:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row3["price"].'</p>
							 <form method="POST"><input id="apid" type="text" name="apid" value="'.$row3["apartmentid"].'"><input id="view" type="submit" name="view" value="CHECK IT OUT"></form>
							 <form method="POST" action="book.php">
									 <input id="apid" type="text" name="apid" value="'.$row3["apartmentid"].'">
									 <input id="apid" type="text" name="cust" value="'.$custid.'">
									 <input id="book" type="submit" name="bookbtn" value="BOOK NOW!">
							 </form>
							 
				       </div>
			   
                    </div>
					';
					
				}
				echo'</div></div>';
			}

					  }
			?>
			  

    <!-- <footer>
	     <div id="social">
		      <i class="fab fa-facebook"></i><i class="fab fa-twitter-square"></i><i class="fab fa-instagram"></i><i class="fab fa-youtube-square"></i>
		 </div>
		 <p>Helloo</p>
	
	</footer> -->
	<script>
	      function tenantopen(){
			  document.getElementById('tenantloginform').style.display='block';  
			  document.getElementById('landlordloginform').style.display='none'; 
			  document.getElementById('landlordregform').style.display='none'; 
			  document.getElementById('tenantregform').style.display='none'; 
			  document.getElementById('tenantregform1').style.display='none'; 
			  document.getElementById('landlordregform1').style.display='none'; 
		  }
		  
		  function landlordopen(){
			  document.getElementById('landlordloginform').style.display='block';
			  document.getElementById('tenantloginform').style.display='none'; 
			  document.getElementById('tenantregform').style.display='none'; 
			  document.getElementById('landlordregform').style.display='none'; 
			  document.getElementById('tenantregform1').style.display='none'; 
			  document.getElementById('landlordregform1').style.display='none';
		  }
		  function lreg(){
			  document.getElementById('landlordregform').style.display='block';
			  document.getElementById('landlordloginform').style.display='none';
		  }
		  function treg(){
			  document.getElementById('tenantregform').style.display='block';
			  document.getElementById('tenantloginform').style.display='none';
			  document.getElementById('tenantregform1').style.display='none'; 
			  
		  }
		  function tlog(){
			  document.getElementById('tenantloginform').style.display='block';
			  document.getElementById('tenantregform').style.display='none';
			  document.getElementById('tenantregform1').style.display='none'; 
			  
			  
		  }
		  function llog(){
			  document.getElementById('landlordregform').style.display='none';
			  document.getElementById('landlordloginform').style.display='block';
			  document.getElementById('tenantregform1').style.display='none'; 
			  
		  }
		  
	</script>
</body>
</html>