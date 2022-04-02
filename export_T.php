<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "kidzee");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=techer.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array( 								'ID'  
                               ,'Name of The Teacher'  
                               ,'Fathers Name'  
                               ,'Mothers Name'  
                               ,'Spouse Name'  
                               ,'Society Name'  
                               ,'Correspondence Address'  
                               ,'Mobile Nuber 1'  
                               ,'Mobile Nuber 2'  
                               ,'Mobile Nuber 3'  
                               ,'Permanent Address'  
                               ,'PAN No'  
                               ,'Name As on Cheque'  
                               ,'Bank Name<'  
                               ,'Bank Account No'  
                               ,'IFSC'  
                               ,'MICR'  
                               ,'2 Passport size Photographs'  
                               ,'Photo ID Proof'  
                               ,'Address Proof'  
                               ,'10th Certificate'  
                               ,'12th Certificate'  
                               ,'Graduation'  
                               ,'Post Graduation'  
                               ,'Diploma'  
                               ,'Achivements'  
                               ,'Cheque Submitted'  
                               ,'Date Of Join'  
                               ,'Salary Per Month'  
                               ,'Remarks'    ));  
       $query ="SELECT * FROM `teacher`";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  