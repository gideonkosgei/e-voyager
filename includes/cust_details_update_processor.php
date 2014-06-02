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
		$imagename = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photos/".$_FILES['photo']['name']);
$sql=mysql_query("UPDATE  customer_register SET first_name='$firstname',last_name='$lastname',id_number='$idnumber',gender='$gender',DOB='$DOB',mobile='$telephone',address='$postal_address',code='$postal_code',city='$city',residence='$residence',photos='$imagename' WHERE user_id='$ids'");
if(!$sql)
{
die("details not UPDATED");
}
else
{
 echo"<script type='text/javascript'>var x=alert('your details has successfully been updated');";
				  echo"window.location='../cust_details_view.php'";
echo"</script>";

}