<html>
<body>
<div align=center
<?php
session_start();
    $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
?>
<?php
include('nav.php');
?>
<h2> Search Your Student For<br> Updateing Photo/Upload Photo </h2>
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
		
	
       
		
		
		$sql="SELECT `admission_id`, `name`, `nrr`, `Session`, `acc_year`, `kidzee_enrol`, `kewi`, `class`, `form_fee`, `mode`, `form_no`, `br_no`, `i_no`, `kit_order`, `kit_given`, `admis_date`, `care`, `comitted`, `comitted_fee`, `es`, `disc`, `tran1`, `amt1`, `mode1`, `rec1`, `no1`, `br_no1`, `tran2`, `amt2`, `mode2`, `rec2`, `no2`, `br_no2`, `tran3`, `amt3`, `mode3`, `rec3`, `no3`, `br_no3`, `tran4`, `amt4`, `mode4`, `rec4`, `no4`, `br_no4`, `tran5`, `amt5`, `mode5`, `rec5`, `no5`, `br_no5`, `tran6`, `amt6`, `mode6`, `rec6`, `no6`, `br_no6`, `tran7`, `amt7`, `mode7`, `rec7`, `no7`, `br_no7`, `tran8`, `amt8`, `mode8`, `rec8`, `no8`, `br_no8`, `tran9`, `amt9`, `mode9`, `rec9`, `no9`, `br_no9`, `tran10`, `amt10`, `mode10`, `rec10`, `no10`, `br_no10`, `tran11`, `amt11`, `mode11`, `rec11`, `no11`, `br_no11`, `tran12`, `amt12`, `mode12`, `rec12`, `no12`, `br_no12`, `refund_dt`, `chq_onl`, `refund_tran_no`, `refund_amt`, `chq_no`, `p_amt`, `dis_date`, `next`, `mode_dis`, `dis_case`, `dis_no`, `remark`, `pending` FROM `add` WHERE `admission_id` ='$studid'";


		$result = mysqli_query($connection, $sql);
		if(mysqli_num_rows($result)!=0)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['id']=$studid;
		echo $_SESSION['username'];
        echo "<script>window.alert('Record Found');</script>";
		echo "<script>window.location.href='photo.php?id=".$studid."'</script>";
    }
		else
		{
        echo "No records matching your query were found.";
		}
	} 
	else
	{
    echo mysqli_error($connection);
    }
?>

</div>

</body>
</html>
