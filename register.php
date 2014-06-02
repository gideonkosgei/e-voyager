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
function validatePassword()
{
if(document.login.register_password.value!=document.login.confirm_password.value){
alert("your passwords did not match!. please check and register again");
return false;
}
else {
return true
}
}
//-->
</script>
</head>
<body>
    <div id="container"><!---start of container-->

  
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header2.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		
       			<div class="clearer">&nbsp;</div>
        <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details2">
        <h3>REGISTRATION</h3>
 <form method="POST" action="includes/register.php" name="login" onsubmit="return validatePassword()">
 <table width="91%" border="0" cellpadding="5">
  <tr>
    <td width="27%">username</td>
    <td width="73%"><input type="text"name="register_user" size="25"required /></td>
    
  </tr>
  <tr>
    <td>email</td>
    <td><input type="email"name="register_email" size="25" required/></td>
    
  </tr>
  <tr>
   <td>category</td>
     <td>
     <select name="category" required >
    
     <option value="customer">customer</option>
	  <option value="car_owner">car owner/company</option>
	 
     </select>
     </td>
     
  </tr>
  <tr>
    <td>password</td>
    <td><input type="password"name="register_password" size="25" required/></td>
    
  </tr>
  <tr>
    <td>confirm password</td>
    <td><input type="password"name="confirm_password" size="25" required/></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
      <td>
      <input type="submit"name="submit" value="register"/>
      <input type="reset"name="reset" value="delete"/>
      </td>
    </tr>
</table>
</form>
</div>
               
               </div><!-----end of main content--------->

              
 <div id="foot_notes"><?php include("includes/footer.php");?></div>
			<div class="clearer">&nbsp;</div>



</div><!---end of container----->

</body>
</html>