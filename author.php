<html>
<div align="center" >
<?php
 session_start();
if(isset($_POST['submit']))
{
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $sba=$_POST['sba'];
  $sql="select bookid,title,author,status from bookdetails  where author='".$sba."'";
  if($result = mysql_query($sql)){
    if(mysql_num_rows($result) > 0){
while($row = mysql_fetch_array($result)){
	
                echo "<b> Book id:</b> &nbsp" . $row['bookid'];
                echo " <b>Title:</b>  &nbsp" . $row['title'];
                echo " <b>Author:</b>  &nbsp" . $row['author'];
				echo " <b>status:</b> &nbsp". $row['status']."<br>";
         
        }
        
        mysql_free_result($result);
    }
	 else{
        echo "<b>No books matching your author were found.</b>";
	
		    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
	unset($sba);
}
}
?>
</div>
<body vlink="orange" style="background:url(lib1.jpg) no-repeat; background-size:100%"> 
<a href="index.php" align="left">Back to Lirary</a>
</body>
</html>
