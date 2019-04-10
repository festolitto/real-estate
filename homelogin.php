<!DOCTYPE html>
<html>
<head>
	<?php
       ob_start();
	?>
	<title>Tenant Login</title>
	<style type="text/css">
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
	body{
		background: #f0f0f0;
	}
	#success{
		color:green;
		margin-left:32.5%;
	}
	#fail{
		color:red;
		margin-left:32.5%;
		
	}
	#lgform{
	height:50%;
	width:30%;
	margin-left:37%;
	margin-top:2vh;
	background: #ffffff;

	}
#lgform input{
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
	
	</style>
	<?php
       include('tenantsession.php');
       if(isset($_POST['book'])){
        $apartid=$_POST['apid'];

     
echo'</head>
<body>
<style>
     .loginfm{
      display:none;
     }
</style>
	<div class="topnav" id="myTopnav">
  <div id="active"><a href="home.php" >Home</a></div>
  <div class="log">
    <button class="dropbtn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
		      <a><button onclick="tenantopen()" id="loginbtn">As Tenant</button></a>
		      <a><button onclick="landlordopen()" id="loginbtn">As Landlord</button></a>
      </div>
  </div> 
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact Us</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
	
	<div id="lgform">
		
		  <form method="POST" action="tenantsession.php">
		   <div id="top"><p>Tenant Login</p></div>
       <input style="display:none;" type="text" name="apid" value="'.$apartid.'">
		   <label>username</label><input type="text" name="tusername" placeholder="Enter email address" required>
		   <label>password</label><input type="password" name="tpass" placeholder="Enter Password" required>
		  
		   <input type="submit" value="Login" name="tloginbtnhome">
		  </form>
		  &nbsp &nbsp  No account? <a href="tenantregister.php"><form method="POST" action="tenantsession.php"><input type="submit" name="register" value="Register Here"</form></a>
		</div>';
  }
  
  ?>
  <div id="lgform" class="loginfm">
    
      <form method="POST" action="tenantsession.php">
       <div id="top"><p>Tenant Login</p></div>
       <input style="display:none;" type="text" name="apid" value="'.$apartid.'">
       <label>username</label><input type="text" name="tusername" placeholder="Enter email address" required>
       <label>password</label><input type="password" name="tpass" placeholder="Enter Password" required>
      
       <input type="submit" value="Login" name="tloginbtnhome">
      </form>
      &nbsp &nbsp  No account? <a href="tenantregister.php"><button>Register Here</button></a>
    </div>';
</body>
  
  
</html>