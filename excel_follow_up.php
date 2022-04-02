<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	$follow_up="Follow up";
 $query ="SELECT * FROM `enquiry_step1` WHERE `convert_enq` ='$follow_up' ORDER BY `enquiry_step1`.`NO` DESC";  
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
           
           <div class="container" style="width:900px;">  
                
                <h3 align="center">Counselor Diary Follow Up</h3>                 
                <br />  
                <form method="post" action="export_follow_up.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                                <th width="5%">ID</th>  
                     
                               <th width="25%">Name of the Child</th>  
                                
                               <th width="35%">Gender</th>  
                               <th width="10%">Father's Name</th>  
                               <th width="20%">Mother's Name</th>  
                               <th width="5%">Guardian's Name </th>  
                               
                               <th width="5%">Class. </th>  
                               
                               <th width="5%">Mobile 1 </th>  
                               <th width="5%">Mobile 2 </th>  
                                
                               <th width="5%">Society Name </th>  
                               <th width="5%">How did you come to know of KIDZEE?: </th>  
                               <th width="5%">Father's Occupation  </th>  
                               <th width="5%">Mother's Occupation   </th>  
                               <th width="5%">Father's Highest Qualification  </th>  
                               <th width="5%">Mother's Highest Qualification  </th>  
                               <th width="5%">Converted to Admission  </th>  
                               
                               


                               <th width="5%">1 - Follow up Date</th>  
                               <th width="5%">1 - Follow up Remarks </th>  
                               <th width="5%">2 - Follow up Date </th>  
                               <th width="5%">2 - Follow up Remarks </th>  
                               <th width="5%">3 - Follow up Date </th>  
                               <th width="5%">3 - Follow up Remarks </th>  
                               <th width="5%">4 - Follow up Date </th>  
                               <th width="5%">4 - Follow up Remarks </th>  
                               <th width="5%">5 - Follow up Date </th>  
                               <th width="5%">5 - Follow up Remarks </th>  
                                 
\
 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                             
							   <td><a href="Enquiry_Update2.php?userid=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>  

                               
                               <td><?php echo $row[2]; ?></td>  
                                
                               <td><?php echo $row[4]; ?></td>  
                               <td><?php echo $row[5]; ?></td>  
                               <td><?php echo $row[6]; ?></td>  
                               <td><?php echo $row[7]; ?></td>  
                               
                               <td><?php echo $row[9]; ?></td>  
                                
                               <td><?php echo $row[11]; ?></td>  
                               <td><?php echo $row[12]; ?></td>  
                               
                               <td><?php echo $row[14]; ?></td>  
                               
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
                               <td><?php echo $row[31]; ?></td>  
                               <td><?php echo $row[32]; ?></td>   
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  