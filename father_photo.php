<?php
session_start();


	if(isset($_POST['submit']))
	{
	
		include("connection.php");
	
	
		
		if(isset($_POST['submit']))
		{
			
			$file_dir = "image";
			
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
		
		$studid=$_SESSION['id'];
        $sqlQuery="UPDATE `add` SET `photo1`='$photo_name'  WHERE `admission_id` = '$studid'";

        $fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
            echo "<script>window.alert('Record update');</script>";
			echo "<script>window.location.href='index.php#pricing'</script>";
           
			    
        }
        else
        {
			
            echo "<script>window.alert('Data Insertion Failed');</script>";
          
		  echo  mysqli_error($connection);

        }
    }
	
	}


?>



?>