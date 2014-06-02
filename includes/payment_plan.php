<?php
session_start();
$session=$_SESSION["session_email"];
$car=$_SESSION['car_id'];
$owner=$_SESSION['car_owner_id'];
include("database.php");
$sql=mysql_query("SELECT resv_id,hour_price,day_price,date_from,date_to,time_to,time_from FROM car_registration,reservations WHERE car_registration.car_id=reservations.car_id AND car_registration.car_id=$car ");
$vars=mysql_fetch_array($sql);
include("dateTimeFunctions.php");

$hourly=$vars['hour_price'];
$daily=$vars['day_price'];
$date_to=$vars['date_to'];
$time_from=$vars['time_from'];
$time_to=$vars['time_to'];
$date_from=$vars['date_from'];
$resv=$vars['resv_id'];
$dateDiff=dateDiff($date_to,$date_from);
$timeDiff=timeDiff($time_to,$time_from);
$period=$dateDiff+$timeDiff;
//hourly plan
$reservation_h=0.1*$hourly*24*$period;
$total_h=$hourly*24*$period;
$balance_h=($total_h-$reservation_h);
//daily plan
$reservation_d=0.1*$daily*$period;
$total_d=$daily*$period;
$balance_d=($total_d-$reservation_d);
?>   