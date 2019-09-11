<?php
session_start();
?>
<html>
<head>
<title>search by author</title>
</head>
<body style="background:url(author.jpg) no-repeat;background-size:100%">
<div align="center">
<form action="author.php" method="POST">
<h3 style="color:red">enter the author name:<input type="text" name="sba" placeholder="author name" required/>
</h3>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>