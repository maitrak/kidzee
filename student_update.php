<html>
<body>
<div align=center>
<?php
session_start();
include('nav.php');
?>
<h1>Student Enquiry Form Update</h1>
<form  method="post">
  <label >Serial No:</label>
  <input type="text" id="sname" name="sname"><br>
  <label >Enquiry No:</label>
  <input type="text" id="Enquiry_no" name="Enquiry_no"><br>
  <label >Seeking Admission for:</label>
  <input type="radio"  name="admission" value="Play Group">
  <label >Play Group</label><br>
  <input type="radio"  name="admission" value="Nursary">
  <label >Nursary</label><br>
  <input type="radio"  name="admission" value="Jr. KG">
  <label >Jr. KG</label><br>
  <input type="radio"  name="admission" value="Sr. KG">
  <label >Sr. KG</label><br>
  <input type="radio"  name="admission" value="Activity Center">
  <label >Activity Center</label><br>
  <label >Date of birth</label>
  <input type="date" name="dob" required><br>
  <label >Gender</label>
  <input type="text" id="gender" name="gender"><br>
  <label >If attending a preschool and class details</label>
  <input type="text" id="preschool" name="preschool"><br>
  <label >Name of parents:</label>
  <label >Father:</label>
  <input type="text" id="father" name="father"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Mother:</label>
  <input type="text" id="mother" name="mother"><br>
  <label >Address</label><br>
  <input type="text" id="addr" name="addr" size="185" height="60%"><br>
  <label >Phone Number</label>
  <input type="text" id="contact" name="contact" ><br>
  <label >Email address</label>
  <input type="email" id="email" name="email" ><br>
  <label >Parents Education background:</label>
  <label >Father:</label>
  <input type="text" id="Efather" name="Efather"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Mother:</label>
  <input type="text" id="Emother" name="Emother"><br>
  <label >Parents Occupation:</label>
  <label >Father:</label>
  <input type="text" id="Ofather" name="Ofather"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label >Mother:</label>
  <input type="text" id="Omother" name="Omother"><br>
  <label >How did ou come to know of KIDZEE?:</label><br>
  <input type="radio"  name="KIDZEE" value="Newspaper Ad">
  <label >Newspaper Ad</label><br>
  <input type="radio"  name="KIDZEE" value="Banner">
  <label >Banner</label><br>
  <input type="radio"  name="KIDZEE" value="Mailer">
  <label >Mailer</label><br>
  <input type="radio"  name="KIDZEE" value="Friends">
  <label >Friends</label><br>
  <input type="radio"  name="KIDZEE" value="Cable ">
  <label >Cable TV</label><br>
  <input type="radio"  name="KIDZEE" value="Other ">
  <label >Other</label><br>
  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  </form>
  <?php
  
  
if(!isset($_SESSION['Id_convert']))
{
    echo "<script>window.alert(' error ->please go to appriate page');</script>";
    echo "<script>window.location.href='edit_enquiry.php'</script>";
	
}
    $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	
	
	echo $studid=$_SESSION['Id_convert'];
    if(isset($_POST['submit']))
    {
        $sname=$_POST['sname'];
        $Enquiry_no=$_POST['Enquiry_no'];
        $admission=$_POST['admission'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $preschool=$_POST['preschool'];
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
		
	
        $sqlQuery="UPDATE `enq` SET `sname`='$sname',`Enquiry_no`='$Enquiry_no',`admission`='$admission',`dob`=' $dob',`gender`='$gender'
		,`preschool`='$preschool',`father`='$father',`mother`='$mother',`addr`='$addr',`contact`='$contact',`email`='$email'
		,`Efather`=' $Efather',`Emother`='$Emother',`Ofather`=' $Ofather',`Omother`='$Omother',`KIDZEE`=''$KIDZEE  WHERE `Stud_Id`='$studid'";

        $fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
            echo "<script>window.alert('Record update');</script>";
            //echo "<script>window.location.href='../adminpage.php'</script>";
			    unset($_SESSION['studentId']);
        }
        else
        {
			
            echo "<script>window.alert('Data Insertion Failed');</script>";
           // echo "<script>window.location.href='../registrationFormAdmin.php'</script>";
		  echo  mysqli_error($connection);

        }
    }
?>
  </div>
  </body>
  </html>
  