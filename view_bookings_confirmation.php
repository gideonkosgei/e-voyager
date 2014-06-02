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
		<?php include("includes/navigation.php");?>
		</div>
               <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details">
		<h3>confirmations</h3>
			<?php include("includes/confirm_view.php");?>
		<table>
		<tr align='left'><th>&nbsp;</th><th><u>name<u></th><th><u>mobile<u></th><th><u>car<u></th><th><u>from<u></th><th><u>to<u></th><th><u>pickup area<u></th><th><u>destination<u></th></tr>
		<?php
		$no=1;
		while($row2=mysql_fetch_array($sql)){
		if($no%2==0){
		$color="#E6E6FF";}
		else{
		$color="white";}
		
		echo"<tr bgcolor=$color><td>".$no++."</td><td>".$row2['first_name']."  ".$row2['last_name']."</td><td>".$row2['mobile']."</td><td>".$row2['plate_number']."</td><td>".$row2['date_from']." - ".$row2['time_from']."</td><td>".$row2['date_to']." - ".$row2['time_to']."</td><td>".$row2['pick_up']."</td><td>".$row2['destination']."</td></tr>";
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