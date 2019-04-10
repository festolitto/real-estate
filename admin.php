<!DOCTYPE html>
<html>
<head>
  <title>Houses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- link to css -->
          <link rel="stylesheet" type="text/css" href="css/style.css">

   

       <?php
           include('connection.php');
           include('landlordsession.php');
           // $landlord=$_SESSION['username'];
           // if(!isset($landlord)){
           //  header('location:home.php');

           // }

           // $query="select l.firstname as firstname,ap.apartmentname as apname from landlord l join apartment ap on(l.id=ap.landlord) where id='$landlord'";
           // $result=mysqli_query($conn,$query);
           // $row=mysqli_fetch_array($result);
           // $apname=$row['apname'];
        
           // $sql="select  now() as now,firstname from landlord where id='$landlord'";
           // $sqlres=mysqli_query($conn,$sql);
           // $rowsql=mysqli_fetch_array($sqlres);
           // $firstname=$rowsql['firstname'];
           // $now=$rowsql['now'];
           

         ob_start();
       ?>
<style>



</style>
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="adminbody">


  <div id="portal">
        <div id="portalnav">
            <div class="topnav" id="myTopnav">
                <a id="adminportal">Admin Portal</a>
                <a href="adminbookings.php">Bookings</a>
                <div id="active"><a href="admin.php">Active Apartments</a></div>
                <a href="adminsuspend.php" >Suspended Apartments</a>
                <a href="support.php" >Support</a>

                

                <div id="session">Hello Admin<br><a href="logout.php">LOGOUT</a></div>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>

         <?php

           if(isset($_POST['suspend'])){
            $apartmentid=$_POST['apid'];
            $apartmentname=$_POST['apname'];

            $query="update apartment set apstatus='suspended' where apartmentid='$apartmentid'";
            $ressus=mysqli_query($conn,$query);
            
            if($ressus){
              echo'<div id="success">You have successfully suspended '.$apartmentname.'</div>';

            }
            else{
              echo'<div id="fail">Failed to suspend</div>';

            }

           }
           
          
           $query1="select ap.apartmentid as apid,ap.apartmentname as apname,ap.location as location,ap.houses as capacity,ap.houses-ap.occupied as vacancies,concat(l.firstname,' ',l.lastname) as landlordname,l.phone as phone,l.username as email from apartment ap join landlord l on(ap.landlord=l.id) where ap.apstatus='active'";
           $result1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($result1);
           if($rowcheck1>0){
                echo'<table class="table border" id="ltable"><tr id="header"><th colspan="9"><h2>All Apartments</h2></th></tr><tr><th>APARTMENTID</th><th>TAPARTMENTENANT NAME</th><th>LOCATION</th><th>LANDLORD NAME</th><th>PHONE</th><th>EMAIL</th><th>CAPACITY</th><th>VACANCIES</th><th>ACTION</th></tr>';
             while($row1=mysqli_fetch_array($result1)){
              echo'<tr>
                      <td>'.$row1["apid"].'</td>
                      <td>'.$row1["apname"].'</td>
                      <td>'.$row1["location"].'</td>
                      <td>'.$row1["landlordname"].'</td>
                      <td>'.$row1["phone"].'</td>
                      <td>'.$row1["email"].'</td>
                      <td>'.$row1["capacity"].'</td>
                      <td>'.$row1["vacancies"].'</td>
                      <td>
                         <form method="POST">
                            <input id="oid" type="text" name="apid" value="'.$row1['apid'].'">
                            <input id="oid" type="text" name="apname" value="'.$row1['apname'].'">
                            <input id="suspendbtn"type="submit" name="suspend" value="Suspend">
                          </form>
                     </td>


                   </tr>';


             }
             echo'</table>';
           }
           else{
            echo'<div id="info">You currently have no Active Apartments</div>';
           }
        ?>
    
  </div>
</body>
</html>