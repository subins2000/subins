<?Header("content-type: application/x-javascript");$user=$_COOKIE['VisitorName'];$who = $_COOKIE["VisitorName"];include('../../config.php');$sql = "SELECT * FROM members WHERE username = '$who'";$q = mysql_query($sql) or die(mysql_error());while($r = mysql_fetch_array($q)) {$name = $r['name'];$umail = $r['email'];if($r['set']=='' || $r['set']===NULL || is_null($r['set'])){$bg="{\"bg\":\"#6BE\"}";}else{$bg=$r['set'];}}mysql_query("UPDATE members SET age=age+1,lb=DATE_FORMAT(NOW(),'%Y') WHERE SUBSTRING_INDEX(birthday,'/',2)=DATE_FORMAT(NOW(),'%d/%m') AND lb!=DATE_FORMAT(NOW(),'%Y')");?>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36727183-1']);
  _gaq.push(['_setDomainName', 'hp.af.cm']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : '//www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    document.cookie='uid'+'='+1;
    var saga = document.createElement('script'); saga.type = 'text/javascript';
    saga.src = ('https:' == document.location.protocol ? 'https://' : '//') + 'analytics-subins.hp.af.cm/js/dc.js';
    var head= document.getElementsByTagName('head')[0];head.appendChild(saga);
  })();
