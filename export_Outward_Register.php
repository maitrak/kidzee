<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "kidzee");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=petty_cash.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID','Date of Courier Sent','Courier Sent By','Courier Receiver Location','Courier Receiver Name','Courier Name','Courier Tracking Number','Approx Couier Content','Courier Sent Amount','Entery in Physical Register',   ));  
       $query ="SELECT * FROM `petty_cash`";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  