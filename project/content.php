<?php
/*session_start();*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CMS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body bgcolor="#c0cec2">
<?php
// displaying all pages from database
include("database.php");
echo "<h2 > Select Page you want to view </h2>";
$rs=mysql_query("select * from pages ");
echo "<table align=left>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=left ><a href=content.php?pageid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";

?>

</br>
</br>
</br>
</br>
</br>

<?php
extract($_GET);
// displaying content for a page
$rsl=mysql_query("select * from pages where pageid=$pageid ");
echo "<table align=center>";
while($row=mysql_fetch_row($rsl))
{
	echo "<tr><td align=center >$row[1]</br><br><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>

</body>
</html>
