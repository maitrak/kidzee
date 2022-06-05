











  <?php
  
	  $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
	if(isset($_POST['submit']))
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
		$one="null";

	
		$sql="INSERT INTO `add`(`name`, `nrr`, `Session`, `acc_year`, `kidzee_enrol`, `kewi`, `class`, `form_fee`, `mode`, `form_no`, `br_no`, `i_no`, `kit_order`, `kit_given`, `admis_date`, `care`, `comitted`, `comitted_fee`, `es`, `disc`, `photo1`, `photo2`, `photo3`, `doc1`, `doc2`, `doc3`)
		VALUES('$name','$nrr','$Session','$acc_year','$kidzee_enrol','$kewi','$class','$form_fee','$mode','$form_no','$br_no','$i_no','$kit_order','$kit_given','$admis_date','$care','$comitted','$comitted_fee','$es','$disc','$one','$one','$one','$one','$one','$one')";
	
		$fireQuery=mysqli_query($connection,$sql);
        if($fireQuery)
        {           
			$max="SELECT max(`admission_id`)FROM `add`";
		   if($result123 = mysqli_query($connection, $max)){
				if(mysqli_num_rows($result123) > 0){
				{
					while($row = mysqli_fetch_array($result123))
					{
						 $highest_id = $row[0];
					}
				}
			}
		}
		 $alert="ID:".$highest_id."   Name:".$name."      Session:".$Session."   A/C Year:".$acc_year."   Class:".$class;
            //echo "<script>window.alert('Record Added');</script>";
			echo "<script>window.alert('$alert');</script>";
            echo "<script>window.location.href='index.php#step4'</script>";
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