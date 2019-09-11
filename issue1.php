<html>
<img src="is.png" no-repeat width="100%">
<div align="center">
<?php
 session_start();
if(isset($_POST['submit']))
{
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $title=$_POST['title'];
  $_SESSION["title"]="$title";
  $sql="select bookid,title,author,status from bookdetails  where title='".$title."'";
  $result=mysql_query($sql) or die(mysql_error());
  if($result){
    if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_array($result)){  
				echo " <b>Book id:</b>".$row['bookid'] ;
                echo "  <b>Title:</b>".$row['title'];
                echo "  <b>Author:</b>".$row['author'];
				echo "  <b >status:</b>".$row['status'];
				}
			}
         
        }
	 else{
        echo "<br>No books matching for your author name</br>";
	     unset($author);
		    }
  }
 else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
	unset($author);
 }
 
?>
<body>
<form action="issue2.php" method="POST">
<input type="text" name="bookid" placeholder="enter the book id" />
<input type="submit" value="issue" name="issue" />
</form>
</body>
</div>
</html>
