<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en" xmlns="//www.w3.org/1999/xhtml" lang="en">
<head>
<script src="java/js.js"></script>
<script>
function check()
{
	if (document.getElementById("username").value.length < 4){ alert("This username is too short!"); return false; }
	var valid_username = /^[\w\s_]+$/; if (!valid_username.test(document.getElementById("username").value)){ alert("This username contains unauthorized characters."); return false; }
	if (document.getElementById("password").value.length < 5){ alert("This password is too short!"); return false; }
	var valid_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; if (!valid_email.test(document.getElementById("email").value)){ alert("This email address isn't valid!"); return false; }	
}
function validateForm()
{
var x=document.forms["password1"]["username"].value;
if (x==null || x=="")
  {
  document.getElementById('a').style.display='block';
  return false;
  }
var x=document.forms["password1"]["password"].value;
if (x==null || x=="")
  {
  document.getElementById('b').style.display='block';
  return false;
  }
var x=document.forms["password1"]["email"].value;
if (x==null || x=="")
  {
  document.getElementById('c').style.display='block';
  return false;
  }
var x=document.forms["password1"]["name"].value;
if (x==null || x=="")
  {
  document.getElementById('d').style.display='block';
  return false;
  }  
var x=document.forms["password1"]["age"].value;
if (x==null || x=="")
  {
  document.getElementById('e').style.display='block';
  return false;
  }        
}
</script>
<script>

function calculate(){

 passworda = document.password1.user1.value.toLowerCase()
 passwordb = document.password1.pass1.value.toLowerCase()

var user = 1
var pass = 1
 
 for(d=0;d<passwordb.length;d++) {
	pass*= passwordb.charCodeAt(d);
	}
 for(e=0;e< passworda.length; e++) {
	user *= passworda.charCodeAt(e);
	}
	  document.password1.usercode.value = user;
	 document.password1.passcode.value = pass;

}

</script>
<link href="css/main.css" rel="stylesheet">
</head>
<body>
<script type="text/javascript">
<!--
function WriteCookie()
{
   if( document.password1.name.value == "" ){
      alert("Enter some value!");
      return;
   }

   cookievalue= escape(document.password1.name.value) + ";";
   document.cookie="name=" + cookievalue;
   alert("Setting Cookies : " + "name=" + cookievalue );
}
//-->
</script>
<form method="post" name="password1" action="//accounts-subins.hp.af.cm/files/keywrite.php" autotype="0" onsubmit="return validateForm()" onblur="check()">
Username:<input class="input" type="text" name="username" onblur="document.password1.user1.value=this.value"id="name" size="18" maxlength="20" value=""><span id="a" hidden><font color="red">You didnt type your name</font></span>
Password:<input class="input" type="password" onblur="document.password1.pass1.value=this.value" name="pass" id="password" size="18" maxlength="20" value="">
Retype Password:<input type="password" class="input" name="pass2" maxlength="10"><span id="b" hidden>
<font color="red">You didnt type your password</font></span>
Email:<input class="input" type="email" name="email" id="email" size="18" maxlength="35" value=""><span id="c" hidden><font color="red">You didnt type your email</font></span>
<center>
</center>
Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="input" type="number" name="age" id="age" size="18" maxlength="20" value=""><span id="e" hidden><font color="red">You didnt type your age</font></span><br />
<input onclick="calculate();" class="button" name="submit" value="Sign Up" type="submit" />
<div hidden>	
<b>Choose a UserName:</b> <input type="text" name="user1"><br>
<b>Choose a Password:</b> <input type="text" name="pass1"><br>
<input type="button" onclick="calculate()" value="Calculate">&nbsp;
<input type="reset" value="Reset">

<p><b>Encrypted Usercode: </b><input type="text" name="usercode">&nbsp;<br>
<b>Encrypted Passcode: </b><input type="text" name="passcode">
</p>
</div>
<div hidden>
Do you have a job ?&nbsp;<input type="button" onclick="document.getElementById('job').remove;document.getElementById('job').style.display = 'block';" name="vehicle" value="Yes" /> 
<input type="button" onclick="document.getElementById('job').style.display = 'none';"name="vehicle" value="No" /><br />
<div id="job" style="display:none;">
Works at:  <input type="text" name="work" id="work" size="18" maxlength="35" value=""><br />
Position:&nbsp;&nbsp;&nbsp;<input type="text" name="position" id="position" size="18" maxlength="35" value=""></div></div>
</form>
</body>
</html>
