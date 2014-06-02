<?php
session_start();
$session=$_SESSION["session_email"];


$firstname=$_POST['first'];
$lastname=$_POST['last'];
$idnumber=$_POST['id'];
$gender=$_POST['gender'];
$DOB=$_POST['dob'];
$telephone=$_POST['mobile'];
$postal_address=$_POST['address'];
$postal_code=$_POST['code'];
$city=$_POST['city'];
$residence=$_POST['residence'];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$imagetype = $_FILES['photo']['type'];
		$imagename= $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photos/".$_FILES['photo']['name']);
$sql=mysql_query("INSERT INTO customer_register(first_name,last_name,id_number,gender,DOB,mobile,address,code,city,residence,user_id,photos)VALUES('$firstname','$lastname','$idnumber','$gender','$DOB','$telephone','$postal_address','$postal_code','$city','$residence','$ids','$imagename')");
if(!$sql)
{
echo"<script type='text/javascript'>var x=alert('profile already exists');";
echo"history.back()</script>";
echo"</script>";
}
else
{
echo"<script type='text/javascript'>var x=alert('registration successful');";
echo"window.location='../cust_details_view.php'";
echo"</script>";

}