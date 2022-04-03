<html>
<body>
<div align=center>
<?php
include('nav.php');
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }

$max="SELECT max(`ID`) FROM `petty_cash`";
		   if($result123 = mysqli_query($connection, $max)){
				if(mysqli_num_rows($result123) > 0){
				{
					while($monk = mysqli_fetch_array($result123))
					{
						 echo $highest_id = $monk[0];
						
						 
						 
						 
						 
					}
				}
			}
		}
		
	$max="SELECT * FROM `petty_cash` WHERE `ID` = '$highest_id'";
		   if($result123 = mysqli_query($connection, $max)){
				if(mysqli_num_rows($result123) > 0){
				{
					while($sam = mysqli_fetch_array($result123))
					{
						 
						 echo $rec = $sam['cash_rec'];
						 echo $remaining = $sam['remaining'];
						 echo $in_hand = $sam['cash_hand'];
						 echo $sam['cash_hand'];
						 
						 
						 
						 
						 
					}
				}
			}
		}
		
		
		$in_hand_cash=$rec+$in_hand;
		
?>

<br>
<h2>Petty Cash</h2>
<br>
<br>

<form  method="post" enctype="multipart/form-data">
  <label >Cash Received Amount</label>
  <input type="number" id="cash_rec" name="cash_rec" oninput="myFunction()"><br>
  <label >Previous Cash in hand</label>
  <b><?php echo $remaining?><b>
  <input type="hidden"  id="cash_in_hand" value="<?php echo $remaining?>"><br>
  <input type="hidden"  id="cash_hand" name="cash_hand"><br>
  <p id="demo"></p>
  
  <label >Date</label>
  <input type="date" name="date"><br>
  <label >Voucher No</label>
  <input type="text" id="Voucher_No" name="Voucher_No"><br>
  <label >Reasons to spend</label>
  <input type="text" id="Reasons" name="Reasons"><br>
  <label >Rupees spend</label>
  <input type="number" id="spend"  name="spend1" oninput="myFunction2()"><br>
  <input type="hidden" id="spend_amt" name="spend" ><br>
  <p id="demo1"></p>
  
  <label >by whom</label><br>
  <input type="text" id="whom" name="whom" ><br>
  <label >Photo</label><br>
  <input type="file"  name="fileupload" required style="height:60px;"accept="image/*"/><br>
  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  </form>
  </div>
<script>
function myFunction() {
  //var x = document.getElementById("cash_rec").value;
  //var y = document.getElementById("cash_in_hand").value;
  var x1 = Number(document.getElementById("cash_rec").value);
  var y1 = Number(document.getElementById("cash_in_hand").value);
 // var first = parseFloat(x.value);
  //var second = parseFloat(y.value);
  var sum=x1+y1;

 
  document.getElementById("cash_hand").value = sum;
  document.getElementById("spend").disabled = true;
  
}


function myFunction2() {
  //var x = document.getElementById("cash_rec").value;
  //var y = document.getElementById("cash_in_hand").value;
  var x1 = Number(document.getElementById("cash_rec").value);
  if(isNAN(x1))
  {
	  x1=0;
  }
  var y1 = Number(document.getElementById("cash_in_hand").value);
    if(isNAN(y1))
  {
	  y1=0;
  }
  var z1 = Number(document.getElementById("spend").value);
    if(isNAN(z1))
  {
	  z1=0;
  }
 // var first = parseFloat(x.value);
  //var second = parseFloat(y.value);
  var sum=x1+y1-z1;

  document.getElementById("spend_amt").value = sum;
  //document.getElementById("demo1").innerHTML = "New Cash In Hand " + sum;
  document.getElementById("cash_rec").disabled = true;
  
}
</script>

  
  </body>
  </html>
  
  <?php
  
	  
	if(isset($_POST['submit']))
    {
		$cash_rec=$_POST['cash_rec'];
		$cash_hand=$_POST['cash_hand'];
		$date=$_POST['date'];
		$Voucher_No=$_POST['Voucher_No'];
		$Reasons=$_POST['Reasons'];
		$spend=$_POST['spend1'];
		$spend_amt=$_POST['spend_amt'];
		if(is_null($spend_amt))
		{
			 echo "<script>window.alert('if');</script>";
			$spend_amt=$cash_rec+$remaining-$spend;
		}
		
		
		$whom=$_POST['whom'];
		
		$file_dir = "../kidzee/Petty_cash";
			
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


	
		$sql="INSERT INTO `petty_cash`(`cash_rec`, `cash_hand`, `date`, `Voucher_No`, `Reasons`, `spend`, `remaining`, `whom`, `image`) 
		      VALUES ('$cash_rec','$remaining','$date','$Voucher_No','$Reasons','$spend','$spend_amt','$whom','$photo_name')";
	
		$fireQuery=mysqli_query($connection,$sql);
        if($fireQuery)
        {
            echo "<script>window.alert('Record Added');</script>";
			echo "<script>window.location.href='http://localhost/kidzee/index.php#Payment'</script>";
			
        }
        else
        {
			
            echo "<script>window.alert('Data Insertion Failed');</script>";
           
		  echo  mysqli_error($connection);

        }
	
	
	
	
	
	

	}	
	else
	{
		echo "fail";
	}
  
?> 
  