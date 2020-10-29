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
$c=$_POST['fname'];
$d=$_POST['lname'];
$e=$_POST['date'];
$f=$_POST['day'];
$g=$_POST['year'];
$h=$_POST['email'];
$i=$_POST['no'];
$j=$_POST['add'];
$k=$_POST['city'];
$l=$_POST['pcode'];

$sql="INSERT INTO reg(user,password,firstname,lastname,date,month,year,email,phoneno,address,city,postalcode) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$result=mysqli_query($con,$sql);
if($result==true){
	header('location: flogin2.php'); ;
	

}

else{
	
	echo "Wrong Data" ;

}


?>
</body>
</html>