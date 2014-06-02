<?php
session_start();
$session=$_SESSION["session_email"];
$_SESSION['location']=$_POST['location'];
$_SESSION['service']=$_POST['service'];
header("location:../view_search_results.php");
?>