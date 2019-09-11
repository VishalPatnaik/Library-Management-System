<html>
<div align="center">
<?php
 session_start();
 			echo "<h3>";
if(isset($_POST['submit']))
{
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $bid=$_POST['bid'];
   $rd=$_SESSION["rd"];
  $sql="select regd_no,status from bookdetails where regd_no='".$rd."' and bookid='".$bid."' and status='no'";
   $result=mysql_query($sql) or die(mysql_error());
  if($result){
    if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_array($result)){  
		$sql1="update bookdetails set dor=CURDATE(),status='yes' where bookid='$bid'";
  		 $result1=mysql_query($sql1) or die(mysql_error());
       if($result1){
		   $sql2="update reg set book_count=book_count+1 where regd_no='$rd'";
		   $result2=mysql_query($sql2) or die(mysql_error());
       if($result2){
		   echo " book returned successfully by ".$rd;
	   }
	   else
	   {
		   echo "error:please try again";
	   }
	   }
	  }
	}
	else echo "entered bookid is can not be returned";
  }
  else "error please try again ";
}			echo "</h3>";
?>
<input type="submit" onClick="parent.location='index.php'" value="back to home page">
<body style="background:url(lis001.jpg) no-repeat; background-size:100%" align="center"></body>
</div>
</html>
		   
        