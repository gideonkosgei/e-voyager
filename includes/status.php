<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT reservations.car_id,first_name,last_name,mobile,plate_number,date_from,date_to,time_from,time_to,pick_up,destination,amount FROM customer_register,reservations,car_registration,confirmations,bookings WHERE customer_register.user_id=reservations.customer_id AND car_registration.car_id=reservations.car_id AND reservations.resv_id=confirmations.resv AND reservations.customer_id=$ids AND bookings.rev_id=reservations.resv_id");
if(!$sql)
{
echo "error";
}


?>