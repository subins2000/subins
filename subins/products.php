<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "//www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="//www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta name="description" content="F"></meta>
<title>Subins</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="files/java/js.js" ></script>
<link href="files/css/style2.css" rel="stylesheet">
<link href="files/css/main.css" rel="stylesheet" />
<link href="files/css/index.css" rel="stylesheet" />
<link href="files/css/home.css" rel="stylesheet" />
<script src="files/java/js.js"></script>
<script src="//accounts-subins.hp.af.cm/data/keys.js"></script>
<script src="files/java/jquery.min.js"></script>
<script type="text/javascript">
function eraseIt(name) {
        document.cookie= name + "=;path=//accounts-subins.hp.af.cm; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location = "//subins.hp.af.cm/login?loggedout=yes&id=bg";
}
    </script>
<script>
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
if (thisCookie.value=Who()) {

}
</script>
<style>
a:-webkit-any-link {
color:green;
}
</style> 
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
<script>
function double1(){
var uiks=document.getElementById('name');
if (uiks.value==''){
document.getElementById('namebutton').innerHTML='Guest';
}
}
</script>
</head>
<body>
<script>document.write("<input type='text' name='name' id='name' value='"+Who()+"' hidden>");</script> 
<div id="div_share" style="display:none;"> 
  <div id="register" style="text-align:center;">
  <iframe src="files/main.php" scrolling="no" frameborder="0" height="330px;"></iframe>
 </div>
 </div>
<div class="top-bar">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a style="position:absolute;top:0px;left:15px;" href="//subins.hp.af.cm/"><h3>Subins</h3></a>
</td>
<td style="top: 10px;position: absolute;left: 100px;">
<div id="menu-left">
 <a role="button" onclick="document.getElementById('myaudio').play()"class="button" href="//quiz.subins.hp.af.cm" id="homem">Home</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//fd-subins.hp.af.cm/" id="gamesm" class="button">Friendshood</a>
 <a role="button" onclick="document.getElementById('myaudio').play()"href="//fd-subins.hp.af.cm/files/Games.php" id="gamesm" class="button">Games</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//vtube.subins.hp.af.cm/" id="gamesm" class="button">Videos</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//subins.hp.af.cm/sms" id="gamesm" class="button">SMS</a>
</div>
</td>
</tr>
</tbody>
</table>
<div class="menu"><?php
if (isset($_COOKIE["VisitorName"]))
  echo 'Welcome,<button id="namebutton"class="button" onclick=$(".sprofile").fadeIn(500).show();>'.$_COOKIE["VisitorName"] ;
else
  echo "<a href='//quiz.subins.hp.af.cm/login.php'><input type='button' class='button' value='Log In'></a>";
?></button>
</div>
<div class="sprofile" id="sprofile">
<div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;"><a onclick="document.getElementById('overlay').style.display='block'" style="cursor:pointer;color:white;">Change Picture</a></div>
<script>document.write("<img id='savatar' src='//accounts-subins.hp.af.cm/data/users/"+Who()+"' height='100px'>");</script>
<b><div id="sname"><script>document.write(Who())</script></div></b>
<a id="sout" class="button" onclick="eraseIt('VisitorName')" href="#">Log Out</a>
</div>
</div>
<div class="content">
<a href="//subins.hp.af.cm/"><center><br><br><br><br><br><br><h1><font size="15" color="red">S</font><font size="15"color="violet">u</font><font size="15" color="blue">b</font><font size="15" color="yellow">i</font><font size="15" color="green">n</font><font size="15" color="red">s</font><br></a>
</h1><br><br>
<a href="//fd-subins.hp.af.cm"><div id='friendshood'></div></a>
<a href="//games-subins.hp.af.cm"><div id='games'><img src="files/images/logo1.jpg" width="215px" height="60px" ></div></a>
<a href="//vtube.subins.hp.af.cm"><div id='videos'><img src="files/images/logo.jpg" width="215px" height="60px" ></div></a>
<a href="//quiz.subins.hp.af.cm"><div id='quiz'><font size="15" color="red">Q</font><font size="15"color="violet">U</font><font size="15" color="blue">I</font><font size="15" color="yellow">Z</font></div></a>
<a href="//edu.subins.hp.af.cm"><div id="edusource"><font size="16">Edu source</font></div></a>
</body>
</html>
