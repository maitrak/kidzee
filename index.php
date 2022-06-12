<?php
session_start();
include("connection.php");
$_SESSION['reload']=0;


if(!isset($_SESSION['name']))
{

    echo "<script>window.alert('You have to Login First');</script>";
   echo "<script>window.location.href='user_login.php'</script>";
	
}
else
{
    $name=$_SESSION['name'];
    $sqlQuery="SELECT  `Name` FROM `teacher` WHERE `Name`='$name'";
    $fireQuery=mysqli_query($connection,$sqlQuery);
    if(mysqli_num_rows($fireQuery)==0)
    {          
            echo "<script>window.alert('you have to Login First');</script>";
         echo "<script>window.location.href='user_login.php'</script>";
    }
}
?>

  <!-- JAY MATAJI -->
  <!-- JAI MATA DI -->
  <!-- SHREE GANESHAIH NAMAH -->
<!DOCTYPE html>
<html lang="en">


<head>


 

  <title>KEWI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

  <style>
<?php include 'bootstrap.min.css'; ?>
</style>
  <style>
<?php include 'css.css'; ?>
</style>
  <style>
<?php include 'css1.css'; ?>
</style>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-heading2 {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 28px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
.panel-heading3 {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 20px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-heading4 {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 24px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header" style="width:100%">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">KEWI</a>
      <a class="navbar-brand" href="logout.php" style="float:right" >Logout</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#step1">Counselor Diary</a></li>

        
        <li><a href="#step4">Admission Converted</a></li>
		<li><a href="#Courier">Courier</a></li>
		<li><a href="#Payment">Payments</a></li>
		<li><a href="#Receipts">Receipts</a></li>
		<li><a href="#download">Downloads</a></li>
		<li><a href="#Tools">Management</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>KIDS EDUWORLD INDIA</h1> 
  <p>We specialize in nuturing and shaping primitive years.. </p> 
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>Kids Eduworld India came into existence in 2018 with the objective of contribution towards building New India in its own way by shaping primitive years of the child towards strong foundation.<br>
		We are an educational establishment or learning space offering early childhood education to children before they begin compulsory education at primary school.<br>
		We have touched 300+ lives in nurturing in their early years with around 600+ happy parents/guardians.<br>
		Kids Eduworld India celebrates its foundation day with new Awtar as on 29th September 2019.<br></h4>
            <br>
    </div>
    <div class="col-sm-4"><br>
      <img src="KEWI_LOGO.jpg" height="350px" width="400px" alt="Italian Trulli">
    </div>
  </div>
</div>



<!-- step1 -->
<div id="step1" class="container-fluid">
  <div class="text-center">
    <h2>Counselor Diary</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Counselor Diary</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Enquiry_detail.php"><button class="btn btn-lg" >Enter</button></a>
        </div>
      </div>      
    </div>     
    <!-- Write your comments here        
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Counselor Diary Update</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Enquiry_Update.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 
	-->
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1> Counselor Diary in Excel</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_Equiry_step1.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Counselor Diary Follow Up</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_follow_up.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>Counselor Diary Not Interested</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_not.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading4">
          <h1>Counselor Diary Converted to Admission</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_con.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 
	</div> 
  
	
  </div>
</div>






















<!-- Container (Pricing Section) 
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Step 2-3</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Student Enquiry Form</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="enquiry.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Student Admission Form</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="reg.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Enquiry Form Excel</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Admission Form Excel</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_reg.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Send Email</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="search_mail"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>
		
	
	    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Upload photo </h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="search.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 
	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Search Student</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="search_s.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>
	

	
	
       

	
  </div>
</div>
-->
<!-- step1 -->
<div id="step4" class="container-fluid">
  <div class="text-center">
    <h2>Admission Converted</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Admission Details Add</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="admission_detail.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>    
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Admission Details Update</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Update_admission.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>  	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Student Pending Fees</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="pending.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>  	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Parent Todler Programme</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="PTP.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>  	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Nursery</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Nursery.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>      	
	     	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Jr. Kg </h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Jr.Kg.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>      	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Sr. Kg</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Sr.Kg.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Day Care</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Day_Care.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>     <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Photo Upload</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="search.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div><div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Photo View</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="excel_addmi1.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div> 

  
	
  </div>
</div>

<!-- Courier -->
<div id="Courier" class="container-fluid">
  <div class="text-center">
    <h2>Courier</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>Inward Register </h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Inward_Register.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>     
    
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>Inward Register Excel</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_Inward_Register.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>Outward Register</h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Outward_Register.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>     
    
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>Outward Register Excel</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_Outward_Register.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div> 
  
	
  </div>
</div>


<div id="Payment" class="container-fluid">
  <div class="text-center">
    <h2>Payments</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading3">
          <h1>Petty Cash </h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Petty_Cash.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>     
    

	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading3">
          <h1>Petty Cash View </h1>
        </div>
        
        <div class="panel-footer">
          
          <a href="Petty_cash_view.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>     
    
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading3">
          <h1>Payments</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="Payment.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> 	
	
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading3">
          <h1>Payments View</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="Payment_view.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div> 
  
	
  </div>
</div>



<div id="Receipts" class="container-fluid">
  <div class="text-center">
    <h2>Receipts</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Invoice Make</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="Receipt.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div>
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Invoice View</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="R_view.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>
		<!--<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Excel Invoice</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="excel_r.php"><button class="btn btn-lg">Enter</button></a>
        </div>
      </div>      
    </div> -->
    
 	
 	

  
	
  </div>
</div>

<div id="download" class="container-fluid">
  <div class="text-center">
    <h2>Downloads</h2>
    
  </div>
  <div class="row slideanim">
    
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Downloads</h1>
        </div>
       
        <div class="panel-footer">
          
          <a href="Notice_view.php"><button class="btn btn-lg" style="background-color:#0066ff">View Only</button></a>
        </div>
      </div>      
    </div>

    
 	
 	

  
	
  </div>
</div>

<div id="Tools" class="container-fluid">
  <div class="text-center">
    <h2>Management </h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
			
        </div>
       
        <div class="panel-footer">
          
          <a href="login.php"><button class="btn btn-lg">Login</button></a>
        </div>
      </div>      
    </div>    


    
 	
 	

  
	
  </div>
</div>

<div id="" class="container-fluid">
  <div class="text-center">
    <h2>Numbers</h2>
    
  </div>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
			
        </div>
       
        <div class="panel-footer">
          
          <a href="number.php"><button class="btn btn-lg">Directory</button></a>
        </div>
      </div>      
    </div>    


    
 	
 	

  
	
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
