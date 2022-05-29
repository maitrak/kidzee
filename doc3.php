<?php
session_start();
echo $studid=$_SESSION['id'];


	 $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	
			if(isset($_POST['submit']))
    {
    
    
	
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
	 
    $sqlQuery="UPDATE `add` SET `doc3`='$photo_name'  WHERE `admission_id` = '$studid'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        //$_SESSION['UseraAme']=$row['UseraAme'];
        //$_SESSION['Password']=$row['Password'];
        echo "<script>window.alert('uploaded');</script>";
        echo "<script>window.location.href='photo.php'</script>";
    }
    else
    {
        echo "<script>window.alert('Login Failed');</script>";
       
    }
	}
?>