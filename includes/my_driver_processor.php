<?php
session_start();
$session=$_SESSION["session_email"];
$driver_id=$_SESSION['my_driver'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT * FROM driver_register WHERE driver_id=$driver_id");
if(!$sql)
{
echo "error";
}
$row=mysql_fetch_array($sql);

?>