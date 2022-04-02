<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
 $query ="SELECT * FROM `payment`";  
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
		   <h2>Payments View</h2>
		   </div>
		   <br>
		   <br> 
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered" width=100%>  
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
                               <td><?php echo $row[9]; ?></td>  
                               <td><?php echo $row[10]; ?></td>  
                               <td><?php echo $row[11]; ?></td>  
                               <td><?php echo $row[12]; ?></td>  
                               <td><?php echo $row[13]; ?></td>  
                               <td><?php echo $row[14]; ?></td>  
                               <td><?php echo $row[15]; ?></td>  
                               <td><?php echo $row[16]; ?></td>  
                                 
                               <td><?php echo "<img src='http://localhost/kidzee/Petty_cash/".$row[17]."' width=250px  height=250px style=float:center>"; ?></td>  
								
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  