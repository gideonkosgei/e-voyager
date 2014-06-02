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
		<?php include("includes/nav_cust.php");?>
		</div>
       
       
        <!-------------------start of main content body------------------->
		
		<?php include("includes/my_driver_processor.php");?>
        <div class="main_content2">
        <div class="details2">
        <div class="view_app_title"><h3>driver details view</h3></div>
 
 
 
 <div class="view_app_div">
 
 <?php $image="photos/".$row['photos'];?>
        <div class="view_photo">
		
		<?php echo"<img src=$image width='100%' height='100%'/>";?>
        <br/>
        <br/>
         </div>
       
        
        <div class="view_details1">
        <table width="100%" border="0" cellpadding="2">
  <tr>
    <td width="34%"><b>First name</b></td>
    <td width="66%"><?php echo $row['first_name'];?></td>
  </tr>
  <tr>
    <td><b>Last Name</b></td>
    <td><?php echo $row['last_name'];?></td>
  </tr>
  <tr>
    <td><b>ID Number</b></td>
    <td><?php echo $row['id_number'];?></td>
  </tr>
  <tr>
    <td><b>License No</b></td>
    <td><?php echo $row['license_number'];?></td>
  </tr>
  <tr>
    <td height="30"><b>Gender</b></td>
    <td><?php echo $row['gender'];?></td>
  </tr>
  <tr>
    <td height="30"><b>Date Of Birth</b></td>
    <td><?php echo $row['DOB'];?></td>
  </tr>
</table>
</div>
</div>
<div class="view_app_title"><h3>contact information</h3></div>
<div class="view_details2">
<table width="90%" border="0" cellpadding="3">
  <tr>
    <td width="21%"><b>Mobile No</b></td>
    <td width="30%"><?php echo $row['mobile'];?></td>
    <td width="15%"><b>Email</b></td>
    <td width="34%"><?php echo $row['email'];?></td>
  </tr>
  <tr>
    <td><b>Address</b></td>
    <td><?php echo $row['address'];?></td>
    <td><b>Code</b></td>
    <td><?php echo $row['code'];?></td>
  </tr>
  <tr>
    <td><b>City</b></td>
    <td><?php echo $row['city'];?></td>
    <td><b>Residence</b></td>
    <td><?php echo $row['residence'];?></td>
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