<?
if (isset($_GET['st'])){
if ($_GET['st']=='on'){include('../config.php'); mysql_query('UPDATE members SET status="on" WHERE username="'.$_COOKIE['VisitorName'].'"');}else{
include('../config.php'); mysql_query('UPDATE members SET status="off" WHERE username="'.$_COOKIE['VisitorName'].'"');}
}else{
Header("content-type: application/x-javascript");?>
$(document).ready(function(){
$.post('java/js.php?st=on');
$("body").append('<div id="ghuy" style="z-index:99999999999999999999999999999999999999999999999999;top:0px;position:fixed;">');
$(window).unload( function () { $.post('java/js.php?st=off'); } );
function ahah(url, target) {
  document.getElementById(target).innerHTML = ' Fetching data...';
  if (window.XMLHttpRequest) {
    req = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    req = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (req != undefined) {
    req.onreadystatechange = function() {ahahDone(url, target);};
    req.open("GET", url, true);
    req.send("");
  }
}  
$(document).ready(function() {
var title="<? echo $who;?>";
if (title==null){
window.location='//fd-subins.hp.af.cm';
}
});
function ahahDone(url, target) {
  if (req.readyState == 4) { // only if req is "loaded"
    if (req.status == 200) { // only if "OK"
      document.getElementById(target).innerHTML = req.responseText;
    } else {
      document.getElementById(target).innerHTML=" AHAH Error:\n"+ req.status + "\n" +req.statusText;
    }
  }
}

function load(name, div) {
	ahah(name,div);
	return false;
}
ahah('comp.php', 'ghuy');
$("body").append('<div id=\'lsidebar\'><center><br><br><a id="obj" href="Home.php"><div style="background-image: url(\'images/icons.png\');background-position: 0 -28px;height: 35px;width: 32px;"></div>Home</a><br><br> <a id="obj" href="profile.php"><div style="background-image: url(\'images/icons.png\');background-position: 0 -890px;height: 32px;width: 32px;"></div>Profile</a><br><br><a id="obj" href="//games-subins.hp.af.cm"><div style="background-image: url(\'images/icons.png\');background-position: 0 -795px;height: 32px;width:32px;"></div>Games</a><br><br><a id="obj" href="notifications"><div style="background-image: url(\'images/icons.png\');background-position: 0 -530px;height: 32px;width: 32px;"></div>Notifications</a><br><br> <a class="ghr" id="obj" href="#"><div style="background-image: url(\'images/icons.png\');background-position: 0 100%;height: 32px;width: 32px;"></div>More</a></center></div>');	
$("body").append('<div id="prcont" hidden style="height:auto;width:auto;position:fixed;left:110px;top:'+$(".ghr").offset().top+'px;background:white;padding:10px;border-radius:20px;"><div class="ze ie"></div><div id="gbqla"><span class="gbmab"></span><span class="gbmac"></span></div><ol id=gbzc class=gbtc><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;width:100px;\' href="//subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Subins</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//chat-subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Chat</span></a></li><br><li class="gbt"><a class="g-button g-button-submit" id="gb_36" style=\'color:white;width:100px;\' href="//friendshood.com/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Friendshood</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//games-subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Games</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//quiz.subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Quiz</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//vtube.subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">VTube</span></a></li><br></ol></div>');
});
<?
include('//accounts-subins.hp.af.cm/config.php');
$user=$_COOKIE['VisitorName'];
$who = $_COOKIE["VisitorName"];
include('../config.php');
  $sql = "SELECT * FROM members WHERE username = '$who'";
$q = mysql_query($sql) or die(mysql_error());
$rn = mysql_num_rows($dataa);
while($r = mysql_fetch_array($q)) { 
  $name = $r['name']; 
}
$who = $_COOKIE["VisitorName"];
?>$("body").append('<div class="chatbox"><div id="usscont"><table><tbody><tr><td><div id=":rs.pi" class="me-st" onselectstart="return false;"><div title="Available" class="online-icon"></div></div></td><td><a href="profile.php"><? echo $name;?></a></td><td style="float:right;background: no-repeat url(../images/mixed.png) -150px -35px;height: 15px;width: 15px;right: -90px;position: relative;"></td></tr></tbody></table></div><ul class="roster_buzz"></ul></div>');<?
echo "$('.roster_buzz').html('";
include("../config.php");$data = mysql_query("SELECT * FROM fdfriends WHERE user='$who' LIMIT 0, 10"); while($r = mysql_fetch_array( $data ))  {$datax = mysql_query("SELECT * FROM members WHERE username='".$r['friend']."' LIMIT 0, 10");while($rx = mysql_fetch_array($datax)){$fname=$rx['name'];$fu=$r["friend"];$stus=$rx['status'];
echo "<li id=\':r3\' class=\'roster_list_item\' aria-labelledby=\':r4\' role=\'listitem menuitem\'><button class=\'g-button-chat\' id=\':r4\' tabindex=\'-1\' class=\'roster_row_online\'><table><tbody><tr><td><img height=\'32px\' width=\'32px\' src=\"//accounts-subins.hp.af.cm/getimg?user=$fu\"></td><td><div class=\"bubble $stus-icon\"></div></td><td id=\"fnametd\" title=\"$fu\">$fname</td></button></tr></tbody></table></li>";
}}echo"');";
?>
$("body").append('<div id="chatbox" style="overflow: hidden; z-index: 99999999; display: none;"><div id="upbar" onclick="Hide(\'chatbox\');" style="text-align:left;cursor:pointer;"></div><div id="chatcont" style="overflow:hidden;z-index:99999999;"><div style="text-align:left;" id="iframe2"></div></div>	<div style="margin-bottom:0px;float:bottom;"><table style="border-top:1px solid grey;width:100%;"><tbody><tr><form method="post" id="fdchat" action=""><td><img height="32px" width="32px" src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$who;?>" id="img1"></td><td><input value="" id="to" name="to" hidden></td><td><input value="chat" name="action" hidden></td><td><input type="text" id="usermsg" size="15" autocomplete="off" suggestion="flase" cols="5" rows="1" name="usermsg"></td><td><input name="submitmsg" type="submit" class="submit1" id="submitmsg" value="Send"></td></form></tr></tbody></table></div></div>');
$(".ghr").live('mouseover',function(){
$("#prcont").show('10000');
$("#prcont").animate({top:$(this).offset().top+'px'});
$(this);
});
$("#prcont").live('mouseleave',function(){
$(this).hide('10000');
}).delay('2000');
$("#tenb").live('click',function(){
if ($('#notifybox').css("display")=='none'){
$('#notifybox').show('900');
$("#tenb").text("0");
$("#tenb").css({"background": "whiteSmoke","color": "black"});
}else{$('#notifybox').hide('900');}
$.post("action.php", {red: 'yes',action: 'read'});
});
$(".chatbox li button").live('click',function(){
$('#iframe2').load('//fd-subins.hp.af.cm/get?action=chat&rec='+$(this).find('#fnametd').attr('title'));
$("#upbar").html($(this).html()+'</tr></tbody></table>');
$("#to").val($(this).find('#fnametd').attr('title'));
Show('chatbox');
$("#iframe2").animate({ scrollTop: '1000' }, 'normal');
$("#usermsg").focus();
$("body").append("<div id='asdv' hidden></div>");
});
function checkUpdatesa()
{
$("#asdv").load('//fd-subins.hp.af.cm/get?action=chat&rec='+$('#to').val());
if($("#asdv").html()==$("#iframe2").html()){}else{$('#iframe2').load('//fd-subins.hp.af.cm/get?action=chat&rec='+$('#to').val());$("#iframe2").animate({ scrollTop: '1000' }, 'normal');}
$(".roster_buzz").load("//fd-subins.hp.af.cm/get?action=file");
alert($("#sname").split(' ').slice(0, -1).join(' '));
}
setInterval(checkUpdatesa()); 
$("#fdchat").live('submit',function(){
event.preventDefault();
$.post("action.php", $("#fdchat").serialize());
$("#usermsg").focus();
$("#usermsg").val("");
$('#iframe2').load('//fd-subins.hp.af.cm/get?action=chat&rec='+$('#to').val());
$("#iframe2").animate({ scrollTop: '1000' }, 'normal');
});
$("#usscont").live('click', function(){
if ($(".roster_buzz").css("display")=='block'){
$(".chatbox").animate({"height":0});
$("#usscont").css({"position":"fixed","width":"100%","bottom":0});
$(".roster_buzz").hide();}else{
$(".chatbox").animate({"height":"100%"});
$("#usscont").css({"position":"relative","width":"100%","bottom":"auto"});
$(".roster_buzz").show();
}
});
<?}?>
