<html>
<body>
<?php
session_start();
    $connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
?>
<?php
include('nav.php');
?>

<h2> Search your student </h2>
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
		
	
       
		
		
		$sql="SELECT `Stud_Id` FROM `enq` WHERE `Stud_Id`='$studid'";

		if($result = mysqli_query($connection, $sql))
		{
				echo "<script>window.alert('Record Found');</script>";
				$_SESSION['Id_convert']=$studid;
				echo "<script>window.location.href='student_update.php'</script>";
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



</body>
</html>
