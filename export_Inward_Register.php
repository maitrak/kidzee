<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "kidzee");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID','Date of Courier Received','Courier From','Courier Coming from Location','Courier For','Courier Name','Courier Tracking Number','Approx Couier Content','Received BY','Entery in Physical Register',   ));  
       $query ="SELECT * FROM `inward_register`";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  