<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

             <script src="jquery-3.2.1.min.js"></script>
             <script src="validate.js"></script>
             <script src="validater.js"></script>

		      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	        <!-- google fonts -->
	        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	        <!-- link to css -->
	        <link rel="stylesheet" type="text/css" href="css/style.css">
		   
		   <?php
		       include('connection.php');
		       include('timeout.php');
		       
			
		   ?>

</head>
<body id="homebody">
	 <script >
     $(document).ready(function(){
						 
						    $(".regform").validate({
								rules:{
									accountid:{
										  required:true,
										  minlength:4,
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
									  unitprice:{
										  required:true,
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
									   cpassword:{
										   equalTo:"password Mismatch!"
										   },
										   
										   email:{
											     email:"Enter valid Email"
											   }
                                       										   
								}
							});
						   
					  });
			 
			

   </script>

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
  <h2 style="float:left; color:#4CBB17;">Urithi Online House Boooking</h2>
  <a href="adminlogin.php" id="admin">Admin</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
   <div id="welcome"><marquee><h3>Welcome To Urithi Online House Booking</h3></marquee></div>
        <div id="tenantloginform" class="lgform">
		  <form method="POST" action="tenantsession.php">
		   <div id="top"><p>Tenant Login</p></div>
		   <label>username</label><input type="text" name="tusername" placeholder="Enter email address" required>
		   <label>password</label><input type="password" name="tpass" placeholder="Enter Password" required>
		  
		   <input type="submit" value="Login" name="tenantloginbtn">
		  </form>
		  &nbsp &nbsp  No account? <button onclick="treg()">Register Here
		</div>
		
		<div id="landlordloginform" class="lgform" > 
		  <form method="POST" action="landlordsession.php">
		   <div id="top"><p>Landlord Login</p></div>
		   <label>username</label><input type="text" name="lusername" placeholder="Enter email address" required>
		   <label>password</label><input type="password" name="lpass" placeholder="Enter Password" required>
		  
		   <input type="submit" value="Login" name="landlordloginbtn">
		  </form>
		   &nbsp &nbsp  No account? <button onclick="lreg()">Register Here</button> 
		</div>
		
		<div id="landlordregform" class="regform" action="self">
		   <div id="top"><p>Landlord Registration</p></div>
		  <form method="POST">
		   <label>National ID</label><input type="text" name="id" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" placeholder="Enter National ID" required>
		   <label>First Name</label><input type="text" name="fname" placeholder="First name" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		   <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		   <label>Phone</label><input type="text" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" title="Please enter a 10 digit number" required>
		   <label>Username</label><input type="email" name="username" placeholder="please enter you current email address"  required>
		   <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		   <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
		   <input type="submit" value="Sign Up" name="landlordregbtn">
		  </form> 
		  &nbsp &nbsp  Already Registered? <button onclick="llog()">Login Here</button>
		</div>
		
		<div id="tenantregform" class="regform">
		  <form method="POST">
		   <div id="top"><p>Tenant Registration</p></div>
		   <label>National ID</label><input type="text" name="id" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" placeholder="Enter National ID" required>
		   <label>First Name</label><input type="text" name="fname" placeholder="First name" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		   <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		   <label>Phone</label><input type="text" name="phone" placeholder="Enter your phone number" title="Please enter a 10 digit number" required>
		   <label>Username</label><input type="email" name="username" placeholder="please enter you current email address"  required>
		   <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		   <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
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
				  $query="insert into tenant values('$id','$fname','$lname','$phone','$username','$pass','')";
				  $result=mysqli_query($conn,$query);
				  if($result){
					  echo'<div id="success">registered succefully</div>';
				  }
				  else{
					  echo'<div id="fail">Registration Failed</div>
					  
					  <div id="tenantregform1" class="regform1">
		               <form method="POST">
		                 <div id="top"><p>Tenant Registration</p></div>
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" title="Please enter a 10 digit number" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
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
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" title="Please enter a 10 digit number" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
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
		                 <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" title="Please enter a 10 digit number" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                 <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                 <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
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
		                            <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" title="Please enter a 10 digit number" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                            <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                            <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
		  
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
		                            <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" title="Please enter a 10 digit number" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                            <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                            <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
		  
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
		                            <label>National ID</label><input type="text" name="id" placeholder="Enter National ID" pattern="[0-9]{7,8}" title="Enter atleast 7 digits and atmost 8 digits only" value="'.$id.'" required>
		                 <label>First Name</label><input type="text" name="fname" placeholder="First name" value="'.$fname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Last Name</label><input type="text" name="lname" placeholder="Last Name" value="'.$lname.'" pattern="[A-Za-z]{1,}" title="only characters are allowed here" required>
		                 <label>Phone</label><input type="text" name="phone" placeholder="Enter Your phone number" value="'.$phone.'" title="Please enter a 10 digit number" required>
		                 <label>Username</label><input type="email" name="username" placeholder="please enter you current email address" value="'.$username.'" required>
		                            <label>Password</label><input type="password" name="pass" placeholder="Enter Password" required>
		                            <label>Confirm password</label><input type="password" name="cpass" placeholder="Re-enter your pssword" required>
		  
		  
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
 
   
   <!--slider-->
<div id="slide">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="slider1">
      <div class="carousel-caption">
          <h1 class="tag">Elegant Designs</h1>
         
      </div> 
      </div>     
    </div>

    <div class="item">
      <div class="slider2">
      <div class="carousel-caption">
          <h1 class="tag">Book from anywhere at your conviniece</h1>
         
      </div>   
      </div>   
    </div>
  
    <div class="item">
			<div class="slider3">
				<div class="carousel-caption">
				    <h1 class="tag">Hustle Free</h1>
				</div>      
			</div>
	</div>

	<div class="item">
			<div class="slider4">
				<div class="carousel-caption">
				    <h1 class="tag">Sweet sweet home!</h1>
				</div>      
			</div>
	</div>

	<div class="item">
			<div class="slider5">
				<div class="carousel-caption">
				    <h1 class="tag">Out of this world</h1>
				</div>      
			</div>
	</div>
	<div class="item">
			<div class="slider6">
				<div class="carousel-caption">
				    <h1 class="tag">Simply Amazing</h1>
				</div>      
			</div>
	</div>
	<div class="item">
			<div class="slider7">
				<div class="carousel-caption">
				    <h1 class="tag">What are you waiting for??</h1>
				</div>      
			</div>
	</div>
	<div class="item">
			<div class="slider8">
				<div class="carousel-caption">
				    <h1 class="tag">Find a beautiful home today!</h1>
				</div>      
			</div>
	</div>
	<div class="item">
			<div class="slider5">
				<div class="carousel-caption">
				    <h1 class="tag">Out of this world</h1>
				</div>      
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
</div>
<!--end slider-->
	
	<div id="detail">
<?php
echo'<div id="searchdiv"><form method="POST" id="search">
		 <label id="choose">Choose Location</label><select name="loc" id="selectloc" required>
			                                     <option>All</option>';
			                                     $queryloc="select distinct location from apartment";
			                                     $locresults=mysqli_query($conn,$queryloc);
			                                     while($rows=mysqli_fetch_array($locresults)){
                                                    echo'<option>'.$rows['location'].'</option>';
                                                }
			                               echo' </select><input type="submit" name="searchbtn" Value="search" id="searchbtn">
											
		 </form></div>
		 
   <div id="child">
        
		
		 
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
			                 	footer{
			                 		position:absolute;
			                 		top:400vh;
			                 		bottom:-259vh;
			                 	}
			                 	#slide{
			                 		display:none;
			                 	}
			                 	
					      </style>';

            if($area=='All'){
            	$query1="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3,apartmentdesc from apartment";
				$result1=mysqli_query($conn,$query1);
				echo'<div id="houses">';
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
							 <form method="POST" action="homelogin.php"><input id="apid" type="text" name="apid" value="'.$row1["apartmentid"].'"><input id="view" type="submit" name="view" value="CHECK IT OUT"></form>
							 <form method="POST" action="tenantlogin.php"><input id="apid" type="text" name="apid" value="'.$row1["apartmentid"].'"><input id="book" type="submit" name="book" value="BOOK NOW"></form>
							 
							 
				       </div>
			   
                    </div>';
					
				}

            }
            else{
			    $query1="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3,apartmentdesc from apartment where apstatus='active' and location='$area'";
				$result1=mysqli_query($conn,$query1);
				echo'<div id="houses">';
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
							 <form method="POST" action="homelogin.php"><input id="apid" type="text" name="apid" value="'.$row1["apartmentid"].'"><input id="book" type="submit" name="book" value="BOOK NOW"></form>
							 
							 
				       </div>
			   
                    </div>';
					
				}
			}
			}
				 echo'</div>
			  
       </div>
		    
		
			
	</div>
	<div id="searchdiv"><form method="POST" id="search">
		 <label id="choose">Choose Location</label><select name="loc" id="selectloc" required>
			                                     <option>All</option>';
			                                     $queryloc="select distinct location from apartment";
			                                     $locresults=mysqli_query($conn,$queryloc);
			                                     while($rows=mysqli_fetch_array($locresults)){
                                                    echo'<option>'.$rows['location'].'</option>';
                                                }
			                               echo' </select><input type="submit" name="searchbtn" Value="search" id="searchbtn">
											
		 </form></div>

	<div id="detail2" class="detailshome">';
	    

   echo'<div id="child">
        
		
		 
		  ';
		    
				

			    $queryz="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3,apartmentdesc from apartment where apstatus='active'";
				$resultz=mysqli_query($conn,$queryz);
				echo'<div class="houses">';
				while($rowz=mysqli_fetch_array($resultz)){
				  echo'<div class="col-md-3 all">
                         <div id="pics">
			                   <img src="images/'.$rowz["photo1"].'" height="100%" width="100%">
			            </div>
						
			            <div id="details">
						     <h4>'.$rowz['apartmentname'].' Apartments</h4>
				             <p><label>Location</label>&nbsp &nbsp &nbsp: '.$rowz["location"].'</p>
				             <p><label>Vacancies:</label> &nbsp: '.$rowz["vacancies"].'</p>
				             <p><label>Type:</label> &nbsp  &nbsp &nbsp &nbsp : '.$rowz["type"].'</p>
				             <p><label>Price:</label> &nbsp  &nbsp &nbsp &nbsp : '.$rowz["price"].'</p>
							 <form method="POST"><input id="apid" type="text" name="apid" value="'.$rowz["apartmentid"].'"><input id="view" type="submit" name="view" value="CHECK IT OUT"></form>
							 <form method="POST" action="homelogin.php"><input id="apid" type="text" name="apid" value="'.$rowz["apartmentid"].'"><input id="book" type="submit" name="book" value="BOOK NOW"></form>
							 
							 
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
					  $photo1=$output["photo1"];
					  $photo2=$output["photo2"];
					  $photo3=$output["photo3"];
					  $description=$output["apartmentdesc"];


					  $apname=$output['apartmentname'];
				   
					 echo'
					     <style>
						     #detail{
								 display:none;
							 }
							 #detail2{
								 display:none;
							 }
							 #slide{
							 display:none;
							}
						 </style>';
						// start of more details
		    echo'<div id="more">
						   <div id="picture">';
						        if(($photo1) &&(!$photo2) && (!$photo3)){
						      echo'
									<div class="container">
											<div id="apname">
											         <h2>'.$apname.' Apartments</h2>
											</div>  

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
									</div>
								  
								  ';
						   }
						   if(($photo1) &&($photo2) && (!$photo3)){
						      echo'
							     <div class="container">
		                                <div id="apname">
		                                           <h2>'.$apname.' Apartments</h2>
		                                </div>  

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
			                        <div id="apname">
			                                <h2>'.$apname.' Apartments</h2>
			                        </div>  

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
						     
					 echo' </div>
						   <div id="desc">
						     <h2>Description</h2>
							 <p>'.$description.'.</p>
						    
						     <form method="POST" action="homelogin.php" id="bookformbtn"><input id="apid" name="apid" type="text" value="'.$id.'"><input id="bookbtn" type="submit" name="book" value="Book now"></form><form method="POST" id="seeformbtn"><input id="viewbtn" type="submit" name="othersbtn" value="See Others"></form>
						   </div>
						 </div>
					 
					 ';
					 
					 
					 
					
					 
				 }
				
				 // end of more details
				 
			?>
   <!--  <footer>
	     <div id="social">
		      <i class="fab fa-facebook"></i><i class="fab fa-twitter-square"></i><i class="fab fa-instagram"></i><i class="fab fa-youtube-square"></i>
		 </div>
	
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