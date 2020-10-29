<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require("connect.php");
session_start();
$username=$_POST['uname'];
$password=$_POST['pswd'];
$sql="SELECT*FROM'login'where username='$username' and pswd='$password";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result))
if($row['uname']==$username && $row['pswd']==$password){
	echo "Data Inserted" ;
header("location:home.php");
}

else{
	
	echo "Wrong Data" ;
	header("location:exit.php");
}
?>
</body>
</html>