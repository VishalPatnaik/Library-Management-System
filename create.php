<html>
<div align="center">
<?php
  session_start();
  if(isset($_POST['submit']))
 {
  $con=mysql_connect('localhost','root','');
  mysql_select_db('lms');
      if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
      }
  $name=$_POST['uid'];
  $regd_no=$_POST['rd'];
  $pwd=$_POST['pwd'];
  $gender=$_POST['sex'];
  $mobile=$_POST['mbl'];
  $addr=$_POST['adr'];
  $sql="insert into reg(uname,regd_no,pwd,gender,mobile,addr,book_count) values('$name','$regd_no','$pwd','$gender','$mobile','$addr','3')";
  $res=mysql_query($sql);
     if($res)
     {
      echo "<h3>student successfully registered</h3> ";
      unset($name);
      unset($regd_no);
      unset($pwd);
      unset($gender);
      unset($addr);
      unset($mobile);
      }
     else
     {
      echo " <h3>entered regd_no is already registered</h3>";
     }
 }
?>
<body style="background:url(lis001.jpg) no-repeat; background-size:100%" align="center">
<input type="submit" onClick="parent.location='home.html'" value="back to home page">
</div>
</body>
</html>
