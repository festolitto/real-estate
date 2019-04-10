<!DOCTYPE html>
<html>
<head>
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
	
	
	
}
.regform1{
	height:100%;
	width:35%;
	background:#ffffff;
	margin-left:32.5%;
	margin-top:2vh;
	
	
	
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
       include('landlordsession.php');
	?>
</head>
<body>
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
		  &nbsp &nbsp  Already Registered? <a href="landlordlogin.php"><button>Login Here</button></a>
		</div>

</body>
</html>