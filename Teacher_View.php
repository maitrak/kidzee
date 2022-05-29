<?php  
$connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
 $query ="SELECT * FROM `teacher`";  
 $result = mysqli_query($connection, $query);  
   session_start();
include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
	
}
 ?>  

 <!DOCTYPE html>  
 <html>  
      <head>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
	  <div style="margin-left: 16%;">
           <br /><br />  
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Name of The Teacher</th>  
                               <th >Father's Name</th>  
                               <th >Mother's Name</th>  
                               <th >Spouse Name</th>  
                               <th >Society Name</th>  
                               <th >Correspondence Address</th>  
                               <th >Mobile Nuber 1</th>  
                               <th >Mobile Nuber 2</th>  
                               <th >Mobile Nuber 3</th>  
                               <th >Permanent Address</th>  
                               <th >PAN No</th>  
                               <th >Name As on Cheque</th>  
                               <th >Bank Name</th>  
                               <th >Bank Account No</th>  
                               <th >IFSC</th>  
                               <th >MICR</th>  
                               <th >2 Passport size Photographs</th>  
                               <th >Photo ID Proof<</th>  
                               <th >Address Proof</th>  
                               <th >10th Certificate</th>  
                               <th >12th Certificate</th>  
                               <th >Graduation</th>  
                               <th >Post Graduation</th>  
                               <th >Diploma</th>  
                               <th >Diploma Other</th>  
                               <th >Achivements</th>  
                               <th >Cheque Submitted </th>  
                               <th >Date Of Join</th>  
                               <th >Salary Per Month</th>  
                               <th >Remarks</th>  
                               <th >PDF</th>  
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                               <td ><?php echo $row[1]; ?></td>  
                               <td><?php echo $row[2]; ?></td>  
                               <td><?php echo $row[3]; ?></td>  
                               <td><?php echo $row[4]; ?></td>  
                               <td><?php echo $row[5]; ?></td>  
                               <td><?php echo $row[6]; ?></td>  
                               <td><?php echo $row[7]; ?></td>  
                               <td><?php echo $row[8]; ?></td>  
                               <td><?php echo $row[9]; ?></td>  
                               <td><?php echo $row[10]; ?></td>  
                               <td><?php echo $row[11]; ?></td>  
                               <td><?php echo $row[12]; ?></td>  
                               <td><?php echo $row[13]; ?></td>  
                               <td><?php echo $row[14]; ?></td>  
                               <td><?php echo $row[15]; ?></td>  
                               <td><?php echo $row[16]; ?></td>  
                               <td><?php echo $row[17]; ?></td>  
                               <td><?php echo $row[18]; ?></td>  
                               <td><?php echo $row[19]; ?></td>  
                               <td><?php echo $row[20]; ?></td>  
                               <td><?php echo $row[21]; ?></td>  
                               <td><?php echo $row[22]; ?></td>  
                               <td><?php echo $row[23]; ?></td>  
                               <td><?php echo $row[24]; ?></td>  
                               <td><?php echo $row[25]; ?></td>  
                               <td><?php echo $row[26]; ?></td>  
                               <td><?php echo $row[27]; ?></td>  
                               <td><?php echo $row[28]; ?></td>  
                               <td><?php echo $row[29]; ?></td>  
                               <td><?php echo $row[30]; ?></td>  
                               <td>
								<a href="http://localhost/kidzee/Teacher/<?php echo $row[31]; ?>" class="w3-bar-item w3-button w3-bar-block">PDF</a>
                                </td>
 
								
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
           </div>  
      </body>  
 </html>  