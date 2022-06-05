<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
     include("connection.php");
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID','DATE OF ENQUIRY','Name of the Child','DOB of Child','Gender','Father Name','Mother Name','Mode of Enquiry','Entered in Ekidzee','Class','Requirement Discription','Mobile 1','Mobile 2','EMAIL','Society Name','Address 1','Address 2','How did you come to know of KIDZEE?','Father Occupation','Mother Occupation ','Father Highest Qualification','Mother Highest Qualification','Convered to Admission','1 - Follow up Date','1 - Follow up Remarks','2 - Follow up Date','2 - Follow up Remarks','3 - Follow up Date','3 - Follow up Remarks','4 - Follow up Date','4 - Follow up Remarks','5 - Follow up Date','5 - Follow up Remarks'   ));  
       $query ="SELECT * FROM `enquiry_step1`";    
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  