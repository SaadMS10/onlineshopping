<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Russo+One&subset=cyrillic,latin-ext');
@import url('https://fonts.googleapis.com/css?family=Bangers');

body {
	margin:  0px;
	padding: 0px;

	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-image: url("photo-1494281258937-45f28753affd.jpg");
}
.title{
	
	margin-top:10px;
	font-family: 'Bangers', cursive;
	font-size:60px;
	background-color:rgba(0,0,0,0.4);
	color:#09C;

}
.loginbox{
	width:320px;
	height:300px;
	background:rgba(0,0,0,0.5);
	color:white;
	
	
	box-sizing:border-box;
	padding:10px 30px;
	margin:130px 500px ;
}


h1{
	margin:0;
	padding:0;
	text-align:center;
	font-size:40px;
	font-family: 'Russo One', sans-serif;
	font-weight:bold;
}
p{
	margin: 0px;
	paddding:0;
	font-weight: bold;
}
.loginbox input{
	width:100%;
	margin-bottom: 20px;
}
.link{
	text-decoration:none;
	font-size:16px;
	color:white;
}
.link:hover{
	color: black;
	background:#069;
}
.field{
	border:none;
	border-bottom: 1px solid blue;
	background:transparent;
	outline:none;
	height:20px;
	color:blue;
	font-size:14px;
}
.btn{
	border:none;
	outline:none;
	width: 10px;
	height:20px;
	background: green;
	font-size:16px;
	border-radius:50px;
}
	.btn:hover{
		cursor:pointer;
		background: #3FC;
		color:black;
	}
	.line{
		height:5px;
		background-color:#693;
	}

		
</style>

</head>
<body>
<form  method="post" action="submit2.php">    
<header>

<h1 class="title"> WELCOME TO ONLINE SHOPPING CENTER </h1>
<div class="line"> </div>
</header>
<div class="loginbox"> <h1>
       LOGIN</h1><form><p>USERNAME </p>
             <input class="field"  name="uname" type="text" id="uname" placeholder="Enter Username" required />  
           <p>PASSWORD</p>
             <input class="field" name="pswd" type="password" id="pswd" placeholder="Enter Password" required />
           <input class="btn" type="submit" name="LOGIN" id="LOGIN" value="LOGIN" />
                  <a class="link" href="REG FORM6.php"> Create Your Account </a>
             <p span style="color:red"> Problem Signing In? </span> </p>     
                  <a class="link" href="mailto:itsmsaadhere@gmail.com">Contact Us</a>
	</div>
<footer>
  <div class="line"> </div>
</footer>
</form>

</body>
</html>