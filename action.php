<?php    session_start();
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
			
			
		?>