<?php
session_start();
include("database.php");
$session=$_SESSION["session_email"];
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$sql=mysql_query("SELECT plate_number,date_from,date_to,time_from,time_to,amount FROM reservations,bookings,car_registration,company_register WHERE bookings.rev_id=reservations.resv_id AND car_registration.car_id=reservations.car_id  AND reservations.customer_id=$ids");
if(!$sql)
{
echo"error";
}

?>