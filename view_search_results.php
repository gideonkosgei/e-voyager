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
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<div id="menu">
		<?php include("includes/nav_cust.php");?>
		</div>
       <?php include("includes/search_car_results_processor.php");?>
        <!-------------------start of main content body------------------->


		
        <div class="main_content2">
        <div class="details">
        <h3>search results</h3>
 <table>
<tr><td><u>plate number</u></td><td><u>car model</u></td><td><u>capacity</u></td><td><u>price per hour</u></td><td><u>price per day</u></td><td>&nbsp;</td></tr>
<?php
while($car=mysql_fetch_array($sql))
{
echo"<form action='includes/book_car_vars.php' method='POST'><tr><td>".$car['plate_number']."</td><td>".$car['car_model']."</td><td>".$car['capacity']."</td><td>".$car['hour_price']."/=</td><td>".$car['day_price']."/=</td><td><input type='hidden' name='car_owner' value=$car[car_user_id]><input type='hidden' name='car_id' value=$car[car_id]><input type='submit' name='availability'value='view availability'/><input type='submit'name='book' value='BOOK NOW!'/></td></tr></form>";
}
?>
</table>
</div>
               
               </div><!-----end of main content--------->
              
               <div id="foot_notes"><?php include("includes/footer.php");?></div>

			<div class="clearer">&nbsp;</div>

</div><!---end of container--->

</body>
</html>