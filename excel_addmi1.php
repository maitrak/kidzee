<?php  
$connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	  session_start();
include('nav.php'); 

 $query ="SELECT * FROM `add`";  
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
	  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center"></h2>  
                <h3 align="center">Student Data</h3>                 
                <br />  
                 
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="5%">Name of Child</th>  
                               <th width="5%">New/Rollover/Re-join</th>  
                               <th width="25%">Session</th>  
                               <th width="35%">Accounting Year</th>  
                               				   
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
                                
                                <td><a href="image/<?php echo $row[115]; ?>" class="w3-bar-item w3-button w3-bar-block">Image</a></td>
                                <td><a href="http://localhost/kidzee/image/<?php echo $row[116]; ?>" class="w3-bar-item w3-button w3-bar-block">Image</a></td>
                                <td><a href="http://localhost/kidzee/image/<?php echo $row[117]; ?>" class="w3-bar-item w3-button w3-bar-block">Image</a></td>
                                <td><a href="doc/<?php echo $row[118]; ?>" class="w3-bar-item w3-button w3-bar-block" >Document</a></td>
                               <td><a href="http://localhost/kidzee/doc/<?php echo $row[119]; ?>" class="w3-bar-item w3-button w3-bar-block">Document</a></td>
                               <td><a href="http://localhost/kidzee/doc/<?php echo $row[120]; ?>" class="w3-bar-item w3-button w3-bar-block">Document</a></td>
								<td>
								<a href="child_doc/<?php echo $row1[118]; ?>" class="w3-bar-item w3-button w3-bar-block"><?php echo $row1[118]; ?></a>
                                </td>
 
                               
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
           
      </body>  
 </html>  