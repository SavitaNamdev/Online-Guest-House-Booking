<?php
session_start();
include("conn.php");

$rollno = $_SESSION["st"];
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];

$room = $_POST["room"];
$day = $_POST["day"];
$arrival = $_POST["arrival"];

$officialname = $_POST["officialname"];
$offemail = $_POST["offemail"];
$offdept = $_POST["offdept"];

$query = "insert into roombook values('$name','$email','$mobile','$address','$room','$day','$arrival','$officialname','$offemail','$offdept','$rollno',0)";
mysql_query($query) or die(mysql_error());

unset($_SESSION["st"]);
unset($_SESSION["ad"]);
unset($_SESSION["gh"]);
header("location:login.php");
?>