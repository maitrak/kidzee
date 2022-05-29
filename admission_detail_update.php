<html>
<body>
<?php
include('nav.php');
$connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
$sql="SELECT `admission_id`, `name`, `nrr`, `Session`, `acc_year`, `kidzee_enrol`, `kewi`,
`class`, `form_fee`, `mode`, `form_no`, `br_no`, `i_no`, `kit_order`, `kit_given`, `admis_date`,
`care`, `comitted`, `comitted_fee`, `es`, `disc`, `tran1`, `amt1`, `mode1`, `rec1`, `no1`,
`br_no1`, `tran2`, `amt2`, `mode2`, `rec2`, `no2`, `br_no2`, `tran3`, `amt3`, `mode3`, `rec3`,
`no3`, `br_no3`, `tran4`, `amt4`, `mode4`, `rec4`, `no4`, `br_no4`, `tran5`, `amt5`, `mode5`,
`rec5`, `no5`, `br_no5`, `tran6`, `amt6`, `mode6`, `rec6`, `no6`, `br_no6`, `tran7`, `amt7`,
`mode7`, `rec7`, `no7`, `br_no7`, `tran8`, `amt8`, `mode8`, `rec8`, `no8`, `br_no8`, `tran9`,
`amt9`, `mode9`, `rec9`, `no9`, `br_no9`, `tran10`, `amt10`, `mode10`, `rec10`, `no10`,
`br_no10`, `tran11`, `amt11`, `mode11`, `rec11`, `no11`, `br_no11`, `tran12`, `amt12`, `mode12`,
`rec12`, `no12`, `br_no12`, `refund_dt`, `chq_onl`, `refund_tran_no`, `refund_amt`, `chq_no`,
`p_amt`, `dis_date`, `next`, `mode_dis`, `dis_case`, `dis_no`, `remark`, `pending` FROM `add`
WHERE `admission_id`= '$admis_id'";
	
		$fireQuery=mysqli_query($connection,$sql);
