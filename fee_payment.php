
<html>

<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
session_start();
if(isset($_POST['Back']))
 {
	 echo "<script>window.location.href='/kidzee/fee_pay.php'</script>";
 }
if(isset($_POST['submit']))
{		
$studid=$_POST['id'];
		





	
	$fee=$_POST['fee'];
	
	$sql = "UPDATE `register` SET `amount`=`amount`-'$fee' WHERE `child_Id` ='$studid'";
	if($res = mysqli_query($connection, $sql))
	{
		echo "<script>window.alert('you have paid $fee');</script>";
		$s=" ";
		$sql1 = "SELECT `child_id`, `F_no`, `child_no`, `program`, `batch`, `timeing_from`, `timeing_to`, `Image1`, `Image2`,
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
		if($result = mysqli_query($connection, $sql1)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            
                $name =$row['name_child'] ;	
        }
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	}
	else
	{
		echo mysqli_error($connection);
	}
	
}

$sql2="SELECT `child_id`, `F_no`, `child_no`, `program`, `batch`, `timeing_from`, `timeing_to`, `Image1`, `Image2`,
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
		
		if($result = mysqli_query($connection, $sql2)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            
				echo $row[128];
				$temp=0;
               if($row[128]<0)
			   {
						   echo "test";
				   	$sq3 = "UPDATE `register` SET `amount`='$temp' WHERE `child_Id` ='$studid'";
					if($res = mysqli_query($connection, $sq3))
					{
						echo "<script>window.alert('Please Insert valid amount.Amount less then current ');</script>";
						 echo "<script>window.location.href='fee_pay.php'</script>";
					}
			   }
        }
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
		}
		$sqlQuery = "INSERT INTO `invoice`(  `Stud_Id`, `Stud_name`, `fee`) VALUES ('$studid','$name','$fee')";
		$fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
           $max="SELECT max(Id) FROM invoice";
		   if($result = mysqli_query($connection, $max)){
				if(mysqli_num_rows($result) > 0){
				{
					while($row = mysqli_fetch_array($result))
					{
						 echo $highest_id = $row[0];
					}
				}
			}
		}
		   
		   
        }
		
		}

?> 
<form method="post">  
                          <input type="submit" name="Back" value="Back" /> 
                                               </form>
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>HMS</strong>
                        
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date  <?php

								echo date("Y-m-d h:i:sa");
							?></em>
							<br>
							Receipt <?php echo $highest_id?>
                    </p>
                    <p>
                        <!--  <em>Receipt #: 34522677W</em>-->
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt </h1>
                </div>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th style="text-align: center">Id</th>
                            <th class="text-center">Price</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $name; ?> </td></em></td>
                            <td class="col-md-9" style="text-align: center"> <?php echo $studid; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $fee; ?> </td></td>
                            
                        </tr>
                        
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php echo $fee; ?></strong></h4></td>
                        </tr>
						<tr>
						<td align=left><b>Signature</b></td>
						<td><img src="http://localhost/hostel/signature.png" width=150px height=140px></td>
						</tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>




