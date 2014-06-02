<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT first_name,last_name,mobile,plate_number,date_from,date_to,time_from,time_to,pick_up,destination FROM customer_register,reservations,car_registration,confirmations WHERE customer_register.user_id=reservations.customer_id AND car_registration.car_id=reservations.car_id AND reservations.resv_id=confirmations.resv AND reservations.owner_id=$ids");
if(!$sql)
{
echo "error";
}
//$sql=mysql_query("SELECT resv_id,plate_number,date_from,date_to,time_from,time_to,amount,mpesa_id,id_number,mobile,first_name,last_name FROM reservations,bookings,car_registration,customer_register WHERE bookings.rev_id=reservations.resv_id AND car_registration.car_id=reservations.car_id AND customer_register.user_id=reservations.customer_id AND car_registration.car_user_id=$id");





?>