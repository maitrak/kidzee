<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	$ptp="Day Care";

 

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
	   <h2>Day Care</h2>
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
		
		   
		   
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Name</th>   
                               <th >Session</th>  
                                <th >Father's Name</th>  
                               <th >Mother's Name</th>  
                               <th >Father's Mobile</th>  
                               <th >Mother's Mobile</th> 
                               <th >Father's Email</th>  
                               <th >Mother's Email</th> 
							   <th >Society</th>  
                               <th >Address</th>  
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
					 if(isset($_POST['submit']))
					{		
					 $Name=$_POST['acc_year'];
					?>
					 <h2 style="color:red"><?php echo $Name?></h2>
					 <?php
					 
					$query ="SELECT * FROM `add` WHERE `class`='$ptp' AND `acc_year`='$Name'";  
					$result = mysqli_query($connection, $query); 
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><a href="Update_admission3.php?userid=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>
                        
                               <td ><?php echo $row[1]; ?></td>  
                               <td ><?php echo $row['Session']; ?></td>  
                               <td ><?php echo $row[109]; ?></td>
							   <td ><?php echo $row[110]; ?></td>
							   <td ><?php echo $row[111]; ?></td>
							   <td ><?php echo $row[112]; ?></td>
							   <td ><?php echo $row[113]; ?></td>
							   <td ><?php echo $row[114]; ?></td>
							   <td ><?php echo $row[121]; ?></td>
							   <td ><?php echo $row[122]; ?></td>
                               
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
					}
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  