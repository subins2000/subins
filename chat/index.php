<?
if(isset($_GET['exit'])){removeuser();}
if(isset($_GET['logout'])){
header("location://chat-subins.hp.af.cm/");	
setcookie("VisitorName", "", time()-3600, "/", ".hp.af.cm");
setcookie("guest", "", time()-3600, "/", ".hp.af.cm");
removeuser();
if(isset($_COOKIE['guest'])){$vn= 'guest';$vnn=$_COOKIE['guest'];}else{$vn= $_COOKIE['VisitorName'];$vnn=$_COOKIE['VisitorName'];}
	//Simple exit message
	$fp = fopen("log.html", 'a+');  
        fwrite($fp, "<div class='msgln'><img style='float:left;height: 32px;width: 32px;' src='//accounts-subins.hp.af.cm/getimg.php?user=".$vn."'><div id='mcontent'><div class='time'><b>".$vnn."</b>&nbsp;&nbsp;&nbsp;&nbsp;(".date("g:i A").")</div><div class='msg' id='msg'>".$vnn." is offline</div></div></div>");  
        fclose($fp);  
header("Location: index.php"); //Redirect the user
}
function logOut(){
	session_destroy();
}
if(isset($_POST['enter']))
{
	if($_POST['name'] != ""){
setcookie("guest", $_POST['name'], time()+3600, "/", ".hp.af.cm");
adduser();
	}
	else{
		echo '<span class="error"><script>alert("Please type in a name");</script></span>';
	}
}
function adduser(){
header("location: index.php"); //Redirect the user
// Connects to your Database 
include('config.php');
 //This code runs if the form has been submitted
 //This makes sure they did not leave any fields blank
 if (!$_POST['name']) {
 		echo('<script>alert("You did not complete all of the required fields");</script>');
 		die('<script>alert("You did not complete all of the required fields");</script>');
 	}
 // checks if the username is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['name'] = addslashes($_POST['name']);
 	}
 $usercheck = $_POST['name'];
 $check = mysql_query("SELECT user FROM chatters WHERE user = '$usercheck'") 
