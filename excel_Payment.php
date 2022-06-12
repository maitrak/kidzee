<?php  
session_start();
include("connection.php");
include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{   
echo "<script>window.alert('you have to Login First');</script>";    echo "<script>window.location.href='index.php'</script>";
	
}
 $query ="SELECT * FROM `payment`";  
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
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Export Mysql Table Data to CSV file in PHP</h2>  
                <h3 align="center">Payment Data</h3>                 
                <br />  
                <form method="post" action="export_Payment.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered" style="width:100%">  
                          <tr>  
                               <th >ID</th>  
                               <th >Payee Name</th>  
                               <th >Particulars/Details</th>  
                               <th >Kaccha/Packka Bill</th>  
                               <th >Bills No/Intent No</th>  
                               <th >Receipt No</th>  
                               <th >Voucher No.</th>  
                               <th >Date of Payment</th>  
                               <th >Date of Transaction</th>  
                               <th >Amount</th>  
                               <th >Bank Transaction No/ATM Cash Withdrawal No</th>  
                               <th >Bank</th>  
                               <th >Cash</th>  
                               <th >Discription</th>  
                               <th >Aproval From</th>  
                               <th >Aproval Date</th>  
                               <th >Remarks/Explanation</th>  
                               <th >Photo_of_Bill/Receipt</th>    
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  <?php $cpn=$row[17];?>
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
							   <td><?php echo $row[10]; ?></td>  
                               <td><?php echo $row[11]; ?></td>  
                               <td><?php echo $row[12]; ?></td>  
                               <td><?php echo $row[13]; ?></td>  
                               <td><?php echo $row[14]; ?></td>  
                               <td><?php echo $row[15]; ?></td>  

                               <td><?php echo $row[16]; ?></td>  
                              
							   <?php  echo "<td  align='center' ><img src='Payment/".$cpn."' width=500px  height=500px ></td>";?>
						
 
                                 
                                 
 
                                
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