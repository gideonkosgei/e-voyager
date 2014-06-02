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
	
	<title>register</title>
</head>
<body>

    <div id="container"><!---start of container-->

        
    
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php"); ?>
            </div><!------------------------------end of header --------------------------------------------->
		<div id="menu">
		<?php include("includes/navigation.php");?>
		</div>
       
       
        <!-------------------start of main content body------------------->

		<?php include("includes/assignment_driver.php");?>

		
        <div class="main_content2">
        <div class="details2">
        <h3>Car-driver assignment</h3>
 <form action="includes/assignment_processor.php" method="post">
 <table width="91%" border="0" cellpadding="5">
  <tr>
    <td width="27%"><b>DRIVER</b></td>
	<td>	
<select name="driver">
<?php
while($driver=mysql_fetch_array($sql))
{
echo"<option value=$driver[driver_id]>".$driver['first_name']." ".$driver['last_name']."</option>";
}
?>
</select>
	</td>
	 <td width="27%"><b>CAR</b></td>
    <td width="73%">
	<select name="car">
	<?php
	while($car=mysql_fetch_array($sql1))
{
echo"<option value=$car[car_id]>".$car['plate_number']."-".$car['car_model']."</option>";
}
	?>
	
	</select>
	</td>
	<td><input type="submit"name="submit" value="ASSIGN"/></td>
</table>
</form>
</div>
               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
              
                <div id="foot_notes"><?php include("includes/footer.php");?></div>
              

			<div class="clearer">&nbsp;</div>



</div><!---end of container---->

</body>
</html>