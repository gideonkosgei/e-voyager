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
	
	<script type="text/javascript">
	<!--
	function del(){
	confirm("do you want to delete");
	}
	
	//-->
	</script>
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
		
		
		<?php include("includes/comp_view_cars_processor.php") ?>
		
        <div class="main_content2">
        <div class="details">
		
		<table width="200" border="0" bgcolor="#E6E6FF"">
         <tr>
           <th width="4%">&nbsp;</th>
           <th width="10%"><u>plate number</u></th>
		   <th width="11%"><u>car model</u></th>
           <th width="10%"><u>capacity</u></th>
           <th width="13%"><u>condition</u></th>
		   <th width="10%"><u>area</u></th>
		   <th width="10%"><u>service</u></th>
		    <th width="10%"><u>hourly</u></th>
            <th width="10%"><u>daily</u></th>
            <th width="19%"><u>action</u></th>
         </tr>
		<?php 
		$no=1;
		
		while($car=mysql_fetch_array($sql)) 
		{
		if($no%2==0){
		$color="#E6E6FF";}
		else{
		$color="white";}
		echo"<form method='post' action='includes/company_delete_update_car.php'><tr bgcolor=$color><td>".$no."</td><td>".$car['plate_number']."</td><td>".$car['car_model']."</td><td>".$car['capacity']."</td><td>".$car['car_condition']."</td><td>".$car['area']."</td><td>".$car['service']."</td><td>".$car['hour_price']."</td><td>".$car['day_price']."</td><td><input type='hidden' value=$car[car_id] name='car_ID'><input type='submit' class='btn' name='edit'value='edit' ><input type='submit' name='delete' value='delete'onClick='del()' class='btn'></td></tr></form>";
$no++;
}
	   ?>
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