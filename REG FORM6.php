<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
fieldset{
	border:1px solid #dcdcdc;
	border-radius:10px;
	padding: 20px;
    	
}
legend{
	background-color:#efefef;
	border: 1px solid #dcdcdc;
	border-radius: 10px;
	padding: 20px;
	text-align:left;
	text-transform: uppercase;
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
body {
	background-color: #0C9;
	background-image: url();
	background-repeat: repeat-x;	
}

#form1 fieldset div table tr td div {
	font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
}
#form1 fieldset div table tr td div {
	font-family: Georgia, Times New Roman, Times, serif;
}
#form1 fieldset div table tr td div {
-	font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
}
</style>
</head>


<body>
<form id="form1" name="form1" method="post" action="insert1.php">
  <label for="textfield"></label>
  
  <fieldset>
    <legend> <h1 align="center">REGISTER NOW </h1></legend>
     <fieldset>
<div align="center">
        </legend><h2> ACCOUNT INFO</h2>
        <table width="386" height="144" border="0">
        <tr>
          <td width="149" height="31"><div align="center">USERNAME: </div></td>
          <td width="198"><label for="fname"></label>
            <div align="center">
              <input type="text" name="uname" id="uname" />
            </div></td>
        </tr>
        <tr>
          <td height="35"><div align="center">PASSWORD</div></td>
          <td><div align="center">
            <input type="password" name="pswd" id="pswd" autocomplete="new-password" required/>
          </div></td>
        </tr>
        <tr>
          <td height="43"><div align="center">CONFIRM PASSWORD</div></td>
          <td><label for="cpswd"></label>
            <div align="center">
              <input type="password" name="cpswd" id="cpswd" required />
          </div></td>
        </tr>
      </table>
</div>
     </fieldset>
     <fieldset>
       <div align="center"><h2>PERSONAL INFO</h2>
      <table width="386" border="0">
        <tr>
          <td width="200"><div align="center">FIRST NAME</div></td>
          <td width="220"><label for="FNAME"></label>
            <div align="center">
              <input type="text" name="fname" id="FNAME" />
            </div></td>
        </tr>
        <tr>
          <td><div align="center">LAST NAME</div></td>
          <td><label for="LNAME"></label>
            <div align="center">
              <input type="text" name="lname" id="LNAME" />
            </div></td>
        </tr>
        <tr>
          <td><div align="center">DOB</div></td>
          <td><label for="DAY"></label>
            <div align="center">
              <select name="date" id="date">
                <option value="01">Date</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
              </select>
              <select name="day" id="DAY">
                <option value="1">Month</option>
                <option>Jan</option>
                <option>Feb</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
              </select>
              <select name="year" id="YEAR">
                <option value="1">Year</option>
                <option>2000</option>
                <option>1999</option>
                <option>1998</option>
                <option>1997</option>
                <option>1996</option>
              </select>
            </div>
            <label for="DATE"></label>
            <div align="center"></div>
            <label for="YEAR"></label>
            <div align="center"></div></td>
        </tr>
        <tr>
          <td><div align="center">EMAIL</div></td>
          <td><label for="EMAIL"></label>
            <div align="center">
				
              <input type="email" name="email" id="EMAIL" />
            </div></td>
        </tr>
        <tr>
          <td><div align="center">PHONE NO</div></td>
          <td><label for="NO"></label>
            <div align="center">
              <input type="text" name="no" id="NO" />
            </div></td>
        </tr>
      </table>
  </div>
      </fieldset>
      <fieldset>
        <div align="center"><h2>BILLING INFO </h2>
         
         <table width="200" border="0">
        <tr>
          <td><div align="center">FULL NAME</div></td>
          <td><label for="FNAME"></label>
            <div align="center">
              <input type="text" name="flname" id="FNAME" />
            </div></td>
        </tr>
        <tr>
          <td><div align="center">ADDRESS</div></td>
          <td><label for="ADD"></label>
            <div align="center">
              <textarea name="add" id="ADD" cols="45" rows="5"></textarea>
            </div></td>
        </tr>
        <tr>
          <td><div align="center">ALTERNATE ADDRESS</div></td>
          <td><label for="ADD1"></label>
            <div align="center">
              <textarea name="aadd" id="ADD1" cols="45" rows="5"></textarea>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">CITY</div></td>
          <td><label for="CITY"></label>
            <div align="center">
              <input type="text" name="city" id="CITY" />
          </div></td>
        </tr>
        <tr>
          <td><div align="center">COUNTRY</div></td>
          <td><label for="COUNT"></label>
            <div align="center">
              <select name="country" id="COUNT">
                <option value="1">Select</option>
                <option>Afghanistan</option>
                <option>China</option>
                <option>India</option>
                <option value="2">Bangladesh</option>
                <option>Pakistan</option>
              </select>
          </div></td>
        </tr>
        <tr>
          <td><div align="center">POSTAL CODE</div></td>
          <td><div align="center">
            <input type="text" name="pcode" id="textfield" />
          </div></td>
        </tr>
      </table>
        </div>
    </fieldset>
   
    <div align="center">
      <input type="submit" class="btn" name="Register" id="submit" value="SignUp" />
    </div>
  </fieldset>
</form>
</body>

</html>