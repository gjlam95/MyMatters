<?php
include ("dbconnect.php");

session_unset();
session_destroy();

?>

<script type="text/javascript">
alert("You are logged out!\nThank you for playing Minystery! :)");
window.location="index.php";
</script>