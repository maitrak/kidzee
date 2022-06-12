<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
     include("connection.php");
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=petty_cash.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID','Cash Received Amount','Cash in hand','Date','Voucher No','Reasons to spend','Rupees spend','Total (remaining cash in hand)','by whom','Photo Name'  ));  
       $query ="SELECT * FROM `petty_cash`";  
      $result = mysqli_query($connection, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  