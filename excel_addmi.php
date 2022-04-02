<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	  session_start();
include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{   
echo "<script>window.alert('you have to Login First');</script>";    echo "<script>window.location.href='index.php'</script>";
	
}
 $query ="SELECT * FROM `add` ORDER BY admission_id DESC";  
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
                <h2 align="center"></h2>  
                <h3 align="center">Student Data</h3>                 
                <br />  
                <form method="post" action="export_addmi.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="5%">Name of Child</th>  
                               <th width="5%">New/Rollover/Re-join</th>  
                               <th width="25%">Session</th>  
                               <th width="35%">Accounting Year</th>  
                               <th width="35%">Kidzee Enrollment No</th>  
                               <th width="10%">Gender</th>  
                               <th width="20%">Class</th>  
                               <th width="5%">Form Fee </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Form no. </th>  
                               <th width="5%">Bill Cum Receipt No. </th>  
                               <th width="5%">Indent No </th>  
                               <th width="5%">Kit ordered </th>  
                               <th width="5%">Kit Handed Over </th>  
                               <th width="5%">Admission Confirmed Date </th>  
                               <th width="5%">No. of Hours Comitted for Day care </th>  
                               <th width="5%">No. of Installments Comitted </th>  
                               <th width="5%">Stake Rate Fee </th>  
                               <th width="5%">No. of Month for ES </th>  
                               <th width="5%">Discount </th>  
                               <th width="5%">Transaction Date of 1st Installment </th>  
                               <th width="5%">1st Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>
							   <th width="5%">Transaction Date of 2nd Installment </th>  
                               <th width="5%">2nd Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>	
							   <th width="5%">Transaction Date of 3rd Installment </th>  
                               <th width="5%">3rd Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>
							   <th width="5%">Transaction Date of 4th Installment </th>  
                               <th width="5%">4th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>
							   <th width="5%">Transaction Date of 5th Installment </th>  
                               <th width="5%">5th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>							   
							   <th width="5%">Transaction Date of 6th Installment </th>  
                               <th width="5%">6th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>							   
							   <th width="5%">Transaction Date of 7th Installment </th>  
                               <th width="5%">7th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>							   
							   <th width="5%">Transaction Date of 8th Installment </th>  
                               <th width="5%">8th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>							   
							   <th width="5%">Transaction Date of 9th Installment </th>  
                               <th width="5%">9th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>							   
							   <th width="5%">Transaction Date of 10th Installment </th>  
                               <th width="5%">10th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>
							   <th width="5%">Transaction Date of 11th Installment </th>  
                               <th width="5%">11th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>
							   <th width="5%">Transaction Date of 12th Installment </th>  
                               <th width="5%">12th Installment Amount </th>  
                               <th width="5%">Mode of Payment </th>  
                               <th width="5%">Cash/Cheque/Online Amount We received </th>  
                               <th width="5%">Cheque/online No </th>  
                               <th width="5%">Bill Cum Receipt No </th>							   
                               <th width="5%">Date</th>							   
                               <th width="5%">Cheque/Online</th>							   
                               <th width="5%">Cheque/Online Transaction No</th>							   
                               <th width="5%">Refund Amount</th>							   
                               <th width="5%">Cheque Dishonoured Number</th>							   
                               <th width="5%">Penalty Amount</th>							   
                               <th width="5%">Cheque Dishonoured Informed Parent Date</th>							   
                               <th width="5%">Next Dishonoured Amount</th>							   
                               <th width="5%">Mode of Payment for Dishonoured case</th>							   
                               <th width="5%">Cash/Cheque/Online Amount for dishonoured case</th>							   
                               <th width="5%">Bill Cum Receipt No for dishonoured case</th>							   
                               <th width="5%">Remarks</th>							   
                               <th width="5%">Pending</th>							   
                               <th width="5%">Child Photo</th>							   
                               <th width="5%">Father's Photo</th>							   
                               <th width="5%">Mother's Photo</th>							   
                               <th width="5%">Doc 1</th>							   
                               <th width="5%">Doc 2</th>							   
                               <th width="5%">Doc 3</th>							   
                               							   
							     

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
					
                     ?>  
                          <tr>  
						  <td><a href="Update_admission1.php?userid=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>
                                 
                                 
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
                               <td><?php echo $row[33]; ?></td>  
                               <td><?php echo $row[34]; ?></td>  
                               <td><?php echo $row[35]; ?></td>  
                               <td><?php echo $row[36]; ?></td>  
                               <td><?php echo $row[37]; ?></td>  
                               <td><?php echo $row[38]; ?></td>  
                               <td><?php echo $row[39]; ?></td>  
                               <td><?php echo $row[40]; ?></td>  
                               <td><?php echo $row[41]; ?></td>  
                               <td><?php echo $row[42]; ?></td>  
                               <td><?php echo $row[43]; ?></td>  
                               <td><?php echo $row[44]; ?></td>  
                               <td><?php echo $row[45]; ?></td>  
                               <td><?php echo $row[46]; ?></td>  
                               <td><?php echo $row[47]; ?></td>  
                               <td><?php echo $row[48]; ?></td>  
                               <td><?php echo $row[49]; ?></td>  
                               <td><?php echo $row[50]; ?></td>  
                               <td><?php echo $row[51]; ?></td>  
                               <td><?php echo $row[52]; ?></td>  
                               <td><?php echo $row[53]; ?></td>  
                               <td><?php echo $row[54]; ?></td>  
                               <td><?php echo $row[55]; ?></td>  
                               <td><?php echo $row[56]; ?></td>  
                               <td><?php echo $row[57]; ?></td>  
                               <td><?php echo $row[58]; ?></td>  
                               <td><?php echo $row[59]; ?></td>  
                               <td><?php echo $row[60]; ?></td>  
                               <td><?php echo $row[61]; ?></td>  
                               <td><?php echo $row[62]; ?></td>  
                               <td><?php echo $row[63]; ?></td>  
                               <td><?php echo $row[64]; ?></td>  
                               <td><?php echo $row[65]; ?></td>  
                               <td><?php echo $row[66]; ?></td>  
                               <td><?php echo $row[67]; ?></td>  
                               <td><?php echo $row[68]; ?></td>  
                               <td><?php echo $row[69]; ?></td>  
                               <td><?php echo $row[70]; ?></td>  
                               <td><?php echo $row[71]; ?></td>  
                               <td><?php echo $row[72]; ?></td>  
                               <td><?php echo $row[73]; ?></td>  
                               <td><?php echo $row[74]; ?></td>  
                               <td><?php echo $row[75]; ?></td>  
                               <td><?php echo $row[76]; ?></td>  
                               <td><?php echo $row[77]; ?></td>  
                               <td><?php echo $row[78]; ?></td>  
                               <td><?php echo $row[79]; ?></td>  
                               <td><?php echo $row[80]; ?></td>  
                               <td><?php echo $row[81]; ?></td>  
                               <td><?php echo $row[82]; ?></td>  
                               <td><?php echo $row[83]; ?></td>  
                               <td><?php echo $row[84]; ?></td>  
                               <td><?php echo $row[85]; ?></td>  
                               <td><?php echo $row[86]; ?></td>  
                               <td><?php echo $row[87]; ?></td>  
                               <td><?php echo $row[88]; ?></td>  
                               <td><?php echo $row[89]; ?></td>  
                               <td><?php echo $row[90]; ?></td>  
                               <td><?php echo $row[91]; ?></td>  
                               <td><?php echo $row[92]; ?></td>  
                               <td><?php echo $row[93]; ?></td>  
                               <td><?php echo $row[94]; ?></td>  
                               <td><?php echo $row[95]; ?></td>  
                               <td><?php echo $row[96]; ?></td>  
                               <td><?php echo $row[97]; ?></td>  
                               <td><?php echo $row[98]; ?></td>  
                               <td><?php echo $row[99]; ?></td>  
                               <td><?php echo $row[100]; ?></td>  
                               <td><?php echo $row[101]; ?></td>  
                               <td><?php echo $row[102]; ?></td>  
                               <td><?php echo $row[103]; ?></td>  
                               <td><?php echo $row[104]; ?></td>  
                               <td><?php echo $row[105]; ?></td>  
                                <td><a href="http://localhost/kidzee/image/<?php echo $row[115]; ?>" class="w3-bar-item w3-button w3-bar-block">Image</a></td>
                                <td><a href="http://localhost/kidzee/image/<?php echo $row[116]; ?>" class="w3-bar-item w3-button w3-bar-block">Image</a></td>
                                <td><a href="http://localhost/kidzee/image/<?php echo $row[117]; ?>" class="w3-bar-item w3-button w3-bar-block">Image</a></td>
                                <td><a href="http://localhost/kidzee/child_doc/<?php echo $row[118]; ?>" class="w3-bar-item w3-button w3-bar-block">Document</a></td>
                               <td><a href="http://localhost/kidzee/doc/<?php echo $row[119]; ?>" class="w3-bar-item w3-button w3-bar-block">Document</a></td>
                               <td><a href="http://localhost/kidzee/doc/<?php echo $row[120]; ?>" class="w3-bar-item w3-button w3-bar-block">Document</a></td>
                              
                               
                                 
 
                                
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