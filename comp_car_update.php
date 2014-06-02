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
		<?php include("includes/navigation.php");?>
		</div>
       
       
        <!-------------------start of main content body------------------>        
		
<?php include("includes/car_update.php");?>
		
        <div class="main_content2">
        <div class="details2">
        <h3>Car Details Update</h3>
 <form action="includes/car_update_form_processor.php" method="post">
 <table width="91%" border="0" cellpadding="5">
  <tr>
    <td width="27%">plate number</td>
    <td width="73%"><input type="number"name="plate_number" value="<?php echo $row['plate_number']; ?>"size="25" required/></td>
    
  </tr>
  <tr>
    <td>car model</td>
    <td><input type="text"name="model" value="<?php echo $row['car_model']; ?>"size="25" required/></td>
    
  </tr>
  <tr>
    <td>capacity</td>
    <td><input type="number"name="capacity"value='<?php echo $row['capacity']; ?>' size="8" required/>	
	<select name="size">
     <option value="passengers">passenges</option>
	  <option value="tonnes">tonnes</option>
      
		
	</select>
	</td>
    
  </tr>
  <tr>
   <td>car condition</td>
     <td>
     <select name="condition" >
    
     <option value="new">new</option>
	  <option value="old">old</option>
	  <option value="wreck">wreck</option>
     </select>
     </td>
     
  </tr>
  <tr>
    <td>area of operation</td>
    <td><input type="text"name="area"value="<?php echo $row['area']; ?>" size="25" required/></td>
    
  </tr>
  <tr>
    <td>service offering</td>
    <td>
	<select name="service">
      <option value="taxi">taxi</option>
	  <option value="psv">psv</option>
      <option value="car_hire">car hire</option>
      <option value="transport_goods">ask for transport</option>
      <option value="tours_travel">tours and travel</option>
      <option value="hearse">hearse</option>
		
	</select>
	</td>
    
  </tr>
  <tr>
    <td>hourly price</td>
    <td><input type="text"name="hour" value="<?php echo $row['hour_price']; ?>"size="25" required /></td>
    
  </tr>
  <tr>
    <td>daily price</td>
    <td><input type="text"name="day" value="<?php echo $row['day_price']; ?>"size="25" required /></td>
    
  </tr>
  
    <tr>
    <td>&nbsp;</td>
      <td>
      <input type="submit"name="submit" value="update details"/>
      <input type="reset"name="reset" value="clear"/>
      </td>
    </tr>
</table>
</form>
</div>
               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
               <div id="foot_notes"><?php include("includes/footer.php");?></div>
                
			<div class="clearer">&nbsp;</div>



</div><!---end of container--->

</body>
</html>