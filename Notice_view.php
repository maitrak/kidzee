<?php  
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
 $query ="SELECT * FROM `notice`";  
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
           <br /><br />  
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >Date</th>  
                               <th >Body</th>  
                               
                                
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                               <td ><?php echo $row[1]; ?></td>  
                               
								
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>
					 <br>
					 <br>
					 <br>
					 <br>
						<table class="table table-bordered">
						<tr>
						<th >File1</th>  
                               <th >File2</th>  
                               <th >File3</th>  
                               <th >File4</th>  
                               <th >File5</th>  
                               <th >File6</th>  
                               <th >File7</th>  
                               <th >File8</th>  
                               <th >File9</th>  
                               <th >File10</th>  
						</tr>
						<tr>
						<?php
							    $query1 ="SELECT * FROM `file`";  
								$result1 = mysqli_query($connection, $query1);
								while($row1 = mysqli_fetch_array($result1))  
								{
							   ?>
							   <td>
								<a href="doc/<?php echo $row1[0]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[0]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[1]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[1]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[2]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[2]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[3]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[3]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[4]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[4]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[5]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[5]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[6]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[6]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[7]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[7]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[8]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[8]; ?></a>
                                </td>
								<td>
								<a href="doc/<?php echo $row1[9]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[9]; ?></a>
                                </td>
 
 
 
 
 
 
 
 
 
 
 
							   
							   <?php
							   
								}
							   
							   
							   ?>
						</tr>
                </div>  
           </div>  
      </body>  
 </html>  