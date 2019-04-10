<!DOCTYPE html>
<html>
<head>
  <?php
    include('connection.php');
  ?>
	<title>Contact US</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- link to css -->
          <link rel="stylesheet" type="text/css" href="css/style.css">
          
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	</style>

</head>
<body id="contactbody">
	<div class="topnav" id="myTopnav">
  <a href="home.php" >Home</a>
  <a href="about.php">About Us</a>
  <div id="active"><a href="contact.php">Contact Us</a></div>
  <h2 style="float:left; color:#4CBB17;">Urithi Online House Boooking</h2>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<?php
   if(isset($_POST['send'])){
         $fname=$_POST['fname'];
         $lname=$_POST['lname'];
         $phone=$_POST['phone'];
         $email=$_POST['email'];
         $message=$_POST['message'];

         $query="insert into contact values('','$fname','$lname','$phone','$email','$message','unseen')";
         $res=mysqli_query($conn,$query);
         if($res){
          echo'<div class="success">Thank you for contacting Us. We shall get back to you as soon as possible</div>';

         }
         else{
          echo'<div class="fail">Failed to send message</div>';
         }
   }
?>
<div class="contact">
    <form method="POST" class="contactform">
      <h3 style="text-align: center; font-weight: bold;">Contact Form</h3>
      <label>First Name</label><input type="type" name="fname" required>
      <label>Last Name</label><input type="type" name="lname" required>
      <label>Phone</label><input type="number" name="phone" required>
      <label>Email</label><input type="email" name="email" required>
      <label>Message</label><textarea name="message" placeholder="Type your message here" required></textarea>
      <input type="submit" name="send" value="SEND">


    </form>
</div>
 <footer>
	     <div id="social">
		      <i class="fab fa-facebook"></i><i class="fab fa-twitter-square"></i><i class="fab fa-instagram"></i><i class="fab fa-youtube-square"></i>
		 </div>
	
	</footer>
</body>
</html>