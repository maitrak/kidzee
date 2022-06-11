<?php  
session_start();
include("connection.php");
include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
	
}?>
<html>
<body>
   <div style="margin-left:16%">

<h2> Update Notice</h2>
<br>
<br>
<form method="post">
	<table>
	<tr>
	<td>
	Notice <td><input type="text" name="Head" required></td>
	</td>
	</tr>
	
	<tr>
	<td>
	Information<td><input type="text" rows="4" cols="50"name="body" required></td>
	</td>
	</tr>
	<tr>
	<td>
	<input type="submit" name="submit" value="ADD">
	</td>
	</tr>
	
</form>
<?php
    
    if(isset($_POST['submit']))
    {
        $head=$_POST['Head'];
        $body=$_POST['body'];
		
		
		$sql="UPDATE `notice` SET `title`='$head',`body`='$body'";

		if($result = mysqli_query($connection, $sql))
		{
		echo "<script>window.alert('Record Updated');</script>";
		} else{
        echo "No records matching your query were found.";
		}
	} else{
    echo mysqli_error($connection);
    }
?>