<?php
include('nav.php');
  

?>
<html>
<body>
<div align=center>
<h1> Fill New Admission Details</h1>
<form  method="post" action="add_insert.php">
  <h3>Details</h3>
  <label >Name of Child</label>
  <input type="text" id="name" name="name"><br>
  <label >New/Rollover/Re-join</label>
  <select id="nrr" name="nrr">
  <option value="New">New</option>
  <option value="RollOver">RollOver</option>
  <option value="New- Transfer">New- Transfer</option>
  <option value="RO from ES">RO from ES</option>

  </select><br>
  <label >Session</label>
  <select id="Session" name="Session">
  <option value="Annual - Parent Toadler Programme">Annual - Parent Toadler Programme</option>
  <option value="Annual - Nursery">Annual - Nursery</option>
  <option value="Annual - Junior Kindergarten">Annual - Junior Kindergarten</option>
  <option value="Annual - Senior Kindergarten">Annual - Senior Kindergarten</option>
  <option value="Mid-Term - Parent Toadler Programme">Mid-Term - Parent Toadler Programme</option>
  <option value="Mid-Term - Nursery">Mid-Term - Nursery</option>
  <option value="Mid-Term - Junior Kindergarten">Mid-Term - Junior Kindergarten</option>
  <option value="Mid-Term - Senior Kindergarten">Mid-Term - Senior Kindergarten</option>
  <option value="Early Start - Parent Toadler Programme">Early Start - Parent Toadler Programme</option>
  <option value="Early Start - Nursery">Early Start - Nursery</option>
  <option value="Early Start - Junior Kindergarten">Early Start - Junior Kindergarten</option>
  <option value="Early Start - Senior Kindergarten">Early Start - Senior Kindergarten</option>
  <option value="Day Care">Day Care</option>
  </select><br>  
  <label >Accounting Year</label>
  <select id="acc_year" name="acc_year">
  <option value="2018-2019">2018-2019</option>
  <option value="2019-2020">2019-2020</option>
  <option value="2020-2021">2020-2021</option>
  <option value="2021-2022">2021-2022</option>
  <option value="2022-2023">2022-2023</option>
  <option value="2023-2024">2023-2024</option>
  <option value="2024-2025">2024-2025</option>
  <option value="2025-2026">2025-2026</option>
  <option value="2026-2027">2026-2027</option>
  <option value="2027-2028">2027-2028</option>
  <option value="2028-2029">2028-2029</option>
  <option value="2029-2030">2029-2030</option>
  <option value="2030-2031">2030-2031</option>
  <option value="2031-2032">2031-2032</option>
  <option value="2032-2033">2032-2033</option>
  <option value="2033-2034">2033-2034</option>
  <option value="2034-2035">2034-2035</option>
  <option value="2035-2036">2035-2036</option>
  </select><br>  
  <label >Kidzee Enrollment No.</label>
  <input type="text" id="kidzee_enrol" name="kidzee_enrol"><br>  
    <label >Gender</label>
  
  <select id="kewi" name="kewi">
  <option value="---" <?php if($row[6] == "---") { echo "selected"; }?>>---</option>
  <option value="Male" <?php if($row[6] == "Male") { echo "selected"; }?>>Male</option>
  <option value="Female" <?php if($row[6] == "Female") { echo "selected"; }?>>Female</option>
  <option value="Other" <?php if($row[6] == "Other") { echo "selected"; }?>>Other</option>
  
  </select><br> 
  <label >Class</label> 
  <select id="class" name="class">
  <option value="PTP">PTP</option>
  <option value="Nursery">Nursery</option>
  <option value="Jr. Kg">Jr. Kg</option>
  <option value="Sr. Kg">Sr. Kg</option>
  <option value="Day Care">Day Care</option>
  </select><br>
  
  <h3>Form Fee</h3>
  <label >Form Fee Amount</label>
  <input type="text" id="form_fee" name="form_fee"><br>
  <label >Form Fee - Mode of Payment</label>
  
  
  <select id="mode" name="mode">
  <option value="Cash">Cash</option>
  <option value="NEFT">NEFT</option>
  <option value="UPI">UPI</option>
  <option value="Cheque">Cheque</option>
  <option value="---" selected>---</option>
  </select><br>
  <label >Form no.</label>
  <input type="text" id="form_no" name="form_no"><br>
  <label >Form Fee -Bill Cum Receipt No./Transation No./Date</label>
  <input type="text" id="br_no" name="br_no"><br>
  <label >Indent No.</label>
  <input type="text" id="i_no" name="i_no"><br>
  <label >Kit ordered</label>
  <select id="kit_order" name="kit_order">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>
  <label >Kit Handed Over </label>
  <select id="kit_given" name="kit_given">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select><br>
  <label >Admission Confirmed Date</label>
  <input type="date" name="admis_date"><br>
  <label >No. of Hours Comitted for Day care</label>
  <input type="text" id="care" name="care"><br>
  <label >No. of Installments Comitted</label>
  <input type="text" id="comitted" name="comitted"><br>
  <label >Stake Rate Fee</label>
  <input type="text" id="comitted_fee" name="comitted_fee"><br>  
  <label >No. of Month for ES </label>
  <input type="text" id="es" name="es"><br>
  <label >Discount </label>
  <input type="text" id="disc" name="disc"><br>
  <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  
</form>
</div>
</body>
</html>
  