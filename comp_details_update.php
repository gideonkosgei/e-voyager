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
	
	<title>register</title></head>
<body>
    </div><!----------------------------end of network-------------------------------------------->
    <div id="container"><!---start of container-->

        
    	<div id="header">		
<?php include("includes/header.php");?>		
            </div><!------------------------------end of header --------------------------------------------->
		<div id="menu">
		<?php include("includes/navigation.php");?>
		</div>
       
       
	   		<?php include("includes/comp_details_update_processor.php");?>
	   
        <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details2">
        <div class="view_app_title"><h3>update</h3></div>
 <form name="register_form"method="POST" action="includes/comp_details_update_form_processor.php" enctype="multipart/form-data">
 
 
 <div class="view_app_div ">
  <?php $image="photos/".$row['photos'];?>
        <div class="view_photo"> <?php echo"<img src=$image width='100%' height='100%' />";?>
        <br/>
        <br/>
		 <input type="file" name="photo"size="10"/>
        </div>
       
        
        <div class="view_details1">
        <table width="100%" border="0" cellpadding="2">
  <tr>
    <td width="39%"><b>company name</b></td>
    <td width="61%"><input type="text"name="comp_name" value="<?php echo $row['name']; ?>"width="30" required/></td>
  </tr>
  <tr>
    <td><b>year formed</b></td>
    <td><input type="text"name="comp_year_formed" value="<?php echo $row['year_formed']; ?>"width="30" required/></td>
  </tr>
  <tr>
    <td><b>Date of registration</b></td>
    <td><input type="text"name="comp_year_reg" width="30"value="<?php echo $row['year_registered']; ?>" readonly="true"id="date3"/><a href="javascript:NewCal('date3','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>  </td>
  </tr>
  <tr>
    <td><b>operation area</b></td>
    <td><input type="text"name="comp_area"value="<?php echo $row['operation_area']; ?>" width="30" required/></td>
  </tr>
  <tr><td>&nbsp;</td>	<td>&nbsp;</td></tr>  
  <tr><td>&nbsp;</td><td>&nbsp;</td> </tr>
   </table>
</div>
</div>
<div class="view_app_title"><h3>contact information</h3></div>
<div class="view_details2">
<table width="90%" border="0" cellpadding="3">
  <tr>
    <td width="21%"><b>Mobile No</b></td>
    <td width="30%"><input type="number"name="comp_mobile" value="<?php echo $row['mobile']; ?>"width="30" required/></td>
    <td width="15%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr>
    <td><b>Address</b></td>
    <td><input type="number"name="comp_address" value="<?php echo $row['address']; ?>"width="30" required/></td>
    <td><b>Code</b></td>
    <td><input type="number"name="comp_code" value="<?php echo $row['code']; ?>"width="30" required/></td>
  </tr>
  <tr>
    <td><b>City</b></td>
    <td><input type="text"name="comp_city" value="<?php echo $row['city']; ?>"width="30" required/></td>
    <td><b>HeadQuaters</b></td>
    <td><input type="text"name="comp_HQ" value="<?php echo $row['headquaters']; ?>"width="30" required/></td>
  </tr>
  
</table>
</div>
<br/><br/>
<input type="submit" value="enter details"/>
<input type="reset" value="clear"/>

 
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