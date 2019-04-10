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
<body id="editbody">


  <div id="portal">
        <div id="portalnav">
            <div class="topnav" id="myTopnav">
                <a id="landlordportal">landlord Portal</a>
                <a href="activebooking.php">Bookings</a>
                <a href="tenantswaiting.php">Waiting List</a>
                <a href="tenants.php" >My Tenants</a>
                <a href="history.php" >Tenants History</a>
                <a href="Addapartment.php" >Add Appartment</a>
                <div id="active"><a href="Edit Appartment.php" >Edit Appartment</a></div>

                
                

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
           $occupied=$_POST['occupied'];
				   $type=$_POST['type'];
           $desc=$_POST['desc'];

				  

           $query4="update apartment set apartmentname='$apname',location='$loc',price='$price',houses='$number',occupied=$occupied,type='$type',apartmentdesc='$desc' where apartmentname='$apname'";
           $resquery4=mysqli_query($conn,$query4);
           if($resquery4){
            echo'<div id="success">'.$apname. ' apartment updated successfully</div>';
           }
         else{
          echo'<div id="fail">Failed to update '.$apname.' apartment</div>';
         }
			   }
			   
			  
		   ?>
       <?php
         $query3="select * from apartment where landlord=$landlord";
         $resedit=mysqli_query($conn,$query3);
         $rowedit=mysqli_fetch_array($resedit);
       ?>
		<form method="POST" id="addform" >
           <div id="top"><h4>Add Appartment Form</h4></div>
		       <label>Apartment Name</label><input type="text" name="apname" value="<?php echo$rowedit['apartmentname']?>">
		       <label>Location</label><input type="text" name="loc" value="<?php echo$rowedit['location']?>">
		       <label>Number of Units</label><input type="number" name="number" value="<?php echo$rowedit['houses']?>">
           <label>Occupied</label><input type="number" name="occupied" value="<?php echo$rowedit['occupied']?>">
		       <label>Price Per Unit</label><input type="number" name="price" value="<?php echo$rowedit['price']?>">
			   <label>Type</label><select name="type" required>
                                    <option><?php echo$rowedit['type']?></option>
			                              <option>Single</option>
			                              <option>Bed Sitter</option>
			                              <option>One Bedroom</option>
			                              <option>Two Bedroom</option>
			                              <option>Three Bedroom</option>
			                      </select>
		       <label>Description</label><textarea name="desc" style="height:12vh;width: 94%; margin-left: 3%;"></textarea>
			  <input type="submit" name="post" value="POST">
											
		 </form>

        </div>
    
  </div>
</body>
</html>