<html>
<head>
<title>Apps || Subins</title>
<script type="text/javascript">
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
function double1(){
var uiks=document.getElementById('name');
if (uiks.value==''){
window.location='//apps-subins.hp.af.cm/';
}
}
function eraseIt(name) {
        document.cookie= name + "=;domain=.subins.hp.af.cm;path=/; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location ="//apps-subins.hp.af.cm/login?loggedout=yes&id=bg" ;
}
    </script>
<script src='//cdn-subins.hp.af.cm/java/jquery.js' type='text/javascript'></script>
<script src='//subins.hp.af.cm/files/java/js.php' type='text/javascript'></script>
<link href="css/main.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
<link href="css/home.css" rel="stylesheet" />
<style>
#<? echo $_POST["qno"]; ?> {
display:block;
}
#<? echo $_POST["qidn"]; ?> {
display:none;
}
</style>
</head>
<body onload="ChangeText();double1();check();checkCookie();">
<div id="content">
</center><div class="top-bar2"><center><span style="position:absolute;right:20px;font-size:25px;"><a href="new.php">Add your App</a></span><h1>Apps</h1>
<b>Show your apps !!!!</b></div><br><br>
<style>.demobox {width: 150px;height: 150px;border: 1px solid #d5d5d5;overflow: hidden;}#demo-4{position:relative;text-align: left;}#demo-4 img{position:absolute;top:0%;-webkit-transition: margin-top;-webkit-transition-timing-function: ease-out;-webkit-transition-duration: 250ms;}#nos{text-align: center;z-index:1;position:absolute;width: 150px;height: 150px;background:black;top:0;left:0;-webkit-transition: margin-top;-webkit-transition-timing-function: ease-out;-webkit-transition-duration: 250ms;text-align:center;}#demo-4:hover #nos{margin-top:200px;}#demo-4:hover .details{visibility: visible;}#demo-4 .details{position:absolute;top:0px;left:0;visibility: hidden;}#p-cont{border:3px solid #E79C43;}</style>
<table><tbody><tr>
<?php
include('config.php');
$sql=mysql_query("SELECT * FROM apps");
while($q = mysql_fetch_array($sql)){
$appn=$q['title'];$appi=$q['img'];$appu=$q['id'];$appd=$q['ds'];?>
<td id="p-cont"><center><div id="demo-4" class="demobox">
<a href="app.php?id=<? echo $appu;?>">
	<? if($appi==null){?><img><div id='nos'><font style="font-size:120;">?</font></div><?}else{?><div id='nos'><img src="<? echo $appi;?>"/></div><?}?>
	<div class="details">
		<div style="font-size:20px;border-bottom:2px solid black;background:white;"><? echo $appn;?></div>
		<p style="border-bottom:2px solid black;background:white;overflow:auto;height:50px;"><? echo $appd;?></p>
                <button style="position:absolute;top:100%;" class="g-button g-button-submit">Launch</button>
	</div>
</a>
</div></center><center><h2><a href="app.php?id=<? echo $appu;?>"><? echo $appn;?></a></td><?if($appu[strlen($appu)-1]==6){?></tr><tr>
<?}}?> 
</tbody></table>
</div>
</body>
</html>
