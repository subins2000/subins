<html version=5>
<head>
<title>Edu Source || Subins</title>
<link href="files/css/main.css" rel="stylesheet" />
<link href="files/css/index.css" rel="stylesheet" />
<script src="files/java/js.js"></script>
<script src="files/java/jquery.min.js"></script>
<script src="files/java/jquery-latest.js"></script>
<style> 
#yes {
display:none;
}
#<?php echo $_GET['loggedout']; ?>{
display: block;
}
.<?php echo $_GET['id']; ?>{
display:none;
}
#<?php echo $_GET['show']; ?>{
display:block;
}
</style>
</head>
<body scrolling="no" style="" ONKEYDOWN="if (event.keyCode == 13){document.getElementById('div_dialog_background').style.display = 'none';document.getElementById('div_share').style.display = 'none';}">
<div id="div_dialog_background" style="display:none;">
<a id="x" href="javascript:;" onclick="javascript:Hide('div_share');Hide('div_dialog_background');">x</a>
</div>
<div id="div_share" style="display:none;"> 
  <div id="register" style="text-align:center;">
  <iframe src="files/main.php" scrolling="no" frameborder="0" height="330px;"></iframe>
 </div>
 </div>
<div class="content"> 
<center>
<font size="16">
Edu source
</font></center>
<center><div id="wrongu" style="display:none;"><div id="overlay"><div id="overlay-content"><div id="pop"><font color="red">Username or password is Wrong</font></div></div></div>
<div id="wrongp" style="display:none;"><div id="div_dialog_background" style="display:none;"><div id="pop"><font color="red">Password is Wrong</font></div></div></div></div></center>
<br /><center>
<h3>Articles from the world's most popular education sites</h3>
<img src="files/images/Wikipedia.png"><br>
<img src="files/images/w3schools.png"><br>
Search articles using Subins search
<br><a href="//subins.hp.af.cm/">Subins Search</a>
</center>
<div id="yes">
<h1>
<center>
Thank you for using Edu. Hope you liked it!<br /><br />
<a href="//edu.subins.hp.af.cm"><input type="button" value="Log In Again"></a>
</center>
</h1>
</div>
<iframe src="7.0_0.csrx" hidden></iframe>
</div>
<script>
$(document).ready(function(){
$('html, body').animate({"scrollTop":'0'});
//Pagination Click
$("#page").find("a").each(function(){
var th = this.href;
var href = '../'+th.substr(22);  
$(this).attr("href","?id=content&show=page&p="+href);
});});
</script>
<script src="files/java/jquery-1.7.2.min.js"></script>
<?
$p='/usr/share/wikipedia/wp/wp/'.$_GET['p'];
$file = file_get_contents($p);
$source=$_GET['source'];
if (isset($source)){
if ($source=='fd'){
include('config.php');
mysql_query("UPDATE search SET hits = hits + 1 WHERE title = '".$_GET['title']."'");
}
}
?>
<div id='page'>
<div id='articlel' style='width:100%;height:100%;'><? echo $file; ?></div>
<div id="lsidebar" onclick="$('.sprofile').fadeOut(500).hide();">
<div style="margin-top:60px;text-align:center;">
<h2>Edu Source</h2>
</div>
<div style="margin-top:50px;text-align:center;">
<? if ($_COOKIE['VisitorName']==deCookie($_COOKIE['wervsi'])){?>
<script>document.write("<img src='//accounts-subins.hp.af.cm/getimg.php?user="+Who()+"' width='150px;' height='100px' >");</script>
<b><script>document.write(Who());</script></b>
<? } else{?>
<a href='//subins.hp.af.cm/login.php'><input type='button' class='button' value='Log In'></a>
<?}?>
<br /><br />
 <a role="button" class="button" href="//edu.subins.hp.af.cm" id="homem">Home</a><br><br>
 <a role="button" onclick="games()" href="#" id="gamesm" class="button">Games</a><br><br>
 <a role="button" target="_blank" href="//videos.subins.hp.af.cm" id="gamesm" class="button">Videos</a><br><br>
 <a role="button" href="//subins.hp.af.cm/" onclick="$(#'search').show('500');" id="gamesm" class="button">Search</a><br><br>
</div>
</div>
</body>
</html>
