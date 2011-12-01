<html>
<head>
<title>Games || Subins</title>
<style>
    #<?php echo $_GET['game']; ?>{
        display: block;
    }
    #<?php echo $_GET['id']; ?>{
        display:none;
        } 
</style>
<?$who=$_COOKIE['VisitorName'];if ($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){header("Location://accounts-subins.hp.af.cm/login.php?service=//games-subins.hp.af.cm/Home.php");}?>
<style>a:active { outline:none; }body { line-height:1; color:black; background:white; }ol,ul {list-style:none;}table {border-collapse:separate; border-spacing:0; }caption,th,td {text-align:left; font-weight:normal; }#container {width:580px;padding:10px;margin:0 auto;position:relative;z-index:0;}#example {width:600px;height:350px;position:relative;}#ribbon {position:absolute;top:-3px;left:-15px;z-index:500;}#frame {position:absolute;z-index:0;width:739px;height:341px;top:-3px;left:-80px;}/*Slideshow*/#slides {position:absolute;top:15px;left:4px;z-index:100;}.slides_container {height:340px;width:940px;overflow:hidden;position:relative;display:none;}.slides_container div.slide {height: 340px;width: 940px;display:block;}/*Next/prev buttons*/#slides .next,#slides .prev {position:absolute;top:107px;width:24px;height:43px;display:block;z-index:101;}.prev{left: -25px;}#slides .next {right: -25px;}/*Pagination*/.pagination {margin:26px auto 0;width:140px;}.pagination li {float:left;margin:0 1px;list-style:none;}.pagination li a {display:block;	width:12px;height:0;padding-top:12px;background-image:url(images/pagination.png);background-position:0 0;float:left;overflow:hidden;}.pagination li.current a {background-position:0 -12px;}.caption {z-index:500;position:absolute;bottom:-35px;left:-20px;height:30px;padding:5px 20px 0 20px;background:#000;background:rgba(0,0,0,.5);width: 940px;font-size:1.3em;line-height:1.33;color:#fff;border-top:1px solid #000;	text-shadow:none;}/*Footer*/#footer {text-align:center;width:580px;margin-top:9px;padding:4.5px 0 18px;border-top:1px solid #dfdfdf;}#footer p {margin:4.5px 0;font-size:1.0em;}/*Anchors*/a:link,a:visited {color:#599100;text-decoration:none;}a:hover,a:active {color:#599100;text-decoration:underline;}.tabs { list-style: none; }.tabs li { display: inline; }.tabs li a { color: black; float: left; display: block; padding: 4px 10px; margin-left: -1px; position: relative; left: 1px; background: white; text-decoration: none; }.tabs li a:hover { background: #ccc; }#box-one,#box-two,#box-three{margin-top:100px;}</style>
<script src='//cdn-subins.hp.af.cm/java/jquery.js' type='text/javascript'></script>
<script src='java/slider.js' type='text/javascript'></script>
<script src='//subins.hp.af.cm/files/java/js.php' type='text/javascript'></script>
<link href="css/main.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
<script>
$(function(){$('#slides').slides({preload: true,preloadImage: 'images/loader.gif',play: 4000,pause: 2500,hoverPause: true,animationStart: function(current){$('.caption').animate({bottom:-35},100);if (window.console && console.log) {console.log('animationStart on slide: ', current);};},animationComplete: function(current){$('.caption').animate({bottom:0},200);if (window.console && console.log) {console.log('animationComplete on slide: ', current);};},slidesLoaded: function() {$('.caption').animate({bottom:0},200);}});});
	</script>
