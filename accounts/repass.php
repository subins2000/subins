<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php"></script>
<?php
include('config.php');
if (isset($_POST['code']) & $_POST['action']=='code'){$code=$_POST['code'];$email=$_POST['email'];
$sql=mysql_query("SELECT * FROM `verify` WHERE `code`=\"$code\" AND `email`=\"$email\" AND `confirmed`=\"n\"") or die(mysql_error());
if(mysql_num_rows($sql)=='1'){$newpass=$_POST['newpass'];
mysql_query("UPDATE verify SET confirmed='s' WHERE code=\"$code\" AND email=\"$email\"") or die(mysql_error());
$user=$myusername;
echo '<center><form id="fpassf0" action="fpass.php" method="post">
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input type="hidden" value='.$_COOKIE['chyui'].' id="username2" name="username"></td><br><br>
<td>New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="newpass" name="newpass"></td><br><br>
<input type="hidden" value="fpass" id="username2" name="fpass"><input type="hidden" value="s" name="repass">
<input type="submit" class="g-button g-button-submit" value="Change Password" onclick="" name="cpass" id="login">
</tr>
</form></center><script>setInterval(function(){$("#fpassf").hide();},001);</script>';}else{echo'<script>setInterval(function(){$("#fpassf").html("'.mysql_num_rows($sql).'Something Happened. I am working on it.");},001);</script>';}}
if (isset($_POST['email']) & isset($_POST['age'])){
$myusername=$_POST['email']; 
$mypassword=$_POST['age']; 
$mys=$_POST['username']; 
$sql="SELECT * FROM `members` WHERE `username`='$mys' or `age`='$mypassword' AND `email`='$myusername'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
$newpass=$_POST['newpass'];
$user=$myusername;
if($count==1){
setcookie("chyui", $_POST['username'], time()+3500, "/", ".hp.af.cm");
$tbl_names="verify";
$confirm_code=md5(uniqid(rand())); 
$email=$_POST['email'];
mysql_query("INSERT INTO $tbl_names(code,email,confirmed)VALUES('$confirm_code', '$email', 'n')");
$to=$email;
$subject="Subins - Password Change - Confirm your e-mail";
$headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";$headers .= 'From: <noreply@subins.hp.af.cm>' . "\r\n";
$message="<html><head><title>Thanks for Signing Up.</title></head><body><center style=\"left:0px;position:absolute;right:0px;width:100%;background:#EEE;top:0px;\"><h1><a href=\"//subins.hp.af.cm?utm_source=mail\"><img src=\"//cdn-subins.hp.af.cm/images/logo.png?utm_source=mail\"></a></h1></center><div><h2>Password Change</h2><br>You requested for a new password. Paste this code on the input box of the page.
<blockquote style=\"border:5px solid black;padding:10px;\">$confirm_code</blockquote>
</div></body></html>";
mail($to,$subject,$message,$headers);
echo "<script>
function ctext(){
document.getElementById('fpassf').innerHTML='<center><h3>Check your mail inbox or Spam Folder for a mail with the subject \'Subins - Password Change\'. Paste the code which is in the mail to this input box below - </h3><input type=\'text\' placeholder=\'Paste the code here\' size=\'40\' name=\'code\'><input type=\'hidden\' value=\'code\' name=\'action\'><input name=\'email\' type=\'hidden\' value=\'$email\'><br><br><input type=\'submit\'></center>';
}
</script>";
}
else {
echo "<script>
function ctext(){
document.getElementById('fpassf').innerHTML='<center><h1>Wrong</h1><br><a class=button href=repass.php >Try Again</a></center>';
}
</script>";
}
}
?>
<body onload="ctext()">
<div id="content" style="text-align:center;">
<form id='fpassf' action="repass.php" method="post">
<tr>
<td>Your Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="username2" name="username"></td><br><br>
<td>Your E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" id="email" name="email"></td><br><br>
<td>Your Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="age" name="age"></td><br><br>
<input type='submit' class="g-button g-button-submit" value="Change Password" onclick="" name="login" id="login">
</tr>
</form>
</div>
</body>
