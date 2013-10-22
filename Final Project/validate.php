<?php
include("conn.php");
session_start();
$unm=$_POST["name"];
$pass=$_POST["pass"];



$rs=mysql_query("select * from login where username='$unm' and password='$pass' ");

if($row=mysql_fetch_array($rs) )
{
	
	if($row[0][0]>=1 && $row[0][0]<=3)
	{
			$_SESSION["st"]=$unm;
			header("location:Registration.php");
			
	}
	else if($row[0][0]==5)
	{
			$_SESSION["ad"]=$unm;
			header("location:deanapproval.php");
	}
	else if($row[0][0]==9)
	{
		$_SESSION["gh"]=$unm;
		header("location:guesthapp.php");
	}
}
else{
	header("location:login.php");
}


?>