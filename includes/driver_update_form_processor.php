<?php
session_start();
$session=$_SESSION["session_email"];
$driver_id=$_SESSION['driver_id'];

$firstname=$_POST['first'];
$lastname=$_POST['last'];
$idnumber=$_POST['id'];
$licensenumber=$_POST['license'];
$gender=$_POST['gender'];
$DOB=$_POST['dob'];
$telephone=$_POST['mobile'];
$email=$_POST['email'];
$postal_address=$_POST['address'];
$postal_code=$_POST['code'];
$city=$_POST['city'];
$residence=$_POST['residence'];

include("database.php");
$imagetype = $_FILES['photo']['type'];
		$imagename = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photos/".$_FILES['photo']['name']);
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("UPDATE driver_register SET first_name='$firstname',last_name='$lastname',id_number='$idnumber',license_number='$licensenumber',gender='$gender',DOB='$DOB',mobile='$telephone',email='$email',address='$postal_address',code='$postal_code',city='$city',residence='$residence',photos='$imagename' WHERE user_id='$ids' AND driver_id='$driver_id'");
if(!$sql)
{
die("details not entered");
}
else
{
echo"<script type='text/javascript'>var x=alert('details successfully updated');";
				  echo"window.location='../company_view_drivers.php'";
echo"</script>";

}