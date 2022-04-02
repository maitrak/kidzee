<?php 

$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
  session_start();
include('sidebar.php'); 
if(!isset($_SESSION['Username']))
{   
echo "<script>window.alert('you have to Login First');</script>";    echo "<script>window.location.href='index.php'</script>";
	
}
?>

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
<div style="margin-left:16%">
<table border=1>
<tr>
<th>
File1
</th>
<th>
File2
</th><th>
File3
</th><th>
File4
</th>
</tr>
<tr>
<td>
<form method="post" enctype="multipart/form-data" action="file1.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td><td>
<form method="post" enctype="multipart/form-data" action="file2.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td><td>
<form method="post" enctype="multipart/form-data" action="file3.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td><td>
<form method="post" enctype="multipart/form-data" action="file4.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td>
</tr>
<tr>
<th>
File5
</th><th>
File6
</th><th>
File7
</th><th>
File8
</th>
</tr>
<tr>
<td>
<form method="post" enctype="multipart/form-data" action="file5.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td><td>
<form method="post" enctype="multipart/form-data" action="file6.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td><td>
<form method="post" enctype="multipart/form-data" action="file7.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td><td>
<form method="post" enctype="multipart/form-data" action="file8.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td>
</tr>
<tr>
<th>
File9
</th><th>
File10
</th>
</tr>
<tr>
<td>
<form method="post" enctype="multipart/form-data" action="file9.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td><td>
<form method="post" enctype="multipart/form-data" action="file10.php">
 <input type="file"  name="fileupload" required style="height:60px;"/><br>
<input type="submit" name="upload" value="upload">
</form>
</td>
</tr>


</div>
</body>
</html>

<?php

	 $connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	
			if(isset($_POST['file1']))
    {
    
	echo "file1";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file1`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	
	if(isset($_POST['file2']))
    {
    
	echo "file2";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file2`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	if(isset($_POST['file3']))
    {
    
	echo "file3";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file3`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	if(isset($_POST['file4']))
    {
    echo "file4";
	
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file4`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	
	if(isset($_POST['file5']))
    {
    
	echo "file5";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file5`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	
	if(isset($_POST['file6']))
    {
    
	echo "file6";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file6`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	
	if(isset($_POST['file7']))
    {
    
	echo "file7";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file7`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	
	if(isset($_POST['file8']))
    {
    
	echo "file8";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	if(isset($_POST['file9']))
    {
    
	echo "file9";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file9`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
	
	if(isset($_POST['file10']))
    {
    
			echo "file10";
			$file_dir = "D:\wamp64\www\kidzee\doc";
			
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
	 
    $sqlQuery="UPDATE `file` SET `file10`='$photo_name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    
    if($fireQuery)
    {
        
        echo "<script>window.alert('Uploaded');</script>";      
    }
    else
    {
        echo "<script>window.alert('Failed');</script>";   
    }
	}
?>



	
