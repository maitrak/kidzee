<html>
<?php
include('nav.php');
?>
<body>

<div align=center>
<h1>Student Admission Form</h1>
<form  method="post" enctype="multipart/form-data">
  <label >Form No:</label>
  <input type="text" id="fno" name="fno"><br>
  <label >Child No:</label>
  <input type="text" id="cno" name="cno"><br>
  <label >Name of Program:</label>

   <select id="admission" name="admission">
  <option value="Play Group">Play Group</option>
  <option value="Nursary">Nursary</option>
  <option value="Jr. KG">Jr. KG</option>
  <option value="Sr. KG">Sr. KG</option>
  <option value="Parent_program">Parent_program</option>
  
  </select><br> 
  
  <label >Batch:</label>
  
  <select id="batch" name="batch">
  <option value="Morning Shift">Morning Shift</option>
  <option value="Afternoon Shift">Afternoon Shift</option>
  </select><br>
  <label >timing from:</label>
  <input type="time" id="timing" name="timing" >
  <label >to:</label>
  <input type="time" id="timing_to" name="timing_to" >  <br>
 <!-- Document Header Starts  <table border="1">
  <tr>
  <td><input type="file"  name="fileupload" style="height:60px;"accept="image/*"/></td>
  <td><input type="file"  name="Father_photo" style="height:60px;"accept="image/*"/></td>
  <td><input type="file"  name="Mother_photo" style="height:60px;"accept="image/*"/></td>
  </tr>
  <tr>
  <td>child's photo</td>
  <td>father's photo</td>
  <td>mother's photo</td>
  </tr>
  </table>
  -->
  
  
  <label >Name of the Child:</label>
  <input type="text" id="name" name="name" >  <br>
  

  <label >Gender</label>
  
    <select id="gender" name="gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>

  </select><br>
  <label >Date of birth</label>
  <input type="date" name="dob" ><br>
  <label >Place of Birth</label>
  <input type="text" id="place" name="place"><br>
  <label >Height(cm):</label>
  <input type="text" id="height" name="height" >  <br>

  <label >Weight(kg):</label>
  <input type="text" id="weight" name="weight" maxlength="4">  <br>
	<label >Blood Group:</label>
  <input type="text" id="blood" name="blood"><br>
  
  <label >Uniform Size:</label><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Regular :</label><br>
     <select id="regular" name="regular">
  <option value="18">18</option>
  <option value="20">20</option>
  <option value="22">22</option>
  <option value="24">24</option>
  <option value="26">26</option>
  </select><br> 
  
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Winter :</label><br>
       <select id="Winter" name="Winter">
  <option value="18">18</option>
  <option value="20">20</option>
  <option value="22">22</option>
  <option value="24">24</option>
  <option value="26">26</option>
  </select><br> 
  <label >Languages spoken at home:</label>
  <input type="text" id="Lang" name="Lang"><br>
  
  <label >Address:House No.</label>
  <input type="text" id="house" name="house"><br>
  <label >Street name</label>
  <input type="text" id="street" name="street"><br>
  <label >Area</label>
  <input type="text" id="area" name="area"><br>  
  <label >Landmmark</label>
  <input type="text" id="landmark" name="landmark"><br>
  <label >City</label>
  <input type="text" id="city" name="city"><br>
  <label >State</label>
  <input type="text" id="State" name="State"><br>
  <label >Pin</label>
  <input type="text" id="pin" name="pin"><br>
  
  <label >Contact Number</label><br>--------------------
 <br>
  <label >Telephome Number</label>
  <input type="text" id="tel" name="tel"><br>
  <label >Mobile Number</label>
  <input type="text" id="mob" name="mob"><br>
  
  <label >Child Stay/Live With :</label><br>
         <select id="stay" name="stay">
  <option value="father">Father</option>
  <option value="mother">Mother</option>
  <option value="both">Both</option>
  <option value="other">Other</option>
  
  </select><br> 
  
  
  <h3>Mother's/Guardian's Details:</h3><br>------------------------<br>
  
  <label >Name:</label>
  <input type="text" id="mname" name="mname"><br>
 
  <label >Resideantial:House No.</label>
  <input type="text" id="mhouse" name="mhouse"><br>
  <label >Street Name</label>
  <input type="text" id="mstreet" name="mstreet"><br>
  <label >Area</label>
  <input type="text" id="marea" name="marea"><br>  
  <label >Landmmark</label>
  <input type="text" id="mlandmark" name="mlandmark"><br>
  <label >City</label>
  <input type="text" id="mcity" name="mcity"><br>
  <label >State</label>
  <input type="text" id="mState" name="mState"><br>
  <label >Pin</label>
  <input type="text" id="mpin" name="mpin"><br>
  <label >Phone Number</label>
  <input type="text" id="mcontact" name="mcontact" ><br>
  <label > Occupation:</label>
  <input type="text" id="mOccupation" name="mOccupation"><br>
  <label > Qualification:</label>
  <input type="text" id="fGualification" name="mGualification"><br>
  <label > Designation:</label>
  <input type="text" id="mDesignation" name="mDesignation"><br>
  <label >Office Address</label><br>
  <input type="text" id="maddr" name="maddr" size="185" height="60%"><br>
  <label >Pin</label><br>
  <input type="text" id="mopin" name="mopin" ><br>
  <label >Contact No</label><br>
  <input type="text" id="mcontactno" name="mcontactno" ><br>
  <label >Mobile No</label><br>
  <input type="text" id="mmobile" name="mmobile" ><br>
  <label >Email</label><br>
  <input type="email" id="memail" name="memail" ><br>
  <label >Medial History</label><br>
  <input type="text" id="mMedial" name="mMedial" size="185" height="60%" ><br>

  <h3>Father's/Guardian's Details:</h3><br>------------------------<br>

