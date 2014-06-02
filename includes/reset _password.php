<?php
$new_password=$_post[reset_password];
$new_password=clean_entry($new_password);
include('includes/database.php');
/*encrypt the password*/
$new_password=md5($password);
/*connect to database*/
db_connection();
$query=@mysql_query("UPDATE user_register SET password='$new_password'WHERE");
if(!$query)
{
die("password not reset");
}
else{
{
header("location:index.html");
}

?>