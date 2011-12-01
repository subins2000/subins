<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "//www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js" ></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php" ></script>
<script type="text/javascript" src="java/colorpicker.js" ></script>
<title>Manage your Account</title>
<?
require('../config.php');
$space ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$who = $_COOKIE["VisitorName"];
?>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<? if (isset($_GET['page'])){?>
<?}else{if($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){header("Location:../login.php");}}?>  
<style>
a:-webkit-any-link {
color:green;
}
</style>    
</head>
<body>
<center>
<div id="content" style='height:auto;'>
<center style="height: 80%;">
<?
if ($_GET['page']=='fpass'){
?>
<iframe frameborder='0' height='900px' style="height: 80%;" src="../fpass.php?output=embed"></iframe>
<? } ?>
<? 
if (isset($_GET['page'])){}
else{
?>
<div id='pshow' class="loadelse">
<h1>Products</h1>
<h2><a href='//subins.hp.af.cm'>Subins</a></h2><h2><a href="//chat-subins.hp.af.cm">Chat</a></h2><h2><a href="//games-subins.hp.af.cm">Games</a></td><h2><a href="//fd-subins.hp.af.cm">Friendshood</a></h2><h2><a href="//apps-subins.hp.af.cm">Apps</a></h2><h2><a href="//get-subins.hp.af.cm">Get</a></h2>
</div>
<div id='loading' hidden><img src='images/loader.gif'></div>
<center><br><br>
<div style="height: 80%;display:none;" id='loadelsefpass' class="loadelse"><iframe frameborder="0" style="height: 80%;" src="../fpass.php?small"></iframe></div>
<div style="height: 80%;display:none;" id='loadelsecpic' class="loadelse"><iframe frameborder="0" style="height: 80%;" src="../cpic.php"></iframe></div>
<div style="height: 80%;display:none;" id='loadelsep' class="loadelse"><h2>To Edit Your Profile Go To your <a href="//fd-subins.hp.af.cm/profile.php">Friendshood Profile</a></h2></div>
<div style="height: 80%;display:none;" id='loadelsec' class="loadelse"><form id="csettf">
<input name="action" type="hidden" value="con">
<label for="email">Email :</label><input name="email" id="email" type="email" value="<?echo$umail;?>"><br><br>
<label for="phone">Mobile :</label><input id="phone" name="phone" type="text" value="<?echo$uphone;?>"><br><br>
<input type="submit" class="g-button g-button-submit" value="Save">
</form></div>
<div style="height: 80%;display:none;" id='loadelseb' class="loadelse"><div id="cp"></div><br><input type="button" value="Revert to Default Settings" id="cpb">&nbsp;&nbsp;&nbsp;<input type="button" value="Save" id="cps"></div>
<div style="height: 80%;display:none;" id='loadelset' class="loadelse"></div>
</center>
<? } ?>
</center>
</div>
</center>
<script>
$("#loadelset").load('get.php?t');
$('#cp').ColorPicker({flat: true});$('#cpl').ColorPicker({flat: true});
$('#cp .colorpicker_color').live('mousemove',function(){
var hex='#'+$(".colorpicker_hex input").val();
$("body").css({'background': hex});
});
$("#cps").live('click',function(){
$.save('action.php',{action:'cp',color:$(".colorpicker_hex input").val()},'.load-con','.load-con zc');
});
$("#cpb").live('click',function(){
$("body").css({'background': '#6BE'});
$.save('action.php',{action:'cp',color:"#6BE",lcolor:""},'.load-con','.load-con zc');
});
var regexObj = /^\+(?:[0-9] ?){6,14}[0-9]$/;
var regexObje = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
$("#csettf").live('submit',function(){
event.preventDefault();if($("#email").val()!=null & regexObj.test($("#phone").val())==true & regexObje.test($("#email").val())==true){
$.save('action.php',$(this).serialize(),'.load-con','.load-con zc');
}else{$("#csettf:input").css('border','2px solid red');}
});
$("#email").live('keyup',function(){
if (regexObje.test($(this).val())) {
        $(this).css('border','2px solid green');
} else {
    $(this).css('border','2px solid red');
}});
$("#phone").live('keyup',function(){
if (regexObj.test($("#phone").val())) {
    var formattedPhoneNumber =
        $(this).val().replace(regexObj, "($1) $2-$3");
        $(this).css('border','2px solid green');
} else {
    $(this).css('border','2px solid red');
}});
function pchange(id,url){
$(this).addClass('selected');
var pshow=document.getElementById('pshow');
$('#loading').show('500');
if(url=='fpass'){
$('.loadelse').hide('500');
$('#loadelsefpass').show('500');
}
if(url=='cpic'){
$('.loadelse').hide('500');
$('#loadelsecpic').show('500');
}
if(url=='p'){
$('.loadelse').hide('500');
$('#loadelsep').show('500');
}
if(url=='c'){
$('.loadelse').hide('500');
$('#loadelsec').show('500');
}
if(url=='b'){
$('.loadelse').hide('500');
$('#loadelseb').show('500');
}
if(url=='t'){
$('.loadelse').hide('500');
$('#loadelset').show('500');
}
$('#loading').hide('500');
}
</script>
<div id="lsidebar" style="width:180px;">
<center>
<br><br><a class="g-button g-button-submit" onclick="$('.loadelse').hide('500');$('#pshow').show('500');" style="cursor:pointer;width:90px;">Products</a><br><br>
>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="$('#acsettings').toggle('500');">Manage Account</a><br>
<div id='acsettings' hidden><br>
>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="pchange('loadelse','fpass');">Change Password</a><br><br>
>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="pchange('loadelse','cpic');">Change Picture</a><br><br>
>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="pchange('loadelse','c');">Contact Settings</a><br><br>
>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="pchange('loadelse','p');">Edit Profile</a>
</div>
<br>>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="$('.apsettings').toggle('500');">Appearance</a></center><br>
<div id='acsettings' class="apsettings" hidden>
>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="pchange('loadelse','b');">Background,Text</a><br><br>
>&nbsp;&nbsp;<a class="g-button g-button-submit" style="cursor:pointer;width:90px;" onclick="pchange('loadelse','t');">Themes</a><br><br>
</div>
</div>
</body>
</html>
