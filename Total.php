<?php  
$connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
  
 
  session_start();
include('sidebar.php');
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
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Name</th>   
                               <th >Total Received</th>  
                               <th >Total Installment Marked</th>  
                                 
                               <th >Discount</th>  
                               <th >Stake Rate Fee</th>  
                               
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
					 if(isset($_POST['submit']))
					{		
						$Total=0;
						echo $Name=$_POST['acc_year'];
						$query ="SELECT * FROM `add` WHERE`acc_year`='$Name'";  
						$result = mysqli_query($connection, $query);
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                               <td ><?php echo $row[1]; ?></td>  
                               
                               <?php  $Total = $row['rec1']+$row['rec2']+$row['rec3']+$row['rec4']+$row['rec5']+$row['rec6']+$row['rec7']+$row['rec8']+$row['rec9']+$row['rec10']+$row['rec11']+$row['rec12']-$row[100];?>
								 <td ><?php echo $Total; ?></td> 
                                 
                                 <?php  
								 $count=0;
								 if($row['amt1']>0)
								 {
									 $count++;
									 if($row['amt2']>0)
									{
									 $count++;
										if($row['amt3']>0)
										{
										$count++;
											if($row['amt4']>0)
											{
											$count++;
												if($row['amt5']>0)
												{
												$count++;
													if($row['amt6']>0)
													{
													$count++;
														if($row['amt7']>0)
														{
															$count++;
																if($row['amt8']>0)
																{
																$count++;
																	if($row['amt9']>0)
																	{
																	$count++;
																		if($row['amt10']>0)
																		{
																		$count++;
																			if($row['amt11']>0)
																			{
																			$count++;
																				if($row['amt12']>0)
																				{
																				$count++;
																				}
																			}
																		}
																	}
																}
														}
													}
												}
											}
										}
									}
								 }
								 
								 
								 
								 ?>
<td ><?php echo $count; ?></td> 
<td ><?php echo $row['disc']; ?></td> 
<td ><?php echo $row['comitted_fee']; ?></td> 
 
                                
                          </tr>  
                     <?php       
                     }  
					}
                     ?>  
					 
						</tr>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  