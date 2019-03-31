<?php
ob_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CMS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body bgcolor="#c0cec2">
<div>
<?php

include("database.php");
extract($_POST);
// code to display content from database
echo "<h2 > Select Page you want to view </h2>";
$rs=mysql_query("select * from pages ");
echo "<table align=left>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=left ><a href=content.php?pageid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";

?>
</div>
</br>
</br>
</br>
</br>
</br>
<!-- link to add new page -->
<div align= "left">

</div>
<?php
// checking username and password
if(isset($submit))
{
	$rs=mysql_query("select * from user where username='$userid' and password='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
		
	}
	else
	{
		session_start();
	$_SESSION['status']="username";
	
		header("location:addpage.php");
	}
}


?>
<!-- Form for username and password -->
		        
				<div align="center">
    <form name="form1" method="post" action="">
      <table width="300" border="0">
        <tr>
          <td>Login ID</td>
          <td><input name="userid" type="text" id="loginid2" placeholder="login id"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="pass" type="password" id="pass2" placeholder="password"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
      </table>
    </form>
</div>

</body>
</html>

