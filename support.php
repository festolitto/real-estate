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
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #8D8741;
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
#adminportal{
  font-size: 22px;
  color:white;
  margin-right: 7%;
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
   #suspendbtn{
    height:5vh;
    width:100%;
    border: none;
    border-radius: 4px;
    border:none;
    background: #4DBB49;
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


</style>
</head>
<body>


  <div id="portal">
        <div id="portalnav">
            <div class="topnav" id="myTopnav">
                <a id="adminportal">Admin Portal</a>
                <a href="adminbookings.php">Bookings</a>
                <a href="admin.php">Active Aparments</a>
                <a href="adminsuspend.php" >Suspended Apartments</a>
                <div id="active"><a href="support.php" >Support</a></div>
             
                

                <div id="session">Hello Admin<br><a href="logout.php">LOGOUT</a></div>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>

         <?php
           if(isset($_POST['sorted'])){
            $id=$_POST['id'];
            $sql="update contact set status='Seen' where id='$id'";
            $resql=mysqli_query($conn,$sql);
            if($sql){
              echo'<div id="success">Customer served</div>';

            }
           }

           $query1="select * from contact where status='unseen'";
           $result1=mysqli_query($conn,$query1);
           $rowcheck1=mysqli_num_rows($result1);
           if($rowcheck1>0){
                echo'<table class="table border" id="ltable"><tr id="header"><th colspan="5"><h2>Customer Support</h2></th></tr><tr><th>FULL NAME</th><th>PHONE</th><th>EMAIL</th><th>MESSAGE</th><th>ACTION</th></tr>';
             while($row1=mysqli_fetch_array($result1)){
              echo'<tr>
                      <td>'.$row1["firstname"].' '.$row1['lastname'].'</td>
                      <td>'.$row1["phone"].'</td>
                      <td>'.$row1["email"].'</td>
                      <td>'.$row1["message"].'</td>
                      <td><form method="POST"><input style="display:none;"type="text" name="id"value="'.$row1["id"].'"><input type="submit" name="sorted" value="Served"></form></td>

                   </tr>';


             }
             echo'</table>';
           }
           else{
            echo'<div id="info">You currently have no customer queries</div>';
           }
           if(isset($_POST['sorted'])){
            $id=$_POST['id'];
            $sql="update contact set status='Seen' where id='$id'";
            $resql=mysqli_query($conn,$sql);
            if($sql){
              echo'';

            }
           }
        ?>
    
  </div>
</body>
</html>