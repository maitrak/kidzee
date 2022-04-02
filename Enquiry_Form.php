<html>
<body>
<div align=center>
<?php
session_start();
    $connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
?>
<?php
include('nav.php');
?>
<br>
<br>

<?php
    
	
    if(isset($_GET['userid']))
    {
        
	echo $studid=$_GET['userid'];
       
		
		
		$sql="SELECT * FROM `enq` WHERE `Stud_Id`='$studid'";
		if($result = mysqli_query($connection, $sql)){
		if(mysqli_num_rows($result) > 0){
		$result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result))
		{
        echo "<script>window.alert('Record Found');</script>";
		
		
		?>


<h1> Admission Details</h1>
<form  method="post" action="enq_db.php">
  <label >Serial No:</label>
  <input type="text" id="sr_no" name="sr_no" value="<?php echo $row['sr_no'];?>"><br>
  <label >Enquiry No:</label>
  <input type="text" id="Enquiry_no" name="Enquiry_no" value="<?php echo $row['Enquiry_no'];?>"><br>
  <label >Date</label>
  <input type="date" name="date" value="<?php echo $row['date'];?>"><br>
    <label >Name:</label>
  <input type="text" id="sname" name="sname" value="<?php echo $row['sname'];?>"><br>
  <label >Seeking Admission for:</label>
  <input type="text" id="admission" name="admission" value="<?php echo $row['admission'];?>"><br>
  <label >Date of birth</label>
  <input type="date" name="dob" value="<?php echo $row['dob'];?>"><br>
  <label >Gender</label>
   
<input type="text" id="gender" name="gender" value="<?php echo $row['gender'];?>"><br>

  <label >If attending a preschool</label><br>

  <input type="text" id="preschool" name="preschool" value="<?php echo $row['preschool'];?>"><br>


  
  
   <label >class details</label>
  <input type="text" id="class" name="class" value="<?php echo $row['class'];?>"><br>
  
  <label >Name of parents:</label>
  <label >Father:</label>
  <input type="text" id="father" name="father" value="<?php echo $row['father'];?>"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Mother:</label>
  <input type="text" id="mother" name="mother" value="<?php echo $row['mother'];?>"><br>
  <label >Address</label><br>
  <input type="text" id="addr" name="addr" size="185" height="60%" value="<?php echo $row['addr'];?>"><br>
  <label >Phone Number</label>
  <input type="text" id="contact" name="contact" value="<?php echo $row['contact'];?>"><br>
  <label >Email address</label>
  <input type="email" id="email" name="email" value="<?php echo $row['email'];?>"><br>
  <label >Parents Education background:</label>
  <label >Father:</label>
  <input type="text" id="Efather" name="Efather" value="<?php echo $row['Efather'];?>"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Mother:</label>
  <input type="text" id="Emother" name="Emother" value="<?php echo $row['Emother'];?>"><br>
  <label >Parents Occupation:</label>
  <label >Father:</label>
  <input type="text" id="Ofather" name="Ofather" value="<?php echo $row['Ofather'];?>"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Mother:</label>
  <input type="text" id="Omother" name="Omother" value="<?php echo $row['Omother'];?>"><br>
  <label >How did ou come to know of KIDZEE?:</label><br>
  <input type="text" id="Omother" name="Omother" value="<?php echo $row['KIDZEE'];?>"><br>
<label >Converted to Admission</label><br>
  <input type="text" id="Converted" name="Converted" value="<?php echo $row['converted'];?>"><br>


  </form>
</div>
<?php
		}
		}
		else
		{
			echo "<script>window.alert('Record Not Found');</script>";
		}
		}
	}

?>
</body>
</html>
  