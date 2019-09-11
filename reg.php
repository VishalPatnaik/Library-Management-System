<head>
<title>Registration</title>
</head>
<body style="background:url(reg2.jpg) no-repeat;background-size:100%" vlink="red">
<div align="center">
<marquee><h1><b>WELCOME TO REGISTRATION</b></h1></marquee>
<h3>
<form action="create.php" method="POST">

<table align="center" border colspan="1">
<tr>
<TD>User-name:</TD>
<td><input type="text" size="20" name="uid">
</td>
</tr>
<tr>
<TD>Regd_no</TD>
<td>
<input type="text" size="20" name="rd">
</td>
</tr>
<tr>
<TD>Password:</TD>
<td><input type="password" size="20" name="pwd" >
</td>
</tr>
 <tr>
 <td>Gender</td>
 <td>
    <input type="radio" name="sex" value="f" />Female 
    <input type="radio" name="sex" value="m" />Male 
   </td>
   </tr>
   <tr>
   <td>Mobile-no</td>
   <td><input type="text" name="mbl" />
   </td>
   </tr>
   <tr>
   <td>Address</td>
   <td><textarea name="adr" rows="10"
 cols="20" required>
 </textarea>
 </td>
 </tr>
 <tr>
<td align="center"><input type="submit" onClick="parentlocation.'home.html'" value="submit"   name="submit" /></td>
</tr>
<tr>
<td align="center"><input type="reset"/></td>
</tr>
</table>
</form><br>
</h3>
<p><a href="home.html" style="color_name:"red">BACK TO HOME<a></p>
</body >

</div>
</html>