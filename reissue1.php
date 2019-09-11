<html>
<div align="center">
<h3>
<?php
 session_start();
if(isset($_POST['submit']))
{
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $bid=$_POST['bid'];
   $rd=$_SESSION["rd"];
  $sql="select status,bookid from bookdetails where bookid='$bid' and status='no'";
   $result=mysql_query($sql) or die(mysql_error());
  if($result){
    if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_array($result)){  
		$sql1="update bookdetails set doi=CURDATE() where bookid='$bid' and regd_no='$rd'";
  		 $result1=mysql_query($sql1) or die(mysql_error());
       if($result1){
		   echo " book reissued successfully to ".$rd;
	   }
	   else
	   {
		   echo "error:please try again";
	   }
		}
		}
	   else
	   {
		   echo " entered bookid is cannot be reissued "; 
	   	   }

  }
  else " error in sql query";
  }
?>
</h3>
<input type="submit" onClick="parent.location='index.php'" value="back to home page">
<body style="background:url(lis001.jpg) no-repeat; background-size:100%" align="center"></body>
</div>
</html>
		   
        