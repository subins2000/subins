<html>
<head>
<link href="css/main.css" rel="stylesheet" />
<link href="css/profile.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<link href="css/style2.css" rel="stylesheet" />
<script src='java/jquery-latest.js' type='text/javascript'></script>
<script type="text/javascript" src="java/js.php" ></script>
<script src='java/eJuY.js' type='text/javascript'></script>
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
	window.location ="//friendshood.com/?loggedout=yes&id=bg" ;
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
  $email = $r['email']; 
  $phone = $r['phone']; 
  $username = $r['username'];$json=json_decode($r['set'],true);
$page=$json['age'];
$ploc=$json['loc'];
$pphone=$json['phone'];
$pmail=$json['mail'];
$sd=array();
if($page=='prt'){
$sd['age']='selected';}
if($ploc=='prt'){
$sd['loc']='selected';}
if($pphone=='prt'){
$sd['phone']='selected';}
if($pmail=='prt'){
$sd['mail']='selected';}
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
$("[id=pd]").addClass('epd');
$("[id=pd]").find("select").attr("disable","true");
});
$("#epf").live('click', function(){
$(".epi").hide();
$("#epb").show();
$("#p-about").html('<table><tbody>'+localStorage['wuy']+'</tbody></table>');
$("[id=pd]").removeClass('epd');
});
$(".epd").live('click', function(){
$(this).find("td:nth-child(2)").html('<form id="up_profile" method="post" name="up_profile" action="action.php"><input id="wh" name="wh" type="hidden" value='+$(this).find("td:nth-child(1)").text().replace(' -','').replace(' ','')+'><input id="editbox" type="text" name="new" value=""><input name="action" value="up_profile" hidden></form>');
$("#editbox").focus();
});
$(".pchanger").live('change',function(){
$.save('action.php',{action:'privacyc',wh:$(this).attr('id'),val:$(this).val()},'.load-con','.zc');
});
});
</script>
<? }?>
<div id="profile-details">
<?php
echo $name
?>
  &nbsp;&nbsp;&nbsp;<button id='epb' class="edit g-button g-button-submit">Edit Profile</button>
