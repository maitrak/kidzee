<?php  
  include("connection.php");
 $query ="SELECT * FROM `log`";  
 $result = mysqli_query($connection, $query);  
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
        
        <style>
.button{
               border-radius: 50%;
          }
        </style>   
          </head>  
      <body>  
	  <div style="margin-left: 16%;">
           <br /><br />  
           <div class="container" style="width:900px;">    
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Teacher Name</th> 
                               <th>Log</th>

                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td> 
                               <td ><?php echo $row[1]; ?></td>  
                               <td><?php 
                               $check=explode("##",$row[2]);
                               foreach ($check as $key) {
                                   echo nl2br($key.'<br>');
                               }
                               ?></td>  
                              
 
								
                                 
                                 
 
                                
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