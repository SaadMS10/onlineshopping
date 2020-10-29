<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require('connect.php');
$a=$_POST['uname'];
$b=$_POST['pswd'];
$sql="INSERT INTO login(user,password) VALUES('$a','$b')";
$result=mysqli_query($con,$sql);
if($result==true){
	echo "Data Inserted" ;
	

}

else{
	
	echo "Wrong Data" ;

}


?>
</body>
</html>