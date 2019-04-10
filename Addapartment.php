<!DOCTYPE html>
<html>
<head>
  <title>Houses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- link to css -->
          <link rel="stylesheet" type="text/css" href="css/style.css">

         <script src="jquery-3.2.1.min.js">  </script>
         <script src="jquery.cycle.all.js" >  </script>
         <script src="cyclesSlider.js"     >  </script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

       <?php
           include('connection.php');
           include('timeout.php');
           include('landlordsession.php');
           $landlord=$_SESSION['username'];
           if(!isset($landlord)
         ){
            header('location:home.php');

           }

           $query="select * from landlord where id='$landlord'";
           $result=mysqli_query($conn,$query);
           $row=mysqli_fetch_array($result);
           $firstname=$row['firstname'];

         ob_start();
       ?>
<style>


</style>
</head>
<body id="addbody">


  <div id="portal">
        <div id="portalnav">
            <div class="topnav" id="myTopnav">
                <a id="landlordportal">landlord Portal</a>
                <a href="activebooking.php">Bookings</a>
                <a href="tenantswaiting.php">Waiting List</a>
                <a href="tenants.php" >My Tenants</a>
                <a href="history.php" >Tenants History</a>
                <div id="active"><a href="Addapartment.php" >Add Appartment</a></div>
                <a href="editapartment.php" >Edit Apartment</a>

                
                

                <div id="session">Hello <?php echo$firstname?><br><a href="logout.php">LOGOUT</a></div>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        <div>
        	<?php
			   if(isset($_POST['landlordloginbtn'])){
				$lusername=$_POST['lusername'];
				$lpass=$_POST['lpass'];
				
				$query5="select * from landlord where username='$lusername' and password='$lpass'";
				$result5=mysqli_query($conn,$query5);
				$row5=mysqli_fetch_array($result5);
				$rowcheck5=mysqli_num_rows($result5);
				$userid=$row5['id'];
				if($rowcheck5>0){
					$_SESSION["username"]=$userid;
					echo'<div id="success">Logged in successfully. Welcome '.$row5['firstname'].' of id number '.$_SESSION["username"].'!</div>';
					echo'<div id="greetings">Hello ' .$row5["firstname"].'<br><a href="home.php">LOGOUT</a></div>';
					
					
				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
					
				}
				if(!isset($_SESSION['username'])){
				   header('location:home.php');
			   }
				
			}
			 
		       if(isset($_POST['post'])){
				   $apname=$_POST['apname'];
				   $loc=$_POST['loc'];
				   $price=$_POST['price'];
				   $number=$_POST['number'];
				   $type=$_POST['type'];
				   $photo1=$_POST['photo1'];
				   $photo2=$_POST['photo2'];
           $photo3=$_POST['photo3'];
           $photo4=$_POST['photo4'];
				   $photo5=$_POST['photo5'];
           $desc=$_POST['desc'];


           $query1="select * from apartment where apartmentname='$apname' and location='$loc'";
           $res1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($res1);
				  
          if($rowcheck1<1){
				   $query="insert into apartment values('','$apname','$loc','$number','$price','$type','$photo1','$photo2','$photo3','','$landlord','active','$desc','$photo4','$photo5')";
				   $result=mysqli_query($conn,$query);
				   if($result){
					   echo'<div id="success">Apartment Posted Successfully</div>';
				   }
				   else{
					   echo'<div id="fail">Failed to post</div>';
				   }
         }
         else{
          echo'<div id="fail">An Apartment with the name '.$apname.' already exist in '.$loc.'</div>';
         }
			   }
			   
			  
		   ?>
		<form method="POST" id="addform" >
           <div id="top"><h4>Add Appartment Form</h4></div>
		       <label>Apartment Name</label><input type="text" name="apname" required>
		       <label>Location</label><input type="text" name="loc" required>
		       <label>Number Of Units</label><input type="number" name="number" required>
		       <label>Price Per Unit</label><input type="text" name="price" pattern=[0-9]{1,} title="enter valid amount"required>
			   <label>Type</label><select name="type" required>
			                              <option>Single</option>
			                              <option>Bed Sitter</option>
			                              <option>One Bedroom</option>
			                              <option>Two Bedroom</option>
			                              <option>Three Bedroom</option>
			                      </select>
		       <label>Upload Photos of the Apartment</label><input type="file" name="photo1" required>
			                                                <input type="file" name="photo2">
                                                      <input type="file" name="photo3">
                                                      <input type="file" name="photo4">
															                        <input type="file" name="photo5">
                              <label>Description</label><textarea name="desc" style="height:12vh;width: 94%; margin-left: 3%;"></textarea>
                              	  <input type="submit" name="post" value="POST">
											
		 </form>

        </div>
    
  </div>
</body>
</html>