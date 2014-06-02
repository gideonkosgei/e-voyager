<?php
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
session_start();
$session=$_SESSION["session_email"];
$sql=mysql_query("SELECT date_from,date_to,time_from,time_to WHERE bookings.rev_id=reservations.resv_id");
if(!$sql)
{
echo"error";
}
$row=mysql_fetch_array($sql);
?>