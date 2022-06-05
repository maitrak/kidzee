<?php 

session_start();
include("connection.php");
?>
<?php
include('nav.php');
?>
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

   <div style="margin-left:16%">

<h2> Fee payment</h2>
<b><form method="post" action="fee_payment.php">
Enter Student ID<input type="number" name="id" required>
Enter Fee Student paid<input type="number" name="fee" required>
</b>
<br>
<br>


<input type="submit" name="submit" value="Pay fee">
</form>
<br>
<br>
<br>
<br>
<?php



//$sql = "SELECT id, firstname, lastname FROM MyGuests";


//$studid=$_SESSION['studentId'];
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
		`invoice`, `amount` FROM `register`";


if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 align=left>";
            echo "<tr>";
                echo "<th>Student Id</th>";
                echo "<th>Full Name</th>";
                echo "<th>Fee</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[10]."</td>";
                echo "<td>" . $row[128] . " fee left</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}


?> 


</div>
</body>
</html>



	
