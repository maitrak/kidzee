<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
     include("connection.php");
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=Payment.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID','Payee Name','Particulars/Details','Kaccha/Packka Bill','Bills No/Intent No','Receipt No','Voucher No','Date of Payment','Date of Transaction','Amount','Bank Transaction No/ATM Cash Withdrawal No','Bank','Cash','Discription','Aproval From','Aproval Date','Remarks/Explanation','Photo'  ));  
       $query ="SELECT * FROM `payment`";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  