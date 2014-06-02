<?php
session_start();
$car=$_SESSION['car_id'];
include("database.php");
$sql=mysql_query("SELECT date_to,time_to FROM reservations WHERE car_id=$car");
if(!$sql){
echo"error";
}
else{
$results=mysql_fetch_array($sql);
if($results['time_to']==""||$results['date_to']=="")
{
echo "<h3>the car is fully available.you can reserve now</h3>";
}
else{
echo "The car is already booked but it will be free from<h3>".$results['date_to']."</h3> at <h3>".$results['time_to']."</h3>";
}
}
?>