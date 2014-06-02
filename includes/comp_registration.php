<?php
session_start();
$session=$_SESSION["session_email"];

$name=$_POST['comp_name'];
$formation=$_POST['comp_year_formed'];
$registered=$_POST['comp_year_reg'];
$operation=$_POST['comp_area'];
$mobile=$_POST['comp_mobile'];
$address=$_POST['comp_address'];
$code=$_POST['comp_code'];
$city=$_POST['comp_city'];
$HQ=$_POST['comp_HQ'];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$imagetype = $_FILES['photo']['type'];
		$imagename = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photos/".$_FILES['photo']['name']);


$sql=mysql_query("INSERT INTO company_register(name,year_formed,year_registered,operation_area,mobile,address,code,city,headquaters,user_id,photos) VALUES('$name','$formation','$registered','$operation','$mobile','$address','$code','$city','$HQ','$ids','$imagename')");
if(!$sql)
{
die("details not entered");
}
else
{
echo"<script type='text/javascript'>var x=alert('your profile has successful been built');";
				  echo"window.location='../comp_details_view.php'";
echo"</script>";
}

?>

