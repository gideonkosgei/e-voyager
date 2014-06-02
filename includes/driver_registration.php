<?php
session_start();
$session=$_SESSION["session_email"];
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
$imagetype = $_FILES['photo']['type'];
		 echo $imagename = $_FILES['photo']['name'];
	move_uploaded_file($_FILES['photo']['tmp_name'],"../photos/".$_FILES['photo']['name']);

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("INSERT INTO driver_register(first_name,last_name,id_number,license_number,gender,DOB,mobile,email,address,code,city,residence,user_id,photos)VALUES('$firstname','$lastname','$idnumber','$licensenumber','$gender','$DOB','$telephone','$email','$postal_address','$postal_code','$city','$residence','$ids','$imagename')");
if(!$sql)
{
echo"<script type='text/javascript'>var x=alert('ERROR!  a driver with the same ID NUMBER you are trying to enter already exists');";
				  echo"window.location='../comp_driver_reg.php'";
echo"</script>";
}
else
{
echo"<script type='text/javascript'>var x=alert('Driver successfully added');";
				  echo"window.location='../company_view_drivers.php'";
echo"</script>";

}
?>