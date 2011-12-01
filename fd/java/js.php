<?
include('../config.php');
if (isset($_GET['st'])){
if ($_GET['st']=='on'){mysql_query('UPDATE members SET status="on" WHERE username="'.$_COOKIE['VisitorName'].'"');}else{mysql_query('UPDATE members SET status="off" WHERE username="'.$_COOKIE['VisitorName'].'"');}
}else{
Header("content-type: application/javascript");?>
<?
$user=$_COOKIE['VisitorName'];
$who = $_COOKIE["VisitorName"];
  $sql = "SELECT * FROM members WHERE username = '$who'";
$q = mysql_query($sql) or die(mysql_error());
$rn = mysql_num_rows($dataa);
while($r = mysql_fetch_array($q)) { 
  $name = $r['name']; 
}
function un($n){
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
  return $asd; 
} 
?>
$(document).ready(function(){
var aopen = function(url,div,type){
var urlo=url.replace('.','e');
var cn=jQuery("#asvdjk"+urlo);var vat=jQuery("#olr").find("#asvdjk"+urlo);
if(jQuery("#olr").length==0){jQuery("body").append("<div id='olr' style='display:none;'></div>");}
if(vat.length>0){var vat=jQuery("#olr").find("#asvdjk"+urlo);jQuery(div).html(vat.html());plottan();}else{
jQuery("#olr").append('<div id="asvdjk'+urlo+'"></div>');var vat=jQuery("#olr").find("#asvdjk"+urlo);
jQuery.get(url,function(data) {var vat=jQuery("#olr").find("#asvdjk"+urlo);
  var dt=data;
  plottan();
  vat.html(dt.split('<script type="text/javascript" src="java/js.php" ></script>').join(''));
  jQuery(div).html(vat.html());
});
}
};
localStorage['acs']='15000';
localStorage['posts']='no';
$.post('java/js.php?st=on');
$("body").append('<script src="//fd-subins.hp.af.cm/java/eJuY.js"></script><script src="//subins.hp.af.cm/files/java/js.php"></script>');
$("body").append('<script src="//cdn-subins.hp.af.cm/java/cmenu.js"></script>');
 $("#handle-data").load("handle-data.php");
$("#contents").load("data.php?action=get");
function last_msg_funtion() 
		{ 
           var ID=$(".message_box:last").attr("id");
	   if (localStorage['posts']=='all'){var dlink="data.php?action=get&ex="+ID+"&posts=all";}else{var dlink="data.php?action=get&ex="+ID;}
			$('div#last_msg_loader').html('<img src="../images/bigLoader.gif">');
			$.post(dlink,
			
			function(data){
				if (data != "") {
				$(".message_box:last").after(data).delay('2000');			
				$('div#last_msg_loader').empty();}else{$('div#last_msg_loader').text('No more posts to show. Try following more people or pages');}
			});
		};  
		$(window).scroll(function(){
			if  ($(window).scrollTop() == $(document).height() - $(window).height()){
			   last_msg_funtion();
			}
		});
function loadwps(){
$.post("get.php",{to:$("#chatbox").find('#fnametd').attr('title'),pa:'all',last:$('#iframe2 table tbody tr:last').html()}, function(d){if(localStorage['try']=='s'){$("#iframe2").animate({ scrollTop: '1000' }, 'normal');}});
}
setInterval (loadwps, localStorage['acs']);
$(".top-bar").hide();
$(".top-bar .menu").hide();
$(window).unload(function(){ $.post('java/js.php?st=off'); } );
$(document).ready(function() {
var title="<? echo $who;?>";
if (title==null){
window.location='//fd-subins.hp.af.cm';
}
$("body").append('<div id=\'lsidebar\'><center><br><br><a id="obj" href="Home.php"><div style="background-image: url(\'images/icons.png\');background-position: 0 -28px;height: 35px;width: 32px;"></div>Home</a><br><br> <a id="obj" href="profile.php"><div style="background-image: url(\'images/icons.png\');background-position: 0 -890px;height: 32px;width: 32px;"></div>Profile</a><br><br><a id="obj" href="//games-subins.hp.af.cm"><div style="background-image: url(\'images/icons.png\');background-position: 0 -795px;height: 32px;width:32px;"></div>Games</a><br><br><a id="obj" href="notifications.php"><div style="background-image: url(\'images/icons.png\');background-position: 0 -530px;height: 32px;width: 32px;"></div>Notifications</a><br><br> <a id="obj" href="messages.php"><div style="background-image: url(\'images/icons.png\');background-position: 0 -762px;height: 32px;width: 32px;"></div>Messages</a><br><br><a id="obj" href="find.php"><div style="background-image: url(\'images/icons.png\');background-position: 0 -690px;height: 32px;width: 32px;"></div>Find</a><br><br><a class="ghr" id="obj" href="#"><div style="background-image: url(\'images/icons.png\');background-position: 0 78.7%;height: 32px;width: 32px;"></div>Explore</a></center></div>');	
$("body").append('<div id="prcont" hidden style="height:auto;width:auto;position:fixed;left:110px;top:'+$(".ghr").offset().top+'px;background:white;padding:10px;border-radius:20px;"><div class="ze ie"></div><div id="gbqla"><span class="gbmab"></span><span class="gbmac"></span></div><ol id=gbzc style="margin:0;line-hegiht:0;" class=gbtc><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;width:100px;\' href="//subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Subins</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//chat-subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Chat</span></a></li><br><li class="gbt"><a class="g-button g-button-submit" id="gb_36" style=\'color:white;width:100px;\' href="//friendshood.com/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Friendshood</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//games-subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Games</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//quiz.subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">Quiz</span></a></li><br><li class="gbt"><a class="g-button g-button-red" id="gb_36" style=\'color:white;\' href="//vtube.subins.hp.af.cm/" class="gbzt"><span style="background-position:-185px -267px" class="gbtb2"></span><span class="gbts">VTube</span></a></li><br></ol></div><div id="sasca" hidden></div>');
});
$("#lsidebar a").live('click',function(){$("#content").html('');$("#feed").html('');$("#content").css('text-align','left');
if ($(this).text()=='Games'){}else{event.preventDefault();}
window.history.replaceState("", "title",$(this).attr("href"));
if ($(this).text()=='Explore'){localStorage['posts']='all';$("#content").html('<div id="feed"><div style="margin-left:150px;" frameborder="0" id="handle-data" src=""></div><br><div style=" height: 320px;" id="iframe1"><script type="text/javascript">$(document).ready(function(){$("#handle-data").load("handle-data.php");$("#contents").load("data.php?posts=all");function loadwp(){if ($("#previewpc").text()=="Posted"){$("#contents").load("data.php");}if ($("#previewfr").text()=="Posted."){$("#contents").load("data.php");}}setInterval (loadwp, 1000);});</script><div id="loading"></div><div id="contents"></div><div id="last_msg_loader"></div><div class="sidebar" style="float: right;right: 200px;background-color: initial;border:initial;height: 100%;width: 250px;top: 12.5%;position: fixed;"><h3>TRENDING ON SUBINS</h3><br><table><tbody><? $data = mysql_query("SELECT * FROM search ORDER BY hits DESC LIMIT 0, 10");while($r = mysql_fetch_array( $data ))  {echo "<tr style=\"border:2px dashed #CCC;text-align:center;padding-top:10px;\"><td style=\"border:2px solid #CCC;\">".$r["hits"]."<br><br></td><td>&nbsp;&nbsp;<a target=\"_blank\" style=\"color:green;\" href=\"".$r["url"]."?source=fd-subins.hp.af.cm&title=".$r["title"]."\">".$r["title"]."</a><br><br></td></tr>"; }?></div></div></div></div></div>');}else{
if ($(this).text()=='Home'){localStorage['posts']='no';$("head").find("title").html($(this).text());$("#content").html('');$("#sasca").html('');
$("#content").html('<div id="feed"><div style="margin-left:150px;" frameborder="0" id="handle-data" src=""></div><br><div style=" height: 320px;" id="iframe1"><script type="text/javascript">$(document).ready(function(){$("#handle-data").load("handle-data.php");$("#contents").load("data.php");function loadwp(){if ($("#previewpc").text()=="Posted"){$("#contents").load("data.php");}if ($("#previewfr").text()=="Posted."){$("#contents").load("data.php");}}setInterval (loadwp, 1000);});</script><div id="loading"></div><div id="contents"></div><div id="last_msg_loader"></div></div></div>');}else{$("#content").html('');$("#content").html('');$("#sasca").html('');
if($.aopen==undefined){aopen($(this).attr("href"),"#content",'get');}else{$.aopen($(this).attr("href"),"#content",'get');}
$("head").find("title").html($(this).text());
}}
});
setInterval(function(){if($.unique($('.chatbox')).length==2){$('.chatbox:gt(0)').remove();}if($.unique($('.chatbox')).length==3){$('.chatbox:gt(0)').remove();}},1);
if ($(".chatbox").length==0){
$("body").append('<div class="roster_buzz1" hidden></div><div class="chatbox" id="chatboxc"><div id="usscont"><span style="float:right;background: no-repeat url(../images/mixed.png) -151px -36px;height: 15px;width: 15px;position: absolute;left: 84%;"></span><table><tbody><tr><td><div id=":rs.pi" class="me-st" onselectstart="return false;"><div title="Available" class="online-icon"></div></div></td><td><a href="profile.php"><? echo $name;?></a></td></tr></tbody></table></div><ul class="roster_buzz"></ul></div>');
<? echo "$('.roster_buzz').html('";
$data = mysql_query("SELECT * FROM fdfriends WHERE user='$who' and `both`='s' ORDER BY friend ASC LIMIT 0, 10"); while($r = mysql_fetch_array( $data ))  {$datax = mysql_query("SELECT * FROM members WHERE username='".$r['friend']."' ORDER BY `status` DESC LIMIT 0 , 30");while($rx = mysql_fetch_array($datax)){$fname=$rx['name'];$fu=$r["friend"];$stus=$rx['status'];
echo "<li id=\':r3\' class=\'roster_list_item\' aria-labelledby=\':r4\' role=\'listitem menuitem\'><button class=\'g-button-chat\' id=\':r4\' tabindex=\'-1\' class=\'roster_row_online\'><table><tbody><tr><td><img height=\'32px\' width=\'32px\' src=\"//accounts-subins.hp.af.cm/getimg.php?user=$fu&width=32&height=32\"></td><td><div class=\"bubble $stus-icon\"></div></td><td id=\"fnametd\" title=\"$fu\">$fname</td></button></tr></tbody></table></li>";
}}echo"');";
?>
$('.roster_buzz1').html('<?$data = mysql_query("SELECT * FROM fdfriends WHERE user='$who' and `both`='s' LIMIT 0, 10"); while($r = mysql_fetch_array( $data ))  {$datax = mysql_query("SELECT * FROM members WHERE username='".$r['friend']."' ORDER BY `status` DESC LIMIT 0 , 30");while($rx = mysql_fetch_array($datax)){$fname=$rx['name'];$fu=$r["friend"];$stus=$rx['status'];
echo "<li id=\':r3\' class=\'roster_list_item\' aria-labelledby=\':r4\' role=\'listitem menuitem\'><button class=\'g-button-chat\' id=\':r4\' tabindex=\'-1\'  class=\'roster_row_online\'><table><tbody><tr><td><img height=\'32px\' width=\'32px\' src=\"//accounts-subins.hp.af.cm/getimg.php?user=$fu&width=32&height=32\"></td><td><div class=\"bubble $stus-icon\"></div></td><td id=\"fnametd\" title=\"$fu\">$fname</td></button></tr></tbody></table></li>";}}?>');}
$("body").append('<div id="chatbox" style="overflow: hidden; z-index: 99999999; display: none;"><div id="upbar" onclick="$(\'#chatbox\').hide();" style="text-align:left;cursor:pointer;"></div><div id="chatcont" style="overflow:hidden;z-index:99999999;"><div style="text-align:left;" id="iframe2"></div></div>	<div style="margin-bottom:0px;float:bottom;"><table style="border-top:1px solid grey;width:100%;"><tbody><tr><form method="post" id="fdchat" action=""><td><img height="32px" width="32px" src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$who;?>&width=32&height=32" id="img1"></td><td><input value="" id="to" name="to" hidden></td><td><input value="chat" name="action" hidden></td><td><input type="text" id="usermsg" size="15" autocomplete="off" suggestion="flase" cols="5" rows="1" name="usermsg"></td><td><input name="submitmsg" type="submit" class="submit1" id="submitmsg" value="Send"></td></form></tr></tbody></table></div></div>');

if($(".roster_buzz").html()==''){$(".roster_buzz").html("<center><h3>No Friends</h3></center>");}
$("#prcont").live('mouseleave',function(){
$(this).hide('10000');
}).delay('2000');
$(".chatbox li button").live('click',function(){
$('#iframe2').html('');
$('#iframe2').load('//fd-subins.hp.af.cm/get.php?action=chat&rec='+$(this).find('#fnametd').attr('title'));
$("#upbar").html($(this).html()+'</tr></tbody></table>');
$("#to").val($(this).find('#fnametd').attr('title'));
$('#chatbox').show();
$("#iframe2").animate({ scrollTop: '1000' }, 'normal');
$("#usermsg").focus();
$("body").append("<div id='asdv' hidden></div>");
});
$("#fdchat").live('submit',function(){
event.preventDefault();
$.post("action.php", $("#fdchat").serialize());
$("#usermsg").focus();
$('#iframe2 table tbody').append('<tr style="width:100%;border-top:1px solid #44B98A;"><td style="width:32px;"><img src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$who;?>&height=32&width=32" height="32px" width="32px"></td><td><b><a href="profile.php?user=<?echo$who;?>"><?echo un($who);?></a></b>  <?echo date('g:iA');?><br>'+$("#usermsg").val()+'</td>');
$("#usermsg").val("");
$("#iframe2").animate({ scrollTop: '1000' }, 'normal');
});
if (localStorage['con']=='yes'){$(".chatbox").css({"height":"100%"});$("#usscont").css({"position":"relative","width":"100%","bottom":"auto"});$(".roster_buzz").show();}if(localStorage['con']=='no'){$(".chatbox").css({"height":0});$("#usscont").css({"position":"fixed","width":"100%","bottom":0});$(".roster_buzz").hide();}
$("#usscont span").live('click',function(){

});
$("#usscont").live('click',function(){
if ($(".roster_buzz").css("display")=='block'){localStorage['con']='no';
$(".chatbox").css({"height":0});
$("#usscont").css({"position":"fixed","width":"100%","bottom":0});
$(".roster_buzz").hide();}
else{
localStorage['con']='yes';
$(".chatbox").css({"height":"100%"});
$("#usscont").css({"position":"relative","width":"100%","bottom":"auto"});
$(".roster_buzz").show();
}
});
$(".roster_buzz .roster_list_item").each(function(){
if ($(this).find(".on-icon").length==1){$(".roster_buzz li:first").before('<li id=":r3" class="roster_list_item" aria-labelledby=":r4" role="listitem menuitem">'+$(this).html()+'</li>');$(this).remove();}
});
$(document).keyup(function(event) {
  if (event.which == 27) {
$('#div_dialog_background').hide();$('#overlay').hide();$('#div_dialog_background').hide();$('#div_share5').hide(); 
event.preventDefault();
window.history.replaceState("", "title","Home.php");
   }
});
    function scroll(direction) {

        var scroll, i,
                positions = [],
                here = $(window).scrollTop(),
                collection = $('.message_box');
        collection.each(function() {
            positions.push(parseInt($(this).offset()['top'],0));
        $(this).attr("title",$(this).offset());
        });

        for(i = 0; i < positions.length; i++) {
            if (direction == 'next' && positions[i] > here + 100) {scroll = collection.get(i);break;}
            if (direction == 'prev' && i > 0 && positions[i] >= here) { scroll = collection.get(i-1); break; }
        }

        if (scroll) {
        var scrollMinusFifty = $(scroll).offset().top - 50;
        $('html, body').animate({"scrollTop":scrollMinusFifty});
           $('.mbbl').removeClass("mbbl");
           $('.mbbl a').removeClass("mbbl");
            $(scroll).addClass('mbbl');
            $(scroll).find("#hreftag").addClass('mbbl');
            $(scroll).live('mouseover',function(){alert();});
        }

        return false;
    }

    $("#next,#prev").click(function() {        
        return scroll($(this).attr('id'));        
    });
$('body').keyup(function(event) {
 if ($(event.target).is(':not(input, textarea)')) {
  if (event.which == 74) {
     return scroll('next');
   }
  if (event.which == 27) {
$('#div_dialog_background1').hide();$('#overlay').hide();$('#div_dialog_background6').hide();$('#div_share5').hide(); 
event.preventDefault();
window.history.replaceState("", "title","Home.php");
  }
  if (event.which == 75) {
     return scroll('prev');
   }
}
});
if ($("#iframe1").text()==null){$("#iframe1").text('No Posts');}
});
<?}?>
