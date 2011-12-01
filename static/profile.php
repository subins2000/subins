<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "//www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/main.css" rel="stylesheet" />
<link href="css/profile.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<link href="css/style2.css" rel="stylesheet" />
<script src='java/jquery-latest.js' type='text/javascript'></script>
<script type="text/javascript" src="java/js.php" ></script>
<script src='java/scroll.js' type='text/javascript'></script>
<link href="css/jquery.cssemoticons.css" media="screen" rel="stylesheet" type="text/css" />
<title><? header("Content-type: text/html; charset=utf-8");
$who=$_COOKIE["VisitorName"];
if (isset($_GET['user'])) {
  echo $_GET['user'];
  $user=$_GET['user'];
  }
  else{
  echo $_COOKIE["VisitorName"];
  $user=$_COOKIE["VisitorName"];
  }
?>'s Profile - Subins</title>
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
<script type="text/javascript">
function changeText(){
document.getElementById('img1').src = '//subin.example.com/data/users/'+Who();
document.getElementById('name1').innerHTML = Who();
}
</script>
<script type="text/javascript">
function eraseIt(name) {
        document.cookie= name + "=;path=/; expires=Sun, 07 Dec 1969 03:28:36 GMT";
	window.location ="//fd-subins.hp.af.cm/?loggedout=yes&id=bg" ;
}
</script>
<script>
function title(){
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
<? if (isset($_GET['pid'])){?>
<script>
$("#userposts").ready(function(){$("#userposts").html('');
$("#userposts").load('data?pid=<? echo $_GET["pid"];?>');
$("#userposts").css('color','#36C');
});
</script>
<?}?>
<div id="overlay" style="display:none;"><div id="overlay-content"></div></div><div id="content">
<div id="profileinfo">
<div class="epi"><span style="top: -5px;position: relative;">Click the parts of your profile that you want to edit.</span><button class="g-button-g g-button-submit" id='epf'>Finished editing</button></div>
<div id="profile" style="left:150px;">
<?
$who= $_COOKIE["VisitorName"];
$whop= $_GET['user'];
  if (isset($_GET['user'])) {
  echo "<img src='//accounts-subins.hp.af.cm/getimg.php?user=".$whop."&p=s' width='150px;' height='100px'>";
  }
  else{
  echo "<img src='//accounts-subins.hp.af.cm/getimg.php?user=".$who."&p=s' width='150px;' height='100px'>";
  }
$img= '//accounts-subins.hp.af.cm/getimg.php?user='.$whop.'';
if (!isset($img)){
echo 'ss';
}
include('config.php');
  if (isset($_GET['user'])) {
  $sql = "SELECT * FROM members WHERE username = '$whop' ";
  }
  else{
  $sql = "SELECT * FROM members WHERE username = '$who'";
  }
$q = mysql_query($sql) or die(mysql_error());
$rn = mysql_num_rows($dataa);
while($r = mysql_fetch_array($q)) { 
$msgID= $r['id'];
  $name = $r['name']; 
  $age= $r['age']; 
  $location = $r['location']; 
  $site = $r['name']; 
  $sitead = $r['name']; 
  $email = $r['email']; 
  $username = $r['username']; 
}
?>  
  <script>
$(document).ready(function(){
$("#userposts").load('data.php?user=<? echo $user;?>');
if ($("#userposts").html==''){
$("#userposts").html("<h2>No Posts</h2>");
}
var who=document.getElementById('username4');
if (who.value=="<? echo $who;?>"){}
else {
$('.edit').hide(); return false;
}
});
</script> 
<? $source=$_GET['source'];
if (isset($source)){
if ($source=='fd'){
include('config.php');
mysql_query("UPDATE search SET hits = hits + 1 WHERE title = '".$_GET['title']."'");
}
}if($username==$who){ ?>
<script>
$(document).ready(function(){
$("#epb").click(function(){
$(".epi").show();
$("#epb").hide();
$("#pd").addClass('epd');
});
$("#epf").live('click', function(){
$(".epi").hide();
$("#epb").show();
$("#pd").removeClass('epd');
$("#p-about").html('<table><tbody><? echo "<tr><td>Name - </td><td><span id=who>$name</span> </tr><tr><td> Age - </td><td>$age </tr><tr id=pd><td>Location -</td><td> $location&nbsp;</tr><tr><td>Profile Link -</td><td><a target=_blank href=profile.php?user=$username>$name</a></td></tr><tr><td>E-mail - </td><td><a href=mailto:$email>$email</a></tr>";?></tbody></table>');
});
$(".epd").live('click', function(){
$(this).find("td:nth-child(2)").html('<form id="up_profile" method="post" name="up_profile" action="action.php"><input id="editbox" name="new" value=""><input name="action" value="up_profile" hidden></form>');
$("#editbox").focus();
});
});
</script>
<? }?>
<script>
$("#tbt").live('click', function(){
if ($(this).html()=='About'){
$('#p-about').show('700');$('.p-about-friends-add').hide('700');$('.p-about-friends-fol').hide('700');$('.p-about-friends').hide('700');
}
if ($(this).html()=='Following'){
$('#p-about').hide('700');$('.p-about-friends-add').show('700');$('.p-about-friends-fol').hide('700');$('.p-about-friends').hide('700');
}
if ($(this).html()=='Followers'){$(this).toggleClass('.g-button-submit-c');
$('#p-about').hide('700');$('.p-about-friends-add').hide('700');$('.p-about-friends-fol').show('700');$('.p-about-friends').hide('700');
}
if ($(this).html()=='Friends'){
$('#p-about').hide('700');$('.p-about-friends-add').hide('700');$('.p-about-friends-fol').hide('700');$('.p-about-friends').show('700');
}
});
</script>
<div id="profile-details">
<?php
echo $name
?>
  &nbsp;&nbsp;&nbsp;<button id='epb' class="edit g-button g-button-submit">Edit Profile</button>
<?if($username==$who){}else{echo'<button id="'.$user.'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$user."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow' ;}else{echo 'Unfollow';}} ?></div><br><br><br>
<div id="p-menu"><a id="tbt" class="g-button g-button-submit">About</a>&nbsp;&nbsp;<a id="tbt" class="g-button g-button-submit">Following</a>&nbsp;&nbsp;<a id="tbt" class="g-button g-button-submit">Followers</a>&nbsp;&nbsp;<a id="tbt" class="g-button g-button-submit">Friends</a></div>  
<div id="p-about-friends" class="p-about-friends-add" hidden><table><tbody><br>
<?  $data= mysql_query("SELECT * FROM fdfriends WHERE user='".$user."' LIMIT 0,30");
 while($re = mysql_fetch_array($data)) 
 { 
$data1= mysql_query("SELECT * FROM members WHERE username='".$re['friend']."' LIMIT 0,30");
 while($rea = mysql_fetch_array($data1)) 
 {echo "<tr><td><br><a href='profile.php?user=".$re['friend']."'><img height='32px' width='32px' src='//accounts-subins.hp.af.cm/getimg.php?user=".$re['friend']."'></a></td><td><br><a href='profile.php?user=".$re['friend']."'>";
if($re['friend']==$who){echo 'You';}else{echo $rea['name'];echo "</a></td><td>&nbsp;&nbsp;&nbsp;<br>";echo'<button id="'.$re['friend'].'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$re['friend']."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow' ;}else{echo 'Unfollow';}}}echo"</button></td></tr>";
}
?>
</tbody></table>
</div><div id="p-about-friends" class="p-about-friends-fol" hidden><table><tbody><br>
<?  $data= mysql_query("SELECT * FROM fdfriends WHERE friend='".$user."' LIMIT 0,30");
 while($re = mysql_fetch_array($data)) 
 { 
$data1= mysql_query("SELECT * FROM members WHERE username='".$re['user']."' LIMIT 0,30");
 while($rea = mysql_fetch_array($data1)) 
 {echo "<tr><td><br><a href='profile.php?user=".$re['friend']."'><img height='32px' width='32px' src='//accounts-subins.hp.af.cm/getimg.php?user=".$re['user']."'></a></td><td><br><a href='profile.php?user=".$re['user']."'>";
if($re['user']==$who){echo 'You';}else{echo $rea['name'];echo "</a></td><td>&nbsp;&nbsp;&nbsp;<br>";echo'<button id="'.$re['user'].'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$re['user']."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow';}else{echo 'Unfollow';}}}echo"</button></td></tr>";
}
?>
</tbody></table>
</div><div id="p-about-friends" class="p-about-friends" hidden><table><tbody><br>
<?  $data= mysql_query("SELECT * FROM fdfriends WHERE user='".$user."' and `both`='s' LIMIT 0,30");
 while($re = mysql_fetch_array($data)) 
 { 
$data1= mysql_query("SELECT * FROM members WHERE username='".$re['friend']."' LIMIT 0,30");
 while($rea = mysql_fetch_array($data1)) 
 {echo "<tr><td><br><a href='profile.php?user=".$re['friend']."'><img height='32px' width='32px' src='//accounts-subins.hp.af.cm/getimg.php?user=".$re['friend']."'></a></td><td><br><a href='profile.php?user=".$re['friend']."'>";
if($re['friend']==$who){echo 'You';}else{echo $rea['name'];echo "</a></td><td>&nbsp;&nbsp;&nbsp;<br>";echo'<button id="'.$re['friend'].'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$re['friend']."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow' ;}else{echo 'Unfollow';}}}echo"</button></td></tr>";
}
?>
</tbody></table>
</div>
<div id="p-about"><table><tbody>
<? echo "<tr><td>Name - </td><td><span id='who'>$name</span> </tr><tr><td> Age - </td><td>$age </tr><tr id='pd'><td>Location -</td><td> $location&nbsp;</tr><tr><td>Profile Link -</td><td><a target='_blank' href='profile.php?user=$username'>$name</a></td></tr><tr><td>E-mail - </td><td><a href='mailto:$email'>$email</a></tr>"; ?>
</tbody></table>
<script>
$(document).ready(function(){
$("button").click(function(){
var fdvar=this.id;
if ($(this).text()=='Follow'){
$.post("action.php", {action: 'addfd', fd: fdvar});
$(this).text("Unfollow");
}else{
if ($(this).text()=='Unfollow'){
$.post("action.php", {action: 'refd', fd: fdvar});
$(this).text("Follow");
}}
});
});
</script>
</div>  
<input value="<? echo $username ?>" id='username4' hidden> 
</div></div>
<form id="up_profile" method="post" name="up_profile" action="action.php" hidden>
<input id='editbox' name="new" value=""><br />
<input name='action' value="up_profile" hidden>
<input type="submit">
<div id="preview_up_profile"></div>
</form>
<script type="text/javascript" >
$('#editbox').live('change',function() {
var str = $("#up_profile").serialize();
$.post("action.php", str);
$(".load-con").show();
$(".loading").delay('0').text('Saving');
$(".loading").delay('2000').text('Saved');
$(".load-con").delay('3000').hide('100');
});
</script>
<div class="saved">Your Changes have been saved<br>Reload to view changes<br></div>
<div class="saveerror">Error</div>
<script src="java/jquery-latest.js"></script>
<div id="userposts" style="overflow-y:auto;overflow-x: hidden;height:581px;"></div>
<script>
$(document).ready(function(){
if($("#userposts").text()==''){$("#userposts").html("<h2>No Posts</h2>");}
if($("#p-about-friends").text==''){$("#p-about-friends").html("<h2>No Friends</h2>");}
if($("#p-about-friends-add").text()==''){$("#p-about-friends-add").html("<h2>No Friends</h2>");}
});
</script>
<center><div class="load-con" id='load-con'><div class="a-f-e"><div class="Xj"></div><div class="zc loading">Loading...</div><div class="Wj"></div></div></div></center>
</body>
</html>
