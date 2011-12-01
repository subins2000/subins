<?
$continue=$_GET['service'];
$service1=explode('//', $_GET['service']);
$service2=explode('.', $service1[1]);
$service3=explode('/', $service2[0]);
$service4=explode('-', $service3[0]);
$service=$service4[0];
include('config.php');
if($_COOKIE['curuser']==deCookie($_COOKIE['wervsi'])){
if(!isset($_GET['service'])){
header("location:$continue");
}
if($service==null){header("location:files/Home.php");}else{header("location:$continue");}
}
?>
<html version=5>
<head>
<? 
if($service=='chat'){echo'<title>Login to Chat</title>';}
if($service==null){echo'<title>Login to Subins</title>';}
if($service=='fd'){echo'<title>Login to Friendshood</title>';}
if($service=='games'){echo'<title>Login to Games</title>';}
if($service=='quiz'){echo'<title>Login to Quiz</title>';}
if($service=='subins'){echo'<title>Login to Subins</title>';}
if($service=='vtube'){echo'<title>Login to Vtube</title>';}
if($service=='apps'){echo'<title>Login to Apps</title>';}
if($service=='analytics'){echo'<title>Login to use Subins Analytics</title>';}
?>
<link href="files/css/main.css" rel="stylesheet" />
<link href="files/css/index.css" rel="stylesheet" />
<link href="//subins.hp.af.cm/files/css/style2.css" rel="stylesheet" />
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script src="//subins.hp.af.cm/files/java/js.php"></script>
<style> 
#yes {
display:none;
}
#<?php echo $_GET['loggedout']; ?>{
display: block;
}
#<?php echo $_GET['id']; ?>{
display:none;
}
</style>
</head>
<body>
<div class="content" style="padding-top:40px;">
<div class="top-bar2">
<table style="float:left;margin-left:20px;">
<tbody>
<tr>
<td><?
if($service=='chat'){echo'<a style="position:absolute;top:0px;left:55px;color:black;" href="//chat-subins.hp.af.cm"><h3>Chat</h3></a>';}
if($service==null || !isset($service)){echo'<a style="position:absolute;left:55px;color:black;" href="//accounts-subins.hp.af.cm/login.php"><h3>Login</h3></a>';}
if($service=='fd'){echo'<a style="position:absolute;left:55px;color:black;" href="//fd-subins.hp.af.cm"><img src="files/images/logo.gif"><a style="margin-top: 23px;float: right;"></a>';}
if($service=='games'){echo'<a style="position:absolute;left:45px;color:black;" href="#"><img height="60px" src="files/images/logo1.jpg"><a style="margin-top: 23px;float: right;"></a>';}
if($service=='quiz'){echo'<a style="position:absolute;top:0px;left:55px;color:black;" href="//quiz.subins.hp.af.cm"><h3>Quiz</h3></a>';}
if($service=='analytics'){echo'<a style="left:30px;position:absolute;top:0px;font-size:40px;" href="//analytics-subins.hp.af.cm"><span>Subins Analytics</span></a>';}
if($service=='subins'){echo'<a style="position:absolute;top:0px;left:55px;color:black;" href="//subins.hp.af.cm/"><h3>Subins</h3></a>';}
if($service=='vtube'){echo'<a style="position:absolute;top:25px;left:55px;color:black;" href="#"><img src="files/images/logo.jpg" height="60px"><a style="margin-top: 23px;float: right;"></a>';}
if($service=='apps'){echo'<a style="position:absolute;top:0px;left:55px;color:black;" href="#"><h3>Apps</a>';}
?>
</td>
</tr>
</tbody>
</table>
<form name="password1" action="<?php SELF ?>" method="post">
<table style="float:right;margin-right:150px;">
<tbody>
<tr>
<td><br><input class="g-button g-button-submit" onclick="window.location='signup.php';" style='cursor:pointer;' value="Create a Free Account"></td>
</tbody>
</table>
</tr>
</form>
</div>
<br />
<? if (isset($_GET['page'])){echo '<style>#repass{display:block;}#signinr,.product-info,.mail{display:none;}</style>';}else{echo '<style>#repass{display:none;}#signinr{display:block;}</style>';} ?>
<center><iframe id='repass' frameborder="0" src='repass.php' height="80%"></iframe></center>
<div id='signinr' style="float:right;margin-right:90px;"><br /><br />
<div class='signin'>
  <h2 class="redtext" style="right:50%;position:fixed;">Sign in </h2>
