<?php
session_start();
$session=$_SESSION["session_email"];
$area=$_SESSION['location'];
$service=$_SESSION['service'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT * FROM car_registration WHERE service='$service' AND area='$area'");

?>