<?php
include_once("session.php");

?>
<!-- Validations for adding page -->
<script>
function validateFormm()
{

var x=document.forms["page"]["name"].value;
if (x==null || x=="")
  {
  alert("page name must be filled out");
  document.page.name.focus();
 return false;
  }
var x=document.forms["page"]["content"].value;
if (x==null || x=="")
  {
  alert("There must be some content");
  document.page.content.focus();
 return false;
  }
}

</script>
<html>
<body bgcolor="#c0cec2">
<title>CMS</title>
<!-- Form for Adding Page -->
		<center>
		<h2>Add Page</h2>
          <a href="logout.php" align='right'><h3 style="color:black">Logout</H3></a></li>
		<div>
		<form name="page" method="post" onsubmit="return validateFormm();">
		<table border="0" cellpadding="10" cellspacing="0" width="300" align="center">
		<tr>
		<td width="40%">Page name:</td>
		<td width="60%"><input type="text" name="name" id="name" placeholder="enter page name"></br></td>
		</tr>
		<tr>
		   <td width="40%"> Page Content:</td>
		   <td width="60%"><textarea rows = "30" cols = "100" name="content" id="content" placeholder="enter content here" > </textarea>
		   </br></td>
			</tr>
			<tr>
			<td width="40%"><input type="submit" name="submit" value="submit"></td>
			<td width="40%"><input type="reset" name="clear" value="clear"></td>
					
			</tr>
			</form>
			</table>
			</center>
			</div>
			
			
<?php
include_once("database.php");
//code to check if page name already exists
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$select="select * from pages where name='$name'";
$exe=mysql_query($select);
$rows=mysql_num_rows($exe);
if($rows > 0)
{
print'<script type="text/javascript">';
print'alert("Page name already exist")';
print'</script>';

}
// entering values to the database
else
{
$sett="insert into pages set name='$_POST[name]', content='$_POST[content]'";
mysql_query($sett);

}
}
?>