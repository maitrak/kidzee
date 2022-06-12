<?php
include('nav.php');
include("connection.php");
	 $query ="SELECT * FROM `number`";  
	$result = mysqli_query($connection, $query);  
?>
<html>
<body>
<head>
<style>
.red-star {
    color: red;
}
</style>
</head>
<div align=center>
<h1> Numbers </h1>
<a href="#image"><button>View Contact</button></a>
<form method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td>
	Name <td><input type="text" name="name" required></td>
	</td>
	</tr>
	
	<tr>
	<td>
	Number<td><input type="text"name="number" required></td>
	</td>
	</tr>	<tr>
	<td>
	Discription<td><input type="text"name="Discription" required></td>
	</td>
	</tr>	<tr>
	<td>
	Tag<td><input type="text"name="Tag" required></td>
	</td>
	</tr>
	<tr>
	<td>
	Photo<td><input type="file"  name="fileupload"  style="height:60px;"/><br>
  </td>
	</td>
	</tr>
	<tr>
	<td>
	<input type="submit" name="submit" value="ADD">
	</td>
	</tr>
	
</form>
</div>
<div id="image">
<table class="table table-bordered">  
                          <tr>  
                               <th >ID</th>  
                               <th >Name</th>  
                               <th>Number</th>  
                              <th>Discription</th>
                               <th >Tag</th>  
                               <th >Photo</th>  
                                 
                              
                             
                                 

 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                               <td ><?php echo $row[1]; ?></td>  
                               <td><?php echo $row[2]; ?></td>  
                               <td><?php echo $row[3]; ?></td>  
                               <td><?php echo $row[4]; ?></td>  
                               
                               <td><?php echo "<img src='card/".$row[5]."' width=30px  height=25px style=float:center>"; ?></td>  
							   
								
                                 
 
                                
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
					 </div>
<?php
    
    if(isset($_POST['submit']))
    {
        echo $name_number=$_POST['name'];
        echo $number=$_POST['number'];
        echo $disc=$_POST['Discription'];
        echo $tag=$_POST['Tag'];
		
				$file_dir = "../kidzee/card";
			
			foreach($_FILES as $file_name => $file_array) {
			 "path: ".$file_array['tmp_name']."<br/>\n";
			 $photo=$file_array['tmp_name']."<br/>\n";
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
		$sql="INSERT INTO `number`(`name`, `Number`, `disc`, `tag` ,`photo`) VALUES ('$name_number','$number','$disc','$tag','$photo_name')";

		if($result = mysqli_query($connection, $sql))
		{
		echo "<script>window.alert('Record Added');</script>";
		header("refresh: 3");
		
		} else{
        echo "error";
		echo mysqli_error($connection);
		}
	} else{
    
    }
?>
</body>
</html>
  