
<?php
$connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
if(isset($_POST['submit']))
{		
$sid=$_POST['sid'];

		





	
	
	
	
		$sqlQuery = "SELECT * FROM `invoice` WHERE `ID` ='$sid'";
		$fireQuery=mysqli_query($connection,$sqlQuery);
        if (mysqli_num_rows($fireQuery) > 0) 
        {
			while($row = mysqli_fetch_array($fireQuery))  
			{
           $highest_id=$row[0];
           $dt = $row[1];
           $Name=$row[2];
           $fName=$row[3];
           $Class=$row[4];
           $fee=$row[5];
           $Words=$row[6];
           $Mode=$row[7];
           $Number=$row[8];
           $Transaction=$row[9];
           $bank=$row[10];
			}
		}
		   
		   
        
		
		
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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
&nbsp&nbsp
<table style="width: 1080px; height: 400px;" border="1">
<tbody>
<tr>
<td style="vertical-align: top;">
<div class="row">
<div class="column" > &nbsp&nbsp&nbsp&nbsp<img
src="http://localhost/kidzee/kewi.jpg"  width="80" height="65"> </div>
<div class="column"> <h1>Kids Eduworld India</h1> </div>
<div class="column" > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img
src="http://localhost/kidzee/kidzee_vasnavdevi_logo.jpg"  width="100" height="60"> </div>
</div>

      
      <div align=center><big>GF-30,31,32, Malabar County-2, B/h. Nirma University, Nr.
Vaishnodevi Circle, Tragad, Ahmedabad, Gujarat, India-382470 , 6358745577 </div><br><br>
       <div align="center"><span style="text-decoration: underline;">Receipt</span> </div><br>
      <div align="right">Date:-<?php 

    
	echo substr($dt, 0, -9); ?>
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
      <div align="left">&nbsp&nbspAmount in Words:-<?php echo $Words;?> </div><br>
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
once paid will not be refunded</small></small></div>
      <small><small> </small></small></td>
    </tr>
  </tbody>
</table>
</div>
<br>

<br>

</body></html>



