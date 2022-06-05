











  <?php
  
  include("connection.php");
	if(isset($_POST['submit']))
    {
		$enq_date=$_POST['enq_date'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$Gender=$_POST['Gender'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$gname=$_POST['gname'];
		$Ekidzee=$_POST['Ekidzee'];
		$Class=$_POST['Class'];
		$req=$_POST['req'];
		$Mobile1=$_POST['Mobile1'];
		$Mobile2=$_POST['Mobile2'];
		$emailId=$_POST['emailId'];
		$soc_name=$_POST['soc_name'];
		$addr1=$_POST['addr1'];
		$addr2=$_POST['addr2'];
		echo $convert_enq=$_POST['convert_enq'];
		$followup_date1=$_POST['followup_date1'];
		$remark1=$_POST['remark1'];
		$followup_date2=$_POST['followup_date2'];
		$remark2=$_POST['remark2'];
		$followup_date3=$_POST['followup_date3'];
		$remark3=$_POST['remark3'];
		$followup_date4=$_POST['followup_date4'];
		$remark4=$_POST['remark4'];
		$followup_date5=$_POST['followup_date5'];
		$remark5=$_POST['remark5'];
		$studid=$_POST['foo'];


	
		$sql="UPDATE `enquiry_step1` SET `enq_date`='$enq_date',`name`='$name',`dob`='$dob',`Gender`='$Gender',`fname`='$fname',`mname`='$mname',`gname`='$gname',`Ekidzee`='$Ekidzee',`Class`='$Class',`req`='$req',`Mobile1`='$Mobile1',`Mobile2`='$Mobile2',`emailId`='$emailId',`soc_name`='$soc_name',`addr1`='$addr1',`addr2`='$addr2',`convert_enq`='$convert_enq',`followup_date1`='$followup_date1',`remark1`='$remark1',`followup_date2`='$followup_date2',`remark2`='$remark2',`followup_date3`='$followup_date3',`remark3`='$remark3',`followup_date4`='$followup_date4',`remark4`='$remark4',`followup_date5`='$followup_date5',`remark5`='$remark5' WHERE `NO`='$studid'";
	
		$fireQuery=mysqli_query($connection,$sql);
        if($fireQuery)
        {
            echo "<script>window.alert('Record Added');</script>";
			echo "<script>window.location.href='index.php#step1'</script>";
			
        }
        else
        {
			
            echo "<script>window.alert('Data Insertion Failed');</script>";
           
		  echo  mysqli_error($connection);

        }
	
	
	
	
	
	

	}	
	else
	{
		echo "fail";
	}
  
?> 