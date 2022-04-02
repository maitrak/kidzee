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
<?php
    
	echo $studid=$_GET['userid'];
    if(isset($_GET['userid']))
    {
        
		
        
		
	$follow_up="Follow up";
       
		
		
		$sql="SELECT * FROM `enquiry_step1` WHERE `convert_enq` ='$follow_up' AND `NO`='$studid'  ";
		if($result = mysqli_query($connection, $sql)){
		if(mysqli_num_rows($result) > 0){
		$result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result))
		{
        echo "<script>window.alert('Record Found');</script>";
		
		
		?>


<h1> Update Enquiry/Follow-up Details</h1>
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
  <label >Mother's Name/Gardian's Name</label>
  <input type="text" id="mname" name="mname" value="<?php echo $row[6];?>"><br>  
  <label >Mode of Enquiry</label>
  
	<select id="gname" name="gname">
  <option value="Walkin" <?php if($row[7] == "") { echo "selected"; }?>>Walkin</option>
  <option value="Phone Call" <?php if($row[7] == "") { echo "selected"; }?>>Phone Call</option>
  <option value="Google Form" <?php if($row[7] == "") { echo "selected"; }?>>Google Form</option>
  <option value="Facebook" <?php if($row[7] == "") { echo "selected"; }?>>Facebook</option>
  <option value="Google Website" <?php if($row[7] == "") { echo "selected"; }?>>Google Website</option>
  <option value="Kidzee HO Website" <?php if($row[7] == "") { echo "selected"; }?>>Kidzee HO Website</option>
  <option value="Others" <?php if($row[7] == "") { echo "selected"; }?>>Others</option>
  </select>
  <br>
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
  <label >Parent Requirement And Walkin/Phone/Online Enquiry ? </label>
  <input type="text" id="req" name="req" value="<?php echo $row[10];?>"><br>  
  <label > Father Mobile</label>
  <input type="text" id="Mobile1" name="Mobile1" value="<?php echo $row[11];?>"><br>  
  <label >Mother Mobile</label>
  <input type="text" id="Mobile2" name="Mobile2" value="<?php echo $row[12];?>"><br>
  <label >EMAIL</label>
  <input type="email" name="emailId" value="<?php echo $row[13];?>"><br>
  <label >Society Name</label>
  <input type="text" id="soc_name" name="soc_name" value="<?php echo $row[14];?>"><br>  
  <label >Address 1</label>
  <input type="text" id="addr1" name="addr1" value="<?php echo $row[15];?>"><br> 
  <label >Address 2</label>
  <input type="text" id="addr2" name="addr2" value="<?php echo $row[16];?>"><br>
  <label >How did you come to know of KIDZEE?:</label><br>
  <input type="radio"  name="KIDZEE" value="Newspaper Ad" <?php if($row[17] == "Newspaper Ad") { echo "checked"; }?>>
  <label >Newspaper Ad</label><br>
  <input type="radio"  name="KIDZEE" value="Pamphlet" <?php if($row[17] == "Pamphlet") { echo "checked"; }?>>
  <label >Pamphlet</label><br>
  <input type="radio"  name="KIDZEE" value="Banner" <?php if($row[17] == "Banner") { echo "checked"; }?>>
  <label >Banner</label><br>
  <input type="radio"  name="KIDZEE" value="Mailer" <?php if($row[17] == "Mailer") { echo "checked"; }?>>
  <label >Mailer</label><br>
  <input type="radio"  name="KIDZEE" value="Friends" <?php if($row[17] == "Friends") { echo "checked"; }?>>
  <label >Friends</label><br>
  <input type="radio"  name="KIDZEE" value="Cable" <?php if($row[17] == "Cable") { echo "checked"; }?>>
  <label >Cable TV</label><br>
  <input type="radio"  name="KIDZEE" value="Cable TV" <?php if($row[17] == "Cable TV") { echo "checked"; }?>>
  <label >Facebook</label><br>  
  <input type="radio"  name="KIDZEE" value="Facebook" <?php if($row[17] == "Facebook") { echo "checked"; }?>>
  <label >WhatsApp</label><br>  
  <input type="radio"  name="KIDZEE" value="WhatsApp" <?php if($row[17] == "WhatsApp") { echo "checked"; }?>>
  <label >Google</label><br> 
  <input type="radio"  name="KIDZEE" value="Google" <?php if($row[17] == "Google") { echo "checked"; }?>>
  <label >Other</label><br>
  <label >Father's Occupation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="f_oocu" size="50" name="f_oocu" value="<?php echo $row[18];?>"><br>
  <label >Mother's Occupation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="m_oocu" size="50" name="m_oocu" value="<?php echo $row[19];?>"><br>  
  <label >Father's Highest Qualification</label>
  <input type="text" id="f_high" size="50" name="f_high" value="<?php echo $row[20];?>"><br>  
  <label >Mother's Highest Qualification</label>
  <input type="text" id="m_high" size="50" name="m_high" value="<?php echo $row[21];?>"><br>
  
  <label >Convered to Admission</label>
  <select id="convert_enq" name="convert_enq">
  <option value="Converted to Admission" <?php if($row['convert_enq'] == "Converted to Admission") { echo "selected"; }?>>Converted to Admission</option>
  <option value="Not Interested" <?php if($row['convert_enq'] == "Not Interested") { echo "selected"; }?>>Not Interested</option>
  <option value="Follow Up" <?php if($row['convert_enq'] == "Follow Up") { echo "selected"; }?>>Follow Up</option>

  </select><br>
  <label >1 - Follow up Date</label>
  <input type="date" name="followup_date1" value="<?php echo $row['followup_date1'];?>"><br>  
  <label >1 - Follow up Remarks</label>
  <input type="text" id="remark1" name="remark1" value="<?php echo $row['remark1'];?>"><br>  
  <label >2 - Follow up Date</label>
  <input type="date" name="followup_date2" value="<?php echo $row['followup_date2'];?>"><br>  
  <label >2 - Follow up Remarks</label>
  <input type="text" id="remark2" name="remark2" value="<?php echo $row['remark2'];?>"><br>  
  <label >3 - Follow up Date</label>
  <input type="date" name="followup_date3" value="<?php echo $row['followup_date3'];?>"><br>  
  <label >3 - Follow up Remarks</label>
  <input type="text" id="remark3" name="remark3" value="<?php echo $row['remark3'];?>"><br>  
  <label >4 - Follow up Date</label>
  <input type="date" name="followup_date4" value="<?php echo $row['followup_date4'];?>"><br>  
  <label >4 - Follow up Remarks</label>
  <input type="text" id="remark4" name="remark4" value="<?php echo $row['remark4'];?>"><br>  
  <label >5 - Follow up Date</label>
  <input type="date" name="followup_date5" value="<?php echo $row['followup_date5'];?>"><br>  
  <label >5 - Follow up Remarks</label>
  <input type="text" id="remark5" name="remark5" value="<?php echo $row['remark5'];?>"><br>


  
    <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  
  
</form>
</div>
<?php
		}
		}
		else
		{
			echo "<script>window.alert('Record Not Found/Not Interested/Converted to Admission');</script>";
		}
		}
	}

?>
</body>
</html>
  