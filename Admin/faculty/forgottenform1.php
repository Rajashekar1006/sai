<?php
session_start();
if(!empty($_SESSION['id1'])){
	header("Location:updatepassword.php");
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="faculty" action="newpassword.php" method="post" enctype="multipart/form-data" >
<tr>
<td>Email ID:</td>
<td><input type="text" name="Email_id" placeholder="Example@gmail.com" required="required"/></td>
</tr>
<tr>
<td>Student Phone Number:</td>
<td><input type="text" name="phonenumber" placeholder="+91" required="required"/></td>
<input type="submit" name="submit" value="Submit" style="
background:#CCFF99;margin-left:250px;
border-radius:25px;"/>

</body>
</html>