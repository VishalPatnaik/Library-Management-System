<?php
session_start();
if(isset($_POST['issue']))
{
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $_SESSION["click"]="issue";
}
else
{
	$con=mysql_connect('localhost','root','');
       mysql_select_db('lms');
     if($con === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $_SESSION["click"]="return";
}
?>
<html>
<head>
<img src="a_log.png" width="100%" no-repeat>
<title>login</title>
</head>
<body >
<div align="center">
<h1>USER LOGIN</h1> 
<form action="log_test.php" method="POST">
<table align="center">
<tr>
<TD>Regd No</TD>
 <td><input type="text" size="20" name="rd">
</td>
</tr>
<tr>
<TD>Password:</TD>
<td><input type="password" size="20" name="pwd" >
</td>
</tr>
	<tr>
<td align="center"><input type="submit" name="submit" value="submit"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>
