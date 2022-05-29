











  <?php
  
	  $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	if(isset($_POST['update']))
    {
		$name=$_POST['name'];
		$nrr=$_POST['nrr'];
		$acc_year=$_POST['acc_year'];
		$Session=$_POST['Session'];
		$kidzee_enrol=$_POST['kidzee_enrol'];
		$kewi=$_POST['kewi'];
		$class=$_POST['class'];
		$form_fee=$_POST['form_fee'];
		$mode=$_POST['mode'];
		$form_no=$_POST['form_no'];
		$br_no=$_POST['br_no'];
		$i_no=$_POST['i_no'];
		$kit_order=$_POST['kit_order'];
		$kit_given=$_POST['kit_given'];
		$admis_date=$_POST['admis_date'];
		$care=$_POST['care'];
		$comitted=$_POST['comitted'];
		$comitted_fee=$_POST['comitted_fee'];
		
		
		
		$es=$_POST['es'];
		$disc=$_POST['disc'];
		echo $comit = $comitted_fee-$disc;
		$tran1=$_POST['tran1'];
		$amt1=$_POST['amt1'];
		$mode1=$_POST['mode1'];
		$rec1=$_POST['rec1'];
		$no1=$_POST['no1'];
		$br_no1=$_POST['br_no1'];		
		$tran2=$_POST['tran2'];
		$amt2=$_POST['amt2'];
		$mode2=$_POST['mode2'];
		$rec2=$_POST['rec2'];
		$no2=$_POST['no2'];
		$br_no2=$_POST['br_no2'];
		$tran3=$_POST['tran3'];
		$amt3=$_POST['amt3'];
		$mode3=$_POST['mode3'];
		$rec3=$_POST['rec3'];
		$no3=$_POST['no3'];
		$br_no3=$_POST['br_no3'];
		$tran4=$_POST['tran4'];
		$amt4=$_POST['amt4'];
		$mode4=$_POST['mode4'];
		$rec4=$_POST['rec4'];
		$no4=$_POST['no4'];
		$br_no4=$_POST['br_no4'];
		$tran5=$_POST['tran5'];
		$amt5=$_POST['amt5'];
		$mode5=$_POST['mode5'];
		$rec5=$_POST['rec5'];
		$no5=$_POST['no5'];
		$br_no5=$_POST['br_no5'];
		$tran6=$_POST['tran6'];
		$amt6=$_POST['amt6'];
		$mode6=$_POST['mode6'];
		$rec6=$_POST['rec6'];
		$no6=$_POST['no6'];
		$br_no6=$_POST['br_no6'];
		$tran7=$_POST['tran7'];
		$amt7=$_POST['amt7'];
		$mode7=$_POST['mode7'];
		$rec7=$_POST['rec7'];
		$no7=$_POST['no7'];
		$br_no7=$_POST['br_no7'];
		$tran8=$_POST['tran8'];
		$amt8=$_POST['amt8'];
		$mode8=$_POST['mode8'];
		$rec8=$_POST['rec8'];
		$no8=$_POST['no8'];
		$br_no8=$_POST['br_no8'];
		$tran9=$_POST['tran9'];
		$amt9=$_POST['amt9'];
		$mode9=$_POST['mode9'];
		$rec9=$_POST['rec9'];
		$no9=$_POST['no9'];
		$br_no9=$_POST['br_no9'];
		$tran10=$_POST['tran10'];
		$amt10=$_POST['amt10'];
		$mode10=$_POST['mode10'];
		$rec10=$_POST['rec10'];
		$no10=$_POST['no10'];
		$br_no10=$_POST['br_no10'];
		$tran11=$_POST['tran11'];
		$amt11=$_POST['amt11'];
		$mode11=$_POST['mode11'];
		$rec11=$_POST['rec11'];
		$no11=$_POST['no11'];
		$br_no11=$_POST['br_no11'];
		$tran12=$_POST['tran12'];
		$amt12=$_POST['amt12'];
		$mode12=$_POST['mode12'];
		$rec12=$_POST['rec12'];
		$no12=$_POST['no12'];
		$br_no12=$_POST['br_no12'];
		$refund_dt=$_POST['refund_dt'];
		echo $chq_onl=$_POST['chq_onl'];
		$refund_tran_no=$_POST['refund_tran_no'];
		$refund_amt=$_POST['refund_amt'];
		$chq_no=$_POST['chq_no'];
		$p_amt=$_POST['p_amt'];
		$dis_date=$_POST['dis_date'];
		$next=$_POST['next'];
		$mode_dis=$_POST['mode_dis'];
		$dis_case=$_POST['dis_case'];
		$dis_no=$_POST['dis_no'];
		$remark=$_POST['remark'];
		$pending=$_POST['pending'];
		$foo=$_POST['foo'];
		$dob=$_POST['dob'];
		$priliminary= $_POST['priliminary'];
		$uniform= $_POST['uniform'];
		$father= $_POST['father'];
		$mother= $_POST['mother'];
		$father_m= $_POST['father_m'];
		$mother_m= $_POST['mother_m'];
		$father_e= $_POST['father_e'];
		$mother_e= $_POST['mother_e'];
		$soc= $_POST['Society'];
		$addr= $_POST['Addr'];
		
		
		$sql="UPDATE `add` SET `name`='$name',`nrr`='$nrr',
		`Session`='$Session',`acc_year`='$acc_year',`kidzee_enrol`='$kidzee_enrol',`kewi`='$kewi',
		`class`='$class',`form_fee`='$form_fee',`mode`='$mode',`form_no`='$form_no',
		`br_no`='$br_no',`i_no`='$i_no',`kit_order`='$kit_order',`kit_given`='$kit_given',
		`admis_date`='$admis_date',`care`='$care',`comitted`='$comitted',`comitted_fee`='$comitted_fee'
		,`es`='$es',`disc`='$disc',`tran1`='$tran1',`amt1`='$amt1',`mode1`='$mode1',
		`rec1`='$rec1',`no1`='$no1',`br_no1`='$br_no1',`tran2`='$tran2',`amt2`='$amt2',
		`mode2`='$mode2',`rec2`='$rec2',`no2`='$no2',`br_no2`='$br_no2',`tran3`='$tran3',
		`amt3`='$amt3',`mode3`='$mode3',`rec3`='$rec3',`no3`='$no3',`br_no3`='$br_no3',
		`tran4`='$tran4',`amt4`='$amt4',`mode4`='$mode4',`rec4`='$rec4',`no4`='$no4',
		`br_no4`='$br_no4',`tran5`='$tran5',`amt5`='$amt5',`mode5`='$mode5',`rec5`='$rec5',
		`no5`='$no5',`br_no5`='$br_no5',`tran6`='$tran6',`amt6`='$amt6',`mode6`='$mode6',
		`rec6`='$rec6',`no6`='$no6',`br_no6`='$br_no6',`tran7`='$tran7',`amt7`='$amt7',
		`mode7`='$mode7',`rec7`='$rec7',`no7`='$no7',`br_no7`='$br_no7',`tran8`='$tran8',
		`amt8`='$amt8',`mode8`='$mode8',`rec8`='$rec8',`no8`='$no8',`br_no8`='$br_no8',
		`tran9`='$tran9',`amt9`='$amt9',`mode9`='$mode9',`rec9`='$rec9',`no9`='$no9',
		`br_no9`='$br_no9',`tran10`='$tran10',`amt10`='$amt10',`mode10`='$mode10',
		`rec10`='$rec10',`no10`='$no10',`br_no10`='$br_no10',`tran11`='$tran11',
		`amt11`='$amt11',`mode11`='$mode11',`rec11`='$rec11',`no11`='$no11',
		`br_no11`='$br_no11',`tran12`='$tran12',`amt12`='$amt12',`mode12`='$mode12'
		,`rec12`='$rec12',`no12`='$no12',`br_no12`='$br_no12',`refund_dt`='$refund_dt'
		,`chq_onl`='$chq_onl',`refund_tran_no`='$refund_tran_no',`refund_amt`='$refund_amt',
		`chq_no`='$chq_no',`p_amt`='$p_amt',`dis_date`='$dis_date',`next`='$next',
		`mode_dis`='$mode_dis',`dis_case`='$dis_case',`dis_no`='$dis_no',`remark`='$remark',
		`pending`='$pending',`dob`='$dob',`priliminary`='$priliminary',`uniform`='$uniform',`father`='$father',`mother`='$mother',`father_m`='$father_m',`mother_m`='$mother_m',`father_e`='$father_e',`mother_e`='$mother_e',`SOC`='$soc',`Addr`='$addr',`committed`='$comit' WHERE `admission_id` = '$foo'";
	
		$fireQuery=mysqli_query($connection,$sql);
        if($fireQuery)
        {
			
            echo "<script>window.alert('$comit');</script>";
			//echo '<script type="text/javascript"> alert('.$error.')</script>';
			
			echo "<script>window.location.href='Update_admission.php'</script>";
			//echo $nrr;
			
			
			
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