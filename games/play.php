<html>
<head>
<title><? include('config.php');$result = mysql_query("SELECT * FROM games WHERE id='".$_GET["game"]."'");  echo mysql_result($result, 0, 'name');?> - Games || Subins</title>
<style>
    #<?php echo $_GET['game']; ?>{
        display: block;
    }
    #<?php echo $_GET['id']; ?>{
        display:none;
        } 
</style>
<?$who=$_COOKIE['VisitorName'];if ($_COOKIE['VisitorName']==deCookie($_COOKIE['wervsi'])){include('config.php');mysql_query("INSERT INTO ghis (id,user,url,time)VALUES('".$_GET['game']."','$who','".$_SERVER["REQUEST_URI"]."',NOW())");}?>
<script src='//cdn-subins.hp.af.cm/java/jquery.js' type='text/javascript'></script>
<script src='//subins.hp.af.cm/files/java/js.php' type='text/javascript'></script>
<link href="css/main.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="top-bar" style="z-index:9999999999999999;top:29px;">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a style="position:absolute;top:0px;left:15px;" href="#"><image height="50px" src="images/logo.jpg"></a>
</td>
<td style="top: 10px;position: absolute;left: 100px;">
<center><div id="menu-left">
 <a onclick="window.location='Home.php'" class="g-button g-button-submit">Home</a>
 &nbsp;&nbsp;<a onclick="window.location='Home.php?menu=directory&id=my-slideshow'" class="g-button g-button-submit">Games Directory</a>
 &nbsp;&nbsp;<a id="view-fullscreen" class="g-button g-button-submit">Enter Fullscreen</a>
</div></center></td></tr></tbody></table></div>
<div style="position:relative;right:-200px;top:80px;max-width:1000px;min-width:600px;">
<?php if($_GET['game']!==null){mysql_query("UPDATE games SET plays=plays+1 WHERE id='".$_GET['game']."'");$sql=mysql_query("SELECT * FROM games WHERE id='".$_GET['game']."'");while($r=mysql_fetch_array($sql)){?><iframe src="polu.php?gid=<?echo$r['id'];?>" width="80%" height="90%" frameborder="0"></iframe><?}}?>
</div><div style="position:absolute;right:0px;top:90px;background:white;width:250px;"><ul id="tul" role="tabindex" style="display:inline-block;margin-left: -40px;" ><li class="tab lse"><span>Scores</span></li><li class="tab"><span>Comments</span></li><Br><br><div id="coloader"></div>
<style>.tab{background:#EEE;cursor: pointer;color: white;font-size: 11px;font-weight: bold;text-transform: uppercase;border-bottom: 24px solid #3D3D3D;border-right: 24px solid transparent;height: 0;padding: 0;margin-right: 0px;margin-top: -1px;filter: alpha(opacity=35);opacity: 0.35;display:inline-block;}.tab span{margin: 0 11px 0 15px;line-height: 24px;position: relative;}.tab:hover{opacity:75;filter: alpha(opacity=75);}.lse{opacity:1}</style>
<script>$("#coloader").load('get.php?a=s&gid=<?echo$_GET["game"];?>');
$(".tab").click(function(){$(".lse").removeClass('lse');$(this).addClass('lse');if ($(this).text()=='Scores'){$("#coloader").load('get.php?a=s&gid=<?echo$_GET["game"];?>');}else if ($(this).text()=='Comments'){$("#coloader").load('get.php?a=c&gid=<?echo$_GET["game"];?>');}
});
var viewFullScreen = document.getElementById("view-fullscreen");viewFullScreen.addEventListener("click", function () {if (viewFullScreen.innerHTML=='Enter Fullscreen') {var docElm = document.documentElement;if (docElm.requestFullscreen) {docElm.requestFullscreen();}else if (docElm.mozRequestFullScreen) {docElm.mozRequestFullScreen();}else if (docElm.webkitRequestFullScreen) {docElm.webkitRequestFullScreen();}viewFullScreen.innerHTML='Exit Fullscreen';}else if (viewFullScreen.innerHTML=='Exit Fullscreen') {if (document.exitFullscreen) {document.exitFullscreen();}else if (document.mozCancelFullScreen) {document.mozCancelFullScreen();}else if (document.webkitCancelFullScreen) {document.webkitCancelFullScreen();}viewFullScreen.innerHTML='Enter Fullscreen';}}, false);  
</script>
</body>
</html>
