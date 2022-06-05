<html>
<body>
<?php
  include("connection.php");
?>
<?php
include('nav.php');
?>
<h2> Search your student </h2>
<br>
<br>
<form method="post">
	Enter Student ID &nbsp&nbsp<input type="text" name="sid" required>
	
	<input type="submit" name="submit" value="Search">
</form>
<?php
    
	
    if(isset($_POST['submit']))
    {
        $studid=$_POST['sid'];
		
	
       
		
		
		$sql="SELECT `Stud_Id` FROM `enq` WHERE `Stud_Id`='$studid'";

		$result = mysqli_query($connection, $sql);
		if(mysqli_num_rows($result)!=0)
    {
        $row=mysqli_fetch_assoc($result);

        echo "<script>window.alert('Record Found');</script>";
		?>
		<form method="post">
			<label >Child Converted</label><br>
			<input type="radio"  name="convert_child" value="Yes">
			<label >Yes</label><br>
			<input type="radio"  name="convert_child" value="No">
			<label >No</label><br>
			<input type="submit" name="convert" value="convert">
		</form>
	    <?php
	
	
			
		if(isset($_POST['convert']))
		{
				$convert=$_POST['convert_child'];
			$sql1="UPDATE `enq` SET `converted`='$convert' WHERE `Stud_Id`='$studid'";
			
			$result1 = mysqli_query($connection, $sql1);
			if($result1)
			{
				echo "<script>window.alert('Record Found');</script>";
			}
			else
			{
			echo mysqli_error($connection);
			}
			
		}
		
		
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
