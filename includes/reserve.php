<?php
session_start();
include("database.php");
$session=$_SESSION["session_email"];
$hour=$_POST['hourly'];
$daily=$_POST['daily'];
$mpesa=$_POST['m_pesa'];
$option=$_POST['option'];
$resv=$_POST['resv'];
$car=$_SESSION['car_id'];

$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$yes="option";

if($option=="daily"){
$amount=$daily;
}
else
{
$amount=$hour;
}
$sql=mysql_query("INSERT INTO bookings(rev_id,options,amount,mpesa_id)VALUES('$resv','$option','$amount','$mpesa')");
if(!$sql)
{
echo"<script type='text/javascript'>alert('no double booking');";
echo"history.back()</script>";
}
else{
echo"<script type='text/javascript'>alert('request sent.PLEASE wait for a confirmation of this transaction and check the book status after a while');";
echo"window.location='../customer_home.php'";
echo"</script>";
}

?>
