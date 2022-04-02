
<html>

<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
session_start();
if(isset($_POST['Back']))
 {
	 echo "<script>window.location.href='/hostel/fee_pay.php'</script>";
 }
if(isset($_POST['submit']))
{		
$studid=$_POST['id'];
		





	
	$fee=$_POST['fee'];
	
	$sql = "UPDATE `register` SET `amount`=`amount`+'$fee' WHERE `child_Id` ='$studid'";
	if($res = mysqli_query($connection, $sql))
	{
		echo "<script>window.alert('you have Added $fee');</script>";
		echo "<script>window.location.href='fee_add.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
	
}



?> 
</body>
</html>





