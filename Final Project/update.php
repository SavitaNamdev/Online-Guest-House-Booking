<?php
session_start();
include("conn.php");
$name = $_POST['name'];
mysql_query("update roombook set approved=2 where name='$name' ") or die(mysql_error());
header("location:guesthapp.php");

?>