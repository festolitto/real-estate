<!DOCTYPE html>
<html>
<head>
	 <?php
       include('landlordsession.php');
	?>
	<title>Tenant Login</title>

	<!-- link to css -->
	        <link rel="stylesheet" type="text/css" href="css/style.css">
	        
	<style type="text/css">
		
	</style>
	
</head>
</head>
<body id="adminbody">
	<div id="landlordloginform" class="lgform" > 
		  <form method="POST" action="adminsession.php">
		   <div id="top"><p>Admin Login</p></div>
		   <label>username</label><input type="text" name="lusername" placeholder="Enter email address" required>
		   <label>password</label><input type="password" name="lpass" placeholder="Enter Password" required>
		  
		   <input type="submit" value="Login" name="landlordloginbtn">
		  </form>
		</div>

</body>
</html>