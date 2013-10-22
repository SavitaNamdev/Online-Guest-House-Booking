<?php
session_start();
include("conn.php");
if(isset($_SESSION["ad"]))
{
$rno = $_SESSION["ad"];
}
else{ header("location:login.php");}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dean Approval</title>
</head>
<body bgcolor="#BACDB8">
<img border="2" src="upper.jpg" width="999" height="194" />
<table cellspacing="2" cellpadding="3" border="2">
<th>name</th>
<th>email</th>
<th>mobile</th>
<th>address</th>
<th>room</th>
<th>days</th>
<th>arrival</th>
<th>official name</th>
<th>official email</th>
<th>official dept</th>
<th>roll</th>
<th>Decision</th>
<?php
$rs=mysql_query("select * from roombook");
while($row=mysql_fetch_array($rs))
{
if($row["approved"]==0)
{

?>
<tr>
<?php
for($k=0;$k<=10;$k++)
{ ?>
<td>
<?php echo $row[$k]; ?>
</td>
<?php } ?>
<td>
<form action="up.php" method="post"><input type="text" value="<?php echo $row[0]; ?>" name="name" style="display:none;"/><input type="submit" value="approve"/></form>
</td>
</tr>
<?php
}
}

?>

</table>
<a href="login.php">Logout</a>
</body>
</html>