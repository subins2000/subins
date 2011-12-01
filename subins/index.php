<html>
<head>
<meta name="google-site-verification" content="-nHbP9usJ74U2OwuCyUt0Sbkq3stEZcSf3Jfm2xTe8c" />
<meta name="description" content="Subins is a free and independent Network."></meta>
<title>Subins</title>
<link rel="shortcut icon" href="//cdn-subins.hp.af.cm/images/favicon.ico" type="image/x-icon">
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php"></script>
<script type='text/javascript' src='files/java/jquery.autocomplete.js'></script>
<link href="files/css/index.css" rel="stylesheet" />
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
</head>
<body onmouseup="$('#b-menu').hide('900');">
<div class="content" style="z-index:9999;position:relative;">
<center><br><br><br><br><br><br><br><h1><img src="//cdn-subins.hp.af.cm/images/logo.png">
</h1>
<script type="text/javascript">
$(document).ready(function() {
	$("#vl").autocomplete("livesearch.php", {
		width: $("#vl").width()+7,
		matchContains: true,
		selectFirst: false
	});
});
</script>
<script>	
$(".ac_results ul li").live('click',function(){
var qtitle = this.id;
$("#vlform").submit();
$('#vl').val(qtitle);
});	
</script>
<form id='vlform' action="search.php" method="get">
<input id='vl' autocomplete="off" placeholder="Type here and press enter" type="text" name="q" size="30"/>
<input type="text" name="p" value="1" style="display:none;"hidden>
<button class="g-button g-button-submit" style="height: 29px;line-height: 29px;min-width: 54px;"type="submit">
<span style="background: url(files/images/search.png);background-position: -357px 0;display: inline-block;height: 13px;margin: 7px 19px;width: 14px;"></span></button>
<div style="width: 291px;position: relative;text-align: left;left: -36;background:white;" id="livesearch"></div>
</form>
See Live Cricket Scores. <a href="labs/cricket">CLICK HERE</a>
<div class="sidebar" style="float: left;left: 0px;background-color: #CED;border:initial;border-radius:10px;height: 400px;width: 220px;top:55%;position: fixed;"><center><h3>TRENDING ON SUBINS</h3><br><table><tbody><? include('config.php');$data = mysql_query("SELECT * FROM search ORDER BY hits DESC LIMIT 0, 5"); 
 while($r = mysql_fetch_array( $data )) 
 {echo "<tr style='border:2px dashed #CCC;text-align:center;padding-top:10px;'><td style='border:2px solid #CCC;'>".$r['hits']."<br><br></td><td>&nbsp;&nbsp;<a style='color:green;' href='search.php?q=".$r['title']."'>".$r['title']."</a><br><br></td></tr>"; }?></div></center>
</div>
<center><div style="position:absolute;bottom:0px;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-7987365197890489";
/* Homepage */
google_ad_slot = "2467455064";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div></center>
</body>
</html>
