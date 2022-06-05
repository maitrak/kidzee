











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
		$KIDZEE=$_POST['KIDZEE'];
		$f_oocu=$_POST['f_oocu'];
		$m_oocu=$_POST['m_oocu'];
		$f_high=$_POST['f_high'];
		$m_high=$_POST['m_high'];
		$convert_enq=$_POST['convert_enq'];
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


	
		$sql="INSERT INTO `enquiry_step1`(`enq_date`, `name`, `dob`, `Gender`, `fname`, `mname`, `gname`, `Ekidzee`, `Class`, `req`, `Mobile1`, `Mobile2`, `emailId`, `soc_name`, `addr1`, `addr2`,`know`, `f_occu`, `m_occu`, `f_high`, `m_high`, `convert_enq`, `followup_date1`, `remark1`, `followup_date2`, `remark2`, `followup_date3`, `remark3`, `followup_date4`, `remark4`, `followup_date5`, `remark5`) 
		VALUES                          ('$enq_date','$name','$dob','$Gender','$fname','$mname','$gname','$Ekidzee','$Class','$req','$Mobile1','$Mobile2','$emailId','$soc_name','$addr1','$addr2','$KIDZEE','$f_oocu','$m_oocu','$f_high','$m_high','$convert_enq','$followup_date1','$remark1','$followup_date2','$remark2','$followup_date3','$remark3','$followup_date4','$remark4','$followup_date5','$remark5')";
	
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