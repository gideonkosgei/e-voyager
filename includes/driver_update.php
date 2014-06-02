<?php
session_start();
$session=$_SESSION["session_email"];
$driver_id=$_SESSION['driver_id'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT * FROM driver_register WHERE user_id=$ids AND driver_id=$driver_id");
$row=mysql_fetch_array($sql);

?>