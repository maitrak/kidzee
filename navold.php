<!DOCTYPE html>
<html>
<head>

<style>
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="enquiry.php">Enquiry Form</a>
  <a href="reg.php">Admission Form</a>
    <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Excel
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="excel.php">Enquiry</a>
    <a href="excel_reg.php">Admission</a>
    
  </div>
  </div> 
  

  <a href="search_mail.php">Mail</a>
  <a href="search_s.php">Search student Enroll. wise</a>
  <a href="search.php">Upload Photo</a>
  <a href="edit_enquiry.php">Edit Enquiry</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Fees
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="fee_pay.php">Fees PAY</a>
    <a href="fee_add.php">Fees Add</a>
    
  </div>
  </div> 
</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>