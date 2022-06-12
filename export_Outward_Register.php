<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=outward_register.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID','Date of Courier Sent','Courier Sent By','Courier Receiver Location','Courier Receiver Name','Courier Name','Courier Tracking Number','Approx Couier Content','Courier Sent Amount','Entery in Physical Register',   ));  
       $query ="SELECT * FROM `outward_register`";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  