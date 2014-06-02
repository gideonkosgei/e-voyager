<?php
//date defferences in days;
function dateDiff( $date1,$date2){
$daylen=60*60*24;
$date=(strtotime($date1)-strtotime($date2))/$daylen;
return $date;
}
/*time differences in days
function hoursToMinutes($hours)
{
$minutes=0;
if(strpos($hours,':')!==false)
{
list($hours,$minutes)=explode(':',$hours);
}
return $hours*60+$minutes;
}
*/
// time difference in hours
function timeDiff( $time1,$time2)
{

$diff_in_seconds=strtotime($time1)-strtotime($time2);
 $time=$diff_in_seconds/(60*60*24);
 return $time;
}

?>