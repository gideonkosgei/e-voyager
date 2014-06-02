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
		
		<?php include("includes/payment_plan.php");
		?>
		<form method="POST" action="includes/reserve.php">
	<h3>payment plan</h3>
	<br/>
	<table>
	<tr><th>&nbsp;</th><th>hourly summary</th><th>daily summary</th></tr>
	<tr><td><b>reservation fee</b></td><td><?php echo $reservation_h;?></td><td><?php echo $reservation_d;?></td></tr>
		<tr><td><b>balance</b></td><td><?php echo $balance_h;?></td><td><?php echo $balance_d;?></td></tr>
		<tr><td><b>total</b></td><td><hr width="30%"/><?php echo $total_h;?><hr width="30%"/></td><td><hr width="30%"/><?php echo $total_d;?><hr width="30%"/></td></tr>
			<tr><td><b>payment option</b>
			<select name="option">
			<option value="hourly"><b>hourly</b></option>
			<option value="daily"><b>daily</b></option>
			</select>
			</td><td><b>transaction id </b><input type="text" name=""/></td><td><b>m-pesa id</b><input type="text" name="m_pesa" required/></td></tr>
			<input type="hidden" name="hourly" value='<?php echo $total_h;?>'/>
				<input type="hidden" name="daily" value='<?php echo $total_d;?>'/>
				<input type="hidden" name="resv" value='<?php echo $resv;?>'/>
			<tr><td>&nbsp;</td><td><input type="submit" value="make payments"></td><td>&nbsp;</td></tr>
	</table>
</div>

</form>

               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
              
               
               <div id="foot_notes"><?php include("includes/footer.php");?></div>

			<div class="clearer">&nbsp;</div><!-------------------------------->



</div><!---end of container--->

</body>
</html>