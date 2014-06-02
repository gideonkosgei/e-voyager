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
       
       
        <!-------------------start of main content body------------------->
		<?php include("includes/comp_view_drivers_processor.php")  ?>
		
        <div class="main_content2">
        <div class="details">
		
		<table width="200" border="0">
         <tr>
           <th width="3%">&nbsp;</th>
           <th width="13%"><u>name</u></th>
		   <th width="11%"><u>ID number </u></th>
           <th width="15%"><u>license number</u></th>
           <th width="14%"><u>mobile </u></th>
		   <th width="12%"><u>email</u></th>
            <th width="15%"><u>address</u></th>
			<th width="17%"><u>action</u></th>
         </tr>
		<?php 
		$no=1;
		while($driver=mysql_fetch_array($sql)) 
		{
		if($no%2==0){
		$color="#E6E6FF";}
		else{
		$color="white";}
		echo"<form method='post' action='includes/company_delete_update_driver.php'><tr bgcolor=$color><td>".$no."</td><td>".$driver['first_name']." ".$driver['last_name']."</td><td>".$driver['id_number']."</td><td>".$driver['license_number']."</td><td>".$driver['mobile']."</td><td>".$driver['email']."</td><td>".$driver['address']."-".$driver['code']." ".$driver['city']."</td><td><input type='hidden' value=$driver[driver_id] name='driver_ID'><input type='submit'name='view' value='view' class='btn'><input type='submit'name='edit' value='edit' class='btn'><input type='submit'name='delete'value='delete' class='btn'></td></tr></form>";
$no++;
}
	   ?>
	  </table>
		
         
</div>
               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
         
             <div id="foot_notes"><?php include("includes/footer.php");?></div>  

			<div class="clearer">&nbsp;</div>



</div><!---end of container----->

</body>
</html>