<?php 
include("connection.php");

$id= $_GET['id'];
$status= $_GET['status'];
 
	
   $sqlQuery= "UPDATE `teacher_status` SET `status`='$status' WHERE `teacher_id`='$id'";
        $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        echo "true";

    }
    else
    {
        echo "false";
       
    }
	
?>



	
