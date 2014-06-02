<?php
session_start();
$session=$_SESSION["session_email"];
$car=$_POST['car'];
$driver=$_POST['driver'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$sql=mysql_query("INSERT INTO assignment(driver_id,car_id)VALUES('$driver','$car')");
if(!$sql)
{
echo"<script type='text/javascript'>var x=alert('asignment failed! select a car or driver with no assignment');";
				  echo"window.location='../assign_car_driver.php'";
echo"</script>";
}
else{
echo"<script type='text/javascript'>var x=alert('asignment successful');";
				  echo"window.location='../company_home.php'";
echo"</script>";
}

?>