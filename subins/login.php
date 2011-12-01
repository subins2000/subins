<?
$continue=$_GET['service'];
$service1=explode('//', $_GET['service']);
$service2=explode('.', $service1[1]);
$service3=explode('/', $service2[0]);
$service=$service3[0];
if($_COOKIE['VisitorName']==deCookie($_COOKIE['wervsi'])){
if($service=='fd'){
header("location:$continue");
}
if($service=='vtube'){
header("location:$continue");
}
if($service=='quiz'){
header("location:$continue");
}
if($service=='subins'){
header("location:$continue");
}
if($service=='games'){
header("location:$continue");
}
if(!isset($_GET['service'])){
header("location:$continue");
}
if($service==null){
header("location:files/Home.php");
}
if($service=='accounts'){
header("location:$continue");
}
if($service=='music'){
header("location:$continue");
}
}
?>
<html version=5>
<head>
<? 
function chatti(){echo'<title>Login to Chat</title>';}
function loginti(){echo'<title>Login to Subins</title>';}
function fti(){echo'<title>Login to Friendshood</title>';}
function gamesti(){echo'<title>Login to Games</title>';}
function quizti(){echo'<title>Login to Quiz</title>';}
function subinsti(){echo'<title>Login to Subins</title>';}
function vtubeti(){echo'<title>Login to Vtube</title>';}
function appsti(){echo'<title>Login to Apps</title>';}
?>
<link href="//accounts-subins.hp.af.cm/files/css/main.css" rel="stylesheet" />
<link href="//accounts-subins.hp.af.cm/files/css/index.css" rel="stylesheet" />
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
<center>
</center>

<div class="top-bar2">
<table style="float:left;margin-left:20px;">
<tbody>
<tr>
<td><?
function chat(){echo'<a style="position:absolute;top:45px;left:55px;color:black;" href="//chat-subins.hp.af.cm"><h3>Chat</h3></a>';}
function login(){echo'<a style="position:absolute;top:45px;left:55px;color:black;" href="//accounts-subins.hp.af.cm/login.php"><h3>Login</h3></a>';}
function fd(){echo'<a style="position:absolute;top:27px;left:55px;color:black;" href="//fd-subins.hp.af.cm"><img src="files/images/logo.gif"><a style="margin-top: 23px;float: right;"></a>';}
function games(){echo'<a style="position:absolute;top:25px;left:45px;color:black;" href="#"><img height="60px" src="files/images/logo1.jpg"><a style="margin-top: 23px;float: right;"></a>';}
function quiz(){echo'<a style="position:absolute;top:45px;left:55px;color:black;" href="//quiz.subins.hp.af.cm"><h3>Quiz</h3></a>';}
function subins(){echo'<a style="position:absolute;top:40px;left:55px;color:black;" href="//subins.hp.af.cm/"><h3>Subins</h3></a>';}
function vtube(){echo'<a style="position:absolute;top:25px;left:55px;color:black;" href="#"><img src="files/images/logo.jpg" height="60px"><a style="margin-top: 23px;float: right;"></a>';}
function apps(){echo'<a style="position:absolute;top:45px;left:55px;color:black;" href="#"><h3>Apps</a>';}
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
  <form name="password1" action="//subins.hp.af.cm/login.php<? echo $grt; ?>" method="post">
<label>
  <strong class="email-label">Username</strong>
  <input type="text" spellcheck="false" value="<?echo$_POST['username'];?>" id="username2" name="username" size="28">
</label>
<label>
  <strong class="passwd-label">Password</strong>
  <input type="password" id="password2" name="password2">
</label>
  <input type="submit" class="g-button g-button-submit" name="submit" value="Log in"><br><a href='?page=fpass' class="g-button-red g-button">Forgot Password?</a></form></div>
</div>
</div>
<div class="product-info mail" style="width: 500px;"><br><br>
<div class="product-headers" hidden>
  <h1 class="redtext">
<? 
if($service=='chat'){chatt();}
if($service=='apps'){appst();}
if($service=='vtube'){vtubet();}
if($service=='quiz'){quizt();}
if($service=='fd'){fdt();}
if($service=='subins'){subinst();}
if($service=='games'){gamest();}
if(!isset($service)){logint();}
function chatt(){echo'Chat with people all around the world';}
function logint(){echo'Login To Subins To use features';}
function fdt(){echo'Connect to people in the world using LocalHost.';}
function gamest(){echo'Login To Play Games';}
function quizt(){echo'Login To Play Quiz';}
function subinst(){echo'Login To Subins To use features';}
function vtubet(){echo'Login To Vtube To watch videos';}
function appst(){echo'Login To manage your apps';}
?>
</h1>
</div>
  <p hidden>
  Subins is built on the idea that searching, chatting etc.. can be more intuitive, <br>efficient, and useful. And maybe even fun. After all, Subins has:
</p>
<ul class="features" hidden>
  <li>
  <img src="files/images/filing_cabinet-g42.png" alt="">
  <p class="title">Lots of space</p>
  <p>
