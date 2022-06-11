<?php
include('nav.php');
?>
<html>
<body>
<div align=center>
<br>
<h2>Payments</h2>
<br>
<br>
<form  method="post" enctype="multipart/form-data">
  <label >Payee Name</label>
  <input type="text" id="Name" name="Name"><br>
  <label >Particulars/Details</label>
  <input type="text" id="Particulars" name="Particulars"><br>
  <label >Kaccha/Packka Bill</label><br>
  <select id="Bill" name="Bill">
  <option value="Kaccha Bill">Kaccha Bill</option>
  <option value="Packka Bill">Packka Bill</option>
  </select><br>
  <label >Bills No/Intent No.</label>
  <input type="text" id="Intent" name="Intent"><br>
  <label >Receipt No</label>
  <input type="text" id="Receipt" name="Receipt"><br>
  <label >Voucher No.</label>
  <input type="text" id="Voucher" name="Voucher"><br>
  <label >Date of Payment</label>
  <input type="date" name="Payment"><br>  
  <label >Date of Transaction</label>
  <input type="date" name="Transaction"><br>
  <label >Amount</label><br>
  <input type="text" id="Amount" name="Amount" ><br>  
  <label >Bank Transaction No/ATM Cash Withdrawal No</label><br>
  <input type="text" id="Bank" name="Bank" ><br>
  <label >Bank</label><br>
  <select id="Bank_d" name="Bank_d">
  <option value="Online/IMPS/RTGS/IMPS">Online/IMPS/RTGS/IMPS</option>
  <option value="ATM Withdrawal">ATM Withdrawal</option>
  <option value="Debit Card">Debit Card</option>
  <option value="Cheque">Cheque</option>
  <option value="Cash">Cash</option>
  </select><br>  
  <label >Cash</label><br>
  <select id="Cash" name="Cash">
  <option value="Cash">Cash</option>
  <option value="Petty cash">Petty cash</option>
  </select><br>  
  <label >Discription</label><br>
  <input type="text" id="Discription" name="Discription" ><br>  
  <label >Aproval From</label><br>
  <input type="text" id="Aproval" name="Aproval" ><br>  
  <label >Aproval Date</label>
  <input type="date" name="Aproval_Date"><br>  
  <label >Remarks/Explanation</label><br>
  <input type="text" id="Remarks" name="Remarks" ><br>  
  <label >Photo</label><br>
  <input type="file"  name="fileupload" required style="height:60px;"accept="image/*"/><br>
  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  </form>
  </div>
  </body>
  </html>
  
  <?php
  
  include("connection.php");
	if(isset($_POST['submit']))
    {
		$Name=$_POST['Name'];
		$Particulars=$_POST['Particulars'];
		$Bill=$_POST['Bill'];
		$Intent=$_POST['Intent'];
		$Receipt=$_POST['Receipt'];
		$Voucher=$_POST['Voucher'];
		$Payment=$_POST['Payment'];
		$Transaction=$_POST['Transaction'];
		$Amount=$_POST['Amount'];
		$Bank=$_POST['Bank'];
		$Bank_d=$_POST['Bank_d'];
		$Cash=$_POST['Cash'];
		$Discription=$_POST['Discription'];
		$Aproval=$_POST['Aproval'];
		$Aproval_Date=$_POST['Aproval_Date'];
		$Remarks=$_POST['Remarks'];
		
		$file_dir = "Payment";
			
			foreach($_FILES as $file_name => $file_array) {
			 "path: ".$file_array['tmp_name']."<br/>\n";
			 $photo=$file_array['tmp_name']."<br/>\n";
			 $photo_name=$file_array['name'];
 


			if (is_uploaded_file($file_array['tmp_name'])) {
			move_uploaded_file($file_array['tmp_name'],
			"$file_dir/".$file_array['name'])
			or die ("Couldn't move file");
			 "File was moved!";
			} else {
			 "No file found.";
			}
			}

		
		$sql="INSERT INTO `payment`( `Name`, `Particulars`, `Bill`, `Intent`, `Receipt`, `Voucher`, `Payment`, `Transaction`, `Amount`, `Bank`, `Bank_d`, `Cash`, `Discription`, `Aproval`, `Aproval_Date`, `Remarks`, `photo`) 
		                     VALUES ('$Name','$Particulars','$Bill','$Intent','$Receipt','$Voucher','$Payment','$Transaction','$Amount','$Bank','$Bank_d','$Cash','$Discription','$Aproval','$Aproval_Date','$Remarks','$photo_name')";
        
		$fireQuery=mysqli_query($connection,$sql);
        if($fireQuery)
        {
            echo "<script>window.alert('Record Added');</script>";
			
        }
        else
        {
			
            echo "<script>window.alert('Data Insertion Failed');</script>";
           
		  echo  mysqli_error($connection);

        }
	
	
	
	
	
	

	}	

  
?> 
  