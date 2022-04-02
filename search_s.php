<html>
<head>
<?php
include('nav.php');
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style></head>
<body>
<div align=center>
<?php

    $connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
?>

<h2> Search your student For <br> Admission Form Details</h2>
<br>
<br>
<form method="post">
	Enter Student ID &nbsp&nbsp<input type="text" name="sid" required>
	
	<input type="submit" name="submit" value="ADD">
</form>
<?php
    
	
    if(isset($_POST['submit']))
    {
        $studid=$_POST['sid'];
		
	
       
		
		
		$sql="SELECT `child_id`, `F_no`, `child_no`, `program`, `batch`, `timeing_from`, `timeing_to`, `Image1`, `Image2`,
		`Image3`, `name_child`, `gender`, `dob`, `pob`, `height`, `weight`, `blood`, `uniform_reg`, `uniform_win`, `Lang`,
		`House`, `Street_name`, `Area`, `Landmmark`, `City`, `State`, `Pin`, `telephone`, `Mobile`, `Child_Stay`, `M_name`,
		`M_House`, `M_Street`, `M_Area`, `M_Landmmark`, `M_City`, `M_State`, `M_APin`, `M_Phone`, `M_Occupation`, 
		`M_Gualification`, `M_Designation`, `M_Office`, `M_OPin`, `M_Contact`, `M_Mobile`, `M_Email`, `M_Medial`, `F_name`,
		`F_House`, `F_Street`, `F_Area`, `F_Landmmark`, `F_City`, `F_State`, `F_APin`, `F_Phone`, `F_Occupation`,
		`F_Gualification`, `F_Designation`, `F_Office`, `F_OPin`, `F_Contact`, `F_Mobile`, `F_Email`, `F_Medial`, `1_Name`,
		`1_gender`, `1_dob`, `1_school`, `1_std`, `1_alumni`, `2_Name`, `2_gender`, `2_dob`, `2_school`, `2_std`, `2_alumni`,
		`01_Name`, `01_gender`, `01_relationship`, `01_dob`, `02_Name`, `02_gender`, `02_relationship`, `02_dob`, `v_1`,
		`v_2`, `v_3`, `v_4`, `v_5`, `v_6`, `v_7`, `v_8`, `v_9`, `v_10`, `v_11`, `E1_name`, `E1_address`, `E1_pin`, `E1_phone`,
		`E1_mobile`, `E1_email`, `E1__rela`, `E2_name`, `E2_address`, `E2_pin`, `E2_phone`, `E2_mobile`, `E2_email`,
		`E2__rela`, `DOC_name`, `DOC_add`, `DOC_pin`, `DOC_mobile`, `DOC_email`, `allergies`, `allergies_discp`, `issue`,
		`issue_discp`, `medication`, `medication_discp`, `understand`, `comment`, `Batch_detail`, `timing`, `date`,
		`invoice`, `amount` FROM `register` WHERE `child_Id`='$studid'";

		$result = mysqli_query($connection, $sql);
				if(mysqli_num_rows($result)!=0)
    {
		echo "<table border=1 style='width:100%'>";
		echo "<tr>";
		while($row = mysqli_fetch_array($result))  
        {$c="http://localhost/kidzee/Image/";
				$cpn=$row['Image1'];
				$cx="\\";
				$photo=$c.$cx.$cpn;
		$f="http://localhost/kidzee/Image/";
				$fpn=$row['Image2'];
				$fx="\\";
				$photo=$f.$fx.$fpn;
		$m="http://localhost/kidzee/Image/";
				$mpn=$row['Image3'];
				$mx="\\";
				$photo=$m.$mx.$mpn;
			echo "<td width=50%>Child Id</td>";
			echo "<td>" ,$row[0], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Form No</td>";
			echo "<td>" ,$row[1], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Child No</td>";
			echo "<td>" ,$row[2], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Name of Program</td>";
			echo "<td>" ,$row[3], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Batch</td>";
			echo "<td>" ,$row[4], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>timing From</td>";
			echo "<td>" ,$row[5], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>timing To</td>";
			echo "<td>" ,$row[6], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Child photo</td>";
			echo "<td  align='center'><img src='http://localhost/kidzee/Image/".$cpn."' width=250px  height=250px style=float:center></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Father photo</td>";
			echo "<td align='center'><img src='http://localhost/kidzee/Image/".$fpn."' width=250px  height=250px style=float:center></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mother photo</td>";
			echo "<td align='center'><img src='http://localhost/kidzee/Image/".$mpn."' width=250px  height=250px style=float:center></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Child Name</td>";
			echo "<td>" ,$row[10], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Gender</td>";
			echo "<td>" ,$row[11], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Date Of Birth</td>";
			echo "<td>" ,$row[12], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Place of Birth</td>";
			echo "<td>" ,$row[13], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Height(cm)</td>";
			echo "<td>" ,$row[14], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Weight(Kg)</td>";
			echo "<td>" ,$row[15], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Blood Group</td>";
			echo "<td>" ,$row[16], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Uniform Size </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Regular</td>";
			echo "<td>" ,$row[17], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Winter</td>";
			echo "<td>" ,$row[18], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Languages spoken at home:</td>";
			echo "<td>" ,$row[19], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Address:House No</td>";
			echo "<td>" ,$row[20], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Street name</td>";
			echo "<td>" ,$row[21], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Area </td>";
			echo "<td>" ,$row[21], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Landmmark </td>";
			echo "<td>" ,$row[22], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>City </td>";
			echo "<td>" ,$row[23], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>State </td>";
			echo "<td>" ,$row[24], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Pin </td>";
			echo "<td>" ,$row[25], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Contact Number </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>telephome number</td>";
			echo "<td>" ,$row[26], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile number</td>";
			echo "<td>" ,$row[27], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Child Stay/live With</td>";
			echo "<td>" ,$row[28], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Mather's/Guardian's Details: </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Name</td>";
			echo "<td>" ,$row[29], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Resideantial:House No</td>";
			echo "<td>" ,$row[30], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Street name</td>";
			echo "<td>" ,$row[31], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Area </td>";
			echo "<td>" ,$row[32], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Landmmark </td>";
			echo "<td>" ,$row[33], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>City </td>";
			echo "<td>" ,$row[34], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>State  </td>";
			echo "<td>" ,$row[35], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Pin </td>";
			echo "<td>" ,$row[36], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Phone Number</td>";
			echo "<td>" ,$row[37], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Occupation</td>";
			echo "<td>" ,$row[38], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Qualification</td>";
			echo "<td>" ,$row[39], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Designation</td>";
			echo "<td>" ,$row[40], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Office Address</td>";
			echo "<td>" ,$row[41], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Pin</td>";
			echo "<td>" ,$row[42], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Contact No</td>";
			echo "<td>" ,$row[43], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile NO</td>";
			echo "<td>" ,$row[44], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Email</td>";
			echo "<td>" ,$row[45], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Medial history</td>";
			echo "<td>" ,$row[46], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Father's/Guardian's Details: </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Name</td>";
			echo "<td>" ,$row[47], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Resideantial:House No</td>";
			echo "<td>" ,$row[48], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Street name</td>";
			echo "<td>" ,$row[49], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Area </td>";
			echo "<td>" ,$row[50], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Landmmark </td>";
			echo "<td>" ,$row[51], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>City </td>";
			echo "<td>" ,$row[52], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>State </td>";
			echo "<td>" ,$row[53], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Pin </td>";
			echo "<td>" ,$row[54], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Phone Number</td>";
			echo "<td>" ,$row[55], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Occupation</td>";
			echo "<td>" ,$row[56], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Qualification</td>";
			echo "<td>" ,$row[57], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Designation</td>";
			echo "<td>" ,$row[58], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Office Address</td>";
			echo "<td>" ,$row[59], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Pin</td>";
			echo "<td>" ,$row[60], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Contact No</td>";
			echo "<td>" ,$row[61], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile NO</td>";
			echo "<td>" ,$row[62], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Email</td>";
			echo "<td>" ,$row[63], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Medial history</td>";
			echo "<td>" ,$row[64], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Siblings Name(if any) </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>1) </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Name </td>";
			echo "<td>" ,$row[65], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>gender</td>";
			echo "<td>" ,$row[66], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Date of birth</td>";
			echo "<td>" ,$row[67], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>School/attending </td>";
			echo "<td>" ,$row[68], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Standard </td>";
			echo "<td>" ,$row[69], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>KIDZEE alumni</td>";
			echo "<td>" ,$row[70], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>2) </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Name </td>";
			echo "<td>" ,$row[71], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>gender</td>";
			echo "<td>" ,$row[72], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Date of birth</td>";
			echo "<td>" ,$row[73], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>School/attending</td>";
			echo "<td>" ,$row[74], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Standard </td>";
			echo "<td>" ,$row[75], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>KIDZEE alumni</td>";
			echo "<td>" ,$row[76], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Additional Member in the family:(if any) </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>1) </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Name </td>";
			echo "<td>" ,$row[77], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>gender</td>";
			echo "<td>" ,$row[78], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>relationship with child</td>";
			echo "<td>" ,$row[79], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Date of birth</td>";
			echo "<td>" ,$row[80], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>2) </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Name </td>";
			echo "<td>" ,$row[81], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>gender</td>";
			echo "<td>" ,$row[82], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>relationship with child</td>";
			echo "<td>" ,$row[83], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Date of birth</td>";
			echo "<td>" ,$row[84], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Vaccine </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>BCG Oral Polio Hep B</td>";
			echo "<td>" ,$row[85], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Oral Polio DPT Hep B</td>";
			echo "<td>" ,$row[86], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Oral Polio DPT</td>";
			echo "<td>" ,$row[87], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Oral Polio DPT</td>";
			echo "<td>" ,$row[88], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Oral Polio DPT</td>";
			echo "<td>" ,$row[89], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Measles</td>";
			echo "<td>" ,$row[90], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>MMR</td>";
			echo "<td>" ,$row[91], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Oral Polio+ DPT 1st booster	</td>";
			echo "<td>" ,$row[92], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Typhoid vaccine	</td>";
			echo "<td>" ,$row[93], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Oral Polio DPT - 2nd booster	</td>";
			echo "<td>" ,$row[94], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>TT(Tetanus) 3rd booster hep b booster	</td>";
			echo "<td>" ,$row[95], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<tr>";
			echo "<td colspan=2> EMERGENCY CONTACT</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>1)</td>";
			echo "</tr>";
			echo "<td>NAME </td>";
			echo "<td>" ,$row[96], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Address </td>";
			echo "<td>" ,$row[97], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>PIN </td>";
			echo "<td>" ,$row[98], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Home phone</td>";
			echo "<td>" ,$row[99], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile NO</td>";
			echo "<td>" ,$row[100], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Email</td>";
			echo "<td>" ,$row[101], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Relationship with child </td>";
			echo "<td>" ,$row[102], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>2)</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>NAME </td>";
			echo "<td>" ,$row[103], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Address </td>";
			echo "<td>" ,$row[104], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>PIN </td>";
			echo "<td>" ,$row[105], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Home phone</td>";
			echo "<td>" ,$row[106], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile NO</td>";
			echo "<td>" ,$row[107], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Email</td>";
			echo "<td>" ,$row[108], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Relationship with child </td>";
			echo "<td>" ,$row[109], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Family Doctor</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>NAME </td>";
			echo "<td>" ,$row[110], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Address </td>";
			echo "<td>" ,$row[111], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>PIN </td>";
			echo "<td>" ,$row[112], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Home phone</td>";
			echo "<td>" ,$row[113], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Mobile NO</td>";
			echo "<td>" ,$row[114], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Email</td>";
			echo "<td>" ,$row[115], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Does your cild have any allergies</td>";
			echo "<td>" ,$row[116], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>if yes the please explain</td>";
			echo "<td>" ,$row[117], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>does your child have any physical,emotional or behavioural issue that may interfere with his/her learning</td>";
			echo "<td>" ,$row[118], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>if yes the please explain</td>";
			echo "<td>" ,$row[119], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>At home does your child take an daily medication?</td>";
			echo "<td>" ,$row[120], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>if yes the please explain</td>";
			echo "<td>" ,$row[121], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Is there any futhere information you feel we should know that may help us understand your child?</td>";
			echo "<td>" ,$row[122], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Any other comment</td>";
			echo "<td>" ,$row[123], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan=2>Office use</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Batch details</td>";
			echo "<td>" ,$row[124], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>timing </td>";
			echo "<td>" ,$row[125], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Date </td>";
			echo "<td>" ,$row[126], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Invoice/receipt No</td>";
			echo "<td>" ,$row[127], "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Amount</td>";
			echo "<td>" ,$row[128], "</td>";
			
			
			
			
		}
		
		echo "</tr>";
		echo "</table>";
		
	} 
	else
	{
		echo "Enter Correct Child Id";
    echo mysqli_error($connection);
    }
	}
?>


</div>
</body>
</html>
