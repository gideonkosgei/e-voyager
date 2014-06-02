<?php
session_start();
$session=$_SESSION["session_email"];

$_SESSION['car_id']=$_POST['car_id'];
$_SESSION['car_owner_id']=$_POST['car_owner'];
$car=$_SESSION['car_id'];
if(isset($_POST['availability'])){
header("location:../availability.php");
}
else{
header("location:../book.php");
}
?>