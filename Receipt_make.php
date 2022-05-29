<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<?php $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");

    if(!$connection)

    {

        echo "connection Failed because of ".mysqli_connect_error();

    }

	



 

if(isset($_POST['submit']))

{		

$Name=$_POST['Name'];
$fName=$_POST['fName'];
$Class=$_POST['Class'];

$fee=$_POST['fee'];
$fee1=$_POST['fee1'];


$logo=$_POST['logo'];

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

   $words = array('0' => '', '1' => 'One', '2' => 'Two',

    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',

    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',

    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',

    '13' => 'Thirteen', '14' => 'Fourteen',

    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',

    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',

    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',

    '60' => 'Sixty', '70' => 'Seventy',

    '80' => 'Eighty', '90' => 'Ninety');

   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');

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

	







	

	

	

	if($fee != $fee1)
{
	echo "<script>window.alert('Amount Mismatched - Please Enter Correct Amount');</script>";
	echo "<script>window.location.href='index.php'</script>";
}
else{	

		$sqlQuery = "INSERT INTO `invoice`(`f_name`,`Stud_name`, `Class`, `fee`, `in_words`, `Mode`, `Transaction`, `Date_T`,`bank`,`logo`) 

								VALUES ('$fName','$Name','$Class','$fee','$words','$Mode','$Number','$Transaction','$bank','$logo')";

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

<a href="index.php" class="button">Go to Home</a>

<br>
&nbsp&nbsp
<table style="width: 1080px; height: 420px;" border="1">
<tbody>
<tr>
<td style="vertical-align: top;">
<div class="row">
<div class="column" > &nbsp&nbsp&nbsp&nbsp<img
src="kewi.jpg"  width="80" height="65"> </div>
<div class="column"> <h1>Kids Eduworld India</h1> </div>
<div class="column" > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<?php
if($logo=="Kidzee")
{
echo "<img 
src='kidzee_vasnavdevi_logo.jpg'  width='100' height='60'>"; 
}
else
{
	echo "<img
src='kewi.jpg'  width='80' height='65'>";
}
?>
</div>
</div>

            <div align=center><big><big>GF-30,31,32, Malabar County-2, B/h. Nirma University, Nr.
Vaishnodevi Circle, Tragad,<br> Ahmedabad, Gujarat, India-382470 , 6358745577 </big></div><br>
_________________________________________________________________________________________________________________
       <br><div align="center"><span style="text-decoration: underline;"><br>Receipt</span> </div><br>
      <div align="right">Date:-<?php $dt = new DateTime();

    echo $dt->format('Y-m-d');?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div align="left">&nbsp&nbspReceipt No :-<?php echo $highest_id?></div>
      <br>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspStudent Name:-<?php echo $Name?>(<?php echo $fName?>)</div>
      <div>
      <div align="left">Class:-<?php echo $Class?> </div><br>
      </div>
      </div>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspReceived Payment for Rs:-<?php echo $fee?><br>
      </div>
      
      </div>
	  
	  <div>
      <div align="left"> </div><br>
      </div>
	   </div>
      <div align="left">&nbsp&nbspAmount in Words:-<?php echo $words;?> </div><br>
      <div>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspMode of Payment:-<?php echo $Mode?> </div>
      <div>
      <div align="left">For: Kids Eduworld India </div>
      
      </div>
      </div>
      <div align="left">&nbsp&nbspBank Name:-<?php echo $bank?> </div>
      <div>
      <div style="width: 500px; float: left;">&nbsp&nbspTransaction Number:-<?php echo $Number?> </div>
      <div>
      <div align="left">Receiver's Signature</div>
      </div>
      </div>
      <div align="left">&nbsp&nbspDate of Transaction:-<?php echo $Transaction?> </div>
      <br>
      <br>
      <div align="right">_________________________
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      
      <div><small><small>&nbsp&nbspNote: Subject to Realisation of Cheque. Fee
once paid will not be refunded.</small></small></div>
      <small><small> </small></small></td>
    </tr>
  </tbody>
</table>
</div>
<br>

<br>

</body></html>