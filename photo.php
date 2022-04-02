<html>
<body>
<div align=center>
<?php
session_start();
?>
<?php
$studid=$_SESSION['id'];
include('nav.php');
$connection=mysqli_connect("localhost","root","","kidzee");
$id="";
			$name="";
			$program="";
			$father="";
			$mother="";
			$gender="";
		if(!$connection)
		{
			echo "connection Failed because of ".mysqli_connect_error();
		}
		$sql="SELECT * FROM `add` WHERE `admission_id` ='$studid'";


		$result = mysqli_query($connection, $sql);
		while($row = mysqli_fetch_array($result))
		{
			echo "<table >";
			echo "<tr>";
			echo "<td>";
			echo $id="<big><p style='color:blue'>Id:- ".$row['admission_id']."<br>";
			echo $name="Name:- ".$row['name']."<br>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
			
			
			if($row['115']!="null")
			{
				$child="Photo Already Uploaded, Proceed only if U want to Change ";
			}
			else
			{
				$child="";
			}
			if($row['photo2']!="null")
			{
				$father="Photo Already Uploaded, Proceed only if U want to Change ";
			}
			else
			{
				$father="";
			}
			if($row['photo3']!="null")
			{
				$mother="Photo Already Uploaded, Proceed only if U want to Change ";
			}
			else
			{
				$mother="";
			}
			if($row['doc1']!="null")
			{
				$dchild="Document Already Uploaded, Proceed only if U want to Change ";
			}
			else
			{
				$child="";
			}
			if($row['doc2']!="null")
			{
				$dfather="Document Already Uploaded, Proceed only if U want to Change ";
			}
			else
			{
				$father="";
			}
			if($row['doc3']!="null")
			{
				$dmother="Document Already Uploaded, Proceed only if U want to Change ";
			}
			else
			{
				$mother="";
			}
		}
?>






 <table border="1">

  <tr>
  <th>Child's photo</th>
  <th>Father's photo</th>
  <th>Mother's other photo</th>

  </tr>
    <tr>
  <td>
  <form  method="post" action="child_photo.php" enctype="multipart/form-data">
  <input type="file"  name="fileupload" style="height:60px;"/><br>
  <input type="submit" name="submit" value="submit">
 
  </form>
   <?PHP echo $child;?>
  
  </td>

    
		<td>
			<form  method="post" action="father_photo.php" enctype="multipart/form-data">
			<input type="file"  name="Father_photo1" style="height:60px;"accept="image/*"/><br>
			<input type="submit" name="submit" value="submit">
			
			</form>
			<?PHP echo $father;?>
			
		</td>

    <td>
		<form  method="post" action="mother_photo.php" enctype="multipart/form-data">
		<input type="file"  name="Mother_photo1" style="height:60px;"accept="image/*"/><br>
		<input type="submit" name="submit" value="submit">
		
		  </form>
		  <?PHP echo $mother;?>
	</td>
	</tr>
	<tr>
	<th>Child's Document	</th>
	<th>Father's Document	</th>
	<th>Mother's Document	</th>

	<tr>
	<tr>
	<td>
	<form  method="post"  action="doc1.php" enctype="multipart/form-data">
		<input type="file"  name="child" style="height:60px;"/><br>
		<input type="submit" name="submit" value="submit">
		
		  </form>
		  <?PHP echo $dchild;?>
	</td>
	<td>
	<form  method="post"  action="doc2.php" enctype="multipart/form-data">
		<input type="file"  name="father" style="height:60px;"/><br>
		<input type="submit" name="submit" value="submit">
		
	</form>
	<?PHP echo $dfather;?>
	</td>
	<td>
	<form  method="post"  action="doc3.php" enctype="multipart/form-data">
		<input type="file"  name="mother" style="height:60px;"/><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?PHP echo $dmother;?>
	</td>
	</tr>
  </table>

  


  

 









</div>
</body>
</html>
