<?php
include('nav.php');
?>
<?php  
	include("connection.php");
 $query ="SELECT * FROM `outward_register` Order By Id DESC";  
 $result = mysqli_query($connection, $query);  
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
                 
                <h3 align="center">Outward Register</h3>                 
                <br />  
                <form method="post" action="export_Outward_Register.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="5%">Date of Courier Sent</th>  
                               <th width="25%">Courier Sent By</th>  
                               <th width="35%">Courier Receiver Location</th>  
                               <th width="35%">Courier Receiver Name</th>  
                               <th width="35%">Courier Name</th>  
                               <th width="35%">Courier Tracking Number</th>  
                               <th width="35%">Approx Couier Content</th>  
                               <th width="35%">Courier Sent Amoun</th>  
                               <th width="35%">Entery in Physical Register</th>  
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                               <td><?php echo $row[1]; ?></td>  
                               <td><?php echo $row[2]; ?></td>  
                               <td><?php echo $row[3]; ?></td>  
                               <td><?php echo $row[4]; ?></td>  
                               <td><?php echo $row[5]; ?></td>  
                               <td><?php echo $row[6]; ?></td>  
                               <td><?php echo $row[7]; ?></td>  
                               <td><?php echo $row[8]; ?></td>  
                               <td><?php echo $row[9]; ?></td>  
 
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  