<!DOCTYPE html>
<?php
$photo="http://localhost/kidzee/bg.PNG";
session_start();
include('sidebar.php');
if(!isset($_SESSION['Username']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
	
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