</head>
<body>
<div class="top-bar" style="top:29px;z-index:99;">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a style="position:absolute;top:0px;left:15px;" href="#"><image height="50px" src="images/logo.png"></a>
</td>
<td style="top: 10px;position: absolute;left: 100px;">
<center><div id="menu-left" style="display:inline-block;margin-top:15px;">
<ul class="tabs group"><li><a href="#box-one">Slideshow</a></li><li><a href="#box-two">My Games</a></li><li><a href="#box-three">History</a></li><li><a href="Home.php?menu=directory&id=slides">Games Directory</a></li></ul>
</div></center></td></tr></tbody></table></div><?if(!isset($_GET['menu'])){?>
<div class="box-wrap">
<div class="boxes" id="box-one"><center>
<div id="slides" style="height: 340px;width: 940px;text-align:center;left:15%;top:100px;"><div class="slides_container">
<?include('config.php');$sql=mysql_query("SELECT * FROM games WHERE imgbig!='' ORDER BY plays DESC");while($r=mysql_fetch_array($sql)){?>
<div class="slide">
<a style="color:white;" href="play.php?game=<?echo$r['id'];?>"><img src="<?echo$r['imgbig'];?>" style="height: 340px;width: 940px;">
<div class="caption" style="bottom:0">
<p><?echo$r['name'];?></p></a>
</div></div>
<?}?>
</div><a href="#" class="prev"><img src="images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a><a href="#" class="next"><img src="images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a></div><br>
</div>
<div class="boxes" id="box-two" hidden><center>
<?$sql=mysql_query("SELECT * FROM games WHERE user='$who'");if(mysql_num_rows($sql)==0){echo"You haven't added any games. You can add a game <a href='add.php'>here</a>";}else{?><table width="400" height="100" style='text-align:center;' border="1"><tbody><tr><td>Game</td><td>Plays</td></tr><?while($r=mysql_fetch_array($sql)){?>
<tr><td><?echo$r['name'];?></td><td><?echo$r['plays'];?></td></tr><?}}?></center></div></center></tbody></table></div></div></div>
<div class="boxes" id="box-three" hidden><table><tr>
<?include('config.php');$sql=mysql_query("SELECT * FROM games WHERE id IN(SELECT id FROM ghis WHERE user='$who')");while($r=mysql_fetch_array($sql)){?>
<td><div id="demo-4" class="demobox"><img src="<?echo$r['imgbig'];?>" height="200px" width="240px" /><div><h3><?echo$r['name'];?></h3><span title="<?echo$r['name'];?>"><?echo$r['ds'];?></span><br><center><a class="g-button g-button-submit" href="play.php?game=<?echo$r['id'];?>" id="link-signup" style="height: 0.65cm; width: 2.71cm;">Play Now</a></center></div></div></td><?if($r['id']==5){?></tr><tr><?}else{}?><?}?></table></div>
<?}?>
<div class="boxes" id="box-four" style="margin-top: 100px;" hidden></div>
<script>
$(document).ready(function() {
    $(".tabs li a").click(function() {
        $(".boxes").hide();$(".tabs li a").css("background-color","white");$(this).css("background-color","#ccc");
        if($(this).text()=='Games Directory'){event.preventDefault();$("#box-four").load('get.php?dir');$("#box-four").show();}else{$($(this).attr("href")).show();}
    });
})
</script>
<center>
<?php if($_GET['menu']=='directory'){?>
<div id="directory" style="margin-top:100px;">
<table><tr>
<?include('config.php');$appu=1;$sql=mysql_query("SELECT * FROM games");while($r=mysql_fetch_array($sql)){?>
<td><div id="demo-4" class="demobox"><?if($r['imgbig']==''){?><img src="images/swf.gif" height="200px" width="240px" /><?}else{?><img src="<?echo$r['imgbig'];?>" height="200px" width="240px" /><?}?><div><h3><?echo$r['name'];?></h3><span title="<?echo$r['name'];?>"><?echo$r['ds'];?></span><br><center><a class="g-button g-button-submit" href="play.php?game=<?echo$r['id'];?>" id="link-signup" style="height: 0.65cm; width: 2.71cm;">Play Now</a></center></div></div></td><?if($appu==5){?></tr><tr><?}if(substr($appu,-1)==0){?></tr><tr><?}if(substr($appu,-1)==5){?></tr><tr><?}$appu++;?>
<?}?>
</table>
</div>
<?}?>
</center>	
</body>
</html>
