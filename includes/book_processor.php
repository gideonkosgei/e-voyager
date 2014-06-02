<?php
session_start();
$session=$_SESSION["session_email"];
$car=$_SESSION['car_id'];
$owner=$_SESSION['car_owner_id'];
$d_from=$_POST['date_from'];
$d_to=$_POST['date_to'];
$f_i=$_POST['f_time'];
$f_h=$_POST['f_hours'];
$f_m=$_POST['f_min'];
$t_i=$_POST['t_time'];
$t_h=$_POST['t_hours'];
$t_m=$_POST['t_min'];
$pick=$_POST['pick_up'];
$des=$_POST['destination'];
$t_from=$f_h.":".$f_m.":".$f_i;
$t_to=$t_h.":".$t_m.":".$t_i;

include("database.php");

$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
 $sql=mysql_query("INSERT INTO reservations(date_from,date_to,time_from,time_to,pick_up,destination,car_id,customer_id,owner_id)VALUES('$d_from','$d_to','$t_from','$t_to','$pick','$des','$car','$ids','$owner')");
if(!$sql)
{echo "error!";
}
else{
header("location:../payments.php");
}
?>