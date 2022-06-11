<?php  
session_start();
include("connection.php");
include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{   
echo "<script>window.alert('you have to Login First');</script>";    echo "<script>window.location.href='index.php'</script>";
	
}
 $query ="SELECT * FROM `petty_cash`";  
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
	  <div style="margin-left:16%">
            
           <div class="container" style="width:900px;">  
                  
                <h3 align="center">Petty Cash Data</h3>                 
                <br />  
                <form method="post" action="export_Petty_cash.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Cash Received Amount</th>  
                               <th >Cash in hand</th>  
                               <th >Date</th>  
                               <th >Voucher No</th>  
                               <th >Reasons to spend</th>  
                               <th >Rupees spend</th>  
                               <th >Total (remaining cash in hand</th>  
                               <th >by whom</th>  
                               <th >Photo</th>    
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
						  <?php $cpn=$row[9];?>
                               <td><?php echo $row[0]; ?></td>  
                               <td><?php echo $row[1]; ?></td>  
                               <td><?php echo $row[2]; ?></td>  
                               <td><?php echo $row[3]; ?></td>  
                               <td><?php echo $row[4]; ?></td>  
                               <td><?php echo $row[5]; ?></td>  
                               <td><?php echo $row[6]; ?></td>  
                               <td><?php echo $row[7]; ?></td>  
                               <td><?php echo $row[8]; ?></td>
						<?php  echo "<td  align='center'><img src='Petty_cash/".$cpn."' width=250px  height=250px style=float:center></td>";?>
							   
                                
							   
 
                                 
                                 
 
                                
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