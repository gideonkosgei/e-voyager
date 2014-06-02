<?php
session_start();
$session=$_SESSION["session_email"];


$plate=$_POST['plate_number'];
$model=$_POST['model'];
$capacity=$_POST['capacity']."-".$_POST['size'];
$condition=$_POST['condition'];
$area=$_POST['area'];
$service=$_POST['service'];
$car_id=$_SESSION['car_id'];
$day=$_POST['day'];
$hour=$_POST['hour'];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$sql=mysql_query("UPDATE car_registration SET plate_number='$plate',car_model='$model',capacity='$capacity',car_condition='$condition',area='$area',service='$service',hour_price='$hour',day_price='$day' WHERE car_user_id='$ids' AND car_id='$car_id'");
if(!$sql)
{
die("details not entered");
}
else
{
echo"<script type='text/javascript'>var x=alert('car details successfully updated');";
				  echo"window.location='../company_view_cars.php'";
echo"</script>";


}
?>