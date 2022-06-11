<?php 
session_start();
include("connection.php");
include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
	
}
?>
<div style="margin-left:16%">
<html>
<head>
        
		
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    </head>
<body>

   

<h2> Add Teacher</h2>
<b><form method="post" enctype="multipart/form-data">
Name of The Teacher<input type="text" name="Name"  ><br>
Father's Name<input type="text" name="fName"  ><br>
Mother's Name<input type="text" name="mName"  ><br>
Spouse Name<input type="text" name="sName"  ><br>
Society Name<input type="text" name="Society"  ><br>
Correspondence Address<input type="text" name="Correspondence"  ><br>
Mobile Nuber 1<input type="text" name="Mobile1"  ><br>
Mobile Nuber 2<input type="text" name="Mobile2"  ><br>
Mobile Nuber 3<input type="text" name="Mobile3"  ><br>
Permanent Address<input type="text" name="Permanent"  ><br>
PAN No<input type="text" name="PAN"  ><br>
Name As on Cheque<input type="text" name="Cheque"  ><br>
Bank Name<input type="text" name="Bank"  ><br>
Bank Account No<input type="text" name="Bank_no"  ><br>
IFSC<input type="text" name="IFSC"  ><br>
MICR<input type="text" name="MICR"  ><br>
2 Passport size Photographs
 <select id="Passport" name="Passport">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>

  <label >Photo ID Proof</label><br>
  <select id="Proof" name="Proof">
  <option value="PAN">PAN</option>
  <option value="Driving Licence">Driving Licence</option>
  <option value="Adhaar">Adhaar</option>
  <option value="Govt ID">Govt ID</option>
  <option value="Voter ID">Voter ID</option>
  <option value="Passport">Passport</option>
  <option value="Others">Others</option>
  </select><br>
  
    <label >Address Proof</label><br>
  <select id="Address_Proof" name="Address_Proof">
  <option value="Adhaar">Adhaar</option>
  <option value="Rent Agreement">Rent Agreement</option>
  <option value="Voter ID">Voter ID</option>
  <option value="Passport">Passport</option>
  <option value="Driving Licence">Driving Licence</option>
  <option value="Others">Others</option>
  </select><br>
  
  10th Certificate  <select id="Certi_10" name="Certi_10">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>  
  12th Certificate  <select id="Certi_12" name="Certi_12">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select>  <br>
  Graduation  <select id="Graduation" name="Graduation">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br> 
  Post Graduation  <select id="Post" name="Post">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>  
  Diploma  <select id="Diploma" name="Diploma">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  <option value="Others">Others</option>
  </select><br>  
  Diploma Other<input type="text" name="other"  ><br>
  Achivements  <select id="Achivements" name="Achivements">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  <option value="Others">Others</option>
  </select><br> 
  Cheque Submitted  <select id="Cheque_Submitted" name="Cheque_Submitted">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>
    <label >Date Of Join</label>
  <input type="date" name="join"><br>
Salary Per Month<input type="text" name="Salary"  ><br>
Remarks<input type="text" name="Remarks"  ><br>
  <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="submit" value="submit">
</form>
<br>
<br>
<br>
<br>


</div>
</body>
</html>

<?php

include("connection.php");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	
			if(isset($_POST['submit']))
    {
    
    $Name=$_POST['Name'];
    $fName=$_POST['fName'];
    $mName=$_POST['mName'];
    $sName=$_POST['sName'];
    $Society=$_POST['Society'];
    $Correspondence=$_POST['Correspondence'];
    $Mobile1=$_POST['Mobile1'];
    $Mobile2=$_POST['Mobile2'];
    $Mobile3=$_POST['Mobile3'];
    $Permanent=$_POST['Permanent'];
    $PAN=$_POST['PAN'];
    $Cheque=$_POST['Cheque'];
    $Bank=$_POST['Bank'];
    $Bank_no=$_POST['Bank_no'];
    $IFSC=$_POST['IFSC'];
    $MICR=$_POST['MICR'];
    $Passport=$_POST['Passport'];
    $Proof=$_POST['Proof'];
    $Address_Proof=$_POST['Address_Proof'];
    $Certi_10=$_POST['Certi_10'];
    $Certi_12=$_POST['Certi_12'];
    $Graduation=$_POST['Graduation'];
    $Post=$_POST['Post'];
    $Diploma=$_POST['Diploma'];
    $Diploma_other=$_POST['other'];
    $Achivements=$_POST['Achivements'];
    $Cheque_Submitted=$_POST['Cheque_Submitted'];
    $join=$_POST['join'];
    $Salary=$_POST['Salary'];
    $Remarks=$_POST['Remarks'];
	
			$file_dir = "Teacher";
			
			foreach($_FILES as $file_name => $file_array) {
			echo "path: ".$file_array['tmp_name']."<br/>\n";
			echo $photo=$file_array['tmp_name']."<br/>\n";
			echo $photo_name=$file_array['name'];
 


			if (is_uploaded_file($file_array['tmp_name'])) {
			move_uploaded_file($file_array['tmp_name'],
			"$file_dir/".$file_array['name'])
			or die ("Couldn't move file");
			echo "File was moved!";
			} else {
			echo "No file found.";
			}
			}
	 
    $sqlQuery="INSERT INTO `teacher`( `Name`, `fName`, `mName`, `sName`, `Society`, `Correspondence`, `Mobile1`, `Mobile2`, `Mobile3`, `Permanent`, `PAN`, `Cheque`, `Bank`, `Bank_no`, `IFSC`, `MICR`, `Passport`, `Proof`, `Address_Proof`, `Certi_10`, `Certi_12`, `Graduation`, `Post`, `Diploma`,`Diploma_other`, `Achivements`, `Cheque_Submitted`, `date_join`, `Salary`, `Remarks`,`PDF`) 
	VALUES ('$Name','$fName','$mName','$sName','$Society','$Correspondence','$Mobile1','$Mobile2','$Mobile3','$Permanent','$PAN','$Cheque','$Bank','$Bank_no','$IFSC','$MICR','$Passport','$Proof','$Address_Proof','$Certi_10','$Certi_12','$Graduation','$Post','$Diploma','$Diploma_other','$Achivements','$Cheque_Submitted','$join','$Salary','$Remarks','$photo_name')";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    $active="ACTIVE";
    $last_id = mysqli_insert_id($connection);

    if($fireQuery)
    {
      $sqlQuery1= "INSERT INTO `teacher_status`(`teacher_id`, `status`) VALUES ($last_id,'$active')";
      $fireQuery1=mysqli_query($connection,$sqlQuery1);
      
        //$_SESSION['UseraAme']=$row['UseraAme'];
        //$_SESSION['Password']=$row['Password'];
        echo "<script>window.alert('Teacher Added Succcessfully');</script>";
        
    }
    else
    {
        echo "<script>window.alert('Teacher Added Failed');</script>";
       
    }
	}
?>



	
