<?php
 session_start();
 ?>
<html>
<head>
<title>search by book title</title>
</head>
<body style="background:url(title1.jpg) no-repeat;background-size:100%">
<div align="center">
<form action="title.php" method="POST">
<h3 style="color:orange">enter the book title:<input type="text" name="sbt" placeholder="book title"/></h3>
<input type="submit" name="submit" value="submit" required/>
</form>
</div>
</body>
</html> 