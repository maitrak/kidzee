<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
 $query ="SELECT `Stud_Id`,`sname`, `Enquiry_no`,`sr_no`,`class`, `date`, `admission`, `dob`, `gender`, `preschool`, `father`, `mother`, `addr`, `contact`, `email`, `Efather`, `Emother`, `Ofather`, `Omother`, `KIDZEE`,`converted` FROM `enq`";  
 $result = mysqli_query($connection, $query);  
 ?>  
 <?php
include('nav.php');
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                
                <h3 align="center">Enquiry Form Excel</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
							   
                               <th width="5%">Name of Child</th>  
                               <th width="25%">Serial No</th>  
                               <th width="35%">Enquiry No</th>  
                               <th width="35%">Date</th>  
                               <th width="10%">Seeking Admission for:</th>  
                               <th width="20%">Date of birth</th>  
                               <th width="5%">Gender </th>  
                               <th width="5%">If attending a preschool and class details </th>  
                               <th width="5%">Name of Father </th>  
                               <th width="5%">Name of Mother </th>  
                               <th width="5%">Address </th>  
                               <th width="5%">Phone Number </th>  
                               <th width="5%">Email address</th>  
                               <th width="5%"> Education background of father </th>  
                               <th width="5%"> Education background of mother </th>  
                               <th width="5%">Occupation of father </th>  
                               <th width="5%">Occupation of mother</th>  
                               <th width="5%">How did ou come to know of KIDZEE?</th>  
                               <th width="5%">Converted</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               
							   <td><a href="Enquiry_Form.php?userid=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>  

                               <td><?php echo $row["sname"]; ?></td>  
                               <td><?php echo $row["sr_no"]; ?></td>  
                               <td><?php echo $row["Enquiry_no"]; ?></td>  
                               <td><?php echo $row["date"]; ?></td>  
                               <td><?php echo $row["admission"]; ?></td>  
                               <td><?php echo $row["dob"]; ?></td>  
                               <td><?php echo $row["gender"]; ?></td>  
                               <td><?php echo $row["preschool"]; ?></td>  
                               <td><?php echo $row["father"]; ?></td>  
                               <td><?php echo $row["mother"]; ?></td>  
                               <td><?php echo $row["addr"]; ?></td>  
                               <td><?php echo $row["contact"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td><?php echo $row["Efather"]; ?></td>  
                               <td><?php echo $row["Emother"]; ?></td>  
                               <td><?php echo $row["Ofather"]; ?></td>  
                               <td><?php echo $row["Omother"]; ?></td>  
                               <td><?php echo $row["KIDZEE"]; ?></td>  
                               <td><?php echo $row["converted"]; ?></td>  
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  