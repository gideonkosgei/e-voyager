<?php
session_start();
$session=$_SESSION["session_email"];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT DISTINCT area FROM car_registration");
//mysql_fetch_row supports fields with only numeric reference


?>