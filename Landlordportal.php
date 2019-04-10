<!DOCTYPE html>
<html>
<head>
  <title>Houses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

           <script src="jquery-3.2.1.min.js">  </script>
	       <script src="jquery.cycle.all.js" >  </script>
	       <script src="cyclesSlider.js"     >  </script>
		   
		   <?php
		       include('connection.php');
			   ob_start();
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
	color:red;
	font-size:20%;
	top:40%;
	z-index:3;
}

#child{
	height:200vh;
	width:100%;
	background:wheat;
}
#search{
	padding-top:4vh;	
}
#search ,label,select{
	height:7vh;
	width:70%;
	border-radius:17px;
	
}
#search label{
	color:white;
	font-size:26;
}
#houses{
	height:100%;
	width:100%;
	background:wheat;
	border:solid 1px orange;
	margin-top:5vh;
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
		height:40vh;
		width:20%;
		margin-left:4%;
		margin-top:4%;
		float:left;
		border:solid 1px aqua;
		background:white;
	}
	#pics{
		width:100%;
		min-height:70%;
		background:red;
	}
	#details{
		width:100%;
		height:30%;
		font-size:9px;
	}
	#addform input,select{
		display:block;
		margin-left:20%;
		margin-bottom: 2%;
	}
	#addform label{
		margin-left:20%;

	}
	#addform input,select{
		display:block;
		margin-left:20%;
		width:30%;
		height:6vh;
		border-radius:6px;
	}
	#greetings{
		position:absolute;
		margin-left: 90%;
		top:0%;
		color:white;
	}
	#greetings a{

	
		color:white;
	}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
		<a href="activebooking.php">Bookings</a>
		<a href="tenants.php">Waiting List</a>
		<a href="Landlordportal.php" >Add Appartment</a>
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


   <div id="child">
             



		
          

  </div>

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
		  
	</script>
</body>
</html>