or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		echo('<script>alert("Sorry, the username <b>'.$_POST['name'].'</b> is already in use.");</script>');
 		die('<script>alert("Sorry, the username <b>'.$_POST['name'].'</b> is already in use.");</script>');
 				}
 // this makes sure both passwords entered match
 	// here we encrypt the password and add slashes if needed
 	if (!get_magic_quotes_gpc()) {
 		$_POST['name'] = addslashes($_POST['name']);
 			}
 // now we insert it into the database
 	$insert = "INSERT INTO chatters (user,last)
 			VALUES ('".$_POST['name']."','".date_format(date_create(), 'YmdGis')."')";
 	$add_member = mysql_query($insert);
}
function removeuser(){
// Connects to your Database 
include('config.php');
$sql="DELETE FROM chatters WHERE chatters.user = '".$_COOKIE['VisitorName']."'";
mysql_query("DELETE FROM chatters WHERE chatters.user = '".$_COOKIE['guest']."'");
$r_member = mysql_query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php"></script>
<script type="text/javascript" src="java/jquery.form.js"></script>
<script type="text/javascript">
function eraseIt(name) {
        document.cookie= name + "=;domain=.subins.hp.af.cm;path=/; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location = "//chat-subins.hp.af.cm/login.php?loggedout=yes&id=bg";
}
    </script>
<title>Chat - Subins</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="css/style2.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" />
<link href="css/index.css" rel="stylesheet" />
</head>
<body>
<div id="overlay" style="display:none;">
<div id="overlay-content">
<script src="java/jquery.form.js"></script>
<script type="text/javascript">
 $(document).ready(function() { 
localStorage['wye']='beta/chat.content.php';			
            $('#submit3').click(function()			
			{ 
	        $("#preview").html('');
	        $("#preview").html('<img src="images/loader.gif" alt="Uploading....">');
		var pic = $("#photoimg").val();
		var username = $("#name").val();
		$.post("profile_pic.php", {uploadedfile: pic,name: username});
	        $("#preview").html('Success');	
			});
        }); 
</script> 
<form id='cropimage' encoding='multipart/form-data' enctype='multipart/form-data' name='file' method='post' action='profile_pic.php'>
<center>
<input name="uploadedfile" type="file" id="photoimg" value="choose">
<input name='name' id='name' type="text" value="<? echo $_COOKIE['VisitorName']; ?>" style='display:none;'>
<input id="submit3" type="submit" value="Upload"></center>
<div id="preview"></div>
</form>	
</div></div>
<?php
function loginForm(){
	echo'<div id="loginformbr"><br><br><br><br><br><br><br><br><br></div><div id="loginform">
	<form action="index.php" method="post">
		<p>Please select the way you want to chat to continue:</p>
		<input type="submit" name="guest" value="Guest" />
		<input type="submit" name="login" value="Login" />
	</form>
	</div>
	';
}
function guest(){
	echo'<br><br><br><br><br><br><br><br><br>
	<div id="loginform">
	<form action="index.php" method="post">
		<p>Please enter your name to continue:</p>
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value="" />
		<input type="submit" name="enter" id="enter" value="Enter" />
	</form>
	</div>
	';
}
function login(){
	echo'<script>window.location="login.php";</script>';
}
if (isset($_POST['login'])){
login();
}
if (isset($_POST['guest'])){
guest();
}
else
if($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){
	loginForm();
}
else{
include('config.php');
$sql=mysql_query("SELECT * FROM chatters WHERE chatters.user = '".$_COOKIE['VisitorName']."'");if(mysql_num_rows($sql)==0){
mysql_query("INSERT INTO chatters (user,last) VALUES('".$_COOKIE['VisitorName']."','".date_format(date_create(), 'YmdGis')."')") or die(mysql_error());}
$sql=mysql_query("SELECT * FROM allchatters WHERE user = '".$_COOKIE['VisitorName']."'");if(mysql_num_rows($sql)==0){
mysql_query("INSERT INTO allchatters (user) VALUES('".$_COOKIE['VisitorName']."')") or die(mysql_error());}else{mysql_query("UPDATE allchatters SET visits=visits+1 WHERE user = '".$_COOKIE['VisitorName']."'");}
?><br><br><div id="chatbox1" hidden></div>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Welcome, <b><?php if(isset($_COOKIE['guest'])){echo $_COOKIE['VisitorName'];}else{echo $_COOKIE['VisitorName'];} ?></b></p>
		<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
		<div style="clear:both"></div>
	</div>	
	<div id="chatbox"></div>
		<form id='messageform' name="message" action="" >
		<input name="usermsg" type="text" id="usermsg" size="63" />
                <input name='username' id='username' type="text" value="<?php if(isset($_COOKIE['guest'])){echo $_COOKIE['guest'];}else{echo $_COOKIE['VisitorName'];} ?>" style='display:none;'>
                <input name='userimg' id='userimg' type="text" value="<?php if(isset($_COOKIE['guest'])){echo 'guest';}else{echo $_COOKIE['VisitorName'];} ?>" style='display:none;'>
		<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
	</form>
</div>
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript">
var elem = $('#chatbox');
$("#chatbox").animate({scrollTop: elem.height()+154144741}, 800);
$(document).ready(function(){
	//If user submits the form
	$("#messageform").live('submit',function(event){event.preventDefault();
		var clientmsg = $("#usermsg").val();
		var username = $("#username").val();
		var userimg = $("#userimg").val();
$.post("beta/chat.content.php", $("#messageform").serialize());		
		$("#usermsg").val('');
$("#chatbox").animate({scrollTop: elem.height()}, 800);
		return false;
	});
	//Load the file containing the chat log
	function loadLog(){
$("#chatbox1").load(localStorage['wye']);
if ($("#chatbox1").html()==null){}else{if ($("#chatbox1 .msgln:last").html()!==$("#chatbox .msgln:last").html()){$("#chatbox").append('<div class="msgln">'+$("#chatbox1 .msgln:last").html()+'</div>');var elem = $('#chatbox');$("#chatbox").animate({scrollTop: elem.height()+154144741}, 10);}	
       }}
if ($("#chatbox").html()==''){$("#chatbox").html("<a id='som'>Show older messages</a>");}
$("#som").live('click',function(){
localStorage['wye']='beta/chat.content.php?msg=all';
$("#chatbox").load('beta/chat.content.php?msg=all');var elem = $('#chatbox');
$("#chatbox").animate({scrollTop: elem.height()+154420}, 800);
});
	setInterval (loadLog, 5000);	//Reload file every 2.5 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});
$(window).bind("beforeunload", function() { 
    $.post('index.php?exit=true',{exit:'true'},function(){window.close();}); 
})
</script>
<?php
}
if(isset($_COOKIE['guest'])){
include('config.php');
$sql=mysql_query("SELECT * FROM chatters WHERE chatters.user = '".$_COOKIE['guest']."'");if(mysql_num_rows($sql)==0){
mysql_query("INSERT INTO chatters (user,last) VALUES('".$_COOKIE['guest']."','".date_format(date_create(), 'YmdGis')."')") or die(mysql_error());}
$sql=mysql_query("SELECT * FROM allchatters WHERE user = '".$_COOKIE['guest']."'");if(mysql_num_rows($sql)==0){
mysql_query("INSERT INTO allchatters (user) VALUES('".$_COOKIE['guest']."')") or die(mysql_error());}else{mysql_query("UPDATE allchatters SET visits=visits+1 WHERE user = '".$_COOKIE['guest']."'");}
?><br><br><div id="chatbox1" hidden></div>
<script>$("#loginform").hide('500');$("#loginformbr").hide('500');</script>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Welcome, <b><?php if(isset($_COOKIE['guest'])){echo $_COOKIE['guest'];}else{echo $_COOKIE['VisitorName'];} ?></b></p>
		<p class="logout"><a id="exit" href="#">Exit Chat</a></p>

		<div style="clear:both"></div>
	</div>	
	<div id="chatbox"></div>
		<form id='messageform' name="message" action="" >
		<input name="usermsg" type="text" id="usermsg" size="63" />
                <input name='username' id='username' type="text" value="<?php if(isset($_COOKIE['guest'])){echo $_COOKIE['guest'];}else{echo $_COOKIE['VisitorName'];} ?>" style='display:none;'>
                <input name='userimg' id='userimg' type="text" value="<?php if(isset($_COOKIE['guest'])){echo 'guest';}else{echo $_COOKIE['VisitorName'];} ?>" style='display:none;'>
		<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
	</form>
</div>
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript">
var elem = $('#chatbox');
$("#chatbox").animate({scrollTop: elem.height()+154144741}, 800);
$(document).ready(function(){
	//If user submits the form
	$("#messageform").live('submit',function(event){event.preventDefault();
		var clientmsg = $("#usermsg").val();
		var username = $("#username").val();
		var userimg = $("#userimg").val();
$.post("beta/chat.content.php", $("#messageform").serialize());		
		$("#usermsg").val('');
$("#chatbox").animate({scrollTop: elem.height()}, 800);
		return false;
	});
	//Load the file containing the chat log
	function loadLog(){
$("#chatbox1").load(localStorage['wye']);
if ($("#chatbox1").html()==null){}else{if ($("#chatbox1 .msgln:last").html()!==$("#chatbox .msgln:last").html()){$("#chatbox").append('<div class="msgln">'+$("#chatbox1 .msgln:last").html()+'</div>');var elem = $('#chatbox');$("#chatbox").animate({scrollTop: elem.height()+154144741}, 10);}	
       }}
if ($("#chatbox").html()==''){$("#chatbox").html("<a id='som'>Show older messages</a>");}
$("#som").live('click',function(){
localStorage['wye']='beta/chat.content.php?msg=all';
$("#chatbox").load('beta/chat.content.php?msg=all');var elem = $('#chatbox');
$("#chatbox").animate({scrollTop: elem.height()+154420}, 800);
});
	setInterval (loadLog, 5000);	//Reload file every 2.5 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});
$(window).bind("beforeunload", function() { 
    $.post('index.php?logout=true',{exit:'true'},function(){window.close();}); 
})
</script>
<?php
}
?><div style="position: fixed;top: 30px;left: 0px;">
<div style="float: left;position: absolute;left: 301px;top: 60px;width: 100px;height:60px;" id="chatbox"><h4><center>Users Online</center></h4></div>
<div class='ousers' style="float: left;position: absolute;left: 301px;top: 100px;width: 100px;text-align:center;" id="chatbox">
<? 
include ('config.php');
$d = mysql_query("SELECT * FROM search LIMIT $start, $limit");
include('config.php');
$result = mysql_query("SELECT * FROM chatters");
while($row = mysql_fetch_array($result))
  {
  echo $row['user'];
  echo "<br />";
  }
?></div></div>
<? $handle = fopen("onlineusers.html", "r");
		$oss = fread($handle, filesize("onlineusers.html"));
		fclose($handle);
		echo $oss; ?></div>
</center>
</body>
</html>
