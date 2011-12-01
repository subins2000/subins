<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "//www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/main.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<link href="css/index.css" rel="stylesheet" />
<title>
Home - Videos
</title>
<?
$space ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
?>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="java/js.js" ></script>
<script type="text/javascript" src="java/keys.js" ></script>
<script src="java/jquery.min.js"></script>
<script type="text/javascript" src="java/keys.js"></script>
<script type="text/javascript" src="java/jwplayer.js"></script>
<script type="text/javascript">
function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
function eraseIt(name) {
        document.cookie= name + "=;domain=.subins.hp.af.cm;path=/; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location ="//vtube.subins.hp.af.cm/?loggedout=yes&id=bg" ;
}
var Name = readCookie('VisitorName');
</script>
<link href="css/video-js.css" rel="stylesheet">
<script src="java/video.js"></script>
<script type="text/javascript">
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
function double1(){
var uiks=document.getElementById('name');
if (uiks.value==''){
window.location='//vtube.subins.hp.af.cm/';
}
}
    </script>
</head>
<body onload="double1();check();keys();changeText();checkCookie();" ONKEYDOWN="keys()" >
<audio id="myaudio" src="click.wav"></audio>
<div id="content">
<div id="overlay" style="display:none;">
<div id="overlay-content">
<script src="java/jquery.form.js"></script>
<script type="text/javascript">
 $(document).ready(function() { 
	
			
					
            $('#submit3').click(function()			
			{ 
			
			  $("#preview").html('');
			    $("#preview").html('<img src="images/loader.gif" alt="Uploading...."//>');
	
			$("#cropimage").ajaxForm({
						target: '#preview'
		}).submit();
		 
	
			});
        }); 
</script>
<script>document.write("<form id='cropimage' encoding='multipart/form-data' enctype='multipart/form-data' name='file' method='post' action='profile_pic.php?name="+Who()+"'>");</script>
<center><input name="uploadedfile" type="file" id="photoimg" value="choose">
<script>document.write("<input type='text' id='name' name='name' value='"+Who()+"'>");</script>
<input id="submit3" type="button" value="Upload"></center>
<div id="preview"></div>
</form>	
</div>
</div>
<table>
<tbody>
<tr>
<td hidden>
<h2>Featured Video</h2>
<video src="../data/video.mp4" id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" 
  data-setup="{}" height="270" width="480" tabindex="0" loadedmetadata>
Video tag not supported. Download the video.
</video>
Player<br />
5 Seconds  
<td hidden>
<h2>Popular Video</h2>
<video src="../data/Chrome.mp4" id="my_video_2" class="video-js vjs-default-skin" controls preload="auto" 
  data-setup="{}" height="270" width="480" tabindex="0" >
</video>
Imaginary Forces<br />
34 Seconds
</td>
</tr>
</tbody>
</table>
<h2>Vtube</h2>
Find a video
<form action='search.php' method='get'>
<input type="search" id="q" name="q" value="" size="20">
<input type="submit" name="submit" value="Find">
</form>
<script>
function ajax(url){
$('#overlay').show('500');
$('#overlay-content').load(url);
}
</script>
<br><a onclick='ajax("upload.php");' href='upload.php'><input type="button" id="q" name="v" value="Upload a video" size="20"></a>
<h2>Recent Uploads</h2>
<?
include('config.php');
$query="select * from videos";  // query string stored in a variable
$rt=mysql_query($query);          // query executed 
echo mysql_error();                    // if any error is there that will be printed to the screen
while($nt=mysql_fetch_array($rt)){
echo "<b><a href='watch?v=$nt[vid]'>$nt[title]</b><br>";     // name class and mark will be printed with one line break
}
?>
</div>
<script src="//subins.hp.af.cm/files/java/main.js.php"></script>
<div class="top-bar">
<table>
<tbody>
<tr>
<td>
<img src="images/logo.jpg" style="margin-left:20px;" height="50px">
</td>
<td style="float:center;">
<center>
<input type="search" id="t1" name="t1" value="" size="20">
<input type="submit" name="b1" value="Find">
</center>
</td>
<td>
<div id="menu-left">
 <a role="button" onclick="document.getElementById('myaudio').play()"class="button" href="#" id="homem">Home</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//fd.subins.hp.af.cm/" id="gamesm" class="button" target="_blank">Friendshood</a>
 <a role="button" onclick="document.getElementById('myaudio').play()"href="//games.subins.hp.af.cm" id="gamesm" class="button" target="_blank">Games</a>
</div>
</td>
</tr>
</tbody>
</table>
<div class="menu">Welcome to Videos <button id="namebutton"class="button" onclick="$('.sprofile').fadeIn(500).show();"><script>document.write(Who())</script></button>
</div>
<div class="sprofile" id="sprofile">
<div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;"><a onclick="document.getElementById('overlay').style.display='block'" style="cursor:pointer;">Change Picture</a></div>
<script>document.write("<img id='savatar' src='//accounts-subins.hp.af.cm/data/users/"+Who()+"' height='100px'>");</script>
<div id="sname"><b><script>document.write(Who())</script></b></div>
<form method="post" action='//accounts-subins.hp.af.cm/login.php?service=vtube'><input id="sout" type='submit' name='logout' value="Log Out"></form>
</div>
</div>
<div id="overlay" style="display:none;">
<div id="overlay-content">
</div>
</div>
</body>
</html>