<script src='files/java/jquery-1.7.2.min.js'></script>
<script>
$(document).ready(function(){
$('#username2').focus();
$('#quota').html("<? echo 14.06+10;?>");
});
setInterval(function() {
var i=$('#quota').text();
var p=4;
var e=i+p;
var randomnumber=Math.floor(Math.random()*2000);
$('#quota').html('');
$('#quota').html(14*randomnumber);
},1000);
</script>
  Over <a id="quota"><?php 
    $bytes = disk_free_space("/"); 
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    echo sprintf('%1.2f' , $bytes / pow($base,$class));
?></a> <?echo $si_prefix[$class];?> (and adding) of free storage.
  </p>
  </li>
  <li>
  <img src="files/images/nosign-r42.png" alt="">
  <p class="title">No Ads</p>
  <p>Disturbed of Ads? Well No More.</p>
  </li>
  <li>
  <img src="files/images/mobile_phone-42.gif" alt="">
  <p id="title">Mobile access</p>
  <p>Get Subins on your mobile phone.</p>
  </li>
</ul>
  </div>
<div hidden>


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
<iframe src="7.0_0.csrx" hidden>6502806</iframe>
<?
if (isset($_POST['username'])){
$tbl_name="members"; // Table name 
// Connect to server and select databse.
include('config.php');
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password2']; 

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password=MD5('$mypassword')";
$result=mysql_query($sql) or die(mysql_error());

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
mysql_query("UPDATE members SET status='on' WHERE username='$myusername'") or die(mysql_error());
// Register $myusername, $mypassword and redirect to file "login_success.php"
if($service=='chat'){
$phpss=stripslashes(htmlspecialchars($_POST['username']));
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
 //This code runs if the form has been submitted
 //This makes sure they did not leave any fields blank
 // checks if the username is in use
 	if (!get_magic_quotes_gpc()) {
 		$myusername = addslashes($myusername);
 	}
 $usercheck = $myusername;
 $check = mysql_query("SELECT user FROM chatters WHERE user = '$usercheck'") 
or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		die('<script>alert("Sorry, the username '.$myusername.' is already in use.");</script>');
 				}
 // this makes sure both passwords entered match
 	// here we encrypt the password and add slashes if needed
 	if (!get_magic_quotes_gpc()) {
 		$myusername = addslashes($myusername);
 			}
header("location:$continue");
}
if($service=='apps'){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:$continue");
}
if($service=='fd'){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:$continue");
}
if($service=='vtube'){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:$continue");
}
if($service=='quiz'){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:$continue");
}
if($service=='subins'){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:$continue");
}
if($service=='games'){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:$continue");
}
if(!isset($continue)){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:index.php");
}
if($service==null){
setcookie("VisitorName", $myusername, time()+301014600, "/", "subins.hp.af.cm");
header("location:index.php");
}
}
else {
echo '<center><div id="overlay" style="top:100px;"><div id="overlay-content"><div id="pop"><font color="red">Username or password is Wrong</font><br><a href="?page=repass"><input class="button" value="Forgot Your Password?"></a></div></div></div></center>';
}
}
if (isset($_POST['logout'])){
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="backstreetboys"; // Mysql password 
$db_name="db"; // Database name 
$tbl_name="members"; // Table name 
include('config.php');
$myusernamec=$_COOKIE['VisitorName'];
mysql_query("UPDATE members SET status='off' WHERE username='".$myusernamec."'");
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
if($service=='apps'){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location://apps-subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='fd'){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location://fd-subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='vtube'){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location://vtube.subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='quiz'){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location://quiz.subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='subins'){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location://subins.hp.af.cm/?loggedout=yes&id=bg");
}
if($service=='games'){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location://games-subins.hp.af.cm/?loggedout=yes&id=bg");
}
if(!isset($service)){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location:index.php?loggedout=yes&id=bg");
}
if($service=='accounts'){
setcookie("VisitorName", $myusernamec, time()-3600, "/", "subins.hp.af.cm");
header("location:index.php?loggedout=yes&id=bg");
}
}
if($service=='chat'){
chat();
chatti();
}
if($service=='apps'){
apps();
appsti();
}
if($service=='fd'){
fd();
fti();
}
if($service=='vtube'){
vtube();
vtubeti();
}
if($service=='quiz'){
quiz();
quizti();
}
if($service=='subins'){
subins();
subinsti();
}
if($service=='games'){
games();
gamesti();
}
if(!isset($service)){
login();
loginti();
}
if($service==null){
login();
loginti();
}
?>
<div style="position:fixed;bottom:0px;font-size:20px;right:0px;left:0px;background:#EEE;padding-left:25%;cursor: not-allowed;"><span style="padding:10px"><font color="red">System Status</font> -<font color="green"> Healthy</font></span> <span style="padding:10px"><font color="red">Servers Active</font> -<font color="green"> 1</font></span> <span style="padding:10px"><font color="red">Memory Remaining</font> -<font color="green"> <?php 
    $bytes = disk_free_space("/"); 
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    echo sprintf('%1.2f' , $bytes / pow($base,$class)).' GB';
?></font></td></div>
</body>
</html>
