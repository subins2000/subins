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
?>'s Messages - Subins</title>
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
$("#nycont").live('click',function(){
window.location="messages?user="+$(this).find("a").attr("title");
});
$(document).ready(function(){
$("#usermsgc").find("li").load("get.php?action=chat&rec=<? echo$_GET['user'];?>");
});
$("#fdchatm").live('submit',function(){
event.preventDefault();
$.post("action.php", $("#fdchatm").serialize());
$("#usermsg").focus();
$("#usermsg").val("");
$("#usermsgc").find("li").load("get.php?action=chat&rec=<? echo$_GET['user'];?>");
$("#usermsgc").find("li").animate({ scrollTop: '1000' }, 'normal');
});
</script>
</head>
<body>
<div id='content2' style="margin-left:100px;">
<div id='feed' style="text-align:center;">
<table style="padding: 12px;"><tbody><? 
include('config.php');
$nbox=mysql_query("SELECT * FROM fdfriends WHERE user='$who' ORDER BY id ASC ");if(!mysql_num_rows($nbox)==0){
while($ra = mysql_fetch_array($nbox)) {
$datax = mysql_query("SELECT * FROM members WHERE username='".$ra['friend']."' LIMIT 0, 10");while($rx = mysql_fetch_array($datax)){$fname=$rx['name'];$fu=$r["friend"];$stus=$rx['status'];}
echo"<tr id='nycont'><td><img height='44px' width='44px'src='//accounts-subins.hp.af.cm/getimg.php?user=".$ra['friend']."'></td><td style='padding-top: 20px;'>&nbsp;&nbsp;<a target='_blank' style='color:green;' title='".$ra['friend']."'>".$fname."</a><br><br></td></tr>"; }}else{echo "<h1>No Friends</h1>";}?></tbody></table>
<div id='usermsgc' style="width:400px;"><li style="list-style: none;position: relative;left: 200px;top: -180px;text-align: left;overflow: auto;width: 600px;height:200px;"></li><table style="bottom: 0px;position: absolute;border-top: 1px solid grey;width: auto;left: 200px;"><tbody><tr><? if (isset($_GET['user']) & $_GET['user']==!null){?><form method="post" id="fdchatm" action=""><td><img height="32px" width="32px" src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$who;?>" id="img1"></td><td><input value="<? echo $_GET['user'];?>" id="to" name="to" hidden></td><td><input value="chat" name="action" hidden></td><td><input type="text" id="usermsg" size="42" autocomplete="off" suggestion="flase" cols="5" rows="1" name="usermsg"></td><td><input name="submitmsg" type="submit" class="submit1" id="submitmsg" value="Send"></td></form><?}else{}?></tr></tbody></table></div></div>
</div>
</body>
</html>
