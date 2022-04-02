<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "kidzee");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=invoice.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Receipt No','Date','Student Name','Father Name','Class','Received payment for Rs','Amount in Words','Mode of Payment','Transaction Number','Date of Transaction','Bank'  ));  
       $query ="SELECT * FROM `invoice`";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  