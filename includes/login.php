<?php
include('database.php');
$login_email=$_POST['login_email'];
$password=$_POST['login_password'];
$login_password=md5($password);
/*connect to database*/
$select_cat=mysql_query("SELECT category,username FROM registration WHERE  email='$login_email' ");
$row=mysql_fetch_array($select_cat);
 

/*returns the value  of a field in a recordset*/
$cat=$row['category'];
$query=mysql_query("SELECT * FROM registration WHERE email='$login_email' and password='$login_password'");
if(!$query)
{
die("cannot execute query");
}
$count=mysql_num_rows($query);
if($count==1)
{
session_start();
$_SESSION['session_email']=$_POST['login_email'];

			if($cat=="customer")
			{
			header("location:../customer_home.php");
			
			}			
			else{
			header("location:../company_home.php");
			}
}
else{
echo"<script type='text/javascript'>var x=alert('login unsuccessful. please check your email password combination');";

echo"window.location='../index.php'";
echo"</script>";
}
?>