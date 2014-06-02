<?php
session_start();
$session=$_SESSION["session_email"];
$car_id=$_SESSION['car_id'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT * FROM car_registration WHERE car_user_id=$ids AND car_id=$car_id");
$row=mysql_fetch_array($sql);

?>