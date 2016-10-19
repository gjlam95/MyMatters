<?php
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
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="https://s3-eu-west-1.amazonaws.com/cjp-rbi-ptod/wp-content/uploads/sites/8/2015/09/employee-wellbeing-strategy.jpg" style="width:70%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>MyMatters</b></h4>
  </div>
  <a href="employer.php" class="w3-padding">Home</a>
  <a href="salary2.php" class="w3-padding w3-text-teal">Salary</a>
  <a href="medical2.php" class="w3-padding">Medical Status</a>
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
    <h1><b>Salary</b></h1>
  </header>
  
  <div class="w3-row-padding">
      <div class="w3-container w3-white">
<table>
	<tr>
		<td><span style="font-weight:bold">No.</span></td>
		<td><span style="font-weight:bold">Name</span></td>
		<td><span style="font-weight:bold">Salary</span></td>
		<td><span style="font-weight:bold">Date Entered</span></td>
		<td><span style="font-weight:bold">Remarks</span></td>
		<td><span style="font-weight:bold">Proof</span></td>
	</tr>
	<tr>
		<td>1</td>
		<td>Syed Muhammad</td>
		<td>$1,234</td>
		<td>11-10-2016</td>
		<td>$234 Overtime(OT) Pay</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Hassan Ismail</td>
		<td>$984</td>
		<td>11-10-2016</td>
		<td>NIL</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Isrudin Hakba</td>
		<td>$854</td>
		<td>11-10-2016</td>
		<td>$100 Overtime(OT) Pay</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>4</td>
		<td>Rusok Seid</td>
		<td>$1,045</td>
		<td>12-10-2016</td>
		<td>NIL</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>5</td>
		<td>Izzar Nabi</td>
		<td>$934</td>
		<td>12-10-2016</td>
		<td>NIL</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>6</td>
		<td>Hassim Moor</td>
		<td>$764</td>
		<td>12-10-2016</td>
		<td>NIL</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>7</td>
		<td>Hussain Jaid</td>
		<td>$856</td>
		<td>12-10-2016</td>
		<td>$256 Overtime(OT) Pay</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>8</td>
		<td>Akbar Hasim</td>
		<td>$1,105</td>
		<td>13-10-2016</td>
		<td>NIL</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>9</td>
		<td>Muhammed Ali</td>
		<td>$888</td>
		<td>13-10-2016</td>
		<td>$188 Overtime(OT) Pay</td>
		<td><a href="">Download</a></td>
	</tr>
	<tr>
		<td>10</td>
		<td>Adam Hitam</td>
		<td>$852</td>
		<td>13-10-2016</td>
		<td>NIL</td>
		<td><a href="">Download</a></td>
	</tr>
</table>
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
