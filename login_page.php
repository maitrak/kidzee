<?php
session_start();
?>
<?php

include('sidebar.php');
include('connection.php');

if(!isset($_SESSION['Username']))
{
    echo "<script>window.alert('you have to Login First');</script>";
   echo "<script>window.location.href='index.php'</script>";
	
}
else
{
    $username=$_SESSION['Username'];
    $password=$_SESSION['Password'];
    $sqlQuery="SELECT  `username`, `password` FROM `login` WHERE `username`='$username' AND `password`='$password'  ";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    if(mysqli_num_rows($fireQuery)==0)
    {          
            echo "<script>window.alert('you have to Login First');</script>";
         echo "<script>window.location.href='index.php'</script>";
    }
}


?>

<html>
<head>
<style>

</style>
</head>

<body>
<div style="background-image: url(<?php echo $photo?>);">
</div>
<div
style=" background-image: url(bg.png); height: 600px; margin-left: 16%;"><br>
<div style="text-align: right; ">
<p style="font-size:110px">Hello&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
</div>
<br>
<div style="margin-left:40%">
<p style="font-size:100px"><?php echo $_SESSION['Username']?></p>
</div>
</div>
<br>

   
</body>
</html>	