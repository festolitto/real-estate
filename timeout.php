<?php
  include('connection.php');
  $query1="update apartment set occupied=occupied-1 where apartmentid in (select apartmentid from orders where (now()-bookingdate)>=2592000 and status='allocated' and commitment is not null)";
  $res1=mysqli_query($conn,$query1);

  $query="update orders set status='timedout' where (now()-bookingdate)>=2592000 and status='allocated' and commitment is not null"; 
  $res=mysqli_query($conn,$query);
  
  $sql="select apartmentid,count(apartmentid) as number,orderid from orders where (now()-allocationdate)>=180 and status='allocated' and commitment is null GROUP by apartmentid";
  $res4=mysqli_query($conn,$sql);

  while($row4=mysqli_fetch_array($res4)){
  	      $number=$row4['number'];
          $orderid=$row4['orderid'];
  	      $apartment=$row4['apartmentid'];
		  $query2="update apartment set occupied=occupied-$number where apartmentid=$apartment";
		  $res=mysqli_query($conn,$query2);

		  $query3="update orders set status='timedout' where orderid=$orderid";
		  $res3=mysqli_query($conn,$query3);
 }
   
  
?>