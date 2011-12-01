<html version=5>
<head>
<title>Login to Subins</title>
<link href="../files/css/main.css" rel="stylesheet" />
<link href="../files/css/style2.css" rel="stylesheet" />
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script>
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
if (thisCookie.value='<?echo$_COOKIE["VisitorName"];?>') {
window.close();
}
</script>
</head>
<body>
<div class="top-bar"><img src="//cdn-subins.hp.af.cm/images/logo.png"><div class="menu"><input type="button" class="g-button g-button-submit" onclick="window.location='//accounts-subins.hp.af.cm/signup.php';" style='cursor:pointer;' value="Create a Free Account"></div></div>
<form name="password1" action="login.php" method="post">
<table style="float:left;background:#CCC;left:30%;position:absolute;top:35%;">
<tbody>
<tr>
<td>Username&nbsp;<input type="text" size="20" name="username"></td></tr><tr><td>Password&nbsp;&nbsp;<input type="password" name="password2" size="20"></td></tr><input type="hidden"name="url"value="<?echo$_GET['url'];?>"><tr><td><input class="button" style="margin-top:20px;background-color: #4D90FE;" type="submit" value="Log In" onclick="" name="login" id="login"><input class="button" type="reset" value="Reset"/></td>
</tbody>
</table>
</tr>
</form>
</div>
<?php
if (isset($_POST['username'])){
include('../config.php');
$myusername=$_POST['username']; 
$mypassword=$_POST['password2']; 
$sql="SELECT * FROM members WHERE username='$myusername' and password=MD5('$mypassword')";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
session_register("myusername");
session_register("mypassword"); 
setcookie("VisitorName", $myusername, time()+301014600, "/", ".hp.af.cm");?>
<script>$("#content").html('<center><h1>Processing....Please Wait</h1><br>This window will close in a few seconds</center>');$.post("action.php",{action: 'like',url:"<?echo$_POST['url'];?>"},function(){window.opener.location.reload();window.close();});</script>
<?}
else {
echo '<center><div id="overlay"><div id="overlay-content"><div id="pop"><font color="red">Username or password is Wrong</font></div></div></div></center>';
}
}
?>
</body>
</html>