<?if($username==$who){}else{echo'<button id="'.$user.'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$user."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow' ;}else{echo 'Unfollow';}} ?></div><br><br><br>
<div id="p-menu"><a id="tbt" class="g-button g-button-submit">About</a>&nbsp;&nbsp;<a id="tbt" class="g-button g-button-submit">Following</a>&nbsp;&nbsp;<a id="tbt" class="g-button g-button-submit">Followers</a>&nbsp;&nbsp;<a id="tbt" class="g-button g-button-submit">Friends</a></div>  
<div id="p-about-friends" class="p-about-friends-add" hidden><table><tbody>
<?  $data= mysql_query("SELECT * FROM fdfriends WHERE user='".$user."' LIMIT 0,30");
 while($re = mysql_fetch_array($data)) 
 { 
$data1= mysql_query("SELECT * FROM members WHERE username='".$re['friend']."' LIMIT 0,30");
 while($rea = mysql_fetch_array($data1)) 
 {echo "<tr><td><a href='profile.php?user=".$re['friend']."'><img height='32px' width='32px' src='//accounts-subins.hp.af.cm/getimg.php?user=".$re['friend']."'></a></td><td><a href='profile.php?user=".$re['friend']."'>";
if($re['friend']==$who){echo 'You';}else{echo $rea['name'];echo "</a></td><td>&nbsp;&nbsp;&nbsp;";echo'<button id="'.$re['friend'].'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$re['friend']."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow' ;}else{echo 'Unfollow';}}}echo"</button></td></tr>";
}
?>
</tbody></table>
</div><div id="p-about-friends" class="p-about-friends-fol" hidden><table><tbody>
<?  $data= mysql_query("SELECT * FROM fdfriends WHERE friend='".$user."' LIMIT 0,30");
 while($re = mysql_fetch_array($data)) 
 { 
$data1= mysql_query("SELECT * FROM members WHERE username='".$re['user']."' LIMIT 0,30");
 while($rea = mysql_fetch_array($data1)) 
 {echo "<tr><td><a href='profile.php?user=".$re['friend']."'><img height='32px' width='32px' src='//accounts-subins.hp.af.cm/getimg.php?user=".$re['user']."'></a></td><td><a href='profile.php?user=".$re['user']."'>";
if($re['user']==$who){echo 'You';}else{echo $rea['name'];echo "</a></td><td>&nbsp;&nbsp;&nbsp;";echo'<button id="'.$re['user'].'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$re['user']."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow';}else{echo 'Unfollow';}}}echo"</button></td></tr>";
}
?>
</tbody></table>
</div><div id="p-about-friends" class="p-about-friends" hidden><table><tbody>
<?  $data= mysql_query("SELECT * FROM fdfriends WHERE user='".$user."' and `both`='s' LIMIT 0,30");
 while($re = mysql_fetch_array($data)) 
 { 
$data1= mysql_query("SELECT * FROM members WHERE username='".$re['friend']."' LIMIT 0,30");
 while($rea = mysql_fetch_array($data1)) 
 {echo "<tr><td><a href='profile.php?user=".$re['friend']."'><img height='32px' width='32px' src='//accounts-subins.hp.af.cm/getimg.php?user=".$re['friend']."'></a></td><td><a href='profile.php?user=".$re['friend']."'>";
if($re['friend']==$who){echo 'You';}else{echo $rea['name'];echo "</a></td><td>&nbsp;&nbsp;&nbsp;";echo'<button id="'.$re['friend'].'" class="g-button g-button-submit">'; $data3= mysql_query("SELECT * FROM fdfriends WHERE friend='".$re['friend']."'and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Follow' ;}else{echo 'Unfollow';}}}echo"</button></td></tr>";
}
?>
</tbody></table>
</div>
<div id="p-about"><table><tbody>
<?
if($username!=$who){
echo "<tr><td>Name - </td><td><span id='who'>$name</span> </tr>";
if($page!='prt'){
echo"<tr><td> Age - </td><td>$age </td></tr>";}
if($ploc!='prt'){
echo "<tr id='pd'><td>Location -</td><td> $location&nbsp;</tr>";}
if($pphone!='prt'){
echo "<tr><td>Phone -</td><td>$phone </td></tr>";}
if($pmail!='prt'){
echo "<tr><td>E-mail - </td><td><a href='mailto:$email'>$email</a></td></tr>";}
}else{
echo "<tr><td>Name - </td><td><span id='who'>$name</span> </tr>";
echo"<tr><td> Age - </td><td>$age <select class='pchanger' id='age' name='privacy'><option value='pch'>Public</option><option ".$sd['age']." value='prt'>Private</option></select></td></tr>";echo "<tr id='pd'><td>Location -</td><td> $location&nbsp;<select class='pchanger' id='loc' name='privacy'><option value='pch'>Public</option><option ".$sd['loc']." value='prt'>Private</option></select></tr>";echo "<tr id='pd'><td>Phone -</td><td>$phone <select class='pchanger' id='phone' name='privacy'><option value='pch'>Public</option><option ".$sd['phone']." value='prt'>Private</option></select></td></tr>";echo "<tr><td>E-mail - </td><td><a href='mailto:$email'>$email</a> <select class='pchanger' id='mail' name='privacy'><option value='pch'>Public</option><option ".$sd['mail']." value='prt'>Private</option></select></td></tr>";
}
?>
</tbody></table>
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
$(this).parents("#pd").find('td:nth-child(2)').html($(this).val()+"<select id='pchanger' name='privacy'><option value='pch'>Public</option><option value='prt'>Private</option></select>");
localStorage['wuy']=$("#p-about").html();
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
if($(window).width() < 1224){$("#userposts").hide();}else{$("#userposts").show();}
if($("#userposts").text()==''){$("#userposts").html("<h2>No Posts</h2>");}
if($("#p-about-friends").text==''){$("#p-about-friends").html("<h2>No Friends</h2>");}
if($("#p-about-friends-add").text()==''){$("#p-about-friends-add").html("<h2>No Friends</h2>");}
$(window).resize(function(){
if($(this).width() < 1224)
{
$("#userposts").hide();
}
else
{
$("#userposts").show();
}
});
});
</script>
<center><div class="load-con" id='load-con'><div class="a-f-e"><div class="Xj"></div><div class="zc loading">Loading...</div><div class="Wj"></div></div></div></center>
<? if (isset($_GET['pid'])){?>
<script>
$("#userposts").ready(function(){$("#userposts").html('');
$("#userposts").load('data.php?pid=<? echo $_GET["pid"];?>');
$("#userposts").css('color','#36C');
});
</script>
<?}?>
</body>
</html>
