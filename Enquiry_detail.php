<html>
<body>
<?php
include('nav.php');
  
?>
<head>
<style>
.red-star {
    color: red;
}
</style>
</head>
<div align=center>
<h1> Counselor Diary </h1>
<form  method="post" action="Enquiry_add.php">
  <h3>Add New Enquiry Details</h3>
    
  <label >DATE OF ENQUIRY <span class="red-star">★</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp       </label>
  <input type="date" name="enq_date" required><br>  
  <label >Name of the Child &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="name" size="50" name="name" ><br>
   <label >DOB of Child &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="date" name="dob"><br>  
  <label >Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <select id="Gender" name="Gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
  </select><br>
  <label >Father's Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="fname" name="fname" size="50"><br>  
  <label >Mother's Name/Gardian's Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="mname" name="mname" size="50"><br>  
  <label >Mode of Enquiry &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
   
  <select id="gname" name="gname">
  <option value="Walkin" >Walkin</option>
  <option value="Phone Call" >Phone Call</option>
  <option value="Google Form" >Google Form</option>
  <option value="Facebook" >Facebook</option>
  <option value="Google Website" >Google Website</option>
  <option value="Kidzee HO Website" >Kidzee HO Website</option>
  <option value="Others" >Others</option>
  </select>
  <br>
  <label >Entered in Ekidzee &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label> 
  <select id="Ekidzee" name="Ekidzee">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>
  <label >Class &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <select id="Class" name="Class">
  <option value="Annual - Parent Toadler Programme">Annual - Parent Toadler Programme</option>
  <option value="Annual - Nursery">Annual - Nursery</option>
  <option value="Annual - Junior Kindergarten">Annual - Junior Kindergarten</option>
  <option value="Annual - Senior Kindergarten">Annual - Senior Kindergarten</option>
  <option value="Mid-Term - Parent Toadler Programme">Mid-Term - Parent Toadler Programme</option>
  <option value="Mid-Term - Nursery">Mid-Term - Nursery</option>
  <option value="Mid-Term - Junior Kindergarten">Mid-Term - Junior Kindergarten</option>
  <option value="Mid-Term - Senior Kindergarten">Mid-Term - Senior Kindergarten</option>
  <option value="Early Start - Parent Toadler Programme">Early Start - Parent Toadler Programme</option>
  <option value="Early Start - Nursery">Early Start - Nursery</option>
  <option value="Early Start - Junior Kindergarten">Early Start - Junior Kindergarten</option>
  <option value="Early Start - Senior Kindergarten">Early Start - Senior Kindergarten</option>
  <option value="Day Care">Day Care</option>
  </select><br>
  <label >Parent Requirement And Walkin/Phone/Online Enquiry ? <span class="red-star">★</span>&nbsp&nbsp</label>
  <input type="text" id="req" name="req" required><br>  
  <label >Father Mobile&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="Mobile1" name="Mobile1" ><br>  
  <label >Mother Mobile&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="Mobile2" name="Mobile2" ><br>
  <label >EMAIL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="email" name="emailId"><br>
  <label >Society Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="soc_name" name="soc_name" ><br>  
  <label >Address 1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="addr1" name="addr1" ><br> 
  <label >Address 2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="addr2" name="addr2" ><br>
    <label >How did you come to know of KIDZEE?:</label><br>
  <input type="radio"  name="KIDZEE" value="Newspaper Ad" checked="checked">
  <label >Newspaper Ad</label><br>
  <input type="radio"  name="KIDZEE" value="Pamphlet" >
  <label >Pamphlet</label><br>
  <input type="radio"  name="KIDZEE" value="Banner">
  <label >Banner</label><br>
  <input type="radio"  name="KIDZEE" value="Mailer">
  <label >Mailer</label><br>
  <input type="radio"  name="KIDZEE" value="Friends">
  <label >Friends</label><br>
  <input type="radio"  name="KIDZEE" value="Cable ">
  <label >Cable TV</label><br>
  <input type="radio"  name="KIDZEE" value="Facebook ">
  <label >Facebook</label><br>  
  <input type="radio"  name="KIDZEE" value="Facebook ">
  <label >WhatsApp</label><br>  
  <input type="radio"  name="KIDZEE" value="WhatsApp ">
  <label >Google</label><br> 
  <input type="radio"  name="KIDZEE" value="Google ">
  <label >Other</label><br>
  <label >Father's Occupation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="f_oocu" size="50" name="f_oocu" ><br>
  <label >Mother's Occupation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="m_oocu" size="50" name="m_oocu" ><br>  
  <label >Father's Highest Qualification</label>
  <input type="text" id="f_high" size="50" name="f_high" ><br>  
  <label >Mother's Highest Qualification</label>
  <input type="text" id="m_high" size="50" name="m_high" ><br>
  
  <label >Convered to Admission &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <select id="convert_enq" name="convert_enq">
  <option value="Follow Up">Follow Up</option>
  <option value="Converted to Admission">Converted to Admission</option>
  <option value="Not Interested">Not Interested</option>
  
  </select><br>
  <label >1 - Follow up Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="date" name="followup_date1"><br>  
  <label >1 - Follow up Remarks &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="remark1" name="remark1" ><br>  
  <label >2 - Follow up Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="date" name="followup_date2"><br>  
  <label >2 - Follow up Remarks &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="remark2" name="remark2" ><br>  
  <label >3 - Follow up Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="date" name="followup_date3"><br>  
  <label >3 - Follow up Remarks &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="remark3" name="remark3" ><br>  
  <label >4 - Follow up Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="date" name="followup_date4"><br>  
  <label >4 - Follow up Remarks &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="remark4" name="remark4" ><br>  
  <label >5 - Follow up Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="date" name="followup_date5"><br>  
  <label >5 - Follow up Remarks &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="remark5" name="remark5" ><br>


  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  
</form>
</div>
</body>
</html>
  