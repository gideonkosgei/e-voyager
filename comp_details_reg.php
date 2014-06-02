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
        <div class="details2">
		
        <div class="view_app_title"><h3>company registration</h3></div>
 <form name="register_form"method="POST" action="includes/comp_registration.php" enctype="multipart/form-data">
 
 
 <div class="view_app_div ">
        <div class="view_photo"><img src="img1/profile_pict.jpg"width="100%"height="100%" />
        <br/>
        <br/>
         <input type="file" name="photo"size="10"/></div>
       
        
        <div class="view_details1">
        <table width="100%" border="0" cellpadding="2">
  <tr>
    <td width="39%"><b>company name</b></td>
    <td width="61%"><input type="text"name="comp_name" width="30" required/></td>
  </tr>
  <tr>
    <td><b>year formed</b></td>
    <td><input type="text"name="comp_year_formed" width="30" required/></td>
  </tr>
  <tr>
    <td><b>Date of registration</b></td>
    <td><input type="text"name="comp_year_reg" width="30" readonly="true"id="date3" required/><a href="javascript:NewCal('date3','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>  </td>
  </tr>
  <tr>
    <td><b>operation area</b></td>
    <td><input type="text"name="comp_area" width="30" required/></td>
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
    <td width="30%"><input type="number"name="comp_mobile" width="30" required/></td>
    <td width="15%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr>
    <td><b>Address</b></td>
    <td><input type="text"name="comp_address" width="30" required/></td>
    <td><b>Code</b></td>
    <td><input type="number"name="comp_code" width="30" required/></td>
  </tr>
  <tr>
    <td><b>City</b></td>
    <td><input type="text"name="comp_city" width="30" required/></td>
    <td><b>HeadQuaters</b></td>
    <td><input type="text"name="comp_HQ" width="30" required/></td>
  </tr>
  
</table>
</div>
<br/><br/>
<input type="submit" value="enter details"/>
<input type="reset" value="clear"/>

 
</form>
               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
              </div>
           <div id="foot_notes"><?php include("includes/footer.php");?></div>
              

			<div class="clearer">&nbsp;</div>
</div><!---end of container-->

</body>
</html>