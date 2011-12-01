<html>
<head>
<title>Get || Subins</title>
<script type="text/javascript">
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
function double1(){
var uiks=document.getElementById('name');
if (uiks.value==''){
window.location='//get-subins.hp.af.cm/';
}
}
function eraseIt(name) {
        document.cookie= name + "=;domain=.subins.hp.af.cm;path=/; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location ="//get-subins.hp.af.cm/login?loggedout=yes&id=bg" ;
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
<body>
<div id="content">
</center><div class="top-bar2"><center><span style="position:absolute;right:20px;font-size:25px;"><a href="new.php">Add New File</a></span><h1>GET</h1>
<b>Show your apps !!!!</b></div><br><br>
<style>.demobox {width: 150px;height: 150px;border: 1px solid #d5d5d5;overflow: hidden;}#demo-4{position:relative;text-align: left;}#demo-4 img{position:absolute;top:0%;-webkit-transition: margin-top;-webkit-transition-timing-function: ease-out;-webkit-transition-duration: 250ms;}#nos{text-align: center;z-index:1;position:absolute;width: 150px;height: 150px;background:black;top:0;left:0;-webkit-transition: margin-top;-webkit-transition-timing-function: ease-out;-webkit-transition-duration: 250ms;text-align:center;}#demo-4:hover #nos{margin-top:200px;}#demo-4:hover .details{visibility: visible;}#demo-4 .details{position:absolute;top:0px;left:0;visibility: hidden;}#p-cont{border:3px solid #E79C43;}</style>
<table><tbody><tr>
<?php
include('config.php');
function get_ext($file_name) {
	return substr(strrchr($file_name,'.'),1);
}
$sql=mysql_query("SELECT * FROM get");
while($q = mysql_fetch_array($sql)){
$appn=$q['title'];$appi=$q['img'];$appu=$q['id'];$appd=$q['ds'];$type=$q['type'];$title=$q['url'];?>
<td id="p-cont"><center><div id="demo-4" class="demobox">
<a href="download.php?id=<? echo $appu;?>">
	<? if($appi==null){if($type=='music'){$kwh='m';?><div id='nos'><center><img heigh="152px" width="152px" src="images/music.png"/></center></div><?}if(get_ext($title)=='bz2'){$kwh='bz2';?><div id='nos'><center><img heigh="152px" width="152px" src="images/bz2.jpg"/></center></div><?}if(get_ext($title)=='deb'){$kwh='deb';?><div id='nos'><center><img heigh="152px" width="152px" src="images/deb.jpg"/></center></div><?}if(get_ext($title)=='exe'){$kwh='exe';?><div id='nos'><center><img heigh="152px" width="152px" src="images/exe.png"/></center></div><?}if($kwh==null){?><div id='nos'><font style="font-size:120;">?</font></div><?}}if($appi==!null){?><div id='nos'><img heigh="152px" width="152px" src="<? echo $appi;?>"/></div><?}?>
	<div class="details">
		<div style="font-size:20px;border-bottom:2px solid black;background:white;"><? echo $appn;?></div>
		<p style="border-bottom:2px solid black;background:white;overflow:auto;height:50px;"><? echo $appd;?></p>
                <button style="position:absolute;top:100%;cursor:pointer;" class="g-button g-button-submit">Download</button>
	</div>
</a>
</div></center><center><a href="download.php?id=<? echo $appu;?>"><? echo $appn;?></a></td><?if($appu[strlen($appu)-1]==6){?></tr><tr>
<?}}?> 
</tbody></table>
</div>
</body>
</html>
