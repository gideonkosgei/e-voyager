<?php
session_start();
echo $car=$_POST['car_id'];
$session=$_SESSION["session_email"];
include("database.php");
$sql=mysql_query("SELECT driver_id FROM assignment WHERE car_id=$car");
$id=mysql_fetch_array($sql);
$_SESSION['my_driver']=$id['driver_id'];
header("location:../my_driver_view.php");
?>