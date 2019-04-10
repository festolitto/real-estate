<?php
		       include('connection.php');
               $querywaiting="select o.orderid as orderid,o.apartmentid as apartmentid,a.houses-a.occupied as vacancies from orders o join apartment a on(o.apartmentid=a.apartmentid) where o.status='waiting' and (a.houses-a.occupied)>0";
               $resultwaiting=mysqli_query($conn,$querywaiting);
               $rowcheck=mysqli_num_rows($resultwaiting);
               if($rowcheck<1){
                    
                   echo'</div>Space not available yet<div>';
               }
               else{
                    while ($rowwaiting=mysqli_fetch_array($resultwaiting)) {
                                   $orderid=$rowwaiting['orderid'];
                                   $apartmentid=$rowwaiting['apartmentid'];
                                   $vacancies=$rowwaiting['vacancies'];

                                   // $subq="select min(orderid) as oid from orders where status='waiting' and apartmentid=$apartmentid";
                                   // $ressubq=mysqli_query($conn,$subq);
                                   // $rowsubq=mysqli_fetch_array($ressubq);
                                   // $oid=$rowsubq['oid'];
                                   $sqli="select o.orderid as orderid,o.apartmentid as apartmentid,a.houses-a.occupied as vacancies from orders o join apartment a on(o.apartmentid=a.apartmentid) where o.status='waiting' and (a.houses-a.occupied)>0 and a.apartmentid='$apartmentid'";
                                   $ressqli=mysqli_query($conn,$sqli);
                                   $countsqli=mysqli_num_rows($ressqli);
                              if($countsqli>0){
                                   while ($rowsqli=mysqli_fetch_array($ressqli)) {
                                             $status="update orders set status='allocated' where orderid=min(orderid)";
                                             $resultwaiting=mysqli_query($conn,$status);
                                             if($resultwaiting){
                                             $occupied="update apartment set occupied=occupied+1 where apartmentid=$apartmentid";
                                             $resultswaiting=mysqli_query($conn,$occupied);
                                            }
                                   }
                              }
                    }
               }
		       
			
		   ?>