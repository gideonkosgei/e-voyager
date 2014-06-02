<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
	<title>e-yoyager</title>
</head>
<body>
<div id="container"><!---start of container-->
<div id="header">
<?php include("includes/header1.php");?>
</div>
<div class="sectors">
<div class="sector_body">
<p>e-voyager is an  electronic transport solution that span along the various sectors of the transport sector. It works by first registering as a member and choosing 
the category that suites you.</p>
<p>members of the site can enjoy services offered in the system for free because nothing is charged.The services offered include:
<ul>
<li>free registration of cars and drivers</li>
<li>car driver management</li>
<li>booking processing</li>
<li>vehicle search and reservation</li>
<li>contacts directory view</li>
</ul>

</p>
<br/>
<br/>

</div>
<div id="login">

             
              
<form action="includes/login.php"method="post"/>
<table width="95%" border="0" cellpadding="5">
<tr><td colspan="2"align="center"><h3>login</h3></td></tr>
  <tr>
    <td width="26%">email</td>
    <td width="66%">
    <input type="email"name="login_email" size="20" required/>    </td>
  </tr>
  <tr>
    <td>password</td>
    <td>
      <input type="password"name="login_password" size="20" required/>    </td>
  </tr>
  <tr> 
     <td>&nbsp;</td>
    <td>
      <input type="submit"value="login"/>
      <input type="reset"value="clear"/>    </td>
  </tr>
  <tr>
      <td>&nbsp;</td>
	  
    <td><table><tr><td><a href="register.php">register</a></td><td><a href="#">forgot password</a></td></tr></table></td>
  </tr>
</table>
</form>

</div>

</div>
  <div id="foot_notes"><?php include("includes/footer.php");?></div>

<div class="clearer">&nbsp;</div>

</div><!--------------end of container---------------->
 

 
</body>
</html>