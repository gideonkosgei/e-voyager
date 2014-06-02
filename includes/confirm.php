<?php
session_start();
$session=$_SESSION["session_email"];
$resv=$_POST['rev'];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$sql2=mysql_query("INSERT INTO confirmations(resv,user)VALUES('$resv','$ids')");
if(!$sql2)
{
echo"<script type='text/javascript'>alert('confirmation was already done');";
				  echo"window.location='../view_bookings_comp.php'";
echo"</script>";
}
else{
echo"<script type='text/javascript'>var x=alert('confirmation successful');";
				  echo"window.location='../view_bookings_comp.php'";
echo"</script>";
}
//}
?>