var jQueryScriptOutputted = false;
function initJQuery() {
    if (typeof(jQuery) == 'undefined') {
    
        if (! jQueryScriptOutputted) {
            //only output the script once..
            jQueryScriptOutputted = true;
            document.write("<script type=\"text/javascript\" src=\"//cdn-subins.hp.af.cm/java/jquery.js\"></script>");
        }
        setTimeout("initJQuery()", 50);
    } else {
if (document.location.protocol === 'https:') {
    $('a[href],link').each(function() {
        var href = $(this).attr('href');
        if (href.indexOf('http:') > -1) {
            href = href.replace('http:', 'https:');
            $(this).attr('href', href);
        }
    });
    $('script[src]').each(function() {
        var href = $(this).attr('src');
        if (href.indexOf('http:') > -1) {
            href = href.replace('http:', 'https:');
            $(this).attr('src', href);
        }
    });
}
var jbg='<?echo$bg;?>';
if (jbg=='' || jbg===null){var cp=JSON.parse('{"bg":"#6BE"}');}else{var cp=JSON.parse('<?echo$bg;?>');}
$(document).ready(function(){
$("body").css({'background': cp.bg});
});
if(window.location.host!=='sag-3.blogspot.com'){
$("head").append("<link rel='stylesheet' href='//subins.hp.af.cm/files/css/home.css' type='text/css' />");
$("head").append("<link rel='stylesheet' href='//subins.hp.af.cm/files/css/style2.css' type='text/css' /><link rel='icon' href='//cdn-subins.hp.af.cm/images/favicon.ico' type='text/css' />");
if(window.location.host=='fd-subins.hp.af.cm'){}else{$("head").append("<link href='//subins.hp.af.cm/files/css/main.css' rel='stylesheet' />");}
}else{$("head").append("<link rel='stylesheet' href='//subins.hp.af.cm/files/css/sag.css' type='text/css' />");}
$("head").append("<script type='text/javascript' src='//www.google-analytics.com/ga.js'></script>");
$(document).ready(function(){
$("#notifybox").remove();
if(window.location.host=='games-subins.hp.af.cm'){}else if(window.location.host=='games-subins.tk'){}else{$(".top-bar").remove();}
$(".sprofile").remove();
$("#lsidebar").css("top",0);
<?function getHost($Address) { 
   $parseUrl = parse_url(trim($Address)); 
   return trim($parseUrl[host] ? $parseUrl[host] : array_shift(explode('/', $parseUrl[path], 2))); 
} $url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
$("body").append('<div id="patti" style="font-size: 15px;font-family: serif;z-index: 9999999999999;position: fixed;top: 0px;background-color: black;width: 100%;left: 0px;padding-left: 50px;"><table style="width:auto;margin-top:3px;"><tbody><tr><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//subins.hp.af.cm">Subins</a></td><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//accounts-subins.hp.af.cm">Accounts</a></td><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//apps-subins.hp.af.cm">Apps</a></td><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//sag-3.blogspot.com?utm_source=subins.hp.af.cm">Blog</a></td><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//chat-subins.hp.af.cm">Chat</a></td><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//msurl.tk">My Short URL</a></td><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//games-subins.hp.af.cm?utm_source=subins.hp.af.cm">Games</a></td><td><a style="color:white;margin:4px;padding-left:20px;padding-right:20px;" class="g-button-b g-button-submit" href="//get-subins.hp.af.cm">Get</a></td><div style="position: relative;float: right;right: 15%;top: 0px;"><?php if (isset($_COOKIE["VisitorName"])){echo '<button id="namebutton"class="button">'.$name;?></button><? include("../../config.php");$ncount=mysql_query("SELECT * FROM fdnotify WHERE user=\"$who\" and red=\"no\"");if(mysql_num_rows($ncount)=="0"){echo "<button id=\"tenb\" class=\"button\">0";}else{echo "<button id=\"tenb\" style=\"background:#D14836;color:white;background-image: -webkit-gradient(linear,left top,left bottom,from(#DD4B39),to(#D14836));background-image: -webkit-linear-gradient(top,#DD4B39,#D14836);background-image: -moz-linear-gradient(top,#DD4B39,#D14836);background-image: -ms-linear-gradient(top,#DD4B39,#D14836);background-image: -o-linear-gradient(top,#DD4B39,#D14836);background-image: linear-gradient(top,#DD4B39,#D14836);\" class=\"button\">".mysql_num_rows($ncount)."</span>";} }else{ echo "<a href=\'//accounts-subins.hp.af.cm/login.php\'><input type=\'button\' class=\'button\' value=\'Log In\'></a><font color=\'white\'> Or </font><a href=\'//accounts-subins.hp.af.cm/signup.php\'><input type=\'button\' class=\'button\' value=\'Signup\'></a>";}?></button></td></tr></tbody></table></div></div><div id="notifybox" style="display:none;"><table style="padding: 12px;"><tbody><? $nbox=mysql_query("SELECT * FROM fdnotify WHERE user=\"$who\" ORDER BY id DESC");if(!mysql_num_rows($nbox)==0){while($ra = mysql_fetch_array($nbox)) {if($ra["red"]=="no"){echo "<tr id=\"nycont\" style=\"background:white;\">";}else{echo "<tr id=\"nycont\">";}echo"<td><img height=\"44px\" width=\"44px\"src=\"//accounts-subins.hp.af.cm/getimg.php?user=".$ra["mention"]."&height=44&width=44\"></td><td style=\"padding-top: 20px;padding-left: 5px;\"><a target=\"_blank\" style=\"color:green;\" href=\"//fd-subins.hp.af.cm/profile.php?user=".$ra["user"]."\">".$ra["text"]."</a><br><br></td></tr>"; }}else{echo "<h2>No Notifications<br>Add more <a href=\"//fd-subins.hp.af.cm\">friends</a></h2>";}?></tbody></table></div><?php if (isset($_COOKIE["VisitorName"])){?><div style="z-index: 99999;display:none;" class="sprofile"><div class="sprofile-t"><div class="sprofile-l"><div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;z-index:9999;" class="saca"><a id="cpic" style="cursor:pointer;color:white;">Change Picture</a></div><img id="savatar" src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $who;?>&height=100&width=100" height="100px"></div><div class="sprofile-r"><div id="sname"><b><? echo $name;?></b><br><span style="color:grey;"><? echo $umail;?></span></div><a href="//accounts-subins.hp.af.cm">Account Settings</a><br><a href="//fd-subins.hp.af.cm/profile.php"><button id="pointer" class="g-button g-button-submit">View Profile</button></a></div></div><div class="sprofile-b"><form method="post" action="//accounts-subins.hp.af.cm/login.php?service='+location+'"><input id="sout" class="g-button pointer" type="submit" name="logout" value="Log Out"></form></div><form  id="redsoon" hidden action="//fd-subins.hp.af.cm/action.php" method="post"><input name="action" value="read"></form></div><?}?></div></div><div id="overlay" style="display:none;"><div id="overlay-content"></div></div><center><div class="load-con" id="load-con" style="display: none; "><div class="a-f-e"><div class="Xj"></div><div class="zc loading">Saved</div><div class="Wj"></div></div></div></center>');
});
$("#namebutton").live('click',function(){
if ($(".sprofile").is(":visible")){$('.sprofile').hide();}else{$('#notifybox').hide();$(".sprofile").show();}
});
$("#cpic").live('click',function(){window.location='https://en.gravatar.com/site/login/';$("#overlay").toggle();$("#overlay-content").addClass('tcenter');$("#overlay-content").html('<iframe height="90px" src="//cdn-subins.hp.af.cm/profile_pic.php" frameborder="0"></iframe>');});
$("#tenb").live('click',function(){
$('.sprofile').hide();
if ($("#tenb").text()!=='0'){$("#redsoon").extajax();}
$('#notifybox').toggle();
$("#tenb").text('0');
$("#tenb").css('background-color','#F1F1F1');
$("#tenb").css('background-image','-webkit-linear-gradient(top,whiteSmoke,#F1F1F1)');
$("#tenb").css('color','black');
if (localStorage['tc']==1){$("[id=nycont]").css('background','initial');localStorage['tc']='0';}
localStorage['tc']='1';
});
$("#sprofile").ready(function(){
var tuy=$("#sname b").text().split(' ').slice(0, 1).join(' ');
$("#sname b").text(tuy);
var tuys=$("#sname span").text().split('@').slice(-1).join(' ');
$("#sname span").text('@'+tuys);
});
$(window).keydown(function(event) { 
switch(event.keyCode) {
case 27:
$('#div_dialog_background1').hide();$('#overlay').hide();$('#div_dialog_background6').hide();$('#div_share5').hide(); 
break;
}
});
}       
}
initJQuery();
