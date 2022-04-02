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
<h2> Search your student </h2>
<br>
<br>
<form method="post">
	Enter Student ID &nbsp&nbsp<input type="text" name="sid" required>
	<input type="submit" name="submit" value="ADD">
</form>
<?php
    
	
    if(isset($_POST['submit']))
    {
        echo $studid=$_POST['sid'];
        
	
       
		
		
		$sql="SELECT * FROM `enquiry_step1` WHERE `NO`='$studid'  ";
		if($result = mysqli_query($connection, $sql)){
		if(mysqli_num_rows($result) > 0){
		$result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result))
		{
        echo "<script>window.alert('Record Found');</script>";
		
		if($row['convert_enq'] == "Follow Up"){echo "ok";}
		?>


<h1> Admission Details</h1>
<form  method="post" action="Step1_Update.php">
  <h3>Details</h3>
  <input type="hidden" name="foo" value="<?php echo $row[0];?>" />
  <label >DATE OF ENQUIRY</label>
  <input type="date" name="enq_date" value="<?php echo $row[1];?>"><br>  
  <label >Name of the Child</label>
  <input type="text" id="name" name="name" value="<?php echo $row[2];?>"><br>
   <label >DOB of Child</label>
  <input type="date" name="dob" value="<?php echo $row[3];?>"><br>  
  <label >Gender</label>
  <select id="Gender" name="Gender">
  <option value="Male" <?php if($row[4] == "Male") { echo "selected"; }?>>Male</option>
  <option value="Female" <?php if($row[4] == "Female") { echo "selected"; }?>>Female</option>
  <option value="Other" <?php if($row[4] == "Other") { echo "selected"; }?>> Other</option>
  </select><br>
  <label >Father's Name</label>
  <input type="text" id="fname" name="fname" value="<?php echo $row[5];?>"><br>  
  <label >Mother's Name</label>
  <input type="text" id="mname" name="mname" value="<?php echo $row[6];?>"><br>  
  <label >Gardian's Name</label>
  <input type="text" id="gname" name="gname" value="<?php echo $row[7];?>"><br>  
  <label >Entered in Ekidzee</label> 
  <select id="Ekidzee" name="Ekidzee">
  <option value="Yes" <?php if($row[8] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row[8] == "Yes") { echo "selected"; }?>>No</option>
  </select><br>
  <label >Class</label>
  <select id="Class" name="Class">
  <option value="Annual - Parent Toadler Programme" <?php if($row['Class'] == "Annual - Parent Toadler Programme") { echo "selected"; }?>>Annual - Parent Toadler Programme</option>
  <option value="Annual - Nursery" <?php if($row['Class'] == "Annual - Nursery") { echo "selected"; }?>>Annual - Nursery</option>
  <option value="Annual - Junior Kindergarten" <?php if($row['Class'] == "Annual - Junior Kindergarten") { echo "selected"; }?>>Annual - Junior Kindergarten</option>
  <option value="Annual - Senior Kindergarten" <?php if($row['Class'] == "Annual - Senior Kindergarten") { echo "selected"; }?>>Annual - Senior Kindergarten</option>
  <option value="Mid-Term - Parent Toadler Programme" <?php if($row['Class'] == "Mid-Term - Parent Toadler Programme") { echo "selected"; }?>>Mid-Term - Parent Toadler Programme</option>
  <option value="Mid-Term - Nursery" <?php if($row['Class'] == "Mid-Term - Nursery") { echo "selected"; }?>>Mid-Term - Nursery</option>
  <option value="Mid-Term - Junior Kindergarten" <?php if($row['Class'] == "Mid-Term - Junior Kindergarten") { echo "selected"; }?>>Mid-Term - Junior Kindergarten</option>
  <option value="Mid-Term - Senior Kindergarten" <?php if($row['Class'] == "Mid-Term - Senior Kindergarten") { echo "selected"; }?>>Mid-Term - Senior Kindergarten</option>
  <option value="Early Start - Parent Toadler Programme" <?php if($row['Class'] == "Early Start - Parent Toadler Programme") { echo "selected"; }?>>Early Start - Parent Toadler Programme</option>
  <option value="Early Start - Nursery" <?php if($row['Class'] == "Early Start - Nursery") { echo "selected"; }?>>Early Start - Nursery</option>
  <option value="Early Start - Junior Kindergarten" <?php if($row['Class'] == "Early Start - Junior Kindergarten") { echo "selected"; }?>>Early Start - Junior Kindergarten</option>
  <option value="Early Start - Senior Kindergarten" <?php if($row['Class'] == "Early Start - Senior Kindergarten") { echo "selected"; }?>>Early Start - Senior Kindergarten</option>
  <option value="Day Care" <?php if($row['Class'] == "Day Care") { echo "selected"; }?>>Day Care</option>
  </select><br>
  <label >Requirement Discription</label>
  <input type="text" id="req" name="req" value="<?php echo $row[10];?>"><br>  
  <label >Mobile 1</label>
  <input type="text" id="Mobile1" name="Mobile1" value="<?php echo $row[11];?>"><br>  
  <label >Mobile 2</label>
  <input type="text" id="Mobile2" name="Mobile2" value="<?php echo $row[12];?>"><br>
  <label >EMAIL</label>
  <input type="email" name="emailId" value="<?php echo $row[13];?>"><br>
  <label >Society Name</label>
  <input type="text" id="soc_name" name="soc_name" value="<?php echo $row[14];?>"><br>  
  <label >Address 1</label>
  <input type="text" id="addr1" name="addr1" value="<?php echo $row[15];?>"><br> 
  <label >Address 2</label>
  <input type="text" id="addr2" name="addr2" value="<?php echo $row[16];?>"><br>
  <label >Convered to Admission</label>
  <select id="convert_enq" name="convert_enq">
  <option value="Converted to Admission" <?php if($row['convert_enq'] == "Converted to Admission") { echo "selected"; }?>>Converted to Admission</option>
  <option value="Not Interested" <?php if($row['convert_enq'] == "Not Interested") { echo "selected"; }?>>Not Interested</option>
  <option value="Follow Up" <?php if($row['convert_enq'] == "Follow Up") { echo "selected"; }?>>Follow Up</option>

  </select><br>
  <label >1 - Follow up Date</label>
  <input type="date" name="followup_date1" value="<?php echo $row[18];?>"><br>  
  <label >1 - Follow up Remarks</label>
  <input type="text" id="remark1" name="remark1" value="<?php echo $row[19];?>"><br>  
  <label >2 - Follow up Date</label>
  <input type="date" name="followup_date2" value="<?php echo $row[20];?>"><br>  
  <label >2 - Follow up Remarks</label>
  <input type="text" id="remark2" name="remark2" value="<?php echo $row[21];?>"><br>  
  <label >3 - Follow up Date</label>
  <input type="date" name="followup_date3" value="<?php echo $row[22];?>"><br>  
  <label >3 - Follow up Remarks</label>
  <input type="text" id="remark3" name="remark3" value="<?php echo $row[23];?>"><br>  
  <label >4 - Follow up Date</label>
  <input type="date" name="followup_date4" value="<?php echo $row[24];?>"><br>  
  <label >4 - Follow up Remarks</label>
  <input type="text" id="remark4" name="remark4" value="<?php echo $row[25];?>"><br>  
  <label >5 - Follow up Date</label>
  <input type="date" name="followup_date5" value="<?php echo $row[26];?>"><br>  
  <label >5 - Follow up Remarks</label>
  <input type="text" id="remark5" name="remark5" value="<?php echo $row[27];?>"><br>


  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  
  
  
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
  