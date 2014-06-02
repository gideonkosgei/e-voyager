<?php
session_start();
$session=$_SESSION["session_email"];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT first_name,last_name,driver_id FROM driver_register WHERE user_id=$ids");
$sql1=mysql_query("SELECT plate_number,car_model,car_id FROM car_registration WHERE car_user_id=$ids");
//mysql_fetch_row supports fields with only numeric reference


?>