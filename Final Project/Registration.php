<?php
session_start();
if(isset($_SESSION["st"]))
{
$rno = $_SESSION["st"];

}
else{ $rno=0;}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
</head>

<body bgcolor="#BACDB8">
<img border="2" src="upper.jpg" width="999" height="194" />
<header><h1> NITT Guest House </h1></header>
<form method="post" action="regvalid.php">
<table width="308" height="191" align="left">
<tbody>
<tr>
  <td width="142" align="left"> 
   <p>
      <label for="name"  >
        Guest Name  
      </label>
   <td  align="right"><input id="name" type="text" name="name" /></td>
   </p></td></tr>
   <tr>
    <td  align="left">
    <p>
    <label for="email"  >
    Guest Email id 
    </label> <td align="right">
     <input id="email" type="text" name="email" /></td></p>
    </td></tr>
    <tr>
      <td align="left">
      <p> 
      <label for="mobile"  >
      Guest Mobile
    </label> <td align="right">
    <input id="mobile" type="text" name="mobile" /></td></p>
    </td></tr>
   <tr>
    <td align="left">
    <p>
    <label for="address">
      Guest Address
    </label> <td align="right">
    <input id="address" type="text" name="address" /></td></p></td></tr>
    <tr>
    <td align="left">
    <p>
    <label for="room">
    No of rooms needed
    </label> <td align="right">
    <input id="room" type="text" name="room" /></td></p></td></tr>
    <tr>
    <td align="left">
    <p>
    <label for="day">
      No of Days 
      </label> <td align="right">
       <input id="day" type="text" name="day" /></td></p></td></tr>
     <tr>
     <td align="left">
     <p>
     <label for="arrival">
     Arrival Date & Time
    </label> <td align="right">
    <input id="arrival" type="text" name="arrival" /></td></p></td></tr>
    <tr>
    <td align="left">
    <p>
   <label for="officialname">
   Applicant Official Name 
   </label> <td align="right">
    <input id="officialname" type="text" name="officialname" /></td></p></td></tr>
   <tr> 
   <td align="left">
   <p>
   <label for="offemail">
      Applicant Email id
    </label> <td align="right">
    <input id="offemail" type="text" name="offemail" /></td></p></td></tr>
    <tr>
    <td align="left">
    <p>
    <label for="offdept">
    Applicant Department
    </label> <td align="right">
      <input id="offdept" type="text" name="offdept" /></td></p></td></tr>
        <tr>
        <td align="left">
        <p>
        <label for="rollno">
          Applicant Roll no
          </label> <td align="right">
      <input id="rollno" type="text" name="rollno" value="<?php echo $rno ?> "/> </td></p></td>
    </tr></br></br>
           <tr><td align="left"> 
           <input id="submit" type="submit" value="Submit" name="Submit"></td></tr>
</tbody>
</table>
</form>
</body>
</html>