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
</style>
<?php
    SESSION_START();
    include('connection.php');
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
					  echo'<style>
					            #landlordregform{ 
                                     display:none;
					            }	       
					       </style>

					  <div id="fail">Registration Failed</div>
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
		                  &nbsp &nbsp  Already Registered? <a href="landlordlogin.php"><button>Login Here</button></a>
		                </div>
					  ';
					  
					  
				  }
				  
		    }
			else{
				echo'<style>
					            #landlordregform{ 
                                     display:none;
					            }	       
					       </style>

				<div id="fail">Password Mismatch</div>
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
		                  &nbsp &nbsp  Already Regidtered? <a href="landlordlogin.php"><button>Login Here</button></a>
		                </div>
					  ';
			}
			}
			else{
				echo'<style>
					            #landlordregform{ 
                                     display:none;
					            }	       
					       </style>

				<div id="fail">A user with the same ID/Email already exist</div>
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
		                  &nbsp &nbsp  Already Regidtered? <a href="landlordlogin.php"><button>Login Here</button></a>
					  ';
				
			}
			}



			if(isset($_POST['landlordloginbtn'])){
				$lusername=$_POST['lusername'];
				$lpass=$_POST['lpass'];
				
				$query5="select * from admin where username='$lusername' and password='$lpass'";
				$result5=mysqli_query($conn,$query5);
				$row5=mysqli_fetch_array($result5);
				$rowcheck5=mysqli_num_rows($result5);
				$userid=$row5['id'];
				if($rowcheck5>0){
					$_SESSION["username"]=$userid;
					header('location:admin.php');
					echo'<div id="success">Logged in successfully. Welcome '.$row5['firstname'].' of id number '.$_SESSION["username"].'!</div>';
					
					
				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
					
				}
			}
?>