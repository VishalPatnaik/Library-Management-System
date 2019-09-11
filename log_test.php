<html>
<div align="center">
<h3>
<?php
  session_start();
if(isset($_POST['submit']))
{
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
  if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $rd=$_POST['rd'];
  $password=$_POST['pwd'];
  $_SESSION["rd"]="$rd";
  $sql="select regd_no,pwd from reg where regd_no='$rd' and pwd='$password'";
  $result=mysql_query($sql) or die(mysql_error());
  if($result){
    if(mysql_num_rows($result)==1){
		$click=$_SESSION["click"];
		if($click == 'issue')
		header('Location:http://localhost/lms/issue.php');
		else
		header('Location:http://localhost/lms/return_reissue.php');
	}
  else echo " invalid regd_no and password ";
	}
	}
?>
</h3>
<body style="background:url(fol.jpg) no-repeat; background-size:100%">
<input type="submit" onClick="parent.location='index.php'" value="back to home page">
</body>
</div>
</html>