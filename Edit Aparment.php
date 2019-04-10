<!DOCTYPE html>
<html>
<head>
  <title>Houses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}
#landlordportal{
  font-size: 22px;
  color:white;
  margin-right: 12%;
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
body{
  background: #f0f0f0;
}
#portal{
min-height: 90vh;
background: white;
border:solid 1px aqua;
margin:4%;
margin-top: 1%;
}
#portalnav{
  width:100%;
  min-height:7vh;
  }
  #session{
   float: right;
   color:white
  }
  #addform{
  	width: 50%;
  	margin-left: 25%;
  	border: solid 1px black;
    margin-top: 2%;
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
		margin-left:4%;
		width:90%;
		height:6vh;
		border-radius:6px;
	}
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
   #top{
    background: #116466;
    color: white;
    height:8vh;
    margin-top: -2%;
    margin-bottom:2%;
    text-align: center;
   }
   #top h4{
    padding-top: 2%;
   }
   #active a{
    height:11vh; 
    background: #116466;
   }

</style>
</head>
<body>


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
				   $type=$_POST['type'];
				   $photo1=$_POST['photo1'];
				   $photo2=$_POST['photo2'];
				   $photo3=$_POST['photo3'];

           $query4="update apartment set apartmentname='$apname',location='$loc',price='$price',houses='$number',type='$type',photo1='$photo1',photo2='$photo2',photo3='$photo3'";
           $resquery4=mysqli_fetch_array($conn,$resquery4);
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
		       <label>Price</label><input type="number" name="price" value="<?php echo$rowedit['Price']?>">
			   <label>Type</label><select name="type" required>
                                    <option><?php echo$rowedit['type']?></option>
			                              <option>Single</option>
			                              <option>Bed Sitter</option>
			                              <option>One Bedroom</option>
			                              <option>Two Bedroom</option>
			                              <option>Three Bedroom</option>
			                      </select>
		       <label>Upload Photos of the Apartment</label><input type="file" name="photo1" value="<?php echo$rowedit['photo1']?>">
			                                                <input type="file" name="photo2" value="<?php echo$rowedit['photo2']?>">
															<input type="file" name="photo3" value="<?php echo$rowedit['photo3']?>">
			  <input type="submit" name="post" value="POST">
											
		 </form>

        </div>
    
  </div>
</body>
</html>