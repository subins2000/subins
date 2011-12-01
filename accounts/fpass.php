<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<? if(!isset($_GET['small'])){?>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php"></script>
<?php }
if (isset($_POST['username'])){
include('config.php');
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password2']; 
$tbl_name="members";
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password=MD5('$mypassword')";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$newpass=$_POST['newpass'];
$user=$myusername=$_POST['username'];

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$sqsl="UPDATE  `$tbl_name` SET  `password` =  MD5('$newpass') WHERE  `username` ='$user';";
$add_member = mysql_query($sqsl);
echo"<script>
function ctext(){
document.getElementById('fpassf').innerHTML='Your Password has been changed';
}
</script>";
}
else {
echo "<script>
function ctext(){
document.getElementById('fpassf').innerHTML='<center>Username or Password is wrong<br><a class=button href=fpass.php >Try Again</a></center>';
}
</script>";
}
}
?>
<?php
if (isset($_POST['fpass'])){
include('config.php');

// username and password sent from form 
if(isset($_POST['repass']) & $_POST['repass']=='s'){$myusername=$_COOKIE['chyui'];}
else{$myusername=$_POST['username'];}
$mypassword=$_POST['password2']; 
$tbl_name="members";
// To protect MySQL injection (more detail about MySQL injection)
$sql="SELECT * FROM $tbl_name WHERE username='$myusername'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$newpass=$_POST['newpass'];
$user=$_POST['username'];

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$sqsl="UPDATE  `$tbl_name` SET  `password` =  MD5('$newpass') WHERE  `username` ='$user';";
$add_member = mysql_query($sqsl);
if($_POST['repass']=='s'){echo"<br><br>You can now login";}
echo"<script>
function ctext(){
document.getElementById('fpassf').innerHTML='Your Password has been changed';
}
</script>";
}
else {
echo "<script>
function ctext(){
document.getElementById('fpassf').innerHTML='<br><center>Username or Password is wrong<br><a class=button href=fpass.php >Try Again</a></center>';
}
</script>";
}
}
?>
<script>
function ctsext(){
document.getElementById('fpassf').innerHtml='Your Password has been changed';
}
</script>
<body onload="ctext()" id="content" style="text-align:center;">
<form id='fpassf' action="fpass.php" method="post">
<tr>
<td>Your Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input" type="text" id="username2" name="username"></td><br><br>
<td>Your Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input" type="password" id="password2" name="password2"></td><br><br>
<td>New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input" type="password" id="username2" name="newpass"></td><br><br>
<input type='submit' class="g-button g-button-submit" value="Change Password" onclick="" name="login" id="login">
</tr>
</form>
