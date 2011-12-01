<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "//www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/main.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<link href="css/style2.css" rel="stylesheet" />
<script src='java/jquery-latest.js' type='text/javascript'></script>
<script type="text/javascript" src="java/js.php" ></script>
<title><?
$who=$_COOKIE["VisitorName"];
if (isset($_GET['user'])) {
  echo $_GET['user'];
  $user=$_GET['user'];
  }
  else{
  echo $_COOKIE["VisitorName"];
  $user=$_COOKIE["VisitorName"];
  }
$who = $_COOKIE["VisitorName"];
if ($who==null){
header("location: //accounts-subins.hp.af.cm/login?service=friendshood");
}
?>'s Notifications - Subins</title>
<style>
a:-webkit-any-link {
color:black;
}
a:visited {
color:black;
}
#<?php echo $_GET['id']; ?>{
        display:none;
        }
</style>
<script>
function title(){
$.post("action.php", {red: 'yes',action: 'read'});
var title=document.getElementById('username4');
if (title.value==""){
window.location='//fd-subins.hp.af.cm';
}
else{
}
}
</script>
</head>
<body onload='title()'>
<div id="lsidebar" onclick="$('.sprofile').fadeOut(500).hide();$('#b-menu').hide('900');">
<center><br><br>
<a href="Home.php"><div style="background-image: url('images/icons.png');background-position: 0 -28px;height: 35px;width: 32px;"></div>Home</a><br><br> 
<a href="profile.php"><div style="background-image: url('images/icons.png');background-position: 0 -890px;height: 32px;width: 32px;"></div>Profile</a><br><br>
<a href="//games-subins.hp.af.cm"><div style="background-image: url('images/icons.png');background-position: 0 -795px;height: 32px;width: 32px;"></div>
Games</a><br><br>
</center>
</div>
<div id="overlay" style="display:none;"><div id="overlay-content"></div></div>
<div id='content' style="text-align:center;">
<script src="java/jquery-latest.js"></script>
<div id='feed'>
<table style="padding: 12px;"><tbody><? 
include('config.php');
$nbox=mysql_query("SELECT * FROM fdnotify WHERE user='$who' ORDER BY id DESC");
if(!mysql_num_rows($nbox)==0){ while($ra = mysql_fetch_array($nbox))
 {if($ra['red']=='no'){echo "<tr id='nycont' style='background:white;'>";}else{echo "<tr id='nycont'>";}echo"<td><img height='44px' width='44px'src='//accounts-subins.hp.af.cm/getimg.php?user=".$ra['mention']."'></td><td style='padding-top: 20px;'>&nbsp;&nbsp;<a target='_blank' style='color:green;' href='profile.php?user=".$ra['user']."'>".$ra['text']."</a><br><br></td></tr>"; }}else{echo"<h1>No Notifications</h1>";}?></tbody></table>
</div></div>
<center><div class="load-con" id='load-con' style="width:100%;position:fixed;top:50px;display:none;"><div class="a-f-e"><div class="Xj"></div><div class="zc loading" style="width:100px;background:#FFF1A8;">Loading...</div><div class="Wj"></div></div></div></center>
</body>
</html>