?>
<h1> Admission Details</h1>
<form  method="post" action="add.php">
  <h3>Details</h3>
  <label >Name of Child</label>
  <input type="text" id="name" name="name"><br>
  <label >New/Rollover/Re-join</label>
  <input type="radio"  name="nrr" value="new">
  <label >New</label><br>  
  <input type="radio"  name="nrr" value="Rollover">
  <label >Rollover</label><br>
  <input type="radio"  name="nrr" value="Re-join">
  <label >Re-join</label><br>
  <label >Session</label>
  <input type="text" id="Session" name="Session"><br> 
  <label >Accounting Year</label>
  <input type="text" id="acc_year" name="acc_year"><br> 
  <label >Kidzee Enrollment No.</label>
  <input type="text" id="kidzee_enrol" name="kidzee_enrol"><br>  
  <label >KEWI/Form Enrollment No.</label>
  <input type="text" id="kewi" name="kewi"><br>  
  <label >Class</label>
  <input type="text" id="class" name="class"><br>  
  <h3>Form Fee</h3>
  <label >Form Fee</label>
  <input type="text" id="form_fee" name="form_fee"><br>
  <label >Mode of Payment</label>
  <input type="text" id="mode" name="mode"><br>  
  <label >Form no.</label>
  <input type="text" id="form_no" name="form_no"><br>
  <label >Bill Cum Receipt No.</label>
  <input type="text" id="br_no" name="br_no"><br>
  <label >Indent No.</label>
  <input type="text" id="i_no" name="i_no"><br>
  <label >Kit ordered</label>
  <input type="radio"  name="kit_order" value="Yes">
  <label >Yes</label><br>  
  <input type="radio"  name="kit_order" value="No">
  <label >No</label><br>
  <label >Kit Handed Over </label>
  <input type="radio"  name="kit_given" value="Yes">
  <label >Yes</label><br>  
  <input type="radio"  name="kit_given" value="No">
  <label >No</label><br>
  <label >Admission Confirmed Date</label>
  <input type="date" name="admis_date"><br>
  <label >No. of Hours Comitted for Day care</label>
  <input type="text" id="care" name="care"><br>
  <label >No. of Installments Comitted</label>
  <input type="text" id="comitted" name="comitted"><br>
  <label >Comitted Fee</label>
  <input type="text" id="comitted_fee" name="comitted_fee"><br>  
  <label >No. of Month for ES </label>
  <input type="text" id="es" name="es"><br>
  <label >Discount </label>
  <input type="text" id="disc" name="disc"><br>
  <h3>1st Installment  </h3>
  <label >Transaction Date of 1st Installment </label>
  <input type="date" name="tran1"><br>
  <label >1st Installment Amount </label>
  <input type="text" id="amt1" name="amt1"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode1" name="mode1"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec1" name="rec1"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no1" name="no1"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no1" name="br_no1"><br>
  <h3>2nd Installment  </h3>
  <label >Transaction Date of 2st Installment </label>
  <input type="date" name="tran2"><br>
  <label >2nd Installment Amount </label>
  <input type="text" id="amt2" name="amt2"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode2" name="mode2"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec2" name="rec2"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no2" name="no2"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no2" name="br_no2"><br>
  <h3>3rd Installment  </h3>
  <label >Transaction Date of 3rd Installment </label>
  <input type="date" name="tran"><br>
  <label >3rd Installment Amount </label>
  <input type="text" id="amt3" name="amt3"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode3" name="mode3"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec3" name="rec3"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no3" name="no3"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no3" name="br_no3"><br>  
  <h3>4th Installment  </h3>
  <label >Transaction Date of 4th Installment </label>
  <input type="date" name="tran4"><br>
  <label >4th Installment Amount </label>
  <input type="text" id="amt4" name="amt4"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode4" name="mode4"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec4" name="rec4"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no4" name="no4"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no4" name="br_no4"><br>
  <h3>5th Installment  </h3>
  <label >Transaction Date of 5th Installment </label>
  <input type="date" name="tran5"><br>
  <label >5th Installment Amount </label>
  <input type="text" id="amt5" name="amt5"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode5" name="mode5"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec5" name="rec5"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no5" name="no5"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no5" name="br_no5"><br>
  <h3>6th Installment  </h3>
   <label >Transaction Date of 6th Installment </label>
  <input type="date" name="tran6"><br>
  <label >6th Installment Amount </label>
  <input type="text" id="amt6" name="amt6"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode6" name="mode6"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec6" name="rec6"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no6" name="no6"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no6" name="br_no6"><br>
  <h3>7th Installment  </h3>
  <label >Transaction Date of 7th Installment </label>
  <input type="date" name="tran7"><br>
  <label >7th Installment Amount </label>
  <input type="text" id="amt7" name="amt7"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode7" name="mode7"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec7" name="rec7"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no7" name="no7"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no7" name="br_no7"><br>  
  <h3>8th Installment  </h3>
   <label >Transaction Date of 8th Installment </label>
  <input type="date" name="tran8"><br>
  <label >8th Installment Amount </label>
  <input type="text" id="amt8" name="amt8"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode8" name="mode8"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec8" name="rec8"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no8" name="no8"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no8" name="br_no8"><br>  
  <h3>9th Installment  </h3>
  <label >Transaction Date of 8th Installment </label>
  <input type="date" name="tran8"><br>
  <label >9th Installment Amount </label>
  <input type="text" id="amt9" name="amt9"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode9" name="mode9"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec9" name="rec9"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no9" name="no9"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no9" name="br_no9"><br>  
  <h3>10th Installment  </h3>
      <label >Transaction Date of 10th Installment </label>
  <input type="date" name="tran10"><br>
  <label >10th Installment Amount </label>
  <input type="text" id="amt10" name="amt10"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode10" name="mode10"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec10" name="rec10"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no10" name="no10"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no10" name="br_no10"><br>  
  <h3>11th Installment  </h3>
  <label >Transaction Date of 11th Installment </label>
  <input type="date" name="tran11"><br>
  <label >11th Installment Amount </label>
  <input type="text" id="amt11" name="amt11"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode11" name="mode11"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec11" name="rec11"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no11" name="no11"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no11" name="br_no11"><br>
  <h3>12th Installment  </h3>
  <label >Transaction Date of 12th Installment </label>
  <input type="date" name="tran12"><br>
  <label >12th Installment Amount </label>
  <input type="text" id="amt12" name="amt12"><br>
  <label >Mode of Payment </label>
  <input type="text" id="mode12" name="mode12"><br>
  <label >Cash/Cheque/Online Amount We received</label>
  <input type="text" id="rec12" name="rec12"><br>
  <label >Cheque/online No</label>
  <input type="text" id="no12" name="no12"><br>
  <label >Bill Cum Receipt No</label>
  <input type="text" id="br_no12" name="br_no12"><br>
  <h3>Refund Details  </h3>
  <label >Refund Date </label>
  <input type="date" name="refund_dt"><br>
  <label >Cheque/Online</label>
  <input type="text" id="chq_onl" name="chq_onl"><br>   
  <label >Cheque/Online Transaction No</label>
  <input type="text" id="refund_tran_no" name="refund_tran_no"><br>  
  <label >Refund Amount</label>
  <input type="text" id="refund_amt" name="refund_amt"><br>
  <h3>Dishonoured Case Details  </h3>
  <label >Cheque Dishonoured Number</label>
  <input type="text" id="chq_no" name="chq_no"><br>  
  <label >Penalty Amount</label>
  <input type="text" id="p_amt" name="p_amt"><br>  
  <label >Cheque Dishonoured Informed Parent Date</label>
  <input type="date" name="dis_date"><br>  
  <label >Next Dishonoured Amount</label>
  <input type="text" id="next" name="next"><br>  
  <label >Mode of Payment for Dishonoured case</label>
  <input type="text" id="mode_dis" name="mode_dis"><br>  
  <label >Cash/Cheque/Online Amount for dishonoured case</label>
  <input type="text" id="dis_case" name="dis_case"><br>  
  <label >Bill Cum Receipt No for dishonoured case</label>
  <input type="text" id="dis_no" name="dis_no"><br>  
  <label >Remarks</label>
  <input type="text" id="remark" name="remark"><br>  
  <label >Pending</label>
  <input type="text" id="pending" name="pending"><br>
   <input type="submit" name="submit" value="submit"><br>
  <input type="reset" value="Reset">
  
 
  


  
  
  
  
  
</form>
</body>
</html>
  