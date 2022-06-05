<?php  
  include("connection.php");
 $query ="SELECT * FROM `petty_cash` Order By Id DESC";  
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
            
		   <div align=center>
		   <h2>Petty Cash View</h2>
		   </div>
		   <br>
		   <br>
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Cash Received Amount</th>  
                               <th >Previous Cash in hand</th>  
                               <th >Date</th>  
                               <th >Voucher No</th>  
                               <th >Reasons to spend</th>  
                               <th >Rupees spend</th>  
                               <th >New cash in hand</th>  
                               <th >by whom</th>  
                               <th >Photo</th>  
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                               <td ><?php echo $row[1]; ?></td>  
                               <td><?php echo $row[2]; ?></td>  
                               <td width=1000px><?php echo $row[3]; ?></td>  
                               <td><?php echo $row[4]; ?></td>  
                               <td><?php echo $row[5]; ?></td>  
                               <td><?php echo $row[6]; ?></td>  
                               <td><?php echo $row[7]; ?></td>  
                               <td><?php echo $row[8]; ?></td>  
                               <td><?php echo "<img src='Petty_cash/".$row[9]."' width=250px  height=250px style=float:center>"; ?></td>  
								
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  