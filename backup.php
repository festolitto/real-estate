<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

           <script src="jquery-3.2.1.min.js">  </script>
	       <script src="jquery.cycle.all.js" >  </script>
	       <script src="cyclesSlider.js"     >  </script>

	       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		   
		   <?php
		       include('connection.php');
		       include('update.php');
		       include('action.php');

               
               
		       
			
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
#slider{
	height:90vh;
	width:100%;
	position:relative;
	background:;
}
.sldimg{
	height:100%;
	width:100%;
}
footer{
	background:black;
	min-height:30vh;
	width:100%;
	
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
#slideimage{
	height:100%;
	width:100%;
	
}
#info{
	position:absolute;
	color:white;
	font-size:28px;
	font-family:San Serif;
	top:40%;
	left:20%;
	z-index:3;
}
#mother{
	height:100vh;
	width:100%;
}
#child{
	height:100%;
	width:100%;
	position:absolute;
	background:#333;
	z-index:1000;
	background:transparent;
}
.lgform{
	height:50%;
	width:30%;
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
#top p,h3{
	padding-top:5%;
	color:white;
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
#search{
	padding-top:;	
   }
#selectloc{
	height:7vh;
	width:100%;
	margin-left:0%;
	margin-top: 5%;
	border:solid 2px green;
	border-radius:17px;
	
}
#searchbtn{
	width:80%;
	height:5vh;
}
#search label{
	color:maroon;
	font-size:26;
}
#choose{
	margin-left: 70%;
}
	#welcome h3{
		color:green;
		margin-top:-8vh;
		
		
	}
	#welcome{
		text-align:center;
		height:9vh;
	}
	.all{
		height:70vh;
		width:20%;
		margin-left:4%;
		margin-top:4%;
		float:left;
		border:solid 1px aqua;
		background:white;
		position absolute;
	}
	#pics{
		width:100%;
		height:43%;
		
	}
	#details{
		width:100%;
		height:57%;
		font-size:15px;
	}
	#details label{
		font-weight:bold;
	}
	#detail{
		height:400vh;
		background:white;
		display:none;
	}
	#detail2{
		height:400vh;
		background:white;
	}
	#apid{
		display:none;
	}
	#book{
		width:90%;
		height:5vh;
		background-color:#4DBB49;
		margin-left:5%;
		margin-top:1.5vh;
		color:white;
		font-weight:bold;
		
	}
	#view{
		width:50%;
		height:4vh;
		background-color:;
		margin-left:25%;
	}
	#more{
		min-height:100vh;
		margin-top:;
		background:;
	}
	#picture{
		height:75vh;
		width:90%;
		margin-left:5%;
		background: ;
		margin-top:7vh;
	}
	.container{
		height:75vh;
		width:90%;
	}
	#desc{
		min-height:40vh;
		
		margin-left:5%;
		width:90%;
	}
	#apname{
		text-align:center;
	}
	#bookbtn{
		height:6vh;
		width:80%;
		margin-left:60%;
		background:#4DBB49;
	}
	#viewbtn{
		height:6vh;
		width:80%;
		margin-left:4%;
		background:orange;
	}
	#bookingform{
		background:white;
		width:70%;
		margin-left:15%;
		height:80vh;
	}
	#bookingform label{
          margin-left:25%;
		  
	}
	
	#bookingform input,select{
		display:block;
		margin-left:25%;
		margin-bottom:3vh;
		height:6vh;
		width:50%;
		border-radius:5px;
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
	#searchtable{
		width:100%;
		height:20vh;
		background:;
		z-index:1000;
		margin-top: 5vh;

	}
	.container{
		height:90vh;
		width: 100%;
	}
	#searchdiv{
		background: ;
		width: 100%;
		z-index:1000;
		height:10vh;
	}
	#houses{
		background: red;
	}


