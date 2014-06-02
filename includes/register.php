<?php
/*connect to database*/
include("database.php");

/* declaration of global variables*/
$date=date("Y/m/d");
$username=$_POST['register_user'];
$email=$_POST['register_email'];
$category=$_POST['category'];
$pas=$_POST['register_password'];
$password=md5($pas);
/*encrypt the password*/


/*check if email is already registered*/
$con_email=mysql_query("SELECT email FROM registration WHERE email='$email'");
$count=mysql_num_rows($con_email);
if($count==0){
$sql=mysql_query("INSERT INTO registration(username,email,category,password,date)VALUES('$username','$email','$category','$password','$date')");
        if(!$sql){
            die("could not execute query");}
            else{
                  echo"<script type='text/javascript'>var x=alert('registration successful,You can now login');";
				  echo"window.location='../index.php'";
echo"</script>";

			
				  }
}
elseif($count==1){
echo"<script type='text/javascript'>var x=alert('email already in use,try an alternative email and try to login again');";
				 echo"history.back()</script>";
echo"</script>";
}
?>