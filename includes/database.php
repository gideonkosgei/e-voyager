<?php
$host="localhost";
$user="root";
$db_name="voyager";
$con=@mysql_connect($host,$user);
if(!$con)
{
die("cannot connect to the database at the moment,try later");
}
$db=@mysql_select_db($db_name,$con);
if(!$db)
{
die("cannot select database");
}
?>