</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="home.php" >Home</a>
  <a href="#">Services</a>
  <a href="#">About Us</a>
  <div class="log">
    <button class="dropbtn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a><button onclick="tenantopen()" id="loginbtn">As Tenant</button></a>
      <a><button onclick="landlordopen()" id="loginbtn">As Landlord</button></a>
      </div>
  </div> 
 
  <a href="#">Contact Us</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
   <div id="welcome"><marquee><h3>Welcome To Urithi Online House Booking</h3></marquee></div>
<div id="mother">

   <div id="child">
        <div id="tenantloginform" class="lgform">
		  <form method="POST" action="viewhouses.php">
		   <div id="top"><p>Tenant Login</p></div>
		   <label>username</label><input type="text" name="tusername" placeholder="Enter email address" required>
		   <label>password</label><input type="password" name="tpass" placeholder="Enter Password" required>
		  
		   <input type="submit" value="Login" name="tenantloginbtn">
		  </form>
		  &nbsp &nbsp  No account? <button onclick="treg()">Register Here</button> &nbsp <button onclick="tforgot()">Forgot Password</button>
		</div>
		
		<div id="landlordloginform" class="lgform" > 
		  <form method="POST" action="Landlordportal.php">
		   <div id="top"><p>Landlord Login</p></div>
		   <label>username</label><input type="text" name="lusername" placeholder="Enter email address" required>
		   <label>password</label><input type="password" name="lpass" placeholder="Enter Password" required>
		  
		   <input type="submit" value="Login" name="landlordloginbtn">
		  </form>
		   &nbsp &nbsp  No account? <button onclick="lreg()">Register Here</button> &nbsp <button onclick="lforgot()">Forgot Password</button>
		</div>
		
		<div id="landlordregform" class="regform" action="self">
		   <div id="top"><p>Landlord Registration</p></div>
		  <form method="POST">
		   <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" required>
		   <label>First Name</label><input type="text" name="fname" placeholder="First name" required>
		   <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" required>
		   <label>Phone</label><input type="text" name="phone" placeholder="Enter your phone number" required>
		   <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" required>
		   <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		   <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		   <input type="submit" value="Sign Up" name="landlordregbtn">
		  </form> 
		  &nbsp &nbsp  Already Registered? <button onclick="llog()">Login Here</button>
		</div>
		
		<div id="tenantregform" class="regform" action="self">
		  <form method="POST">
		   <div id="top"><p>Tenant Registration</p></div>
		   <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" required>
		   <label>First Name</label><input type="text" name="fname" placeholder="First name" required>
		   <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" required>
		   <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" required>
		   <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" required>
		   <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		   <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		   <input type="submit" value="Sign UP" name="tenantregbtn">
		 </form>  
		   &nbsp &nbsp Already Registered? <button onclick="tlog()">Login Here</button>
		</div>
		
		<?php
		    if(isset($_POST['tenantregbtn'])){
			      $id=$_POST['id'];
			      $fname=$_POST['fname'];
			      $lname=$_POST['lname'];
			      $phone=$_POST['phone'];
			      $username=$_POST['username'];
			      $pass=$_POST['pass'];
			      $cpass=$_POST['cpass'];
				  
				  $query3="select * from landlord where username='$username' or id=$id";
				  $result3=mysqli_query($conn,$query3);
				  $rowcheck3=mysqli_num_rows($result3);
		   if($rowcheck3<1){	  
			if($pass==$cpass){
				  $query="insert into tenant values('$id','$fname','$lname','$phone','$username','$pass')";
				  $result=mysqli_query($conn,$query);
				  if($result){
					  echo'<div id="success">registered succefully</div>';
				  }
				  else{
					  echo'<div id="fail">Registration Failed</div>
					  
					  <div id="tenantregform1" class="regform1">
		               <form method="POST">
		                 <div id="top"><p>Tenant Registration</p></div>
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                 <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		                 <input type="submit" value="Sign UP" name="tenantregbtn">
		               </form>  
		              &nbsp &nbsp Already Registered? <button onclick="tlog()">Login Here</button>
		           </div>
					  ';
				  }
			}
			else{
				echo'<div id="fail">Password Mismatch</div>
				     <div id="tenantregform1" class="regform1">
		               <form method="POST">
		                 <div id="top"><p>Tenant Registration</p></div>
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                 <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		                 <input type="submit" value="Sign UP" name="tenantregbtn">
		               </form>  
		              &nbsp &nbsp Already Registered? <button onclick="tlog()">Login Here</button>
		           </div>
				
				';
			}
			}
			else{
				echo'<div id="fail">User with the same ID/Email already exist</div>
				     <div id="tenantregform1" class="regform1">
		               <form method="POST">
		                 <div id="top"><p>Tenant Registration</p></div>
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                 <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		                 <input type="submit" value="Sign UP" name="tenantregbtn">
		               </form>  
		              &nbsp &nbsp Already Registered? <button onclick="tlog()">Login Here</button>
		           </div>';
				
			}
				  
		    }
			
			if(isset($_POST['landlordregbtn'])){
			      $id=$_POST['id'];
			      $fname=$_POST['fname'];
			      $lname=$_POST['lname'];
			      $phone=$_POST['phone'];
			      $username=$_POST['username'];
			      $pass=$_POST['pass'];
			      $cpass=$_POST['cpass'];
				  
				  $query2="select * from landlord where username='$username' or id=$id";
				  $result2=mysqli_query($conn,$query2);
				  $rowcheck2=mysqli_num_rows($result2);
			   if($rowcheck2<1){
				   
			  
			   if($pass==$cpass){
				  $query1="insert into landlord values('$id','$fname','$lname','$phone','$username','$pass')";
				  $result1=mysqli_query($conn,$query1);
				  if($result1){
					  echo'<div id="success">registered succefully</div>
					       
					  ';
					  
				  }
				  else{
					  echo'<div id="fail">Registration Failed</div>
					       <div id="tenantregform1" class="regform1">
		                   <div id="top"><p>Landlord Registration</p></div>
		                   <form method="POST">
		                            <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                            <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                            <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                            <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                            <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                            <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		                            <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		  
		                       <input type="submit" value="Sign Up" name="landlordregbtn">
		                 </form> 
		                  &nbsp &nbsp  Already Registered? <button onclick="llog()">Login Here</button>
		                </div>
					  ';
					  
					  
				  }
				  
		    }
			else{
				echo'<div id="fail">Password Mismatch</div>
					      <div id="tenantregform1" class="regform1">
		                   <div id="top"><p>Landlord Registration</p></div>
		                   <form method="POST">
		                            <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                            <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                            <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                            <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                            <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                            <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		                            <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		  
		                       <input type="submit" value="Sign Up" name="landlordregbtn">
		                 </form> 
		                  &nbsp &nbsp  Already Regidtered? <button onclick="llog()">Login Here</button>
		                </div>
					  ';
			}
			}
			else{
				echo'<div id="fail">A user with the same ID/Email already exist</div>
					      <div id="tenantregform1" class="regform1">
		                   <div id="top"><p>Landlord Registration</p></div>
		                   <form method="POST">
		                            <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                            <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                            <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                            <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                            <label>Username</label><input type="text" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                            <label>Password</label><input type="text" name="pass" placeholder="Enter Password" required>
		                            <label>Confirm password</label><input type="text" name="cpass" placeholder="Re-enter your pssword" required>
		  
		  
		                       <input type="submit" value="Sign Up" name="landlordregbtn">
		                 </form> 
		                  &nbsp &nbsp  Already Regidtered? <button onclick="llog()">Login Here</button>
		                </div>
					  ';
				
			}
			}
			
			if(isset($_POST['tenantloginbtn'])){
				$tusername=$_POST['tusername'];
				$tpass=$_POST['tpass'];
				
				$query4="select * from tenant where username='$tusername' and password='$tpass'";
				$result4=mysqli_query($conn,$query4);
				$row4=mysqli_fetch_array($result4);
				$rowcheck4=mysqli_num_rows($result4);
				if($rowcheck4>0){
					$_SESSION['username']=$row4['id'];
					echo'<div id="success">Logged in successfully. Welcome '.$row4['firstname'].' of id number '.$_SESSION["username"].'!</div>';
					header('location:viewhouses.php');
					
				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
				}
			}
			
		?>
   </div>
   
   <div id="slider">
	     <div class="container">
                                    
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
                                            <img src="sliderimage1.jpg" alt="Los Angeles" class="itemimage" width="100%" height="100%">
                                        </div>

                                       <div class="item">
                                            <img src="sliderimage2.jpg" alt="Chicago" class="itemimage" width="100%" height="100%">
                                       </div>
                                       <div class="item">
                                            <img src="sliderimage11.jpg" alt="Chicago" class="itemimage" width="100%" height="100%">
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
                           </div>
	</div>
