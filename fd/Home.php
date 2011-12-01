<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "//www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/main.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<link href="//subins.hp.af.cm/files/css/style2.css" rel="stylesheet" />
<title>
Home - Friendshood
</title>
<?
$user=$_COOKIE['VisitorName'];
$who = $_COOKIE["VisitorName"];
if ($who==null){?>
<script>
window.location='//accounts-subins.hp.af.cm/login.php?service='+location;
</script>
<?
}
?>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script src="//cdn-subins.hp.af.cm/java/jquery.js" type="text/javascript"></script>
<script src="//cdn-subins.hp.af.cm/java/cmenu.js" type="text/javascript"></script>
<script src="//cdn-subins.hp.af.cm/java/up.js" type="text/javascript"></script>
<script src="//cdn-subins.hp.af.cm/java/extajax.js" type="text/javascript"></script>
<script type="text/javascript" src="java/jquery.autocomplete.js"></script>
<script type="text/javascript" src="java/js.php"></script>
</head>
<body>
<div id="div_dialog_background">
<a id="x" onclick="$('#div_dialog_background6').hide('500');">x</a>
</div>
<div id="div_share5" style="display:none;"> 
</div>
</div>
<div id="overlay" style="display:none;"><div id="overlay-content"></div></div>
<div id="div_dialog_background1" style="display:none;" ></div>
<div id="not" style="display:none;">
<center style="padding-top:150px;">
<h2>You are not logged in </h2>
Please Log In to continue using Friends Hood<br />
<a href="//fd-subins.hp.af.cm"><input type="button" value="Log In"></a>
</center>
</div>
<div id="content" onclick="$('.sprofile').fadeOut(500).hide();">
<div id="feed">
<div style="margin-left:150px;" frameborder="0" id='handle-data' src=""></div><br>
<div style=" height: 320px;" id="iframe1">
<div id="loading" ></div>
<div id="contents"></div>
<div id="last_msg_loader"></div>
</div>
</div>
<center><div class="load-con" id='load-con' style="width:100%;position:fixed;top:50px;display:none;"><div class="a-f-e"><div class="Xj"></div><div class="zc loading" style="width:100px;background:#FFF1A8;">Loaded</div><div class="Wj"></div></div></div></center>
</body>
</html>
