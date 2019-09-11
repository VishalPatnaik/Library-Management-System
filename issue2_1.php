<html>
<img src="lib_found.jpg" no-repeat width="100%">
<div align="center">
<?php
session_start();
			echo "<h3>";
if(isset($_POST['issue']))
{
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
  if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $bid=$_POST['bookid'];
  $rd=$_SESSION["rd"];
  $title=$_SESSION["title"];
  $sql0="select status from bookdetails where bookid='$bid'";
  $result0=mysql_query($sql0) or die(mysql_error());
  if($result0){
	  if(mysql_num_rows($result0)>0){
		while($row = mysql_fetch_array($result0)){
			$status=$row['status'];
			if($status=='no')
			{
				echo " book cannot be issued";
			}
			else
			{
   $sql="select book_count from reg where regd_no='$rd'";
   $result=mysql_query($sql) or die(mysql_error());
  if($result){
	  if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_array($result)){
			$count=$row['book_count'];
			if($count)
			{
				$sql1="update bookdetails set regd_no='$rd',doi=CURDATE(), status='no' where bookid='$bid'";
				$result1=mysql_query($sql1) or die(mysql_error());
				if($result1)
				{
					$count=$count-1;
					$sql2="update reg set book_count='$count' where regd_no='$rd'";
					$result2=mysql_query($sql2) or die(mysql_error());
					if($result2)
					{
						echo "book issued successfully to ".$rd;
				
					}
					else
					{
						echo "error:please try again";
					}
				}
				else
				{
					echo "error:please try again";
				}
			}
			else
			{
				echo "your book quata limit is reached";
			}
		}
	  } 
   }
			}
		}
	  }
  }
}
  else
   echo " error:please try again";
 echo "</h3>";
?>
<body>
<input type="submit" onClick="parent.location='index.php'" value="back to home page"><br/><br/>
</div>
</html>