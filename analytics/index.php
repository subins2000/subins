<html><head>
<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script src="//subins.hp.af.cm/files/java/js.php"></script>
<link href="css/main.css" rel="stylesheet">
<script src="js/all.js"></script>
<?function iptocountry($ip) {$numbers = preg_split( "/\./", $ip);    include("ips/".$numbers[0].".php");$code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);    foreach($ranges as $key => $value){if($key<=$code){if($ranges[$key][0]>=$code){$country=$ranges[$key][1];break;}}}if ($country==""){$country="unkown";}return $country;}$who=$_COOKIE['VisitorName'];if($who==null){header("Location://accounts-subins.hp.af.cm/login.php?service=//analytics-subins.hp.af.cm");}?>
</head><body>
<div class="top-bar2"><span style="left:30px;position:absolute;top:10px;font-size:40px;">Subins Analytics</span><div style="font-size:40px;top:10px;position:relative;"><a href="an">Add new Site</a>&nbsp;&nbsp;&nbsp;&nbsp;</div></div>
<?include('config.php');$sql=mysql_query("SELECT * FROM sites WHERE user='$who'");if(mysql_num_rows($sql)==0){?>
<div id="content" style="margin-top:100px;margin-left:100px;"><h1><u>Add a Site</u></h1><br>
<form action="action.php" id="aform" method="post">
Site Name<br><input name='name' id="fname" type="text">
<br><br>Site URL<br><input id="fsite" type="text" name='url'><br><br>
<input type="hidden" name="action" value="asite">
<input type="submit" name="submit" value="Add Site">
</form></div>
<?}else{while($r=mysql_fetch_array($sql)){?><div id="content" style="margin-top:140px;margin-left:180px;"><h2><u>Choose Which Site</u></h2><?echo "<a href='site-".$r['url']."'><button class='g-button g-button-submit'>".$r['title']."</button></a>";?></div>
<div id="lsidebar" style="margin-top:87px;padding-top:20px;font-size:20px;"><a class="lb">Sites</a><br><br><div id="sss" hidden><?echo "<a href='site-".$r['url']."'><button class='g-button g-button-submit'>".$r['title']."</button></a>";?></div><div id="ssb" hidden><br></div><a class="lb" href="rt">Real Time Stats</a></div><?}}?>
<?
if (isset($_GET['page'])){?>
<script>
$.post('get.php',{p:"<?echo$_GET['page'];?>"},function(data){$("#content").html(data);});
</script>
<?}?>
</body></html>
