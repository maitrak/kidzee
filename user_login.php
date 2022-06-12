<?php
session_start();
include("connection.php");
?>

<html>
<head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link rel="stylesheet" href="w3.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 100%;
  height: 100%;
  border-radius: 90%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: red;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
img {
  float: left;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  
<form method="post" >
    <div class="imgcontainer" >
      
      <a href="index.php"> <span  class="close" >&times;</span></a>
    </div>
	<table>
	<tr>
	<td>
	<div class="imgcontainer" >
      <img src="KEWI_LOGO.jpg" width="50px" height="250px" width="250px" alt="Admin" class="avatar"style="margin-right:15px;">
    </div>
	</td>
	<td>
	
    <div class="container" style="margin-left:50%">
    <h2><b>Teacher Login</b></h2>
      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <label for="uname"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <input type="submit" name="submit" value="submit">
      
    </div>
	</td>
	</tr>
	</table>

   
	<div>

  </form>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<?php

	//  $connection=mysqli_connect("kidseduworldindia.com","kidsedu_kidsedu","Dec@2019$","kidsedu_kidzee");
  //   if(!$connection)
  //   {
  //       echo "connection Failed because of ".mysqli_connect_error();
  //   }
  
    
	
		if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sqlQuery="SELECT teacher.id,teacher.Name,teacher.Mobile3 FROM `teacher` INNER join teacher_status on teacher.ID=teacher_status.teacher_id where teacher.Name='$name' and teacher_status.status='active' and teacher.Name='$password  ';";
    
    $fireQuery=mysqli_query($connection,$sqlQuery);
    if(mysqli_num_rows($fireQuery)!=0)
    {
        $row=mysqli_fetch_assoc($fireQuery);
        $username=$row['Name'];
        $id=$row['id'];
        echo $id;
        $_SESSION['name']=$username;
        $_SESSION['teacher_id']=$id;

        echo "<script>window.alert('Loged in Succesfully..');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
    else
    {
        echo "<script>window.alert('Login Failed');</script>";
       
    }
	}
?>




</body>
</html>
