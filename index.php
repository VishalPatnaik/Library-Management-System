<?php
session_start();
?>
<html>
<head>
<title>lms</title>
</head>
<img src="w2.jpg" width="100%" align="center"
<body style="background:url(lib1.jpg) no-repeat; background-size:100%" align="top" >
<div align="center"> 
<table border colspan="2">
<tr>
<p align=>select below options.....</p>
<td><input type="submit" onClick="parent.location='sba.php'" value="search by author"></td><br/><br/>
<td><input type="submit" onClick="parent.location='sbt.php'" value="search by book title"></td><br/><br/>
<form action="log.php" method="POST">
<td><input type="submit" onClick="parent.location='log.php'" value="issue" name="issue"></td><br/><br/>
<td><input type="submit" onClick="parent.location='log.php'" value="reissue/return" name="return"></td><br/><br/>
</form>
<td><input type="submit" onClick="parent.location='exit.php'" value="exit"></td><br/><br/>
</tr>
</table>
</div>
<div align="left"><a href="home.html" >To Register Back To Home</a></div>
</body>
</html>