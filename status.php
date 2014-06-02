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
       <?php include("includes/status.php");?>
        <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details">
		<h3>the list below consists of confirmed bookings</h3>
		<table>
		<tr align='left' bgcolor="#E6E6FF"><th>&nbsp;</th><th>car</th><th>from</th><th>to</th><th>amount</th><th>pick up</td><th>destination</th><th>driver</th></tr>
		<?php
		$no=1;
		while($row=mysql_fetch_array($sql)){
		if($no%2==0){
		$color="#E6E6FF";}
		else{
		$color="white";}
		
		echo"<tr bgcolor=$color><form method='POST' action='includes/my_driver.php'><td>".$no++."</td><td>".$row['plate_number']."</td><td>".$row['date_from']." - ".$row['time_from']."</td><td>".$row['date_to']." - ".$row['time_to']."</td><td>".$row['amount']."</td><td>".$row['pick_up']."</td><td>".$row['destination']."</td><td><input type='hidden' name='car_id' value=$row[car_id]><input type='submit' value='view'class='btn'/></td></form></tr>";
		}
	?>
		</table>
         
</div>
               
               </div><!-----end of main content--------->
             
               <div id="foot_notes"><?php include("includes/footer.php");?></div>

			<div class="clearer">&nbsp;</div>



</div><!---end of container>

</body>
</html>