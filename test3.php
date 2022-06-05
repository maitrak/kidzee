<?php 

include("connection.php");
  session_start();
//include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
	
}
?>
<div style="margin-left:16%">
<html>
<head>
        
		
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    </head>
<body>

   

<h2> Add Teacher</h2>
<b><form method="post" enctype="multipart/form-data">
<input type="file"  name="fileupload" required style="height:60px;"accept="image/*"/><br>
<input type="submit" name="submit" value="submit">
</form>
<br>
<br>
<br>
<br>


</div>
</body>
</html>

<?php

	 if(isset($_POST["submit"]))
{
    $file_dir = "C:\wamp\www\kidzee\Petty_cash";
			
			foreach($_FILES as $file_name => $file_array) {
			echo "path: ".$file_array['tmp_name']."<br/>\n";
			echo $photo=$file_array['tmp_name']."<br/>\n";
			echo $photo_name=$file_array['name'];
 


			if (is_uploaded_file($file_array['tmp_name'])) {
			move_uploaded_file($file_array['tmp_name'],
			"$file_dir/".$file_array['name'])
			or die ("Couldn't move file");
			echo "File was moved!";
			} else {
			echo "No file found.";
			}
			}
}
?>



	
