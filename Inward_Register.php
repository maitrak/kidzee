<?php
include('nav.php');
?>
<html>
<body>
<div align=center>
<br>
<h2>Inward Register</h2>
<br>
<h2>Don't Use Special Character</h2>
<br>
<form  method="post">
  <label >Date of Courier Received</label>
  <input type="date" name="doc"><br>
  <label >Courier Sender Name</label>
  <input type="text" id="Courier_From" name="Courier_From"><br>
  <label >Courier Coming from Location</label>
  <input type="text" id="Location" name="Location"><br>
  <label >Courier Receiptient's Name</label>
  <input type="text" id="Courier_For" name="Courier_For"><br>
  <label >Courier Company Name</label>
  <input type="text" id="Courier_Name" name="Courier_Name"><br>
  <label >Courier Tracking Number</label>
  <input type="text" id="Tracking_Number" name="Tracking_Number"><br>
  <label >Tentative Courier Content</label><br>
  <input type="text" id="Approx" name="Approx"><br>
  <label >Courier Received BY Name </label>
  <input type="text" id="Received_BY" name="Received_BY" ><br>
  <label >Entry in Physical Register</label><br>
  <select id="Physical" name="Physical">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>
  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  </form>
  </div>
  </body>
  </html>
  
  <?php
  
  include("connection.php");
	if(isset($_POST['submit']))
    {
		$doc=$_POST['doc'];
		$Courier_From=$_POST['Courier_From'];
		$Location=$_POST['Location'];
		$Courier_For=$_POST['Courier_For'];
		$Courier_Name=$_POST['Courier_Name'];
		$Tracking_Number=$_POST['Tracking_Number'];
		$Approx=$_POST['Approx'];
		$Received_BY=$_POST['Received_BY'];
		$Physical=$_POST['Physical'];
		


	
		$sql="INSERT INTO `inward_register`( `doc`, `Courier_From`, `Location`, `Courier_For`, `Courier_Name`, `Tracking_Number`, `Approx`, `Received_BY`, `Physical`) 
		VALUES ('$doc','$Courier_From','$Location','$Courier_For','$Courier_Name','$Tracking_Number','$Approx','$Received_BY','$Physical')";
	
		$fireQuery=mysqli_query($connection,$sql);
        if($fireQuery)
        {
            echo "<script>window.alert('Record Added');</script>";
			echo "<script>window.location.href='index.php'</script>";
        }
        else
        {
			
            echo "<script>window.alert('Data Insertion Failed');</script>";
           
		  echo  mysqli_error($connection);

        }
	
	
	
	
	
	

	}	
	else
	{
		echo "fail";
	}
  
?> 
  