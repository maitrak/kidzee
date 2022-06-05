<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<?php 
  include("connection.php");

	



 

if(isset($_POST['submit']))

{		

$Name=$_POST['Name'];

$Class=$_POST['Class'];

$fee=$_POST['fee'];

//$Words=$_POST['words'];

$Mode=$_POST['Mode'];

$Number=$_POST['Number'];

$Transaction=$_POST['Transaction'];

$bank=$_POST['bank'];

  /**

   * Created by PhpStorm.

   * User: sakthikarthi

   * Date: 9/22/14

   * Time: 11:26 AM

   * Converting Currency Numbers to words currency format

   */

$number = $fee;

   $no = floor($number);

   $point = round($number - $no, 2) * 100;

   $hundred = null;

   $digits_1 = strlen($no);

   $i = 0;

   $str = array();

   $words = array('0' => '', '1' => 'one', '2' => 'two',

    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',

    '7' => 'seven', '8' => 'eight', '9' => 'nine',

    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',

    '13' => 'thirteen', '14' => 'fourteen',

    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',

    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',

    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',

    '60' => 'sixty', '70' => 'seventy',

    '80' => 'eighty', '90' => 'ninety');

   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');

   while ($i < $digits_1) {

     $divider = ($i == 2) ? 10 : 100;

     $number = floor($no % $divider);

     $no = floor($no / $divider);

     $i += ($divider == 10) ? 1 : 2;

     if ($number) {

        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;

        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;

        $str [] = ($number < 21) ? $words[$number] .

            " " . $digits[$counter] . $plural . " " . $hundred

            :

            $words[floor($number / 10) * 10]

            . " " . $words[$number % 10] . " "

            . $digits[$counter] . $plural . " " . $hundred;

     } else $str[] = null;

  }

  $str = array_reverse($str);

  $result = implode('', $str);

  $points = ($point) ?

    "." . $words[$point / 10] . " " . 

          $words[$point = $point % 10] : '';

   $words= $result . "Rupees  Only";		

	







	

	

	

	

		$sqlQuery = "INSERT INTO `invoice`(`Stud_name`, `Class`, `fee`, `in_words`, `Mode`, `Transaction`, `Date_T`,`bank`) 

								VALUES ('$Name','$Class','$fee','$words','$Mode','$Number','$Transaction','$bank')";

		$fireQuery=mysqli_query($connection,$sqlQuery);

        if($fireQuery)

        {

           $max="SELECT max(Id) FROM invoice";

		   if($result = mysqli_query($connection, $max)){

				if(mysqli_num_rows($result) > 0){

				{

					while($row = mysqli_fetch_array($result))

					{

						 $highest_id = $row[0];

					}

				}

			}

		}

		   

		   

        }

		

		

}

?>
 <html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
box-sizing: border-box;
}

.row {
display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
flex: 33.33%;
padding: 5px;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>
<body>
<div align=center> <b>

<a href="http://localhost/kidzee/" class="button">Go to Home</a>

<br>
<br>
<br>
<br>
&nbsp&nbsp
<table style="width: 1051px; height: 420px;" border="1">
<tbody>
<tr>
<td style="vertical-align: top;">
<div class="row">
<div class="column" > <img
src="http://localhost/kidzee/kewi.jpeg" alt="Snow" width="80" height="60"> </div>
<div class="column"> <h1>Kids Eduworld India</h1> </div>
<div class="column" > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img
src="http://localhost/kidzee/kidzee.jpeg" alt="Mountains" width="100" height="60"> </div>
</div>

      
      <div align=center>GF-30,31,32, Malabar County-2, B/h. Nirma University, Nr.
Vaishnodevi Circle, Tragad, Ahmedabad, Gujarat, India-382470 , 6358745577 </div><br><br>
       <div align="center"><span style="text-decoration: underline;">Receipt</span> </div><br>
      <div align="right">Date:-<?php $dt = new DateTime();

    echo $dt->format('Y-m-d');?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div align="left">&nbsp&nbspReceipt No :-<?php echo $highest_id?></div>
      <br>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspStudentName:-<?php echo $Name?></div>
      <div>
      <div align="left">Class:-<?php echo $Class?> </div>
      </div>
      </div>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspReceived payment for Rs:-<?php echo $fee?>
      </div>
      <div>
      <div align="left">Amount in Words:-<?php echo $words;?> </div>
      </div>
      </div>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspMode of Payment:-<?php echo $Mode?> </div>
      <div>
      <div align="left">For: Kids Eduworld India </div>
      <br>
      </div>
      </div>
      <div align="left">&nbsp&nbspBank Name:-<?php echo $bank?> </div>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspTransaction Number:-<?php echo $Number?> </div>
      <div>
      <div align="left">Receivers Signature</div>
      </div>
      </div>
      <div align="left">&nbsp&nbspDate of Transaction:-<?php echo $Transaction?> </div>
      <br>
      <br>
      <div align="right">_________________________
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <br>
      <br>
      <div><small><small>Note: Subject to Realisation of Cheque. Fee
once paid will not be refunded</small></small></div>
      <small><small> </small></small></td>
    </tr>
  </tbody>
</table>
</div>
<br>

<br>

</body></html>