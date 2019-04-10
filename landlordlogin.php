<!DOCTYPE html>
<html>
<head>
	 <?php
       include('landlordsession.php');
	?>
	<title>Tenant Login</title>
	<style type="text/css">
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
	.lgform{
	height:50%;
	width:30%;
	background:#ffffff;
	margin-left:37%;
	margin-top:2vh;
	
	
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
	
</head>
</head>
<body>
	<div id="landlordloginform" class="lgform" > 
		  <form method="POST" action="landlordsession.php">
		   <div id="top"><p>Landlord Login</p></div>
		   <label>username</label><input type="text" name="lusername" placeholder="Enter email address" required>
		   <label>password</label><input type="password" name="lpass" placeholder="Enter Password" required>
		  
		   <input type="submit" value="Login" name="landlordloginbtn">
		  </form>
		   &nbsp &nbsp  No account? <a href="landlordregister.php"><button>Register Here</button></a> 
		</div>

</body>
</html>