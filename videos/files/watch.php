<html>
<head>
<link href='css/main.css' rel='stylesheet'>
<script src='//fd.subins.hp.af.cm/java/jquery-latest.js'></script>
<script src='//subins.hp.af.cm/files/java/main.js.php'></script>
<link href="css/video-js.css" rel="stylesheet">
<script src="java/video.js"></script>
<script>setInterval(function(){$(".vjs-text-track-display").html('<h2 style="padding-top:10px;">Subins Videos</h2>');},1000);</script>
</head>
<body>
<div id='contents' style='margin-left:130px;'><br><br><br><table><tbody>
<?$v=$_GET['v'];
include('config.php');
$sql=mysql_query("SELECT * FROM videos WHERE vid='$v'");
 while($r = mysql_fetch_array($sql)) 
 {$src=$r['url'];$vt=$r['title'];}?>
<h1><? echo $vt;?></h1>
<video src="<?echo $src;?>" class="video-js vjs-default-skin" controls preload="auto" data-setup="{}" height="270" width="480"></video>
</div>
</body>
</html>
