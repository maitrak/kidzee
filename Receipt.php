<?php 

session_start();
$connection=mysqli_connect("localhost","root","","kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
?>

<?php

include('nav.php');
$_SESSION['reload']=$_SESSION['reload']+1;
if($_SESSION['reload']>1)
    { 
	 echo $_SESSION['reload'];
	 echo "<script>window.location.href='index.php'</script>";
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

<h2> Make Receipt</h2>
<b><form method="post" id="SubmitForm" action="Receipt_make.php">
Enter Student Name<input type="text" id="txt1" name="Name" required><br>
Enter Father Name<input type="text" id="txt2" name="fName" required><br>
Enter Class  <select id="Class" name="Class">
  <option value="PTP">PTP</option>
  <option value="Nursery">Nursery</option>
  <option value="Jr. Kg">Jr. Kg</option>
  <option value="Sr. Kg">Sr. Kg</option>
  <option value="Day Care">Day Care</option>
  <option value=".">.</option>
  </select><br>
Enter Received payment for Rs.<input id="number" type="number" name="fee"  min="1" max="500000" required><br>
<span id="words"></span><br>


  <label >Mode of Payment</label><br>
  <select id="Mode" name="Mode">
  <option value="Cash">Cash</option>
  <option value="Cheque">Cheque</option>
  <option value="Online Banking">Online Banking</option>
  <option value="UPI">UPI</option>
  </select><br>
  
Bank Name<input type="text" id="txt4" name="bank" required><br>
Transaction Number/Cheque No<input type="text" id="txt5"name="Number" required><br><br>
  <label >Date of Transaction</label>
  <input type="date" name="Transaction"><br><br>
  Enter Again Received payment for Rs.<input id="number1" type="number" name="fee1"  min="1" max="500000" required><br>
<span id="again"></span><br>
</b>
  <select id="logo" name="logo">
  <option value="Kidzee">Kidzee Logo</option>
  <option value="KEWI">KEWI Logo</option>

  </select><br>
<br>
<br>


<input type="submit" name="submit" value="submit" onclick="SubmitCallFunction()">
</form>
<br>
<br>
<br>
<br>


</div>
<script>
var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

function inWords (num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
    return str;
}

document.getElementById('number').onkeyup = function () {
    document.getElementById('words').innerHTML = inWords(document.getElementById('number').value);
};
</script>
<script>
function SubmitCallFunction()
{
	
	document.getElemntById("txt1").value = null;
	document.getElemntById("txt2").value = null;
	document.getElemntById("number").value = null;
	document.getElemntById("txt4").value = null;
	document.getElemntById("txt5").value = null;
	alert("SubmitCallFunction");
	document.location.reload(true);
	

}
document.getElementById('SubmitForm').addEventListener('submit', submitForm);

// submit Form
function submitForm(){
    
    var name = document.getElemntById("txt5").value;
    document.getElemntById("txt1").value = null;

    //save message
    
	
	alert("Response Submitted");
	

}



	 <?php ?>
</script>
</body>
</html>



	
