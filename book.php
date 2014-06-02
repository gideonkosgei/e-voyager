<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
		<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->
	<script type="text/javascript" src="js/datetimepicker.js"></script> 
	
	<script type="text/javascript">
<!--

function DateCheck()
{
if(document.book.date_from.value>document.book.date_to.value)
{
alert("error in date.please check and continue");
return false;
}
else
{
return true;
}
}
//-->
</script>
	
	<title>register</title>
</head>
<body>
    <div id="container"><!---start of container-->

        
 
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php"); ?>
            </div><!------------------------------end of header --------------------------------------------->
		<div id="menu">
		<?php include("includes/nav_cust.php");?>
		</div>
       
        <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details2">
		<form method="post" action="includes/book_processor.php" name="book" onsubmit="return DateCheck()">
          <table width="200" border="0">
            <tr>
              <th width="18%"><u>FROM</u></th>
              <th width="31%">&nbsp;</th>
              <th width="14%"><u>TO</u></th>
              <th width="37%">&nbsp;</th>
            </tr>
            <tr>
              <td>DATE</td>
              <td><input name="date_from" type="text" size="25" id="date2" readonly="true" required/><a href="javascript:NewCal('date2','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
              <td>DATE</td>
              <td><input name="date_to" type="text" size="25" id="date6"readonly="true" required/><a href="javascript:NewCal('date6','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
            </tr>
            <tr>
              <td>TIME</td>
              <td>
			  
			   <table> 
   <tr>
   <td>
   <select name="f_hours">
<?php
$hours=1;
while($hours<25){
printf("<option value=%02d>%02d</option>", $hours, $hours);
$hours++;
}
?>
   </select> 
   </td>
<td>   
   <select name="f_min">
   
  <?php
$min=0;
while($min<61){
printf("<option value=%02d>%02d</option>", $min, $min);
$min++;
}
?>
</select>   
   </td>
   <td>
   <select name="f_time">
   <?php
$sec=0;
while($sec<61){
printf("<option value=%02d>%02d</option>", $sec, $sec);
$sec++;
}
?>
   </select> 
   </td>
</tr>   
 </table>
			  
			  </td>
              <td>TIME</td>
              <td>
			   <table> 
   <tr>
   <td>
   <select name="t_hours">
<?php
$hours=1;
while($hours<25){
printf("<option value=%02d>%02d</option>", $hours, $hours);
$hours++;
}
?>
   </select> 
   </td>
<td>   
   <select name="t_min">
   
  <?php
$min=0;
while($min<61){
printf("<option value=%02d>%02d</option>", $min, $min);
$min++;
}
?>
</select>   
   </td>
   <td>
   <select name="t_time">
  <?php
$sec=0;
while($sec<61){
printf("<option value=%02d>%02d</option>", $sec, $sec);
$sec++;
}
?>
   </select> 
   </td>
</tr>   
 </table>
			  </td>
            </tr>
            <tr>
             <td><b>PICK UP AREA</b></td>
              <td><input name="pick_up" type="text" size="25" required/></td>
              <td><b>DESTINATION</b></td>
              <td><input name="destination" type="text" size="25" required/></td> 
             
            </tr>
          </table>
		  <input type="submit" value="book"/><input type="reset" value="cancel booking"/>
		  </form>
</div>
               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
              
               
               <div id="foot_notes"><?php include("includes/footer.php");?></div>

			<div class="clearer">&nbsp;</div><!-------------------------------->



</div><!---end of container--->

</body>
</html>