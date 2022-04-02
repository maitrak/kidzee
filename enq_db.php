<?php
    $connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	
    if(isset($_POST['submit']))
    {
        $sr_no=$_POST['sr_no'];
        $Enquiry_no=$_POST['Enquiry_no'];
        $date=$_POST['date'];
        $sname=$_POST['sname'];
        $admission=$_POST['admission'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $preschool=$_POST['preschool'];
        $preschoolD=$_POST['preschoolD'];
        $class=$_POST['class'];
        $father=$_POST['father'];
        $mother=$_POST['mother'];
        $addr=$_POST['addr'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $Efather=$_POST['Efather'];
        $Emother=$_POST['Emother'];
        $Ofather=$_POST['Ofather'];
        $Omother=$_POST['Omother'];
        $KIDZEE=$_POST['KIDZEE'];
        $converted="--";
	
        $sqlQuery="INSERT INTO `enq`(`sname`, `Enquiry_no`,`sr_no`, `date`, `admission`,`class`, `dob`, `gender`, `preschool`,`preschool_desc`, `father`, `mother`, `addr`, `contact`, `email`, `Efather`, `Emother`, `Ofather`, `Omother`, `KIDZEE`,`converted`) 
		                   VALUES ('$sname','$Enquiry_no','$sr_no','$date','$admission','$class','$dob','$gender','$preschool','$preschoolD','$father','$mother','$addr','$contact','$email','$Efather','$Emother','$Ofather','$Omother','$KIDZEE','$converted')";
        $fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
            echo "<script>window.alert('Data Insertion succesfully..');</script>";
            echo "<script>window.location.href='index.php#pricing'</script>";
        }
        else
        {
            echo "<script>window.alert('Data Insertion Failed');</script>";
           // echo "<script>window.location.href='../registrationFormAdmin.php'</script>";
		  echo  mysqli_error($connection);

        }
    }
?>