<div class="signin-box" style="top:150px;height:240px;right:38%;position:absolute;">
<?if (isset($service)){$grt='?service='.$continue;}?>
  <form name="password1" action="//accounts-subins.hp.af.cm/login.php<? echo $grt; ?>" method="post">
<label>
  <strong class="email-label">Username</strong>
  <input type="text" spellcheck="false" value="<?echo$_POST['username'];?>" id="username2" name="username" size="28">
</label>
<label>
  <strong class="passwd-label">Password</strong>
  <input type="password" id="password2" name="password2">
</label>
  <input type="submit" class="g-button g-button-submit" name="submit" value="Log in"><br><a href='repass.php' class="g-button-red g-button">Forgot Password?</a></form></div>
</div>
</div>
  <p hidden>
  Subins is built on the idea that searching, chatting etc.. can be more intuitive, <br>efficient, and useful. And maybe even fun. After all, Subins has: A lot of memory......
</p>
  </div>
</div>
<div id="yes">
<h1>
<center>
You have been logged out.<br /><br />
<a href="//subins.hp.af.cm/login.php"><input type="button" value="Log In Again"></a>
</center>
</h1>
</div>
<?
if (isset($_POST['username'])){
$tbl_name="members"; // Table name 
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password2']; 

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password=MD5('$mypassword')";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
function encryptCookie($value){
   if(!$value){return false;}
   $key = 'The Line Secret Key';
   $text = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);
   return trim(base64_encode($crypttext)); //encode for cookie
}
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
mysql_query("UPDATE members SET status='on' WHERE username='$myusername'") or die(mysql_error());
setcookie("wervsi", encryptCookie($_POST['username']), time()+301014600, "/", ".hp.af.cm");
if($service=='chat'){
$phpss=stripslashes(htmlspecialchars($_POST['username']));
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
 	if (!get_magic_quotes_gpc()) {
 		$myusername = addslashes($myusername);
 	}
 $usercheck = $myusername;
 $check = mysql_query("SELECT user FROM chatters WHERE user = '$usercheck'") or die(mysql_error());
 $check2 = mysql_num_rows($check);
 if ($check2 != 0) {
 		die('<script>alert("Sorry, the username '.$myusername.' is already in use.");</script>');
 	            }
 	if (!get_magic_quotes_gpc()) {
 		$myusername = addslashes($myusername);
 			}
header("location:$continue");
}
if($service=='apps'){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:$continue");
}
if($service=='fd'){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:$continue");
}
if($service=='vtube'){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:$continue");
}
if($service=='quiz'){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:$continue");
}
if($service=='subins'){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:$continue");
}
if($service=='games'){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:$continue");
}
if(!isset($continue)){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:index.php");
}
if($service==null){
setcookie("curuser", $myusername, time()+301014600, "/", ".hp.af.cm");
header("location:index.php");
}
}
else {
echo '<center><div id="overlay" style="top:100px;"><div id="overlay-content"><div id="pop"><font color="red">Username or password is Wrong</font><br><a href="repass.php"><input class="button" value="Forgot Your Password?"></a></div></div></div></center>';
}
}
if (isset($_POST['logout'])){
$myusernamec=$_COOKIE['curuser'];
mysql_query("DELETE FROM `chatters` WHERE `chatters`.`user` = '$myusernamec'");
mysql_query("UPDATE members SET status='off' WHERE username='".$myusernamec."'");
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
if($service=='apps'){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location://apps-subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='fd'){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location://fd-subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='vtube'){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location://vtube.subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='quiz'){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location://quiz.subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='subins'){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location://subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='games'){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location://games-subins.hp.af.cm/?loggedout=yes&id=bg");
}
if(!isset($service)){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location:index.php?loggedout=yes&id=bg");
}
if($service=='accounts'){
setcookie("curuser", $myusernamec, time()-3600, "/", ".hp.af.cm");
header("location:index.php?loggedout=yes&id=bg");
}
}
?>
<div style="position:fixed;bottom:0px;font-size:20px;right:0px;left:0px;background:#EEE;padding-left:25%;cursor: not-allowed;"><span style="padding:10px"><font color="red">System Status</font> -<font color="green"> Healthy</font></span> <span style="padding:10px"><font color="red">Servers Active</font> -<font color="green"> 3</font></span> <span style="padding:10px"><font color="red">Memory Remaining</font> -<font color="green"> <?php 
    $bytes = disk_free_space("files"); 
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    echo sprintf('%1.2f' , $bytes / pow($base,$class)).' GB';
?></font></td></div>
</body>
</html>
