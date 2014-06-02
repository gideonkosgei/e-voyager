<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
		<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
		<script type="text/javascript" src="js/datetimepicker.js"></script>

	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->
	
	<title>jobHub</title>
</head>
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
      <div class="main_content2">  
 
     <div class="details">
     <form action="includes/process_details.php" method="post">
 <table width="100%" cellpadding="2px"cellspacing="10px">
  <tr>
    <td>
    first name<br/>
    <input type="text"name="firstname"size="20"/>
     </td>
    <td>
    last name<br/>
    <input type="text"name="lastname" size="20"/>
    </td>
    <td>middle name<br/>
    <input type="text"name="middlename" size="20"/></td>
    <td>
	id/passport number<br/>
<input type="text"name="id_number" size="20"/></td>
  </tr>
  <tr>
    <td>
    date of birth(mm-dd-yyyy) <br/>
 <input type="text"name="DOB" size="30" id="date5"/><a href="javascript:NewCal('date5','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
        </td>
    <td>
    city of birth<br/>
    <input type="text"name="cityOfBirth" size="20"/>
    </td>
    <td>
    country of birth<br/>
    <select name="countryOfBirth">
    <option  value="kenya">kenya</option>
    <option value="uganda">uganda</option>
    <option value="tanzania">tanzania</option>
    <option value="sudan">sudan</option>
    </select>
    </td>
    <td>
    present nationality<br/>
    <select name="nationality">
    <option value="kenyan">kenyan</option>
    <option value="kenyan">ugandan</option>
    <option value="kenyan">tanzanian</option>
    <option value="kenyan">sudann</option>
    </select>
    </td>
  </tr>
  <tr><td rowspan="4">&nbsp;</td></tr>
</table>


</div>
<br/>
<div class="details">

<table width="100%"cellpadding="5">
  <tr>
    <td width="30%">
    postal address<br/>
    <input type="text"name="P_address"size="25"/>
    </td>
    <td width="30%">
    residential address<br/>
    <input type="text"name="R_address"size="25"/>
    </td>
    <td width="40%">
    postal code<br/>
    <input type="text"name="P_code"size="25"/>
    </td>
  </tr>
  <tr><td rowspan="">&nbsp;</td></tr>
</table>

 <table width="100%"  cellpadding="5">
  <tr>
    <td width="30%">
    telephone number<br/>
    <input type="text"name="telephone"size="25"/>
    </td>
    <td width="30%">mobile number<br/>
    <input type="text"name="mobile"size="25"/></td>
    <td width="40%">
    email address<br/>
    [  <b><?php echo $_SESSION['session_email']?> </b> ]
    </td>
  </tr>
  <tr>
    <td rowspan="3">&nbsp;</td>
   
  </tr>
</table>
<input type="submit" value="enter details"/>
</form>

   </div>
 
  </div>
        
                 <!----------------------end of main content body and start of main content side bar------------------->
               
            
              
 <div id="foot_notes"><?php include("includes/footer.php");?></div>
			<div class="clearer">&nbsp;</div>



</div><!---end of container--->

</body>
</html>
