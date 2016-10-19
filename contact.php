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
  <a href="employee.php" class="w3-padding">Home</a>
  <a href="salary1.php" class="w3-padding">Salary</a>
  <a href="medical1.php" class="w3-padding">Medical Status</a>
  <a href="redress.php" class="w3-padding">Redress Channel</a>
  <a href="contact.php" class="w3-padding w3-text-teal">Contacts</a>
  
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
    <h1><b>Contacts</b></h1>
  </header>
	
	<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
	    <h3>TWC2</h3>
      <div class="w3-container w3-white">
        <p>5001 Beach Road, #09-86</p>
	<p>Golden Mile Complex</p>
	<p>Singapore 199588</p>
	<p>Phone: +65 6247 7001</p>
	<p>Email: info@twc2.org.sg</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
     <h3>HealthServe</h3>
      <div class="w3-container w3-white">
        <p>Geylang Head Office & Clinic</p>
	<p>1 Lorong 23 Geylang</p>
	<p>#01-07 Building 4</p>
	<p>Clinic Tel: +65 9487 1377</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <h3>HOME</h3>
      <div class="w3-container w3-white">
        <p>2 Lorong 17 Geylang</p>
	<p>Singapore 388534</p>
	<p>Tel: 1800-7-977-977 (toll free)</p>
      </div>
    </div>
  </div>
	
<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
	    <h3>Singapore Medical Council (SMC)</h3>
      <div class="w3-container w3-white">
        <p>16 College Road #01-01</p>
	<p>College of Medicine Building</p>
	<p>Singapore 169854</p>
	<p>Tel: (+65) 6506-2102</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
     <h3>Ministry of Manpower (MOM)</h3>
      <div class="w3-container w3-white">
        <p>MOM Services Centre</p>
	<p>1500 Bendemeer Road</p>
	<p>Singapore 339946</p>
	<p>Tel: +65 6438 5122</p>
      </div>
    </div>
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
