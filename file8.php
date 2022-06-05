











  <?php
  
  include("connection.php");
	if(isset($_POST['upload']))
    {
		echo "file8";
			$file_dir = "../kidzee/doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file8`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
		echo "<script>window.location.href='document_upload.php'</script>";
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
  
?> 