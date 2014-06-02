<?php
session_start();
$session=$_SESSION["session_email"];
$plate=$_POST['plate_number'];
$model=$_POST['model'];
$capacity=$_POST['capacity']."-".$_POST['size'];
$condition=$_POST['condition'];
$area=$_POST['operation_area'];
$service=$_POST['service'];
$day=$_POST['day'];
$hour=$_POST['hour'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$sql=mysql_query("INSERT INTO car_registration(plate_number,car_model,capacity,car_condition,area,service,hour_price,day_price,car_user_id)VALUES('$plate','$model','$capacity','$condition','$area','$service','$hour','$day','$ids')");
if(!$sql)
{
echo"<script type='text/javascript'>var x=alert('ERROR!  a car with the same PLATE NUMBER you are trying to register already exists');";
				  echo"window.location='../comp_car_reg.php'";
echo"</script>";

}
else
{
echo"<script type='text/javascript'>var x=alert('car successfully added');";
				  echo"window.location='../company_view_cars.php'";
echo"</script>";
}
?>