<?php  
session_start();
include("connection.php");
$query ="SELECT teacher.*,teacher_status.status FROM `teacher` INNER join teacher_status on teacher.ID=teacher_status.teacher_id;";  
$result = mysqli_query($connection, $query);  
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
                               <th >Status</th> 
                               <th >Name of The Teacher</th>  
                               <th >Father's Name</th>  
                               <th >Mother's Name</th>  
                               <th >Spouse Name</th>  
                               <th >Society Name</th>  
                               <th >Correspondence Address</th>  
                               <th >Mobile Nuber 1</th>  
                               <th >Mobile Nuber 2</th>  
                               <th >Passward</th>  
                               <th >Permanent Address</th>  
                               <th >PAN No</th>  
                               <th >Name As on Cheque</th>  
                               <th >Bank Name</th>  
                               <th >Bank Account No</th>  
                               <th >IFSC</th>  
                               <th >MICR</th>  
                               <th >2 Passport size Photographs</th>  
                               <th >Photo ID Proof<</th>  
                               <th >Address Proof</th>  
                               <th >10th Certificate</th>  
                               <th >12th Certificate</th>  
                               <th >Graduation</th>  
                               <th >Post Graduation</th>  
                               <th >Diploma</th>  
                               <th >Diploma Other</th>  
                               <th >Achivements</th>  
                               <th >Cheque Submitted </th>  
                               <th >Date Of Join</th>  
                               <th >Salary Per Month</th>  
                               <th >Remarks</th>  
                               <th >PDF</th>  
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><a href="Teacher_update.php?id=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>  


                               <td>                               <?php if($row['status']!='ACTIVE')
                               {
                                   echo '<button type="button" onclick="showHint(this)" id='.$row[0].'  name=1 class="btn btn-danger btn-circle btn-xs">Inactive</button>';

                               }
                               else
                               {
                                   echo '<button type="button" onclick="showHint(this)" id='.$row[0].'  name=0 class="btn btn-success btn-circle btn-xs">Active</button>';

                               }?></td>
                               <td ><?php echo $row[1]; ?></td>  
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
                               <td>
								<a href="Teacher/<?php echo $row[31]; ?>" class="w3-bar-item w3-button w3-bar-block">PDF</a>
                                </td>
 
								
                                 
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
           </div>  
      </body>  
      <script>
function showHint(el) {
     console.log(el.id,el.name);
     let str="";
     if (el.name==0)
     {
          str="INACTIVE"
     }
     else{
          str="ACTIVE"
     }
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function(str) {
     if (this.readyState == 4 && this.status == 200) {
          if (el.name==1)
     {
          el.classList.remove("btn-danger");
          el.innerHTML = "Active";
          el.classList.add("btn-success");
          el.name=0
     }
     else{
          el.classList.remove("btn-success");
          el.innerHTML = "Inactive";
          el.classList.add("btn-danger");
          el.name=1
     }


       }
    }
  xmlhttp.open("GET", "teacher_status.php?id=15&status="+str);
  xmlhttp.send();
  
}
      </script>
 </html>  