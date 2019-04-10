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
           include('timeout.php');
           include('landlordsession.php');
           $landlord=$_SESSION['username'];
           if(!isset($landlord)){
            header('location:home.php');

           }

           $query="select l.firstname as firstname,ap.apartmentname as apname from landlord l join apartment ap on(l.id=ap.landlord) where id='$landlord'";
           $result=mysqli_query($conn,$query);
           $row=mysqli_fetch_array($result);
           $apname=$row['apname'];
        
           $sql="select  now() as now,firstname from landlord where id='$landlord'";
           $sqlres=mysqli_query($conn,$sql);
           $rowsql=mysqli_fetch_array($sqlres);
           $firstname=$rowsql['firstname'];
           $now=$rowsql['now'];
           

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
  margin-right: 5%;
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
   color:orange;
  }
  tr:nth-child(odd){
    background: #f0f0f0;

  }
   th{
    text-align: left;
    color: white;
    background: #116466;
  }
  #header th{
    text-align: center;
    color: white;
    background: #116466;
  }

  #header{
    background: #116466;
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
   #allocatebtn{
    height:5vh;
    width:100%;
    border: none;
    border-radius: 4px;
    background: green;
    color:white;
   }
   #oid{
    display: none;
   }
   #active a{
    height:11vh; 
    background: #116466;
   }
   #ltable{
    width: 100%;
   }
   .selectapform{
       margin-left:20%;
       margin-top: 2vh;
       margin-bottom: 2vh;
   }
   .selectapform select{
    height:6vh;
    width:30%;
    border-radius: 4px;
    
   }
   .selectapform input{
    height:5.5vh;
    width:15%;
    border:none;
    color:white;
    background:#008ECC;
    border-radius: 3px;
  }


</style>
</head>
<body>


  <div id="portal">
        <div id="portalnav">
            <div class="topnav" id="myTopnav">
                <a id="landlordportal">Landlord Portal</a>
                <a href="activebooking.php">Bookings</a>
                <div id="active"><a href="tenantswaiting.php">Waiting List</a></div>
                <a href="tenants.php" >My Tenants</a>
                <a href="history.php" >Tenants History</a>
                <a href="Addapartment.php" >Add Appartment</a>
                <a href="editapartment.php" >Edit Apartment</a>
                
                

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
           if(isset($_POST['allocate'])){
            $oid=$_POST['oid'];

            $queryvacancies="select * from orders where orderid=$oid";
            $resvacancies=mysqli_query($conn,$queryvacancies);
            $rowvacancies=mysqli_fetch_array($resvacancies);
            $apid=$rowvacancies['apartmentid'];

            $queryspace="select apartmentname,(houses -occupied) as space,location,type,price,apartmentid,photo1,photo1,photo3 from apartment where apartmentid=$apid";
            $resspace=mysqli_query($conn,$queryspace);
            $rowspace=mysqli_fetch_array($resspace);
            $space=$rowspace['space'];

            if($space<1){
              echo'<div id="fail">The Apartment Is Full</div>';

            }
            else{
            $query2="update orders set status='allocated',commitment=NULL,allocationdate=now() where orderid='$oid'";
            $res2=mysqli_query($conn,$query2);

            $query3="update apartment set occupied=occupied+1 where apartmentid='$apid'";
            $res3=mysqli_query($conn,$query3);
            if($res2){
              echo'<div id="success">Allocated Successfully</div>';
            }
            else{
              echo'<div id="fail">Allocation Failed</div>';
            }
          }
           }
           if(isset($_POST['select'])){
            $apname=$_POST['apname'];

           $query1="select o.orderid as orderid, concat(t.firstname,' ',t.lastname) as fullname,t.phone as phone,ap.apartmentname apname,o.bookingdate as bookingdate,o.datein as datein from orders o join tenant t on(o.customerid=t.id) join apartment ap on(o.apartmentid=ap.apartmentid) join landlord l on(ap.landlord=l.id) where l.id='$landlord' and o.status='waiting' and ap.apartmentname='$apname' order by orderid asc";
           $result1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($result1);
           if($rowcheck1>0){
                echo'<table class="table border" id="ltable"><tr id="header"><th colspan="7"><h2>'.$apname.' Apartment Waiting List</h2></th></tr><tr><th>ORDERID</th><th>TENANT NAME</th><th>TENANT PHONE</th><th>APARTMENT</th><th>BOOKING DATE</th><th>REPORTING DATE</th><th>ACTION</th></tr>';
             while($row1=mysqli_fetch_array($result1)){
              echo'<tr>
                      <td>'.$row1["orderid"].'</td>
                      <td id="tenant">'.$row1["fullname"].'</td>
                      <td>'.$row1["phone"].'</td>
                      <td>'.$row1["apname"].'</td>
                      <td>'.$row1["bookingdate"].'</td>
                      <td>'.$row1["datein"].'</td>
                      <td><form method="POST"><input id="oid" type="text" name="oid" value="'.$row1['orderid'].'"><input id="allocatebtn"type="submit" name="allocate" value="Allocate"></form></td>


                   </tr>';


             }
             echo'</table>';
           }
           else{
            echo'<div id="info">You currently have no tenants on waiting list for '.$apname.'</div>';
           }
         }
         else{
          $query1="select o.orderid as orderid, concat(t.firstname,' ',t.lastname) as fullname,t.phone as phone,ap.apartmentname apname,o.bookingdate as bookingdate,o.datein as datein from orders o join tenant t on(o.customerid=t.id) join apartment ap on(o.apartmentid=ap.apartmentid) join landlord l on(ap.landlord=l.id) where l.id='$landlord' and o.status='waiting' and ap.apartmentname='$apname' order by orderid asc";
           $result1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($result1);
           if($rowcheck1>0){
                echo'<table class="table border" id="ltable"><tr id="header"><th colspan="7"><h2>'.$apname.' Apartment Waiting List</h2></th></tr><tr><th>ORDERID</th><th>TENANT NAME</th><th>TENANT PHONE</th><th>APARTMENT</th><th>BOOKING DATE</th><th>REPORTING DATE</th><th>ACTION</th></tr>';
             while($row1=mysqli_fetch_array($result1)){
              echo'<tr>
                      <td>'.$row1["orderid"].'</td>
                      <td id="tenant">'.$row1["fullname"].'</td>
                      <td>'.$row1["phone"].'</td>
                      <td>'.$row1["apname"].'</td>
                      <td>'.$row1["bookingdate"].'</td>
                      <td>'.$row1["datein"].'</td>
                      <td><form method="POST"><input id="oid" type="text" name="oid" value="'.$row1['orderid'].'"><input id="allocatebtn"type="submit" name="allocate" value="Allocate"></form></td>


                   </tr>';


             }
             echo'</table>';
           }
           else{
            echo'<div id="info">You currently have no tenants on waiting list for '.$apname.'</div>';
           }
         }
        ?>
    
  </div>
</body>
</html>