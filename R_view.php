<?php  
  include("connection.php");
 $query ="SELECT * FROM `invoice`ORDER BY ID DESC";  
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
  
<form method="post" action="View_Receipt1.php">
	Enter Receipt No &nbsp&nbsp<input type="text" name="sid" required>
	
	<input type="submit" name="submit" value="View"><br><br><br><br>
</form>
           <br /><br />  
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered" width=100%>  
                          <tr>  
                               <th >Receipt No</th>  
                               <th >Date</th>  
                               <th >Student Name</th>  
                               <th >Father's Name</th>  
                               <th >Class</th>  
                               <th >Received payment for Rs</th>  
                               <th >Amount in Words</th>  
                               <th >Mode of Payment</th>  
                               <th >Transaction Number</th>  
                               <th >Date of Transaction</th>  
                                 
                                
                                 
                              
                             
                                 

 
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
                                
                                 
                                 
								
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  