<?php
function clean_entry($entry)
{
/*strip slashed to the email*/
$data=stripslashes($entry);
$data=htmlspecialchars($data);
/*The function mysql_real_escape_string() stops hackers!*/
$data=mysql_real_escape_string($data);
return $data;
}
?>