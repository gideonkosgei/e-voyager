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

		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<div id="menu">
		<?php include("includes/nav_cust.php");?>
		</div>
       <?php include("includes/area_view.php");?>
        <!-------------------start of main content body------------------->


		
        <div class="main_content2">
        <div class="details">
        <h3>car lookup panel</h3>
 <form action="includes/search_car.php" method="post">
 
<table>
<tr><td width="16%">select your location</td>
<td width="22%">
<select name="location">
<?php while($area=mysql_fetch_array($sql))
echo"<option value=$area[area]>".$area['area']."</option>";
?>
</select>

</td>
<td width="18%">
select type of service</td>
<td width="20%">
<select name="service">
<option value="taxi">taxi</option>
	  <option value="psv">psv</option>
      <option value="car_hire">car hire</option>
      <option value="transport_goods">ask for transport</option>
      <option value="tours_travel">tours and travel</option>
      <option value="hearse">hearse</option>
		
	</select>
	</td>
	<td width="24%"><input type="submit"name="submit" value="lookup"/></td>
</table>
</form>
</div>
               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
            
              
 <div id="foot_notes"><?php include("includes/footer.php");?></div>
			<div class="clearer">&nbsp;</div>



</div><!---end of container----->

</body>
</html>