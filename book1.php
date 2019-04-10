<html>
  <?php
     include('connection.php'); 
     include('tenantsession.php');
      

     $cust_id=$_SESSION['user'];
     $apid=$_SESSION['success'];

     $queryap="select * from apartment where apartmentid='$apid'";
     $resap=mysqli_query($conn,$queryap);
     $rowap=mysqli_fetch_array($resap);
     $apartment=$rowap['apartmentname'];
     $roomtype=$rowap['type'];


     
     $querynow="select curdate() as now,date_add(curdate(),interval 30 day) as maxtime";
     $nowres=mysqli_query($conn,$querynow);
     $rownow=mysqli_fetch_array($nowres);
     $now=$rownow['now'];
     $maxtime=$rownow['maxtime'];

		$queryname="select * from tenant where id='$cust_id'";
		$resname=mysqli_query($conn,$queryname);
		$rowname=mysqli_fetch_array($resname);
		$name=$rowname['firstname'];

     if(!isset($_SESSION['user'])){
     	header('location:tenantlogin.php');
     }
   ob_start();
   


  ?>

   <head>
   	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   	<!-- link to css -->
	        <link rel="stylesheet" type="text/css" href="css/style.css">

     <title>Reservation</title>
	 <style>
	 

	 </style>
	
   </head>
   <body id="book1body">

	<div class="topnav" id="myTopnav">
	<div id="tenantportal" style="float: left; color:white;">Tenant Portal</div>
	<div id="active"><a href="viewhouses.php">View Houses</a></div>
	<a href="tenantbookings.php">My Booking</a>
	<a href="payment.php">Payment</a>
	<a href="tenanthistory.php">History</a>
	<h2 style="float:left; color:#4CBB17;">Urithi Online House Boooking</h2>

  <div id="session"><p>Welcome <?php echo$name ?></p><a href="logout.php">LOGOUT</a></div>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
       

       <?php
               // checking vacncies
                
				// end of checking vacncies

	       
	     
			  
			  $query="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3 from apartment where apartmentid=$apid";
			  $result=mysqli_query($conn,$query);
			  $row=mysqli_fetch_array($result);
			  $apname=$row['apartmentname'];
			  $roomt=$row['type'];
			  $vacancies=$row['vacancies'];


    //             $query3="select * from apartment where apartmentid=$apid";
				// $res3=mysqli_query($conn,$query3);
				// $output=mysqli_fetch_array($res3);
				// $vacancies=$output['vacancies'];
			 if($vacancies<1){
            	echo'<div id="full" class="full"><p>'.$apname. ' is Fully booked Do you Want to be on the waiting list?</p>
            	            <form method="POST">
            	                <input  id="apid" type="text" name="apname" value="'.$apname.'" placeholder="">
                                <input id="apid" type="text" name="apid" value="'.$apid.'" >
                                <input id="apid" type="text" name="room" value="'.$roomt.'" >
                                <input type="submit" name="yes" value="YES" id="yes"><input type="submit" name="no" value="NO" id="no">
                            </form>
                    </div>';

            }
            else{
                 echo'<form id="bookingform" class="bkform" method="POST">
						   <div id="top"><h3>House Booking Form</h3></div>
					       <label>Apartment Name</label><input type="text" name="apname" value="'.$apname.'" placeholder="">
					       <label>Room Type</label><input type="text" name="room" value="'.$roomt.'">
					       <label>Check In Date</label><input type="date" name="datein" MIN="'.$now.'" MAX="'.$maxtime.'" required>
					       <label>Payment Mode</label><input type="text" name="payment" value="M-PESA">
												   <input id="apid" type="text" name="apid" value="'.$apid.'" >
												   <input id="book" type="submit" name="bookbtn1" value="Proceed">
												   <a href="viewhouses.php"><div id="cancel">Cancel</div></a>
	                </form>';
			  
			}

		  

		  if(isset($_POST['book'])){
			  $apid=$_POST['apid'];
			  
			  $query1="select * from apartment where apartmentid=$apid";
			  $result1=mysqli_query($conn,$query1);
			  $row1=mysqli_fetch_array($result1);
			  $apname1=$row1['apartmentname'];
              
       echo'<div id="tenantloginform" class="lgform">

		      <form method="POST" action="tenantsession.php">
                  <div id="top"><p>Tenant Login</p></div>
		          <input type="text" id="apid" name="apid" value="'.$apid.'" class="apdetails">
		          <input type="text" id="apid" name="apname" value="'.$apname1.'" class="apdetails">

		          
		             <label>username</label><input type="text" name="tusername" placeholder="Enter email address" required>
		            <label>password</label><input type="password" name="tpass" placeholder="Enter Password" required>
		  
		           <input type="submit" value="Login" name="tenantloginbtnhome">
		      </form>
		            &nbsp &nbsp  No account? <button onclick="treg()">Register Here</button> &nbsp <button onclick="tforgot()">Forgot Password</button>
		   </div>';
		}
		 if(isset($_POST['booking'])){
			  $apid=$_POST['apid'];
			  $query1="select * from apartment where apartmentid=$apid";
			  $result1=mysqli_query($conn,$query1);
			  $row1=mysqli_fetch_array($result1);
			  $apname1=$row1['apartmentname'];
			  $roomtype=$row1['type'];
              
   echo'<form id="bookingform" method="POST">
			   <div id="top"><h3>House Booking Form</h3></div>
			   <input id="apid" type="text" name="customer" value="'.$cust_id.'" placeholder="">
		       <label>Apartment Name</label><input type="text" name="apname" value="'.$apname1.'" placeholder="">
		       <label>Room Type</label><input type="text" name="room" value="'.$roomtype.'">
		       <label>Check In Date</label><input type="date" name="datein" placeholder="Enter Your check in Date" MIN="'.$now.'" MAX="'.$maxtime.'" required>
		       <label>Payment Mode</label><input type="text" name="payment" placeholder="Enter prefer" value="M-PESA">
									   <input id="apid" type="text" name="apid" value="'.$apid.'" >
									   <input id="apid" type="text" name="cust_id" value="'.$cust_id.'" >
									   <input id="book" type="submit" name="bookbtn2" value="Proceed">
									   <a href="viewhouses.php"><div id="cancel">Cancel</div></a>
	    </form>

	    ';
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
					echo'<div id="success">Logged in successfully. Welcome '.$row4['firstname'].' of id number '.$_SESSION["username"].'!</div>';
					header('location:viewhouses.php');
					
				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
				}
			}
			 if(isset($_POST['tenantloginbtn1'])){
				$tusername=$_POST['tusername'];
				$tpass=$_POST['tpass'];
                $apid=$_POST['apid'];
				$apname1=$_POST['apname'];

				
				$query4="select * from tenant where username='$tusername' and password='$tpass'";
				$result4=mysqli_query($conn,$query4);
				$row4=mysqli_fetch_array($result4);
				$rowcheck4=mysqli_num_rows($result4);

				if($rowcheck4>0){
					$_SESSION['username']=$row4['id'];
					$cust_id=$_SESSION['user'];
					echo'<form id="bookingform" method="POST">
							<div id="top"><h3>House Booking Form</h3></div>
							<label>Apartment Name</label><input type="text" name="apname" value="'.$apname1.'" placeholder="">
							<label>Room Type</label><select name="room">
							                         <option>Single</option>
							                         <option>Bed Sitter</option>
							                         <option>One Bedroom</option>
							                         <option>two Bedroom</option>
							                         <option>three Bedroom</option>
							                   </select>
							<label>Check In Date</label><input type="date" name="datein" placeholder="Enter Your check in Date" MIN="'.$now.'" MAX="'.$maxtime.'" required>
							<label>Payment Mode</label><select name="payment" placeholder="Enter prefer">
							                      <option>M-Pesa</option>
							                      <option>Bank</option>
							                      <option>Visa</option>
							                      <option>T-Kash</option>

							                   </select>
							                   <input id="apid" type="text" name="cust_id" value="'.$cust_id.'" >
											   <input id="apid" type="text" name="apid" value="'.$apid.'" >
											   <input id="book" type="submit" name="bookbtn2" value="Proceed">
	                    </form>';
					
				}
				else{
					echo'<div id="fail">Invalid username/password. Log in denied</div>';
				}
			}
			
			  
		
	 
	      
		  
		  if(isset($_POST['bookbtn1'])){
			  $apid=$_POST['apid'];
			  $apname=$_POST['apname'];
			  $room=$_POST['room'];
			  $date=$_POST['datein'];
			  $payment=$_POST['payment'];
			  echo'<style>
			          .bkform{
			          	display:none;
			          }
			          .full{
			          	display:none;
			          }
			       </style>';
			 echo'<div class="agreement">
   	    	<h4>TERMS AND CONDITIONS</h4>
   	    	<ol> 
   	    		<li>If the Tenant is unable to take possession of the Rental Property premises, or vacates the Rental Property before the end of the term of tenancy, Tenant will still be responsible for paying the remainder of the rental payments and complying with the terms of this Agreement.</li>
				<li>Tenant will pay Landlord monthly rent payable in advance no later than the 5th day of every month.</li>
				<li>If Tenant fails to pay the rent in full before 5:00 p.m. on the 5th day of the month after the rent is due, Tenant will also pay the Landlord a late charge of ksh.500.</li>
				<li>Tenants will be required to hand in photocopies of identification documents i.e.national id,millitary id or passport .</li>
				<li>On booking,tenants are required to pay full deposit which will not be refundable if the tenant fails to show up within a month from the day of booking.</li>
				<li>Deposit will be refunded on the day of vacation if tenant leaves everything in good condition  .</li>

			</ol>
   	    	<form method="POST">		  
   	    	<div id="bookdetails">
   	    		<input type="text" name="apid" value="'.$apid.'">
   	    		<input type="text" name="apname" value="'.$apname.'">
   	    		<input type="text" name="room" value="'.$room.'">
   	    		<input type="text" name="datein" value="'.$date.'">
   	    		<input type="text" name="payment" value="'.$payment.'">
   	    		<input type="text" name="cust" value="'.$cust_id.'">
   	    	</div>
   	    		<input id="agreebtn" type="submit" name="agreement" value="I Agree">
   	    	</form>
   	    </div>';

			  
		  }
		 

          if(isset($_POST['complete'])){
		  	$apname=$_POST['apname'];
            $apid=$_POST['apid'];
            $room=$_POST['room'];
            $date=$_POST['datein'];
            $payment=$_POST['payment'];
            $code=$_POST['code'];
            $deposit=$_POST['commit'];
            echo'<style>
			          .bkform{
			          	display:none;
			          }

			         .full{
			          	display:none;
			          }
			   
			       </style>';
            
                $query4="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3,landlord from apartment where apartmentid=$apid";
				$res4=mysqli_query($conn,$query4);
				$output4=mysqli_fetch_array($res4);
				$vacancies4=$output4['vacancies'];
				$landlord=$output4['landlord'];

				$sql6="select * from tenant where id=$cust_id";
				$ressql6=mysqli_query($conn,$sql6);
				$rowsql6=mysqli_fetch_array($ressql6);
				$custcode=$rowsql6['transactioncode'];

                
            
             if($vacancies4<1){
                  $query2="insert into orders values('','$cust_id',$apid,'$room','$now',NULL,'$payment','waiting','','','','','')";
			      $result2=mysqli_query($conn,$query2);
			  if($result2){
			  	echo'<style>
			         .full{
			          	display:none;
			          }
			          </style>';
				  echo'<div id="success">You have successfully been listed in the waiting list of '.$apname.' Apartment <a href="viewhouses.php">Done</a>
				       </div>';

			  }
			  else{
				  echo'<div id="fail">Failed to reserve room</div>';
			  }
			}
			else{
				$query5="insert into orders values('','$cust_id',$apid,'$room','$now','$date','$payment','allocated','','','$deposit','$code','')";
			     $result2=mysqli_query($conn,$query5);


			     $query6="update apartment set occupied=occupied+1 where apartmentid='$apid'";
                 $res6=mysqli_query($conn,$query6);
			    if($result2){
				  echo'<div id="success">You have successfully been allocated a room in '.$apname.' Apartment <a href="viewhouses.php">Done</a>';?>
				      <button onclick="receipt()">GENERATE RECEIPT</button>
                 
				      <div id="receipt" style="background:white;width:40%;height:;">
				      	
                       <button onclick="printContent('receipt')">PRINT RECEIPT</button>
                       
				      	<?php
                       $qreceipt="select * from orders o join tenant t on(t.id=o.customerid) join apartment ap on(o.apartmentid=ap.apartmentid) where customerid='$cust_id' and bookingdate=(select max(bookingdate) from orders where customerid='$cust_id') and commitment is not null";
                       $resreceipt=mysqli_query($conn,$qreceipt);
                       $rowreceipt=mysqli_fetch_array($resreceipt); echo'<pre> 
                    <p>
                        Urithi Online Boooking,
                       	P.O Box 45657,
                       	Nairobi.


                   

		Customer Name   :'.$rowreceipt['firstname'].' '.$rowreceipt['lastname'].'
		Customer ID     :'.$rowreceipt['customerid'].' 
		APARTMENT NAME  :'.$rowreceipt['apartmentname'].' 
		ROOMTYPE      :'.$rowreceipt['roomtype'].' 
		BOOKING DATE    :'.$rowreceipt['bookingdate'].' 
		AMOUNT PAID     :'.$rowreceipt['commitment'].' 
		TRANSACTION CODE:'.$rowreceipt['transactioncode'].' 

                               </p>
                              </pre>';
				      	?>
				      </div>

				     <?php 
				       echo'</div>
				   <style>
				       .full{
			          	display:none;
			          }
			          </style>';

			  }
			  else{
				  echo'<div id="fail">Failed to reserve room</div>';
			  }
			}
         
          
		}

		  if(isset($_POST['bookbtn2'])){
			  $apid=$_POST['apid'];
			  $apname=$_POST['apname'];
			  $room=$_POST['room'];
			  $date=$_POST['datein'];
			  $payment=$_POST['payment'];
			  $custid=$_POST['cust_id'];

       echo'<div class="agreement">
   	    	<h4>TERMS AND CONDITIONS</h4>
   	    	<ol> 
   	    		<li>If the Tenant is unable to take possession of the Rental Property premises, or vacates the Rental Property before the end of the term of tenancy, Tenant will still be responsible for paying the remainder of the rental payments and complying with the terms of this Agreement.</li>
				<li>Tenant will pay Landlord monthly rent payable in advance no later than the 5th day of every month.</li>
				<li>If Tenant fails to pay the rent in full before 5:00 p.m. on the 5th day of the month after the rent is due, Tenant will also pay the Landlord a late charge of ksh.500.</li>
				<li>Tenants will be required to hand in photocopies of identification documents i.e.national id,millitary id or passport .</li>
				<li>On booking,tenants are required to pay full deposit which will not be refundable if the tenant fails to show up within a month from the day of booking.</li>
				<li>Deposit will be refunded on the day of vacation if tenant leaves everything in good condition  .</li>

			</ol>
   	    	<form method="POST">		  
   	    	<div id="bookdetails">
   	    		<input type="text" name="apid" value="'.$apid.'">
   	    		<input type="text" name="apname" value="'.$apname.'">
   	    		<input type="text" name="room" value="'.$room.'">
   	    		<input type="text" name="datein" value="'.$date.'">
   	    		<input type="text" name="payment" value="'.$payment.'">
   	    		<input type="text" name="cust" value="'.$cust_id.'">
   	    	</div>
   	    		<input id="agreebtn" type="submit" name="agreement" value="I Agree">



   	    	</form>
   	    </div>';
			  

		}

		if(isset($_POST['agreement'])){

            $apname=$_POST['apname'];
            $apid=$_POST['apid'];
            $room=$_POST['room'];
            $date=$_POST['datein'];
            $payment=$_POST['payment'];

            echo'<style>
			          .bkform{
			          	display:none;
			          }
			          .full{
			          	display:none;
			          }
			       </style>';

            $query4="select apartmentname,(houses -occupied) as vacancies,location,type,price,apartmentid,photo1,photo1,photo3 from apartment where apartmentid=$apid";
			$res4=mysqli_query($conn,$query4);
			$output4=mysqli_fetch_array($res4);
			$vacancies4=$output4['vacancies'];

            if($vacancies4>0){
            
        echo'<div class="mpesa">
   	   	   <img src="images/mpesa.jpg">
   	   	   <div class="steps">
   	   	   	  <ol>
   	   	   	  	<pre><li>Select ‘Pay Bill’ from your M-PESA menu</li>
   	   	   	  	<li>Enter the  ‘Business Number’ as follows 100100</li>
   	   	   	  	<li>Enter the ‘Account Number’ as your id number</li>
   	   	   	  	<li>Enter the amount indicated below.</li>
   	   	   	  	<li>Enter your M-PESA PIN.</li>
   	   	   	  	<li>Confirm that all the details are correct and press OK</li>
   	   	   	  	<li>Enter the transaction code from M-Pesa below</li></pre>
     	   	  </ol>
   	   	   </div>
   	   	   <form method="POST">
   	   	   	<div id="bookdetails">';
               $queryap="select * from apartment where apartmentid='$apid'";
				$resap=mysqli_query($conn,$queryap);
				$rowap=mysqli_fetch_array($resap);
				$apartid=$rowap['apartmentid'];
				$deposit=$rowap['price'];
				

				echo'<input type="text" name="apid" value="'.$apid.'">
				<input type="text" name="apname" value="'.$apname.'">
				<input type="text" name="room" value="'.$room.'">
				<input type="text" name="datein" value="'.$date.'">
				<input type="text" name="payment" value="'.$payment.'">
				<input type="text" name="commit" value="'.$deposit.'">

    	    </div>';

    	   
				
          
            
            echo'<div id=payment>
	   	   	   	<label>commitment Fee</label><input type="text" name="commit" value="'.$deposit.'" readonly>
	   	   	   	<label>Transaction Code</label><input type="text" name="code" required>
	   	   	</div>
	   	   	<input class="completebtn" type="submit" name="complete" value="complete">
	   	   	</form>
	   	   	   	<form method="POST">
	   	   	   	  <input type="submit" class="cancelbtn" name="cancel" value="cancel">
   	   	       </form>
   	   </div>';
   	   }
    	else{

    		$query2="insert into orders values('','$cust_id',$apid,'$room','$now','$date','$payment','waiting','','','','','')";
			      $result2=mysqli_query($conn,$query2);
			  if($result2){
				  echo'<div id="success">You have successfully been listed in the waiting list of '.$apname.' Apartment <a href="viewhouses.php">Done</a>
				       </div>';

			  }
			  else{
				  echo'<div id="fail">Failed to reserve room</div>';
			  }
    		
    	}


			  
		}

		if(isset($_POST['yes'])){
              $apid=$_POST['apid'];
			  $apname=$_POST['apname'];
			  $room=$_POST['room'];
			  echo'<style>
			  .full{
			          	display:none;
			          }
			          </style>';

			  echo'<form id="bookingform" method="POST">
						   <div id="top"><h3>House Booking Form</h3></div>
					       <label>Apartment Name</label><input type="text" name="apname" value="'.$apname.'" placeholder="">
					       <label>Room Type</label><input type="text" name="room" value="'.$room.'">
					       <div style="display:none;"><label>Check In Date</label><input type="date" name="datein" placeholder="Enter Your check in Date" ></div>
					       <label>Payment Mode</label><input type="text" name="payment" value="M-PESA">
												   <input id="apid" type="text" name="apid" value="'.$apid.'" >
												   <input id="book" type="submit" name="bookbtn1" value="Proceed">
												   <a href="viewhouses.php"><div id="cancel">Cancel</div></a>
	                </form>';
			 

                 

		}

		if(isset($_POST['no'])){
			header('location:viewhouses.php');

		}
		if(isset($_POST['cancel'])){
			header('location:viewhouses.php');

		}

	   ?>
    
    

<script>
	
	function receipt(){
		document.getElementById('receipt').style.display='block';
	}

   	  function printContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
      }



</script>




 </body>
</html>