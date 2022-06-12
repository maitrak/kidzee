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
<?php
    
	
    if(isset($_GET['id']))
    {
        echo $teacher_id=$_GET['id'];
        
	
       
		
		
		$sql="SELECT * FROM `teacher` WHERE `ID` ='$teacher_id'";
		if($result = mysqli_query($connection, $sql)){
		if(mysqli_num_rows($result) > 0){
		$result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result))
		{
      

?>
   

<h2> Update Teacher</h2>
<b><form method="post" enctype="multipart/form-data">
Name of The Teacher<input type="text" name="Name"  value="<?php echo $row['Name']?>"><br>
Father's Name<input type="text" name="fName" value="<?php echo $row['fName']?>" ><br>
Mother's Name<input type="text" name="mName" value="<?php echo $row['mName']?>" ><br>
Spouse Name<input type="text" name="sName" value="<?php echo $row['sName']?>" ><br>
Society Name<input type="text" name="Society" value="<?php echo $row['Society']?>" ><br>
Correspondence Address<input type="text" name="Correspondence" value="<?php echo $row['Correspondence']?>" ><br>
Mobile Nuber 1<input type="text" name="Mobile1" value="<?php echo $row['Mobile1']?>" ><br>
Mobile Nuber 2<input type="text" name="Mobile2" value="<?php echo $row['Mobile2']?>" ><br>
Passoword<input type="text" name="Mobile3" value="<?php echo $row['Mobile3']?>" ><br>
Permanent Address<input type="text" name="Permanent" value="<?php echo $row['Permanent']?>" ><br>
PAN No<input type="text" name="PAN" value="<?php echo $row['PAN']?>" ><br>
Name As on Cheque<input type="text" name="Cheque" value="<?php echo $row['Cheque']?>" ><br>
Bank Name<input type="text" name="Bank" value="<?php echo $row['Bank']?>" ><br>
Bank Account No<input type="text" name="Bank_no" value="<?php echo $row['Bank_no']?>" ><br>
IFSC<input type="text" name="IFSC" value="<?php echo $row['IFSC']?>" ><br>
MICR<input type="text" name="MICR" value="<?php echo $row['MICR']?>" ><br>
2 Passport size Photographs
 <select id="Passport" name="Passport">
  <option value="Yes" <?php if($row['Passport'] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row['Passport'] == "NO") { echo "selected"; }?>>No</option>
  </select><br>

  <label >Photo ID Proof</label><br>
  <select id="Proof" name="Proof">
  <option value="PAN" <?php if($row['Proof'] == "PAN") { echo "selected"; }?>>PAN</option>
  <option value="Driving Licence" <?php if($row['Proof'] == "Driving Licence") { echo "selected"; }?>>Driving Licence</option>
  <option value="Adhaar" <?php if($row['Proof'] == "Adhaar") { echo "selected"; }?>>Adhaar</option>
  <option value="Govt ID" <?php if($row['Proof'] == "Govt ID") { echo "selected"; }?>>Govt ID</option>
  <option value="Voter ID" <?php if($row['Proof'] == "Voter ID") { echo "selected"; }?>>Voter ID</option>
  <option value="Passport" <?php if($row['Proof'] == "Passport") { echo "selected"; }?>>Passport</option>
  <option value="Others" <?php if($row['Proof'] == "Others") { echo "selected"; }?>>Others</option>
  </select><br>
  
    <label >Address Proof</label><br>
  <select id="Address_Proof" name="Address_Proof">
  <option value="Adhaar" <?php if($row['Address_Proof'] == "Adhaar") { echo "selected"; }?>>Adhaar</option>
  <option value="Rent Agreement" <?php if($row['Address_Proof'] == "Rent Agreement") { echo "selected"; }?> >Rent Agreement</option>
  <option value="Voter ID" <?php if($row['Address_Proof'] == "Voter ID") { echo "selected"; }?> >Voter ID</option>
  <option value="Passport" <?php if($row['Address_Proof'] == "Passport") { echo "selected"; }?> >Passport</option>
  <option value="Driving Licence" <?php if($row['Address_Proof'] == "Driving Licence") { echo "selected"; }?> >Driving Licence</option>
  <option value="Others" <?php if($row['Address_Proof'] == "Others") { echo "selected"; }?> >Others</option>
  </select><br>
  
  10th Certificate  <select id="Certi_10" name="Certi_10">
  <option value="Yes" <?php if($row['Certi_10'] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row['Certi_10'] == "No") { echo "selected"; }?>>No</option>
  </select><br>  
  12th Certificate  <select id="Certi_12" name="Certi_12">
  <option value="Yes" <?php if($row['Certi_12'] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row['Certi_12'] == "No") { echo "selected"; }?>>No</option>
  </select>  <br>
  Graduation  <select id="Graduation" name="Graduation">
  <option value="Yes" <?php if($row['Graduation'] == "Yes") { echo "selected"; }?> >Yes</option>
  <option value="No" <?php if($row['Graduation'] == "No") { echo "selected"; }?> >No</option>
  </select><br> 
  Post Graduation  <select id="Post" name="Post">
  <option value="Yes" <?php if($row['Post'] == "Yes") { echo "selected"; }?> >Yes</option>
  <option value="No" <?php if($row['Post'] == "No") { echo "selected"; }?> >No</option>
  </select><br>  
  Diploma  <select id="Diploma" name="Diploma">
  <option value="Yes" <?php if($row['Diploma'] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row['Diploma'] == "No") { echo "selected"; }?>>No</option>
  <option value="Others" <?php if($row['Diploma'] == "Others") { echo "selected"; }?>>Others</option>
  </select><br>  
  Diploma Other<input type="text" name="other" value="<?php echo $row['Diploma_other']?>" ><br>
  Achivements  <select id="Achivements" name="Achivements">
  <option value="Yes" <?php if($row['Achivements'] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row['Achivements'] == "No") { echo "selected"; }?>>No</option>
  <option value="Others" <?php if($row['Achivements'] == "Others") { echo "selected"; }?>>Others</option>
  </select><br> 
  Cheque Submitted  <select id="Cheque_Submitted" name="Cheque_Submitted">
  <option value="Yes" <?php if($row['Cheque_Submitted'] == "Yes") { echo "selected"; }?> >Yes</option>
  <option value="No" <?php if($row['Cheque_Submitted'] == "No") { echo "selected"; }?> >No</option>
  </select><br>
    <label >Date Of Join</label>
  <input type="date" name="join" value="<?php echo $row['date_join']?>" ><br>
Salary Per Month<input type="text" name="Salary" value="<?php echo $row['Salary']?>"  ><br>
Remarks<input type="text" name="Remarks" value="<?php echo $row['Remarks']?>" ><br>
  <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="submit" value="submit" >
</form>
<br>
<br>
<br>
<br>


</div>
</body>
</html>

<?php
    }
  }
    }}
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
			 "File was moved!";
			} else {
			 "No file found.";
			}
			}
	 
  //   $sqlQuery="INSERT INTO `teacher`( `Name`, `fName`, `mName`, `sName`, `Society`, `Correspondence`, `Mobile1`, `Mobile2`, `Mobile3`, `Permanent`, `PAN`, `Cheque`, `Bank`, `Bank_no`, `IFSC`, `MICR`, `Passport`, `Proof`, `Address_Proof`, `Certi_10`, `Certi_12`, `Graduation`, `Post`, `Diploma`,`Diploma_other`, `Achivements`, `Cheque_Submitted`, `date_join`, `Salary`, `Remarks`,`PDF`) 
	// VALUES ('$Name','$fName','$mName','$sName','$Society','$Correspondence','$Mobile1','$Mobile2','$Mobile3','$Permanent','$PAN','$Cheque','$Bank','$Bank_no','$IFSC','$MICR','$Passport','$Proof','$Address_Proof','$Certi_10','$Certi_12','$Graduation','$Post','$Diploma','$Diploma_other','$Achivements','$Cheque_Submitted','$join','$Salary','$Remarks','$photo_name')";
  //   $fireQuery=mysqli_query($connection,$sqlQuery);
      
    $sqlQuery="UPDATE `teacher` SET `Name`='$Name',`fName`='$fName',`mName`='$mName',`sName`='$sName',`Society`='$Society',`Correspondence`='$Correspondence',`Mobile1`='$Mobile1',`Mobile2`='$Mobile2',`Mobile3`='$Mobile3',`Permanent`='$Permanent',`PAN`='$PAN',`Cheque`='$Cheque',`Bank`='$Bank',`Bank_no`='$Bank_no',`IFSC`='$IFSC',`MICR`='$MICR',`Passport`='$Passport',`Proof`='$Proof',`Address_Proof`='$Address_Proof',`Certi_10`='$Certi_10',`Certi_12`='$Certi_12',`Graduation`='$Graduation',`Post`='$Post',`Diploma`='$Diploma',`Diploma_other`='$Diploma_other',`Achivements`='$Achivements',`Cheque_Submitted`='$Cheque_Submitted',`date_join`='$join',`Salary`='$Salary',`Remarks`='$Remarks',`PDF`='$photo_name'";
    
    $active="ACTIVE";
    $last_id = mysqli_insert_id($connection);
    $fireQuery=mysqli_query($connection,$sqlQuery);

    if($fireQuery)
    {
        
        //$_SESSION['UseraAme']=$row['UseraAme'];
        //$_SESSION['Password']=$row['Password'];
        echo "<script>window.alert('Teacher Updated Succcessfully');</script>";
			echo "<script>window.location.href='Teacher_View.php'</script>";

        
    }
    else
    {
        echo "<script>window.alert('Teacher Updated Failed');</script>";
       
    }
	}
?>



	
