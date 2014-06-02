<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$car_id=$_POST['car_ID'];
$_SESSION['car_id']=$car_id;
if(isset($_POST['delete'])){

$sql=mysql_query("DELETE FROM car_registration WHERE car_id=$car_id AND car_user_id=$ids");
if(!$sql){
echo"deletion failed";
}
else
{
header("location:../company_view_cars.php");
$_SESSION['delete_success']="<div class='success'> deletion sucess</div>";
}
}
else{
header("location:../comp_car_update.php");
}

 ?>