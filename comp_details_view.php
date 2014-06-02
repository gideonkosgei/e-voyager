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
	
	<title>register</title></head>
<body>
    <div id="container"><!---start of container-->

    	<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<div id="menu">
		<?php include("includes/navigation.php");?>
		</div>
       
       
        <!-------------------start of main content body------------------->
		
		<?php include("includes/comp_details_view_processor.php");?>
		
        <div class="main_content2">
        <div class="details2">
        <div class="view_app_title"><h3>my profile</h3></div>
 
 <?php $image="photos/".$row['photos'];?>
 
 <div class="view_app_div ">
        <div class="view_photo"><?php echo"<img src=$image width='100%' height='100%' />";?>
        <br/>
        <br/>
         </div>
       
        
        <div class="view_details1">
        <table width="100%" border="0" cellpadding="2">
  
    <td width="39%"><b>company name</b></td>
    <td width="61%"><?php echo $row['name']; ?></td>
  </tr>
  <tr>
    <td><b>year formed</b></td>
    <td><?php echo $row['year_formed']; ?></td>
  </tr>
  <tr>
    <td><b>year of registration</b></td>
    <td><?php echo $row['year_registered']; ?></td>
  </tr>
  <tr>
    <td><b>operation area</b></td>
    <td><?php echo $row['operation_area']; ?></td>
  </tr>
   </table>
   </div>
</div>
<div class="view_app_title"><h3>contact information</h3></div>
<div class="view_details2">
<table width="90%" border="0" cellpadding="3">
  <tr>
    <td width="21%"><b>Mobile No</b></td>
    <td width="30%"><?php echo $row['mobile']; ?></td>
    <td width="15%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr>
    <td><b>Address</b></td>
    <td><?php echo $row['address']; ?></td>
    <td><b>Code</b></td>
    <td><?php echo $row['code']; ?></td>
  </tr>
  <tr>
    <td><b>City</b></td>
    <td><?php echo $row['city']; ?></td>
    <td><b>headquaters</b></td>
    <td><?php echo $row['headquaters']; ?></td>
  </tr>
  
</table>
</div>


 <div class="clearer">&nbsp;</div>

</div>
               
               </div><!-----end of main content--------->
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
               <div id="foot_notes"><?php include("includes/footer.php");?></div>

			<div class="clearer">&nbsp;</div>


</div><!---end of container----->

</body>
</html>