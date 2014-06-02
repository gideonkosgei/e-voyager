<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);



$driver=$_POST['driver_ID'];
$_SESSION['driver_id']=$driver;
if(isset($_POST['delete'])){

$sql=mysql_query("DELETE FROM driver_register WHERE driver_id=$driver AND user_id=$ids");
if(!$sql){
echo"deletion failed";
}
else
{
header("location:../company_view_drivers.php");
}
}
else{
if($_POST['view'])
{
header("location:../comp_driver_view.php");
}
else if($_POST['edit']){
header("location:../comp_driver_update.php");
}
}

 ?>