<html>
<body>
<div align=center>
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
?>
<h2> Search your student </h2>
<br>
<br>
<form method="post">
	Enter Student ID &nbsp&nbsp<input type="text" name="sid" required>
	<input type="submit" name="submit" value="ADD">
</form>
<?php
    
	
    echo $studid=$_GET['userid'];
    if(isset($_GET['userid']))
    {
        
	
       
		
		
		$sql="SELECT * FROM `add` WHERE `admission_id` ='$studid'";
		if($result = mysqli_query($connection, $sql)){
		if(mysqli_num_rows($result) > 0){
		$result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result))
		{
        echo "<script>window.alert('Record Found');</script>";
		?>
		
		<h1> Admission Details</h1>
<form  method="post" action="add_update.php">
<h3>Details</h3>
  <input type="hidden" name="foo" value="<?php echo $row[0];?>" />
  <label >Name of Child</label>
  <input type="text" id="name" name="name" value="<?php echo $row[1];?>"><br>
  <label >New/Rollover/Re-join</label>
  <select id="nrr" name="nrr">
  <option value="New" <?php if($row[2] == "New") { echo "selected"; }?>>New</option>
  <option value="RollOver" <?php if($row[2] == "RollOver") { echo "selected"; }?>>RollOver</option>
  <option value="New- Transfer" <?php if($row[2] == "New- Transfer") { echo "selected"; }?>>New- Transfer</option>
  <option value="RO from ES" <?php if($row[2] == "RO from ES") { echo "selected"; }?>>RO from ES</option>
  </select><br>
  <label >Session</label>
  <select id="Session" name="Session">
  <option value="Annual - Parent Toadler Programme" <?php if($row[3] == "Annual - Parent Toadler Programme") { echo "selected"; }?>>Annual - Parent Toadler Programme</option>
  <option value="Annual - Nursery" <?php if($row[3] == "Annual - Nursery") { echo "selected"; }?>>Annual - Nursery</option>
  <option value="Annual - Junior Kindergarten" <?php if($row[3] == "Annual - Junior Kindergarten") { echo "selected"; }?>>Annual - Junior Kindergarten</option>
  <option value="Annual - Senior Kindergarten" <?php if($row[3] == "Annual - Senior Kindergarten") { echo "selected"; }?>>Annual - Senior Kindergarten</option>
  <option value="Mid-Term - Parent Toadler Programme" <?php if($row[3] == "Mid-Term - Parent Toadler Programme") { echo "selected"; }?>>Mid-Term - Parent Toadler Programme</option>
  <option value="Mid-Term - Nursery" <?php if($row[3] == "Mid-Term - Nursery") { echo "selected"; }?>>Mid-Term - Nursery</option>
  <option value="Mid-Term - Junior Kindergarten" <?php if($row[3] == "Mid-Term - Junior Kindergarten") { echo "selected"; }?>>Mid-Term - Junior Kindergarten</option>
  <option value="Mid-Term - Senior Kindergarten" <?php if($row[3] == "Mid-Term - Senior Kindergarten") { echo "selected"; }?>>Mid-Term - Senior Kindergarten</option>
  <option value="Early Start - Parent Toadler Programme" <?php if($row[3] == "Early Start - Parent Toadler Programme") { echo "selected"; }?>>Early Start - Parent Toadler Programme</option>
  <option value="Early Start - Nursery" <?php if($row[3] == "Early Start - Nursery") { echo "selected"; }?>>Early Start - Nursery</option>
  <option value="Early Start - Junior Kindergarten" <?php if($row[3] == "Early Start - Junior Kindergarten") { echo "selected"; }?>>Early Start - Junior Kindergarten</option>
  <option value="Early Start - Senior Kindergarten" <?php if($row[3] == "Early Start - Senior Kindergarten") { echo "selected"; }?>>Early Start - Senior Kindergarten</option>
  <option value="Day Care" <?php if($row[3] == "Day Care") { echo "selected"; }?>>Day Care</option>
  </select><br>
  <label >Accounting Year</label>
  <select id="acc_year" name="acc_year">
  <option value="2018-2019" <?php if($row[4] == "2018-2019") { echo "selected"; }?>>2018-2019</option>
  <option value="2019-2020" <?php if($row[4] == "2019-2020") { echo "selected"; }?>>2019-2020</option>
  <option value="2020-2021" <?php if($row[4] == "2020-2021") { echo "selected"; }?>>2020-2021</option>
  <option value="2021-2022" <?php if($row[4] == "2021-2022") { echo "selected"; }?>>2021-2022</option>
  <option value="2022-2023" <?php if($row[4] == "2022-2023") { echo "selected"; }?>>2022-2023</option>
  <option value="2023-2024" <?php if($row[4] == "2023-2024") { echo "selected"; }?>>2023-2024</option>
  <option value="2024-2025" <?php if($row[4] == "2024-2025") { echo "selected"; }?>>2024-2025</option>
  <option value="2025-2026" <?php if($row[4] == "2025-2026") { echo "selected"; }?>>2025-2026</option>
  <option value="2026-2027" <?php if($row[4] == "2026-2027") { echo "selected"; }?>>2026-2027</option>
  <option value="2027-2028" <?php if($row[4] == "2027-2028") { echo "selected"; }?>>2027-2028</option>
  <option value="2028-2029" <?php if($row[4] == "2028-2029") { echo "selected"; }?>>2028-2029</option>
  <option value="2029-2030" <?php if($row[4] == "2029-2030") { echo "selected"; }?>>2029-2030</option>
  <option value="2030-2031" <?php if($row[4] == "2030-2031") { echo "selected"; }?>>2030-2031</option>
  <option value="2031-2032" <?php if($row[4] == "2031-2032") { echo "selected"; }?>>2031-2032</option>
  <option value="2032-2033" <?php if($row[4] == "2032-2033") { echo "selected"; }?>>2032-2033</option>
  <option value="2033-2034" <?php if($row[4] == "2033-2034") { echo "selected"; }?>>2033-2034</option>
  <option value="2034-2035" <?php if($row[4] == "2034-2035") { echo "selected"; }?>>2034-2035</option>
  <option value="2035-2036" <?php if($row[4] == "2035-2036") { echo "selected"; }?>>2035-2036</option>
  </select><br> 
  <label >Kidzee Enrollment No.</label>
  <input type="text" id="kidzee_enrol" name="kidzee_enrol" value="<?php echo $row[5];?>"><br>  
    <label >Gender</label>
  
  <select id="kewi" name="kewi">
  <option value="---" <?php if($row[6] == "---") { echo "selected"; }?>>---</option>
  <option value="Male" <?php if($row[6] == "Male") { echo "selected"; }?>>Male</option>
  <option value="Female" <?php if($row[6] == "Female") { echo "selected"; }?>>Female</option>
  <option value="Other" <?php if($row[6] == "Other") { echo "selected"; }?>>Other</option>
  
  </select><br>
<label >Class</label> 
  <select id="class" name="class">
  <option value="PTP" <?php if($row[7] == "PTP") { echo "selected"; }?>>PTP</option>
  <option value="Nursery" <?php if($row[7] == "Nursery") { echo "selected"; }?>>Nursery</option>
  <option value="Jr. Kg" <?php if($row[7] == "Jr. Kg") { echo "selected"; }?>>Jr. Kg</option>
  <option value="Sr. Kg" <?php if($row[7] == "Sr. Kg") { echo "selected"; }?>>Sr. Kg</option>
  <option value="Day Care" <?php if($row[7] == "Day Care") { echo "selected"; }?>>Day Care</option>
  </select><br>
  <h3>Form Fee</h3>
  <label >Form Fee</label>
  <input type="text" id="form_fee" name="form_fee" value="<?php echo $row[8];?>"><br>
  <label >Form Fee-Mode of Payment</label>
  
  <select id="mode" name="mode">
  <option value="Cash" <?php if($row[9] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[9] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[9] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[9] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[9] == "---") { echo "selected"; }?>>---</option>
  </select><br>  
  <label >Form no.</label>
  <input type="text" id="form_no" name="form_no" value="<?php echo $row[10];?>"><br>
  <label >Form Fee Bill Cum Receipt No./Transaction Number</label>
  <input type="text" id="br_no" name="br_no" value="<?php echo $row[11];?>"><br>
  <label >Indent No.</label>
  <input type="text" id="i_no" name="i_no" value="<?php echo $row[12];?>"><br>
  <label >Kit ordered</label>
  <select id="kit_order" name="kit_order">
  <option value="Yes" <?php if($row[13] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row[13] == "No") { echo "selected"; }?>>No</option>
  </select><br>
  <label >Kit Handed Over </label>
  <select id="kit_given" name="kit_given">
  <option value="Yes" <?php if($row[14] == "Yes") { echo "selected"; }?>>Yes</option>
  <option value="No" <?php if($row[14] == "No") { echo "selected"; }?>>No</option>
  </select><br>
  <label >Admission Confirmed Date</label>
  <input type="date" name="admis_date" value="<?php echo $row[15];?>"><br>
  <label >No. of Hours Comitted for Day care</label>
  <input type="text" id="care" name="care" value="<?php echo $row[16];?>"><br>
  <label >No. of Installments Comitted</label>
  <input type="text" id="comitted" name="comitted" value="<?php echo $row[17];?>"><br>
  <label >Stake Rate Fee</label>
  <input type="text" id="comitted_fee" name="comitted_fee" value="<?php echo $row[18];?>"><br>  
  <label >No. of Month for ES </label>
  <input type="text" id="es" name="es" value="<?php echo $row[19];?>"><br>
  <label >Discount </label>
  <input type="text" id="disc" name="disc" value="<?php echo $row[20];?>"><br>
      <?php
  $comm=$row[18]-$row[20];
  echo "<b><big>";
  echo "Commited Fee ".$comm;
  echo "</b><br><br></big>";
  
  ?>
  <h3>1st Installment  </h3>
  <label >Transaction Date of 1st Installment </label>
  <input type="date" name="tran1" value="<?php echo $row[21];?>"><br>
  <label >1st Installment Amount </label>
  <input type="text" id="rec1" name="amt1" value="<?php echo $row[22];?>"><br>
  <label >Mode of Payment </label>
  <select id="mode1" name="mode1">
  <option value="Cash" <?php if($row[23] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[23] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[23] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[23] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[23] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec1" name="rec1" value="<?php echo $row[24];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no1" name="no1" value="<?php echo $row[25];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no1" name="br_no1" value="<?php echo $row[26];?>"><br>
  <h3>2nd Installment  </h3>
  <label >Transaction Date of 2st Installment </label>
  <input type="date" name="tran2" value="<?php echo $row[27];?>"><br>
  <label >2nd Installment Amount </label>
  <input type="text" id="amt2" name="amt2" value="<?php echo $row[28];?>"><br>
  <label >Mode of Payment </label>
  <select id="mode2" name="mode2">
  <option value="Cash" <?php if($row[29] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[29] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[29] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[29] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[29] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec2" name="rec2" value="<?php echo $row[30];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no2" name="no2" value="<?php echo $row[31];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no2" name="br_no2" value="<?php echo $row[32];?>"><br>
  <h3>3rd Installment  </h3>
  <label >Transaction Date of 3rd Installment </label>
  <input type="date" name="tran3" value="<?php echo $row[33];?>"><br>
  <label >3rd Installment Amount </label>
  <input type="text" id="amt3" name="amt3" value="<?php echo $row[34];?>"><br>
  <label >Mode of Payment </label>
    <select id="mode3" name="mode3">
  <option value="Cash" <?php if($row[35] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[35] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[35] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[35] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[35] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec3" name="rec3" value="<?php echo $row[36];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no3" name="no3" value="<?php echo $row[37];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no3" name="br_no3" value="<?php echo $row[38];?>"><br>  
  <h3>4th Installment  </h3>
  <label >Transaction Date of 4th Installment </label>
  <input type="date" name="tran4" value="<?php echo $row[39];?>"><br>
  <label >4th Installment Amount </label>
  <input type="text" id="amt4" name="amt4" value="<?php echo $row[40];?>"><br>
  <label >Mode of Payment </label>
    <select id="mode4" name="mode4">
  <option value="Cash" <?php if($row[41] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[41] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[41] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[41] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[41] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec4" name="rec4" value="<?php echo $row[42];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no4" name="no4" value="<?php echo $row[43];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no4" name="br_no4" value="<?php echo $row[44];?>"><br>
  <h3>5th Installment  </h3>
  <label >Transaction Date of 5th Installment </label>
  <input type="date" name="tran5" value="<?php echo $row[45];?>"><br>
  <label >5th Installment Amount </label>
  <input type="text" id="amt5" name="amt5" value="<?php echo $row[46];?>"><br>
  <label >Mode of Payment </label>
  <select id="mode5" name="mode5">
  <option value="Cash" <?php if($row[47] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[47] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[47] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[47] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[47] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec5" name="rec5" value="<?php echo $row[48];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no5" name="no5" value="<?php echo $row[49];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no5" name="br_no5" value="<?php echo $row[50];?>"><br>
  <h3>6th Installment  </h3>
   <label >Transaction Date of 6th Installment </label>
  <input type="date" name="tran6" value="<?php echo $row[51];?>"><br>
  <label >6th Installment Amount </label>
  <input type="text" id="amt6" name="amt6" value="<?php echo $row[52];?>"><br>
  <label >Mode of Payment </label>
      <select id="mode6" name="mode6">
  <option value="Cash" <?php if($row[53] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[53] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[53] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[53] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[53] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec6" name="rec6" value="<?php echo $row[54];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no6" name="no6" value="<?php echo $row[55];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no6" name="br_no6" value="<?php echo $row[56];?>"><br>
  <h3>7th Installment  </h3>
  <label >Transaction Date of 7th Installment </label>
  <input type="date" name="tran7" value="<?php echo $row[57];?>"><br>
  <label >7th Installment Amount </label>
  <input type="text" id="amt7" name="amt7" value="<?php echo $row[58];?>"><br>
  <label >Mode of Payment </label>
  <select id="mode7" name="mode7">
  <option value="Cash" <?php if($row[59] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[59] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[59] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[59] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[59] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec7" name="rec7" value="<?php echo $row[60];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no7" name="no7" value="<?php echo $row[61];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no7" name="br_no7" value="<?php echo $row[62];?>"><br>  
  <h3>8th Installment  </h3>
   <label >Transaction Date of 8th Installment </label>
  <input type="date" name="tran8" value="<?php echo $row[63];?>"><br>
  <label >8th Installment Amount </label>
  <input type="text" id="amt8" name="amt8" value="<?php echo $row[64];?>"><br>
  <label >Mode of Payment </label>
    <select id="mode8" name="mode8">
  <option value="Cash" <?php if($row[65] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[65] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[65] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[65] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[65] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec8" name="rec8" value="<?php echo $row[66];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no8" name="no8" value="<?php echo $row[67];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no8" name="br_no8" value="<?php echo $row[68];?>"><br>  
  <h3>9th Installment  </h3>
  <label >Transaction Date of 8th Installment </label>
  <input type="date" name="tran9" value="<?php echo $row[69];?>"><br>
  <label >9th Installment Amount </label>
  <input type="text" id="amt9" name="amt9" value="<?php echo $row[70];?>"><br>
  <label >Mode of Payment </label>
  <select id="mode9" name="mode9">
  <option value="Cash" <?php if($row[71] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[71] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[71] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[71] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[71] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec9" name="rec9" value="<?php echo $row[72];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no9" name="no9" value="<?php echo $row[73];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no9" name="br_no9" value="<?php echo $row[74];?>"><br>  
  <h3>10th Installment  </h3>
      <label >Transaction Date of 10th Installment </label>
  <input type="date" name="tran10" value="<?php echo $row[75];?>"><br>
  <label >10th Installment Amount </label>
  <input type="text" id="amt10" name="amt10" value="<?php echo $row[76];?>"><br>
  <label >Mode of Payment </label>
    <select id="mode10" name="mode10">
  <option value="Cash" <?php if($row[77] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[77] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[77] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[77] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[77] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec10" name="rec10" value="<?php echo $row[78];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no10" name="no10" value="<?php echo $row[79];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no10" name="br_no10" value="<?php echo $row[80];?>"><br>  
  <h3>11th Installment  </h3>
  <label >Transaction Date of 11th Installment </label>
  <input type="date" name="tran11" value="<?php echo $row[81];?>"><br>
  <label >11th Installment Amount </label>
  <input type="text" id="amt11" name="amt11" value="<?php echo $row[82];?>"><br>
  <label >Mode of Payment </label>
    <select id="mode11" name="mode11">
  <option value="Cash" <?php if($row[83] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row[83] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row[83] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row[83] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row[83] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec11" name="rec11" value="<?php echo $row[84];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no11" name="no11" value="<?php echo $row[85];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no11" name="br_no11" value="<?php echo $row[86];?>"><br>
  <h3>12th Installment  </h3>
  <label >Transaction Date of 12th Installment </label>
  <input type="date" name="tran12" value="<?php echo $row[87];?>"><br>
  <label >12th Installment Amount </label>
  <input type="text" id="amt12" name="amt12" value="<?php echo $row[88];?>"><br>
  <label >Mode of Payment </label>
    <select id="mode12" name="mode12">
  <option value="Cash" <?php if($row['mode12'] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row['mode12'] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row['mode12'] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row['mode12'] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row['mode12'] == "---") { echo "selected"; }?>>---</option>

  </select><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec12" name="rec12" value="<?php echo $row[90];?>"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no12" name="no12" value="<?php echo $row[91];?>"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no12" name="br_no12" value="<?php echo $row[92];?>"><br>
  <h3>Refund Details  </h3>
  <label >Refund Date </label>
  <input type="date" name="refund_dt" value="<?php echo $row[93];?>"><br>
  <label >Cheque/Online</label>
  <select id="chq_onl" name="chq_onl">
  <option value="Cash" <?php if($row['chq_onl'] == "Cash") { echo "selected"; }?>>Cash</option>
  <option value="NEFT/IMPS" <?php if($row['chq_onl'] == "NEFT/IMPS") { echo "selected"; }?>>NEFT/IMPS</option>
  <option value="UPI"  <?php if($row['chq_onl'] == "UPI") { echo "selected"; }?>>UPI</option>
  <option value="Cheque" <?php if($row['chq_onl'] == "Cheque") { echo "selected"; }?>>Cheque</option>
  <option value="---" <?php if($row['chq_onl'] == "---") { echo "selected"; }?>>---</option>

  </select><br>  
  <label >Cheque/Online Transaction No</label>
  <input type="text" id="refund_tran_no" name="refund_tran_no" value="<?php echo $row[95];?>"><br>  
  <label >Refund Amount</label>
  <input type="text" id="refund_amt" name="refund_amt" value="<?php echo $row[96];?>"><br>
  <h3>Dishonoured Case Details  </h3>
  <label >Cheque Dishonoured Number</label>
  <input type="text" id="chq_no" name="chq_no" value="<?php echo $row[97];?>"><br>  
  <label >Penalty Amount</label>
  <input type="text" id="p_amt" name="p_amt" value="<?php echo $row[98];?>"><br>  
  <label >Cheque Dishonoured Informed Parent Date</label>
  <input type="date" name="dis_date" value="<?php echo $row[99];?>"><br>  
  <label >Dishonoured Amount</label>
  <input type="text" id="next" name="next" value="<?php echo $row[100];?>"><br>  
  <label >Mode of Payment for Dishonoured case</label>
  <input type="text" id="mode_dis" name="mode_dis" value="<?php echo $row[101];?>"><br>  
  <label >Amount received against dishonoured Payment+Penalty</label>
  <input type="text" id="dis_case" name="dis_case" value="<?php echo $row[102];?>"><br>  
  <label >Bill Cum Receipt No for dishonoured case</label>
  <input type="text" id="dis_no" name="dis_no" value="<?php echo $row[103];?>"><br>  
  <label >Remarks</label>
  <input type="text" id="remark" name="remark" value="<?php echo $row[104];?>"><br>  
  <h3>Other Details  </h3><br><br>
  <b><label >Child's Date of Birth</label></b>
  <input type="Date" id="dob" name="dob" value="<?php echo $row[106];?>"><br>  
  <label >Preliminary Kit</label>
   
<select id="priliminary" name="priliminary">
  <option value="YES" <?php if($row['priliminary'] == "YES") { echo "selected"; }?>>YES</option>
  <option value="No" <?php if($row['priliminary'] == "No") { echo "selected"; }?>>No</option>
  </select><br>   
  <label >Uniform Handed Over</label>
  <select id="uniform" name="uniform">
  
<option value="YES" <?php if($row['uniform'] == "YES") { echo "selected"; }?>>YES</option>
  <option value="No" <?php if($row['uniform'] == "No") { echo "selected"; }?>>No</option>
  </select><br>  
  <label >Father's Name</label>
  <input type="text" id="father" name="father" value="<?php echo $row[109];?>"><br>  
  <label >Mother's Name</label>
  <input type="text" id="mother" name="mother" value="<?php echo $row[110];?>"><br>  
  <label >Father's Mobile Number</label>
  <input type="text" id="father_m" name="father_m" value="<?php echo $row[111];?>"><br>  
  <label >Mother's Mobile Number</label>
  <input type="text" id="mother_m" name="mother_m" value="<?php echo $row[112];?>"><br>  
  <label >Father's Email</label>
  <input type="email" id="father_e" name="father_e" value="<?php echo $row[113];?>"><br>  
  <label >Mother's Email</label>
  <input type="email" id="mother_e" name="mother_e" value="<?php echo $row[114];?>"><br>  
  <label >Society Name</label>
  <input type="text" id="Society" name="Society" value="<?php echo $row[121];?>"><br>  
  <label >Complete Address with Pincode</label>
  <input type="text" id="Addr" name="Addr" value="<?php echo $row[122];?>"><br>

  
  <?php  $pending1 = $row['rec1']+$row['rec2']+$row['rec3']+$row['rec4']+$row['rec5']+$row['rec6']+$row['rec7'];+$row['rec8']+$row['rec9']+$row['rec10']+$row['rec11']+$row['rec12']+$row[21]+$row[102]+$row[96];
		$plus = $row[100]+$row[98];
		//$pending=$row[18]-$pending1+$plus;
		$pending=$row[18]-$row[20]-$row['rec1']-$row['rec2']-$row['rec3']-$row['rec4']-$row['rec5']-$row['rec6']-$row['rec7']-$row['rec8']-$row['rec9']-$row['rec10']-$row['rec11']-$row['rec12']-$row[102]-$row[96]+$plus;
		
		
  ?> 
  <label >Pending</label>
  <input type="text" id="pending" name="pending" value="<?php echo $pending;?>"><br>
   <input type="submit" name="update" value="update"><br>
  <input type="reset" value="Reset">
  </form>
		<?php
		}
	}
	else
	{
		echo "no";
	}
		}
	} 


?>


</div>
</body>
</html>