<label >Name:</label>
  <input type="text" id="mname" name="fname"><br>
 
  <label >Resideantial:House No.</label>
  <input type="text" id="fhouse" name="fhouse"><br>
  <label >Street Name</label>
  <input type="text" id="fstreet" name="fstreet"><br>
  <label >Area</label>
  <input type="text" id="farea" name="farea"><br>  
  <label >Landmmark</label>
  <input type="text" id="flandmark" name="flandmark"><br>
  <label >City</label>
  <input type="text" id="fcity" name="fcity"><br>
  <label >State</label>
  <input type="text" id="fState" name="fState"><br>
  <label >Pin</label>
  <input type="text" id="fpin" name="fpin"><br>
  <label >Phone Number</label>
  <input type="text" id="fcontact" name="fcontact" ><br>
  <label > Occupation:</label>
  <input type="text" id="fOccupation" name="fOccupation"><br>
  <label > Qualification:</label>
  <input type="text" id="fGualification" name="fGualification"><br>
  <label > Designation:</label>
  <input type="text" id="fDesignation" name="fDesignation"><br>
  <label >Office Address</label><br>
  <input type="text" id="faddr" name="faddr" size="185" height="60%"><br>
  <label >Pin</label><br>
  <input type="text" id="fopin" name="fopin" ><br>
  <label >Contact No</label><br>
  <input type="text" id="fcontactno" name="fcontactno" ><br>
  <label >Mobile No</label><br>
  <input type="text" id="fmobile" name="fmobile" ><br>
  <label >Email</label><br>
  <input type="email" id="femail" name="femail" ><br>
  <label >Medial History</label><br>
  <input type="text" id="fMedial" name="fMedial" size="185" height="60%" ><br>

   <label > Siblings Name(if any):</label><br>-----------------------------------<br>
   <label > 1)</label><br>
   <label > Name</label>
   <input type="text" id="1name" name="1name"><br>
   <label > Gender</label>
          <select id="1gender" name="1gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>

  </select><br>
   <label > Date of Birth</label>
   <input type="text" id="1date" name="1date"><br>
   <label > School Attending</label>
   <input type="text" id="1school" name="1school"><br>
   <label > Standard</label>
   <input type="text" id="1std" name="1std"><br>
   <label > KIDZEE Alumni</label>
             <select id="1kid" name="1kid">
  <option value="Yes">Yes</option>
  <option value="No">No</option>

  </select><br>
   
   <label > 2)</label><br>
   <label > Name</label>
   <input type="text" id="2name" name="2name"><br>
   <label > Gender</label>
  
   <select id="2gender" name="2gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>

  </select><br>
   
   <label > Date of Birth</label>
   <input type="text" id="2date" name="2date"><br>
   <label > School Attending</label>
   <input type="text" id="2school" name="2school"><br>
   <label > Standard</label>
   <input type="text" id="2std" name="2std"><br>
   <label > KIDZEE Alumni</label>
   
                <select id="2kid" name="2kid">
  <option value="Yes">Yes</option>
  <option value="No">No</option>

  </select><br>

   <label > Additional Member In The Family:(if any):</label><br>-----------------------------------<br>
   <label > 1)</label><br>
   <label > Name</label>
   <input type="text" id="1aname" name="1aname"><br>
   <label > Gender</label>
  
      <select id="1agender" name="1agender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>

  </select><br>
   <label > Relationship with child</label>
   <input type="text" id="1arela" name="1arela"><br>
   <label > Date of birth</label>
   <input type="date" id="1adate" name="1adate"><br>
   
   
   <label > 2)</label><br>
   <label > Name</label>
   <input type="text" id="2aname" name="2aname"><br>
   <label >Gender</label>
   
         <select id="2agender" name="2agender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>

  </select><br>
   <label > Relationship With Child</label>
   <input type="text" id="2arela" name="2arela"><br>
   <label > Date of Birth</label>
   <input type="date" id="2adate" name="2adate"><br>

	<table border="1">
	<tr>
	<td>Age</td>
	<td>Recommendation</td>
	<td>Dose(1,2,3,4,5,Booster With Date)</td>
	</tr>
	<tr>
	<td>Birth</td>
	<td>BCG Oral Polio Hep B</td>
	<td> <input type="text" id="birth" name="birth"><br></td>
	</tr>
	<tr>
	<td>6 Week</td>
	<td> Oral Polio DPT Hep B</td>
	<td> <input type="text" id="6week" name="6week"><br></td>
	</tr>
	<tr>
	<td>10 Week</td>
	<td> Oral Polio DPT </td>
	<td> <input type="text" id="10week" name="10week"><br></td>
	</tr>
	<tr>
	<td>14 Week</td>
	<td> Oral Polio DPT </td>
	<td> <input type="text" id="14week" name="14week"><br></td>
	</tr>
	<tr>
	<td>6-9 Month</td>
	<td> Oral Polio DPT </td>
	<td> <input type="text" id="69" name="69"><br></td>
	</tr>
	<tr>
	<td>9 Month</td>
	<td> Measles</td>
	<td> <input type="text" id="9" name="9"><br></td>
	</tr>
	<tr>
	<td>15 Month</td>
	<td> MMR </td>
	<td> <input type="text" id="15" name="15"><br></td>
	</tr>
	<tr>
	<td>18-24 Month</td>
	<td> Oral Polio+ DPT 1st Booster</td>
	<td> <input type="text" id="18" name="18"><br></td>
	</tr>
	<tr>
	<td>2 Years and 5 Years</td>
	<td> Typhoid vaccine </td>
	<td> <input type="text" id="2" name="2"><br></td>
	</tr>
	<tr>
	<td>4-4.5 Years</td>
	<td> Oral Polio DPT - 2nd Booster</td>
	<td> <input type="text" id="4" name="4"><br></td>
	</tr>
	<tr>
	<td>10 Years</td>
	<td> TT(Tetanus) 3rd Booster Hep.B Booster</td>
	<td> <input type="text" id="10" name="10"><br></td>
	</tr>
	</table>
	
	
	
	 <label > <B>EMERGENCY CONTACT</B></label><br>----------------------------------------<br>
	 <label >1)</label><br>
	 <label >Name</label>
   <input type="text" id="1Ename" name="1Ename"><br>
   <label >Address</label>
   <input type="text" id="1Eaddr" name="1Eaddr"><br>
   <label >Pin</label>
   <input type="text" id="1Epin" name="1Epin"><br>
   <label >Home Phone</label><br>
  <input type="text" id="1Enumber" name="1Enumber" ><br>
  <label >Mobile No</label><br>
  <input type="text" id="1Emob" name="1Emob" ><br>
  <label >Email</label><br>
  <input type="email" id="1Eemail" name="1Eemail" ><br>
  <label > Relationship With Child</label>
   <input type="text" id="1Erela" name="1Erela"><br>
   
   <label >2)</label><br>
	 <label >Name</label>
   <input type="text" id="2Ename" name="2Ename"><br>
   <label >Address</label>
   <input type="text" id="2Eaddr" name="2Eaddr"><br>
   <label >Pin</label>
   <input type="text" id="2Epin" name="2Epin"><br>
   <label >Home Phone</label><br>
  <input type="text" id="2Enumber" name="2Enumber" ><br>
  <label >Mobile No</label><br>
  <input type="text" id="2Emob" name="2Emob" ><br>
  <label >Email</label><br>
  <input type="email" id="2Eemail" name="2Eemail" ><br>
  <label > Relationship with child</label>
   <input type="text" id="2Erela" name="2Erela"><br>
   
   
   <label > <B>Family Doctor</B></label><br>----------------------------------------<br>
	 
	 <label >Name</label>
   <input type="text" id="dname" name="dname"><br>
   <label >Address</label>
   <input type="text" id="daddr" name="daddr"><br>
   <label >Pin</label>
   <input type="text" id="dpin" name="dpin"><br>
   <label >Home Phone</label><br>
  <input type="text" id="dp" name="dp" ><br>
  <label >Mobile No</label><br>
  <input type="text" id="dmob" name="dmob" ><br>
  <label >Email</label><br>
  <input type="email" id="demail" name="demail" ><br>
  <label >Does your cild have any allergies:</label>
           <select id="doc" name="doc">
  <option value="Yes">Yes</option>
  <option value="No">No</option>

  
  </select><br> 
  
  <label >If yes the please explain</label>
   <input type="text" id="allergies" name="allergies"><br><br>
   
   
  <label >Does your child have any physical,emotional or behavioural issue that may interfere with his/her learning </label>
             <select id="issue" name="issue">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br> 
  <label >If yes the please explain</label>
   <input type="text" id="explain_issue" name="explain_issue"><br>
  
	<label >At home does your child take an daily medication?</label>
               <select id="medi" name="medi">
  <option value="yes">Yes</option>
  <option value="No">No</option>
  </select><br> 
  <label >If yes the please explain</label>
   <input type="text" id="medication" name="medication"><br>
 
	<label >Is there any futhere information you feel we should know that may help us understand your child?</label>
  <input type="text" id="information" name="information"><br>
	
	<label >Any other comment</label>
  <input type="text" id="comment" name="comment"><br>
	
	<b><label >Office Use</label></b><br>
	
	
	<label >Batch Details</label>
	<input type="text" id="details" name="details"><br>
	<label >Timing</label>
	<input type="time" id="Otiming" name="Odetails"><br>
	<label >Date</label>
	<input type="date" id="Odate" name="Odate"><br>
	<label >Invoice/Receipt No</label>
	<input type="text" id="Invoice" name="Invoice"><br>
	<label >Amount</label>
	<input type="text" id="amt" name="amt"><br>

	
	
	
  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  </form>
  
  <?php
  $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
 
  if(isset($_POST['submit']))
  {
			$file_dir = "C:\wamp\www\kidzee\Image";
		$child_photo="null";
		$father_photo="null";
		$mother_photo="null";
		$pdf1="null";
		$pdf2="null";
		$pdf3="null";
 /*foreach($_FILES as $file_name => $file_array) {
 echo "path: ".$file_array['tmp_name']."<br/>\n";
 echo $photo=$file_array['tmp_name']."<br/>\n";
 echo $photo_name=$file_array['name'];
 
	
	if (i==1)
	{
		$child_photo=$file_array['name'];
		$i++;
	}
	if (i==2)
	{
		echo $father_photo=$file_array['name'];
		$i++;
	}
	if (i==3)
	{
		echo $mother_photo=$file_array['name'];
		
	}
	
	
 


 if (is_uploaded_file($file_array['tmp_name'])) {
 move_uploaded_file($file_array['tmp_name'],
 "$file_dir/".$file_array['name'])
 or die ("Couldn't move file");
 echo "File was moved!";
 } else {
 echo "No file found.";
 }
 }*/
		
		
		//data
		$f_no=$_POST['fno'];
		$c_no=$_POST['cno'];
		$program=$_POST['admission'];
		$batch=$_POST['batch'];
		$timeing_from=$_POST['timing'];
		$timeing_to=$_POST['timing_to'];
		$name_child=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$pob=$_POST['place'];
		$height=$_POST['height'];
		$weight=$_POST['weight'];
		$blood=$_POST['blood'];
		$uniform_reg=$_POST['regular'];
		$uniform_win=$_POST['Winter'];
		$Lang=$_POST['Lang'];
		$house=$_POST['house'];
		$street=$_POST['street'];
		$area=$_POST['area'];
		$landmark=$_POST['landmark'];
		$city=$_POST['city'];
		$state=$_POST['State'];
		$pin=$_POST['pin'];
		$telephone=$_POST['tel'];
		$mobile=$_POST['mob'];
		$child_stay=$_POST['stay'];
		$M_name=$_POST['mname'];
		$M_house=$_POST['mhouse'];
		$M_street=$_POST['mstreet'];
		$M_area=$_POST['marea'];
		$M_landmark=$_POST['mlandmark'];
		$M_city=$_POST['mcity'];
		$M_state=$_POST['mState'];
		$M_Apin=$_POST['mpin'];
		$M_phone=$_POST['mcontact'];
		$M_occu=$_POST['mOccupation'];
		$M_guali=$_POST['mGualification'];
		$M_des=$_POST['mDesignation'];
		$M_office=$_POST['maddr'];
		$M_Opin=$_POST['mopin'];
		$M_contact=$_POST['mcontactno'];
		$M_mob=$_POST['mmobile'];
		$M_email=$_POST['memail'];
		$M_medical=$_POST['mMedial'];
		
		$F_name=$_POST['fname'];
		$F_house=$_POST['fhouse'];
		$F_street=$_POST['fstreet'];
		$F_area=$_POST['farea'];
		$F_landmark=$_POST['flandmark'];
		$F_city=$_POST['fcity'];
		$F_state=$_POST['fState'];
		$F_Apin=$_POST['fpin'];
		$F_phone=$_POST['fcontact'];
		$F_occu=$_POST['fOccupation'];
		$F_guali=$_POST['fGualification'];
		$F_des=$_POST['fDesignation'];
		$F_office=$_POST['faddr'];
		$F_Opin=$_POST['fopin'];
		$F_contact=$_POST['fcontactno'];
		$F_mob=$_POST['fmobile'];
		$F_email=$_POST['femail'];
		$F_medical=$_POST['fMedial'];
		
		$z1_name=$_POST['1name'];
		$z1_gender=$_POST['1gender'];
		$z1_dob=$_POST['1date'];
		$z1_school=$_POST['1school'];
		$z1_std=$_POST['1std'];
		$z1_alumni=$_POST['1kid'];
		
		$z2_name=$_POST['2name'];
		$z2_gender=$_POST['2gender'];
		$z2_dob=$_POST['2date'];
		$z2_school=$_POST['2school'];
		$z2_std=$_POST['2std'];
		$z2_alumni=$_POST['2kid'];
		
		$z01_name=$_POST['1aname'];
		$z01_gender=$_POST['1agender'];
		$z01_rela=$_POST['1arela'];
		$z01_dob=$_POST['1adate'];
		
		$z02_name=$_POST['2aname'];
		$z02_gender=$_POST['2agender'];
		$z02_rela=$_POST['2arela'];
		$z02_dob=$_POST['2adate'];
		
		$v1=$_POST['birth'];
		$v2=$_POST['6week'];
		$v3=$_POST['10week'];
		$v4=$_POST['14week'];
		$v5=$_POST['69'];
		$v6=$_POST['9'];
		$v7=$_POST['15'];
		$v8=$_POST['18'];
		$v9=$_POST['2'];
		$v10=$_POST['4'];
		$v11=$_POST['10'];
		
		$E1_name=$_POST['1Ename'];
		$E1_address=$_POST['1Eaddr'];
		$E1_pin=$_POST['1Epin'];
		$E1_phone=$_POST['1Enumber'];
		$E1_mobile=$_POST['1Emob'];
		$E1_email=$_POST['1Eemail'];
		$E1_rela=$_POST['1Erela'];
		
		$E2_name=$_POST['2Ename'];
		$E2_address=$_POST['2Eaddr'];
		$E2_pin=$_POST['2Epin'];
		$E2_phone=$_POST['2Enumber'];
		$E2_mobile=$_POST['2Emob'];
		$E2_email=$_POST['2Eemail'];
		$E2_rela=$_POST['2Erela'];
		
		$doc_name=$_POST['dname'];
		$doc_add=$_POST['daddr'];
		$doc_pin=$_POST['dpin'];
		$doc_p=$_POST['dp'];
		$doc_mob=$_POST['dmob'];
		$doc_email=$_POST['demail'];
		
		$al=$_POST['doc'];
		$al_dics=$_POST['allergies'];
		$iss=$_POST['issue'];
		$iss_disc=$_POST['explain_issue'];
		$medic=$_POST['medi'];
		$medic_disc=$_POST['medication'];
		$understand=$_POST['information'];
		$comment=$_POST['comment'];
		$batch_detail=$_POST['details'];
		$timing=$_POST['Odetails'];
		$odate=$_POST['Odate'];
		$invoice=$_POST['Invoice'];
		$amount=$_POST['amt'];
		
		$sql = "
INSERT INTO `register`(`F_no`, `child_no`, `program`, `batch`, `timeing_from`, `timeing_to`, `Image1`, `Image2`, `Image3`,
`name_child`, `gender`, `dob`, `pob`, `height`, `weight`, `blood`, `uniform_reg`, `uniform_win`, `Lang`, `House`,
`Street_name`, `Area`, `Landmmark`, `City`, `State`, `Pin`, `telephone`, `Mobile`, `Child_Stay`, `M_name`, `M_House`,
`M_Street`, `M_Area`, `M_Landmmark`, `M_City`, `M_State`, `M_APin`, `M_Phone`, `M_Occupation`, `M_Gualification`,
`M_Designation`, `M_Office`, `M_OPin`, `M_Contact`, `M_Mobile`, `M_Email`, `M_Medial`, `F_name`, `F_House`, `F_Street`,
`F_Area`, `F_Landmmark`, `F_City`, `F_State`, `F_APin`, `F_Phone`, `F_Occupation`, `F_Gualification`, `F_Designation`,
`F_Office`, `F_OPin`, `F_Contact`, `F_Mobile`, `F_Email`, `F_Medial`, `1_Name`, `1_gender`, `1_dob`, `1_school`, `1_std`,
`1_alumni`, `2_Name`, `2_gender`, `2_dob`, `2_school`, `2_std`, `2_alumni`, `01_Name`, `01_gender`, `01_relationship`,
`01_dob`, `02_Name`, `02_gender`, `02_relationship`, `02_dob`, `v_1`, `v_2`, `v_3`, `v_4`, `v_5`, `v_6`, `v_7`, `v_8`,
`v_9`, `v_10`, `v_11`, `E1_name`, `E1_address`, `E1_pin`, `E1_phone`, `E1_mobile`, `E1_email`, `E1__rela`, `E2_name`,
`E2_address`, `E2_pin`, `E2_phone`, `E2_mobile`, `E2_email`, `E2__rela`, `DOC_name`, `DOC_add`, `DOC_pin`,`DOC_phone`, `DOC_mobile`,
`DOC_email`, `allergies`, `allergies_discp`, `issue`, `issue_discp`, `medication`, `medication_discp`, `understand`,
`comment`, `Batch_detail`, `timing`, `date`, `invoice`, `amount`,`pdf1`,`pdf2`,`pdf3`) VALUES
('$f_no','$c_no','$program','$batch','$timeing_from','$timeing_to','$child_photo','$father_photo','$mother_photo',
'$name_child','$gender','$dob','$pob','$height','$weight','$blood','$uniform_reg','$uniform_win','$Lang','$house',
'$street','$area','$landmark','$city','$state','$pin','$telephone','$mobile','$child_stay','$M_name','$M_house',
'$M_street','$M_area','$M_landmark','$M_city','$M_state','$M_Apin','$M_phone','$M_occu','$M_guali',
'$M_des','$M_office','$M_Opin','$M_contact','$M_mob','$M_email','$M_medical','$F_name','$F_house','$F_street',
'$F_area','$F_landmark','$F_city','$F_state','$F_Apin','$F_phone','$F_occu','$F_guali','$F_des',
'$F_office','$F_Opin','$F_contact','$F_mob','$F_email','$F_medical','$z1_name','$z1_gender','$z1_dob','$z1_school','$z1_std',
'$z1_alumni','$z2_name','$z2_gender','$z2_dob','$z2_school','$z2_std','$z2_alumni','$z01_name','$z01_gender','$z01_rela',
'$z01_dob','$z02_name','$z02_gender','$z02_rela','$z02_dob','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8',
'$v9','$v10','$v11','$E1_name','$E1_address','$E1_pin','$E1_phone','$E1_mobile','$E1_email','$E1_rela','$E2_name',
'$E2_address','$E2_pin','$E2_phone','$E2_mobile','$E2_email','$E2_rela','$doc_name','$doc_add','$doc_pin','$doc_p','$doc_mob',
'$doc_email','$al','$al_dics','$iss','$iss_disc','$medic','$medic_disc','$understand',
'$comment','$batch','$timing','$odate','$invoice','$amount','$pdf1','$pdf2','$pdf3')"; 
  
        // Execute query 
       $fireQuery= mysqli_query($connection, $sql); 
		if($fireQuery)
        {
            echo "<script>window.alert('Data Inserted Succesfully..');</script>";
			echo "<script>window.location.href='index.php#pricing'</script>";
            

			
        }
        else
        {
           //
            
			echo mysqli_error($connection);
			//echo "<script>window.alert('Data Insertion Failed');</script>";
        
        }
	  
  
  
  
  
  
  
  }
  ?>
  </div>
  </body>
  </html>
  