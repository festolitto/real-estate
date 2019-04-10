<!DOCTYPE html>
<html>
<head>
	         <script src="jquery-3.2.1.min.js"></script>
             <script src="validate.js"></script>
             <?php ob_start();?>
	<style type="text/css">
	<title></title>
	<style type="text/css">

	#fail{
    color:red;
    text-align: center;
    font-weight: bold;
  }
  #success{
    color:green;
    text-align:center;
    font-weight: bold;
  }
   #info{
    color:orange;
    text-align: center;
    font-weight: bold;

   }
   .lgform{
	position:absolute;
	height:50vh;
	width:30%;
	background:#f0f0f0;
	margin-left:37%;
	margin-top:2vh;
	opacity:0.9;
	display:none;
	z-index: 1000;
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
	height:90vh;
	width:35%;
	background:#f0f0f0;
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
	body{
		background: red;
		min-height: 100vh;
	}
</style>
</head>
<body>
	<script>
	$(document).ready(function(){
						 
						    $("#tenantregfm").validate({
								rules:{
									  refno:{
										  required:true,
										  minlength:7,
										  maxlength:8,
										  digits:true
								
									  },
									  fname:{
										  required:true,
										  minlength:3,
										  maxlength:10
										  
										  
									  },
									  lname:{
										  required:true,
										  minlength:3,
										  maxlength:10
										  
									  },
									  id:{
										  required:true,
										  minlength:7,
										  maxlength:8,
										  digits:true
								
									  },
									    phone:{
										  required:true,
										  minlength:10,
										  maxlength:14,
										  digits:true
									  },
									    uname:{
										  required:true,
										  email:true
								
									  },
									    pass:{
										  required:true,
										  minlength:8
										  
								
									  },
									    cpass:{
										  required:true,
										  minlength:8,
										  equalTo:pass1
								
									  },
									
								},
								messages:{
									   cpass:{
										   equalTo:"password Mismatch!"
										   },
										   
										   uname:{
											     email:"Enter valid Email"
											   }
                                       										   
								}
							});
						   
					  });
       
      

   </script>
	<?php
     SESSION_START();
     include('connection.php');

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
				  $query="insert into tenant values('$id','$fname','$lname','$phone','$username','$pass','TXNQ001')";
				  $result=mysqli_query($conn,$query);
				  if($result){
					  echo'<div id="success">registered succefully<a href="home.php">Login</a></div>';
					  header('location:home.php');
				  }
				  else{
					  echo'<style>
					            #tenantregform{ 
                                     display:none;
					            }	       
					       </style>

					  <div id="fail">Registration Failed</div>
					  
					  <div id="tenantregform1" class="regform1">
		               <form method="POST">
		                 <div id="top"><p>Tenant Registration</p></div>
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                 <label>Phone</label><input type="tel" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
		                 <input type="submit" value="Sign UP" name="tenantregbtn">
		               </form>  
		              &nbsp &nbsp Already Registered? <a href="tenantlogin.php"><button>Login Here</button></a>
		           </div>
					  ';
				  }
			}
			else{
				echo'<style>
					            #tenantregform{ 
                                     display:none;
					            }	       
					       </style>

				<div id="fail">Password Mismatch</div>
				     <div id="tenantregform1" class="regform1">
		               <form method="POST">
		                 <div id="top"><p>Tenant Registration</p></div>
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                 <label>Phone</label><input type="tel" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
		                 <input type="submit" value="Sign UP" name="tenantregbtn">
		               </form>  
		              &nbsp &nbsp Already Registered? <a href="tenantlogin.php"><button>Login Here</button></a>
		           </div>
				
				';
			}
			}
			else{
				echo'<style>
					            #tenantregform{ 
                                     display:none;
					            }	       
					       </style>

				<div id="fail">User with the same ID/Email already exist</div>
				     <div id="tenantregform1" class="regform1">
		               <form method="POST">
		                 <div id="top"><p>Tenant Registration</p></div>
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" required>
		                 <label>Phone</label><input type="tel" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
		                 <input type="submit" value="Sign UP" name="tenantregbtn">
		               </form>  
		              &nbsp &nbsp Already Registered? <a href="tenantlogin.php"><button>Login Here</button></a>
		           </div>';
				
			}
				  
		    }
   if(isset($_POST['register'])){
  
    header('location:tenanregister.php');

  }

   if(isset($_POST['tenantloginbtn'])){
				$tusername=$_POST['tusername'];
				$tpass=$_POST['tpass'];
				
				$query4="select * from tenant where username='$tusername' and password='$tpass'";
				$result4=mysqli_query($conn,$query4);
				$row4=mysqli_fetch_array($result4);
				$rowcheck4=mysqli_num_rows($result4);
				if($rowcheck4>0){
					$_SESSION['user']=$row4['id'];	
					header('location:viewhouses.php');

				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
				}
			}

			 if(isset($_POST['tenantloginbtnhome'])){
				$tusername=$_POST['tusername'];
				$tpass=$_POST['tpass'];
				$apid=$_POST['apid'];
				
				$query4="select * from tenant where username='$tusername' and password='$tpass'";
				$result4=mysqli_query($conn,$query4);
				$row4=mysqli_fetch_array($result4);
				$rowcheck4=mysqli_num_rows($result4);
				if($rowcheck4>0){
					$_SESSION['user']=$row4['id'];	
					header('location:viewhouses.php');

				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
				}
			}
			if(isset($_POST['tloginbtnhome'])){
				$tusername=$_POST['tusername'];
				$tpass=$_POST['tpass'];
				$apid=$_POST['apid'];
				$query4="select * from tenant where username='$tusername' and password='$tpass'";
				$result4=mysqli_query($conn,$query4);
				$row4=mysqli_fetch_array($result4);
				$rowcheck4=mysqli_num_rows($result4);
				if($rowcheck4>0){
					$_SESSION['user']=$row4['id'];	
					$_SESSION['success']=$apid;
					header('location:book1.php');



				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
				}
			}
?>

</body>
</html>

