<html>
<head>
<meta name="description" content="F"></meta>
<title>Subins</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="java/js.js" ></script>
<script src="java/js.js"></script>
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript">
function eraseIt(name) {
        document.cookie= name + "=;domain=.subins.hp.af.cm;path=/; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location = "//subins.hp.af.cm/login?loggedout=yes&id=bg";
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
<body onload="double1();" onmouseup="$('#b-menu').hide('900');">
<div id="div_share" style="display:none;"> 
  <div id="register" style="text-align:center;">
  <iframe src="main" scrolling="no" frameborder="0" height="330px;"></iframe>
 </div>
 </div>
<div class="top-bar">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a onmouseover="$('#b-menu').show('900');"style="position:absolute;top:0px;left:15px;" href="//subins.hp.af.cm/"><h3>Subins</h3></a>
</td>
<td style="top: 10px;position: absolute;left: 100px;">
<div id="menu-left">
 <a role="button" onclick="document.getElementById('myaudio').play()"class="button" href="#" id="homem">Home</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//fd.subins.hp.af.cm/" id="gamesm" class="button">Friendshood</a>
 <a role="button" onclick="document.getElementById('myaudio').play()"href="//games.subins.hp.af.cm" id="gamesm" class="button">Games</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//vtube.subins.hp.af.cm/" id="gamesm" class="button">Videos</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="sms" id="gamesm" class="button">SMS</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//subins.hp.af.cm/products" id="gamesm" class="button">PRODUCTS</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//quiz.subins.hp.af.cm" id="gamesm" class="button">Quiz</a>
</div>
</td>
</tr>
</tbody>
</table>

<div class="menu"><?php
if (isset($_COOKIE["VisitorName"]))
  echo 'Welcome,<button id="namebutton"class="button" onclick=$(".sprofile").fadeIn(500).show();>'.$_COOKIE["VisitorName"] ;
else
  echo "<a href='//subins.hp.af.cm/login.php'><input type='button' class='button' value='Log In'></a>";
?></button>
</div>
<div class="sprofile" id="sprofile">
<div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;"><a onclick="document.getElementById('overlay').style.display='block'" style="cursor:pointer;color:white;">Change Picture</a></div>
<script>document.write("<img id='savatar' src='//accounts-subins.hp.af.cm/getimg.php?user="+Who()+"' height='100px'>");</script>
<b><div id="sname"><script>document.write(Who())</script></div></b>
<form method="post" action='//accounts-subins.hp.af.cm/login.php?service=music'><input id="sout" type='submit' name='logout' value="Log Out"></form>
</div>
</div>
<div class="content"><center>
<script src="java/jquery-1.7.2.min.js"></script>
<script src="java/jquery.form.js"></script>
<script language="JavaScript">
$(document).ready(function(){
$("a").click(function(){
event.preventDefault();
var th = this.href;
var href = '/'+th.substr(24); 
var Df = th.substr(24);
function getEx(filename)
{
var filename = '/'+th.substr(24); 
return (/[.]/.exec(filename)) ? /[^.]+$/.exec(filename) : undefined;
}
var filename=getEx(this.href);
if (filename==undefined){
$('#folder').load('//music.subins.hp.af.cm/get.php?dir='+Df);
}else{
$("#playm").attr({src: href});
document.getElementById('playm').play();
}
});
$(document).scroll(function() {
  $("#folder").animate({scrollTop: 200}, 800);
});
$('#vlform').submit(function() {
event.preventDefault(); 
$("#vlform").ajaxForm({target: '#folder'}).submit();
});
});
var TRange=null;
function findString (str) {
 if (parseInt(navigator.appVersion)<4) return;
 var strFound;
 if (window.find) {
  // CODE FOR BROWSERS THAT SUPPORT window.find
  strFound=self.find(str);
  if (strFound && self.getSelection && !self.getSelection().anchorNode) {  $("#vlq").focus();alert();
   strFound=self.find(str);
  }
  if (!strFound) {
   strFound=self.find(str,0,1)
   while (self.find(str,0,1)) continue
  }
 }
 else if (navigator.appName.indexOf("Microsoft")!=-1) {

  // EXPLORER-SPECIFIC CODE

  if (TRange!=null) {
   TRange.collapse(false)
   strFound=TRange.findText(str)
   if (strFound) TRange.select()
   alert();
  }
  if (TRange==null || strFound==0) {
   TRange=self.document.body.createTextRange()
   strFound=TRange.findText(str)
   if (strFound) TRange.select()
  }
 }
 else if (navigator.appName=="Opera") {
  alert ("Opera browsers not supported, sorry...")
  return;
 }
 if (!strFound){ alert ("String '"+str+"' not found!");$("#vlq").focus();}
$("#vlq").click();
}setInterval(function(){$("#vlq").focus();},100);
</script>
<b hidden>
var filename ="";
if (filename==null){
$("#playm").attr({src: '/Music/English/'+href});
}else{alert('s');}
<styles>#folder td[valign="top"]{background-image:url('//music.subins.hp.af.cm/images/video-js.png');width: 10px;
padding-right: 10px;}#folder td[valign="top"] img{display:none;}#folder h1{display:none;}#folder th{display:none;}#folder td[align="right"]{display:none;}#folder address{display:none;}</style>
</b>
<div class="folderactions">
<table><tbody>
<tr><td>
<a href="Music"><button class="button" title="Back" style="left: 190px;"><div id='back' style="background: url(images/combined.png) -106px -77px no-repeat;height: 13px;width: 15px;opacity: .65;"></div></button></a></td><td><br>
<form onsubmit="findString(this.q.value)" id='vlform' action="//subins.hp.af.cm/search.php" method="get">
<input id='vlq' onkeyup="if(this.value!=null && this.value!='') findString(this.value);$(this).focus();" autocomplete="off" name="q" type="text" size="30" value="<? echo $_GET['q']; ?>"  />
<input id='vl' name="p" type="text" size="30" value="1"  hidden style="display:none;">
<input name="service" type="text" value="music"  hidden style="display:none;">
<button class="g-button g-button-submit" style="height: 29px;line-height: 29px;min-width: 54px;"type="submit">
<span style="background: url(images/search.png);background-position: -357px 0;display: inline-block;height: 13px;margin: 7px 19px;width: 14px;"></span></button>
<div style="width: 291px;top: 30px;position: absolute;text-align: left;left: 0px;background:white;" id="livesearch"></div>
<?
if (!$_GET['q']==''){
include ('config.php');
 $q= $_GET['q'];
 $data = mysql_query("SELECT * FROM search WHERE title LIKE'%$q%'"); 
 $rn = mysql_num_rows($data);
 echo'<br>';
 echo $rn.' results found';
}
?>
</form></td></tr></tbody></table>
<div class="shadow"></div>
</div><div style="position:fixed;width:100%;height:100px;bottom:-70px;background:#EEE;left:0px;">
<audio id="playm" controls="controls" style="width:100%;" type="audio/mp3"></audio>
</div>
<br><br><br><br><br><div id="folder" style='overflow:auto;'><? $p=file_get_contents('//music.subins.hp.af.cm/get?dir=Music');echo $p;?></div>
</div>
<script src="java/video.js"></script>
<link href="css/video-js.css" rel="stylesheet" type="text/css">
<script>
    _V_.options.flash.swf = "video-js.swf";
  </script>
</body>
<div hidden>
<h1><font color="red">This website is currently down for maintenance.</font></h1>
<h2>
<font color="grey">Sorry! We'll be back as soon as possible. Check back shortly!</font></h2>
</div>
</body>
</html>
