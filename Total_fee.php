<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
  
  session_start();
include('sidebar.php');
$count=0;
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
	              <form method="post">
		     <label >Accounting Year</label>
  <select id="acc_year" name="acc_year">
  <option value="2018-2019" >2018-2019</option>
  <option value="2019-2020" >2019-2020</option>
  <option value="2020-2021" >2020-2021</option>
  <option value="2021-2022" >2021-2022</option>
  <option value="2022-2023" >2022-2023</option>
  <option value="2023-2024" >2023-2024</option>
  <option value="2024-2025" >2024-2025</option>
  <option value="2025-2026" >2025-2026</option>
  <option value="2026-2027" >2026-2027</option>
  <option value="2027-2028" >2027-2028</option>
  <option value="2028-2029" >2028-2029</option>
  <option value="2029-2030" >2029-2030</option>
  <option value="2030-2031" >2030-2031</option>
  <option value="2031-2032" >2031-2032</option>
  <option value="2032-2033" >2032-2033</option>
  <option value="2033-2034" >2033-2034</option>
  <option value="2034-2035" >2034-2035</option>
  <option value="2035-2036" >2035-2036</option>
  </select>
  <input type="submit" name="submit" value="submit"><br>
		   
		   </form>
           <br /><br />  
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Name</th>   
                               <th >Form Fee</th>  
                               <th >Class</th>  
                               <th >Accounting Year</th>  
                               <th >New/Rollover/Re-join</th>  
                                 
                               
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php 
					 if(isset($_POST['submit']))
					{	
						echo $Name=$_POST['acc_year'];
						$query ="SELECT * FROM `add` WHERE `acc_year`='$Name'";  
                        $result = mysqli_query($connection, $query);  

                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                               <td ><?php echo $row[1]; ?></td>  
                                 
                                 
                               <?php
								$count=$count+$row['form_fee'];
							   ?>
                               
								
								<td ><?php echo $row['form_fee']; ?></td>
								<td ><?php echo $row['class']; ?></td>
								<td ><?php echo $row['acc_year']; ?></td>
								<td ><?php echo $row[2]; ?></td>
								
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
					}
                     ?> 
						<tr>
						<td colspan="3" style="text-align:right">
						
						<?php 
							echo $count; ?>
						</td>
						</tr>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  