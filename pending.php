<?php  
  include("connection.php");

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
	  <h2> Student Pending Fees</h2>
	   
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
		   </div>
           <br /><br />  
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Name</th>   
							   
							   
							   
                               <th >Stake Rate Fee</th>  
                               <th >Committed Fee</th>
                               <th >Pending Fee</th>  
							   <th >Received Fee</th> 
                               <th >Paid Installment</th>  
							   
                               <th >Total Installment</th>  
                               <th >Session</th>  
                               <th >Class</th>  
                                 
                                
                               
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php 
					 if(isset($_POST['submit']))
					{
						echo $Name=$_POST['acc_year'];
						$query ="SELECT * FROM `add` WHERE `comitted_fee`-`rec1`-`rec2`-`rec3`-`rec4`-`rec5`-`rec6`-`rec7`-`rec8`-`rec9`-`rec10`-`rec11`-`rec12`-`disc`-`refund_amt`-`dis_case`+`p_amt`-`next`>0 AND `acc_year`='$Name'  ORDER BY admission_id DESC";  
                        $result = mysqli_query($connection, $query);  

                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               
							<td><a href="Update_admission2.php?addid=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>  
							   
                               <td ><?php echo $row[1]; ?></td>  
                                 
                               
                               <?php  //$pending = $row[18]-$row['rec1']-$row['rec2']-$row['rec3']-$row['rec4']-$row['rec5']-$row['rec6']-$row['rec7'];-$row['rec8'];-$row['rec9'];-$row['rec10'];-$row['rec11'];-$row['rec12'];
										
										
										$pending1 = $row['rec1']+$row['rec2']+$row['rec3']+$row['rec4']+$row['rec5']+$row['rec6']+$row['rec7'];+$row['rec8']+$row['rec9']+$row['rec10']+$row['rec11']+$row['rec12']+$row[21]+$row[102]+$row[96];
		$plus = $row[100]+$row[98];
		//$pending=$row[18]-$pending1+$plus;
		$pending=$row[18]-$row[20]-$row['rec1']-$row['rec2']-$row['rec3']-$row['rec4']-$row['rec5']-$row['rec6']-$row['rec7']-$row['rec8']-$row['rec9']-$row['rec10']-$row['rec11']-$row['rec12']-$row[102]-$row[96]+$plus;
		
							   $count=0;
								 if($row['rec1']>0)
								 {
									 $count++;
									 if($row['rec2']>0)
									{
									 $count++;
										if($row['rec3']>0)
										{
										$count++;
											if($row['rec4']>0)
											{
											$count++;
												if($row['rec5']>0)
												{
												$count++;
													if($row['rec6']>0)
													{
													$count++;
														if($row['rec7']>0)
														{
															$count++;
																if($row['rec8']>0)
																{
																$count++;
																	if($row['rec9']>0)
																	{
																	$count++;
																		if($row['rec10']>0)
																		{
																		$count++;
																			if($row['rec11']>0)
																			{
																			$count++;
																				if($row['rec12']>0)
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
								 } $maitrak=0;
								 if($row['amt1']>0)
								 {
									 $maitrak++;
									 if($row['amt2']>0)
									{
									 $maitrak++;
										if($row['amt3']>0)
										{
										$maitrak++;
											if($row['amt4']>0)
											{
											$maitrak++;
												if($row['amt5']>0)
												{
												$maitrak++;
													if($row['amt6']>0)
													{
													$maitrak++;
														if($row['amt7']>0)
														{
															$maitrak++;
																if($row['amt8']>0)
																{
																$maitrak++;
																	if($row['amt9']>0)
																	{
																	$maitrak++;
																		if($row['amt10']>0)
																		{
																		$maitrak++;
																			if($row['amt11']>0)
																			{
																			$maitrak++;
																				if($row['amt12']>0)
																				{
																				$maitrak++;
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
								 }?>
								<td ><?php echo $row[18]; ?></td>
								<td ><?php $stack=$row[18];
											$disc=$row['disc'];
											$committed=$stack-$disc;
								echo $committed; ?></td>
								<td ><?php echo $pending; ?></td> 
								<td ><?php 
								$rec=$committed-$pending;
								echo $rec; ?></td>
								<td ><?php echo $count; ?></td>
								
								<td ><?php echo $maitrak; ?></td>
								<td ><?php echo $row['Session']; ?></td>
								<td ><?php echo $row['class']; ?></td>
								
								
                                 
                                 
 
                                
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