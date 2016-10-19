<?php
ob_start();
session_start();
include("dbconnect.php");

if($_SESSION["in"])
{
	$uid=$_SESSION["in"];
}

$pname = mysql_query("select * from users where id = '$uid'");
$prow = mysql_fetch_assoc($pname);
?>

<!DOCTYPE html>
<html>
<title>MyMatters</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-weight:bold}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>l
    </a>
    <img src="https://s3-eu-west-1.amazonaws.com/cjp-rbi-ptod/wp-content/uploads/sites/8/2015/09/employee-wellbeing-strategy.jpg" style="width:70%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>MyMatters</b></h4>
  </div>
  <a href="employee.php" class="w3-padding w3-text-teal">Home</a>
  <a href="salary1.php" class="w3-padding">Salary</a>
  <a href="medical1.php" class="w3-padding">Medical Status</a>
  <a href="redress.php" class="w3-padding">Redress Channel</a>
  
  <p><?php
  	if ($_SESSION["in"]) {
  		echo "Welcome " . $prow['name'] . "!, " . "<a href='logout.php'>Logout</a>";
  	}
  ?> </p>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header class="w3-container">
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <h1><b>Home</b></h1>
  </header>
	<div>
		<h3>MyMatters Homepage</h3>
		<h3>Collaboration between Employers, Employees, Medical Professionals, MOM</h3>
		<h3>Check your records</h3>
		<h3>Dedicated platform for all your information</h3>
	</div>
<!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
