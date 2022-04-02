<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "kidzee");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', ' Serial No', ' Enquiry No', ' Seeking Admission for', ' Date of birth', ' Gender ', 'If attending a preschool and class details', ' Name of Father ', 'Name of Mother ', 'Address', ' Phone Number', ' Email',  ' Education background of father', '  Education background of mother', ' Occupation of father', ' Occupation of mother', ' How did ou come to know of KIDZEE?'  ));  
      $query = "SELECT `Stud_Id`,`sname`, `Enquiry_no`, `admission`, `dob`, `gender`, `preschool`, `father`, `mother`, `addr`, `contact`, `email`, `Efather`, `Emother`, `Ofather`, `Omother`, `KIDZEE` FROM `enq`";  
  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  