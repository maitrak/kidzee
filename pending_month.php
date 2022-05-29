<?php  
$connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
  

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
  <input type="date" name="date">
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
						echo $Name=$_POST['date'];
						$query ="SELECT * FROM `add` WHERE tran1 >= '$Name' or tran2 >='$Name' or tran3 >='$Name' or tran4 >='$Name' or tran5 >='$Name' or tran6 >='$Name' or tran7 >='$Name' or tran8 >= '$Name' or tran9>='$Name' or tran10 >='$Name' or tran11>='$Name' or tran12>='$Name'  ORDER BY admission_id DESC";  
                       
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