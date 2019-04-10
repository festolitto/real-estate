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
   <script>
      function printContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
      }
   </script>
</head>
<body id="adminbookingsbody">


  <div id="portal">
        <div id="portalnav">
            <div class="topnav" id="myTopnav">
                <a id="adminportal">Admin Portal</a>
                <div id="active"><a href="adminbookings.php">Bookings</a></div>
                <a href="admin.php">Active Apartments</a>
                <a href="adminsuspend.php" >Suspended Apartments</a>
                <a href="support.php" >Support</a>
                
                

                <div id="session">Hello Admin<br><a href="logout.php">LOGOUT</a></div>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        <form method="POST" id="filterform">
          <label>From</label><input type="date" name="from"><label>To</label><input type="date" name="to"><input type="submit" name="generate" value="Generate">
        </form>
         <?php
           if(isset($_POST['generate'])){
            $from=$_POST['from'];
            $to=$_POST['to'];

           $query1="select o.orderid as orderid, concat(t.firstname,' ',t.lastname) as fullname,t.phone as phone,ap.apartmentname apname,ap.location as location,o.bookingdate as bookingdate,o.datein as datein from orders o join tenant t on(o.customerid=t.id) join apartment ap on(o.apartmentid=ap.apartmentid) join landlord l on(ap.landlord=l.id) where o.status='allocated' and o.bookingdate between '$from' and '$to'";
           $result1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($result1);
           if($rowcheck1>0){;?>
                <button onclick="printContent('bookingreport')" name="bookin">PRINT REPORT</button>
               <?php echo'<div id="bookingreport"><table class="table border" id="ltable"><tr id="header"><th colspan="7"><h2> Active Booking</h2></th></tr><tr><th>ORDERID</th><th>TENANT NAME</th><th>TENANT PHONE</th><th>APARTMENT</th><th>APARTMENT</th><th>BOOKING DATE</th><th>REPORTING DATE</th></tr>';
             while($row1=mysqli_fetch_array($result1)){
              echo'<tr>
                      <td>'.$row1["orderid"].'</td>
                      <td id="tenant">'.$row1["fullname"].'</td>
                      <td>'.$row1["phone"].'</td>
                      <td>'.$row1["apname"].'</td>
                      <td>'.$row1["location"].'</td>
                      <td>'.$row1["bookingdate"].'</td>
                      <td>'.$row1["datein"].'</td>
                 </tr>';


             }
             echo'</table></div>';
           }
           else{
            echo'<div id="info">You currently have no active bookings</div>';
           }
         }
         else{
          $query1="select o.orderid as orderid, concat(t.firstname,' ',t.lastname) as fullname,t.phone as phone,ap.apartmentname apname,ap.location as location,o.bookingdate as bookingdate,o.datein as datein from orders o join tenant t on(o.customerid=t.id) join apartment ap on(o.apartmentid=ap.apartmentid) join landlord l on(ap.landlord=l.id) where o.status='allocated'";
           $result1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($result1);
           if($rowcheck1>0){;?>
                <button onclick="printContent('bookingreport2')" name="bookin">PRINT REPORT</button>
               <?php
                echo'<div id="bookingreport2"><table class="table border" id="ltable"><tr id="header"><th colspan="7"><h2> Active Booking</h2></th></tr><tr><th>ORDERID</th><th>TENANT NAME</th><th>TENANT PHONE</th><th>APARTMENT</th><th>LOCATION</th><th>BOOKING DATE</th><th>REPORTING DATE</th></tr>';
             while($row1=mysqli_fetch_array($result1)){
              echo'<tr>
                      <td>'.$row1["orderid"].'</td>
                      <td id="tenant">'.$row1["fullname"].'</td>
                      <td>'.$row1["phone"].'</td>
                      <td>'.$row1["apname"].'</td>
                      <td>'.$row1["location"].'</td>
                      <td>'.$row1["bookingdate"].'</td>
                      <td>'.$row1["datein"].'</td>
                      


                   </tr>';


             }
             echo'</table></div>';
           }
           else{
            echo'<div id="info">You currently have no active bookings</div>';
           }

         }
        ?>
    
  </div>
   
</body>
</html>