</div>
	
	<div id="detail">
	    <?php

   echo'<div id="child">
        
		<div id="searchdiv"><table id="searchtable"><tr><form method="POST" id="search">
		 <td ><label id="choose">Choose Location</label></td><td><select name="loc" id="selectloc" required>
			                                     <option></option>';
			                                     $queryloc="select distinct location from apartment";
			                                     $locresults=mysqli_query($conn,$queryloc);
			                                     while($rows=mysqli_fetch_array($locresults)){
                                                    echo'<option>'.$rows['location'].'</option>';
                                                }
			                               echo' </select></td><td><input type="submit" name="searchbtn" Value="search" id="searchbtn"></td>
											
		 </form></tr></table>
		 
		  ';
		    
		    
			    if(isset($_POST['tenantloginbtn'])){
				$tusername=$_POST['tusername'];
				$tpass=$_POST['tpass'];
				
				$query4="select * from tenant where username='$tusername' and password='$tpass'";
				$result4=mysqli_query($conn,$query4);
				$row4=mysqli_fetch_array($result4);
				$rowcheck4=mysqli_num_rows($result4);
				if($rowcheck4>0){
					$_SESSION['username']=$row4['id'];
					echo'<p id="success">Logged in successfully. Welcome '.$row4['firstname'].' of id number '.$_SESSION["username"].'!</p>';
					
					
				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
			   
				}
			}
			
				if(isset($_POST['searchbtn'])){
					$area=$_POST['loc'];
					echo'<style>
                               #detail2{
					             display:none;
			                 	}
			                 	#detail{
					             display:block;
			                 	}
					      </style>';

			    $query1="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3 from apartment where location='$area'";
				$result1=mysqli_query($conn,$query1);
				echo'<div id="houses">';
				while($row1=mysqli_fetch_array($result1)){
				  echo'<div class="all">
                         <div id="pics">
			                   <img src="'.$row1["photo1"].'" height="100%" width="100%">
			            </div>
						
			            <div id="details">
						     <h4>'.$row1['apartmentname'].' Apartments</h4>
				             <p><label>Location</label>&nbsp &nbsp &nbsp: '.$row1["location"].'</p>
				             <p><label>Vacancies:</label> &nbsp: '.$row1["vacancies"].'</p>
				             <p><label>Type:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row1["type"].'</p>
				             <p><label>Price:</label> &nbsp  &nbsp &nbsp &nbsp : '.$row1["price"].'</p>
							 <form method="POST"><input id="apid" type="text" name="apid" value="'.$row1["apartmentid"].'"><input id="view" type="submit" name="view" value="CHECK IT OUT"></form>
							 <form method="POST" action="book.php"><input id="apid" type="text" name="apid" value="'.$row1["apartmentid"].'"><input id="book" type="submit" name="book" value="BOOK NOW"></form>
							 
							 
				       </div>
			   
                    </div>';
					
				}
			}
				 echo'</div>
			  
       </div>';
		    
			?>
			
	</div>

	<div id="detail2" class="detailshome">
	    <?php

   echo'<div id="child">
        
		<table id="searchtable"><tr><form method="POST" id="search">
		 <td ><label id="choose">Choose Location</label></td><td><select name="loc" id="selectloc" required>
			                                     <option></option>';
			                                     $queryloc="select distinct location from apartment";
			                                     $locresults=mysqli_query($conn,$queryloc);
			                                     while($rows=mysqli_fetch_array($locresults)){
                                                    echo'<option>'.$rows['location'].'</option>';
                                                }
			                               echo' </select></td><td><input type="submit" name="searchbtn" Value="search" id="searchbtn"></td>
											
		 </form></tr></table>
		 
		  ';
		    
				

			    $queryz="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo2,photo3 from apartment";
				$resultz=mysqli_query($conn,$queryz);
				echo'<div id="houses">';
				while($rowz=mysqli_fetch_array($resultz)){
				  echo'<div class="all">
                         <div id="pics">
			                   <img src="'.$rowz["photo1"].'" height="100%" width="100%">
			            </div>
						
			            <div id="details">
						     <h4>'.$rowz['apartmentname'].' Apartments</h4>
				             <p><label>Location</label>&nbsp &nbsp &nbsp: '.$rowz["location"].'</p>
				             <p><label>Vacancies:</label> &nbsp: '.$rowz["vacancies"].'</p>
				             <p><label>Type:</label> &nbsp  &nbsp &nbsp &nbsp : '.$rowz["type"].'</p>
				             <p><label>Price:</label> &nbsp  &nbsp &nbsp &nbsp : '.$rowz["price"].'</p>
							 <form method="POST"><input id="apid" type="text" name="apid" value="'.$rowz["apartmentid"].'"><input id="view" type="submit" name="view" value="CHECK IT OUT"></form>
							 <form method="POST" action="book.php"><input id="apid" type="text" name="apid" value="'.$rowz["apartmentid"].'"><input id="book" type="submit" name="book" value="BOOK NOW"></form>
							 
							 
				       </div>
			   
                    </div>';
					
				}
			
				 echo'</div>
			  
       </div>';
		    
			?>
			
	</div>
        <?php
			   if(isset($_POST['view'])){
				   
				      $id=$_POST['apid'];
					  $sql="select * from apartment where apartmentid=$id";
					  $res=mysqli_query($conn,$sql);
					  $output=mysqli_fetch_array($res);
					  $photo=$output["photo1"];
					  $apname=$output['apartmentname'];
				   
					 echo'
					     <style>
						     #detail{
								 display:none;
							 }
							 #detail2{
								 display:none;
							 }
						 </style>
						
						 <div id="more">
						   <div id="picture">
						     <img src="sliderimage7.jpg" height="100%" width="100%">
						        </div>
						   <div id="desc">
						     <h2>Description</h2>
							 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						    
						     <form method="POST" action="book.php" id="bookformbtn"><input id="apid" name="apid" type="text" value="'.$id.'"><input id="bookbtn" type="submit" name="bookbtn" value="Book now"></form><form method="POST" id="seeformbtn"><input id="viewbtn" type="submit" name="othersbtn" value="See Others"></form>
						   </div>
						 </div>
					 
					 ';
					 
					 
					 
					
					 
				 }
				
				 
				 
			?>
    <footer>
	     <div id="social">
		      <i class="fab fa-facebook"></i><i class="fab fa-twitter-square"></i><i class="fab fa-instagram"></i><i class="fab fa-youtube-square"></i>
		 </div>
		 <p>Helloo</p>
	
	</footer>
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
		  function book(){
			  document.getElementById('bookingform').style.display='block';  
			  document.getElementById('tenantloginform').style.display='none';  
			  document.getElementById('landlordloginform').style.display='none'; 
			  document.getElementById('landlordregform').style.display='none'; 
			  document.getElementById('tenantregform').style.display='none'; 
			  document.getElementById('tenantregform1').style.display='none'; 
			  document.getElementById('landlordregform1').style.display='none'; 
		  }
		  
	</script>
</body>
</html>