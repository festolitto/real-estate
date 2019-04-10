<!DOCTYPE html>
<html>
<head>
  <title>Active Bookings</title>
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
           if(!isset($landlord)){
            header('location:home.php');

           }

           $query="select l.firstname as firstname,ap.apartmentname as apname,ap.apartmentid as apid from landlord l join apartment ap on(l.id=ap.landlord) where id='$landlord'";
           $result=mysqli_query($conn,$query);
           $row=mysqli_fetch_array($result);
           $apname=$row['apname'];
           $apid=$row['apid'];


        
           $sql="select  now() as now,firstname from landlord where id='$landlord'";
           $sqlres=mysqli_query($conn,$sql);
           $rowsql=mysqli_fetch_array($sqlres);
           $firstname=$rowsql['firstname'];
           $now=$rowsql['now'];





         ob_start();
       ?>
<style>

    


 

</style>
</head>
<body id="activebody">


  <div id="portal" cass="col-md-10">
        <div id="portalnav">
            <div class="topnav" id="myTopnav">
                    <div id="tenantportal" style="float: left; color:white;"><h3>Landlord Portal</h3></div>
                    <div id="active"><a href="activebooking.php">Bookings</a></div>
                    <a href="tenantswaiting.php">Waiting List</a>
                    <a href="tenants.php" >My Tenants</a>
                    <a href="history.php" >Tenants History</a>
                    <a href="Addapartment.php" >Add Appartment</a>
                    <a href="editapartment.php" >Edit Apartment</a>
                    <h2 style="float:left; color:#4CBB17;">Urithi Online House Boooking</h2>
                
                <div id="session">Hello <?php echo$firstname?><br><a href="logout.php">LOGOUT</a></div>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        <form method="POST" class="selectapform">
          <label>Apartment Name</label><select name="apname">
                                        <?php 
                                          $sqlap="select * from apartment where landlord='$landlord'";
                                          $sqlres=mysqli_query($conn,$sqlap);
                                          while($rowap=mysqli_fetch_array($sqlres)){
                                            echo'<option>'.$rowap['apartmentname'].'</option>';
                                          }
                                          
                                        ?>
                                      </select>
         
          <input type="submit" name="select" value="VIEW" >

        </form>
        <?php

           if(isset($_POST['checkedin'])){
            $oid=$_POST['oid'];
             
            $query4="select commitment from orders where orderid='$oid'";
            $res4=mysqli_query($conn,$query4);
            $row4=mysqli_fetch_array($res4);
            $commitment4=$row4['commitment'];

            if(!$commitment4){
              echo'<div id="fail">Tenant Has not paid Deposit</div>';

            }
            else{

            $query2="update orders set status='checkedin',checkindate='$now' where orderid='$oid'";
            $res2=mysqli_query($conn,$query2);
            if($res2){
              echo'<div id="success">Checked In Successfully</div>';
            }
            else{
              echo'<div id="fail">Check In Failed</div>';
            }
          }
           }
           if(isset($_POST['select'])){
            $apname=$_POST['apname'];
           
           $query3="select o.orderid as orderid, o.transactioncode as transactioncode, concat(t.firstname,' ',t.lastname) as fullname,t.phone as phone,ap.apartmentname apname,o.bookingdate as bookingdate,o.datein as datein,o.commitment as commitment from orders o join tenant t on(o.customerid=t.id) join apartment ap on(o.apartmentid=ap.apartmentid) join landlord l on(ap.landlord=l.id) where l.id='$landlord' and o.status='allocated' and ap.apartmentid='$apid'";
           $result2=mysqli_query($conn,$query3);
           $rowcheck1=mysqli_num_rows($result2);
           if($rowcheck1>0){
           	    echo'<table class="table border" id="ltable"><tr id="header"><th colspan="9"><h2>'.$apname.' apartment Active Booking</h2></th></tr><tr><th>ORDERID</th><th>TENANT NAME</th><th>TENANT PHONE</th><th>APARTMENT</th><th>BOOKING DATE</th><th>REPORTING DATE</th><th>AMOUNT PAID</th><th>TRANSACTION CODE</th><th>ACTION</th></tr>';
	           while($row2=mysqli_fetch_array($result2)){
	           	echo'<tr>
	           	        <td>'.$row2["orderid"].'</td>
	           	        <td id="tenant">'.$row1["fullname"].'</td>
	           	        <td>'.$row2["phone"].'</td>
	           	        <td>'.$row2["apname"].'</td>
	           	        <td>'.$row2["bookingdate"].'</td>
	           	        <td>'.$row2["datein"].'</td>
                      <td>'.$row2["commitment"].'</td>
                      <td>'.$row2["transactioncode"].'</td>


                      <td><form method="POST"><input id="oid" type="text" name="oid" value="'.$row1['orderid'].'"><input id="checkedinbtn"type="submit" name="checkedin" value="Checked In"></form></td>


	           	     </tr>';


	           }
	           echo'</table>';
           }
           else{
           	echo'<div id="info">You currently have no active bookings for '.$apname.'</div>';
           }
         }
         else{
          $query1="select o.orderid as orderid,o.transactioncode as transactioncode, concat(t.firstname,' ',t.lastname) as fullname,t.phone as phone,ap.apartmentname apname,o.bookingdate as bookingdate,o.datein as datein,o.commitment as commitment from orders o join tenant t on(o.customerid=t.id) join apartment ap on(o.apartmentid=ap.apartmentid) join landlord l on(ap.landlord=l.id) where l.id='$landlord' and o.status='allocated' and ap.apartmentid='$apid'";
           $result1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($result1);
           if($rowcheck1>0){
                echo'<table class="table border" id="ltable"><tr id="header"><th colspan="9"><h2>'.$apname.' apartment Active Booking</h2></th></tr><tr><th>ORDERID</th><th>TENANT NAME</th><th>TENANT PHONE</th><th>APARTMENT</th><th>BOOKING DATE</th><th>REPORTING DATE</th><th>AMOUNT PAID</th><th>TRANSACTION CODE</th><th>ACTION</th></tr>';
             while($row1=mysqli_fetch_array($result1)){
              echo'<tr>
                      <td>'.$row1["orderid"].'</td>
                      <td id="tenant">'.$row1["fullname"].'</td>
                      <td>'.$row1["phone"].'</td>
                      <td>'.$row1["apname"].'</td>
                      <td>'.$row1["bookingdate"].'</td>
                      <td>'.$row1["datein"].'</td>
                      <td>'.$row1["commitment"].'</td>
                      <td>'.$row1["transactioncode"].'</td>

                      <td><form method="POST"><input id="oid" type="text" name="oid" value="'.$row1['orderid'].'"><input id="checkedinbtn"type="submit" name="checkedin" value="Checked In"></form></td>


                   </tr>';


             }
             echo'</table>';
           }
           else{
            echo'<div id="info">You currently have no active bookings for '.$apname.'</div>';
           }
         }
        ?>
       
  </div>
</body>
</html>