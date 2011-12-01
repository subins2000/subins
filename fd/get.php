<?php
include('config.php');
$user = $_COOKIE['VisitorName'];
$who = $_COOKIE["VisitorName"];
mysql_query("UPDATE members SET `last`='".date('YmdGis')."' WHERE username='$who'") or die(mysql_error());
mysql_query('UPDATE members SET status="on" WHERE username="'.$_COOKIE['VisitorName'].'"');
function un($n){ include('config.php');
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
  return $asd; 
} 
$action=$_GET['action'];
$pid=$_GET['pid'];
$paction=$_POST['pa'];
if (isset($_GET['limit']) & $_GET['limit']!==null){$limit=$_GET['limit'];}else{$limit=2;}
if ($action=='comment'){
$sqlb = mysql_query("SELECT * FROM fdcomments WHERE pid='$pid'");
if(mysql_num_rows($sqlb)==0){$starta=mysql_num_rows($sqlb);echo "<h2 style='text-align:center;'>No comment yet</h2>";}
if(mysql_num_rows($sqlb)==1){$starta=0;}
if(mysql_num_rows($sqlb)==2){$starta=0;}
if(mysql_num_rows($sqlb)>2){$starta=0;}
if(mysql_num_rows($sqlb)>2 & isset($_GET['limit']) & $_GET['limit']==2){$starta=2-mysql_num_rows($sqlb);}
if(mysql_num_rows($sqlb)!==0){
if (strpos($starta,'-')!==false) {$starts=explode('-',$starta);$start=$starts[1];}else{$start=$starta;}
$sql = "SELECT * FROM fdcomments WHERE pid='$pid' ORDER BY time ASC LIMIT $start,$limit";
$q = mysql_query($sql) or die(mysql_error());
 while($result = mysql_fetch_array($q)) 
 { 
 $usid = $result['id'];
 $name = $result['name'];
 $time = $result['time'];
 $puser = $result['user'];
?>
<div id='cbox'>
<table><tbody><tr>
<td><img src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $puser; ?>" height='32px' width='32px'></td>
<td><div id='cbox-cont'><a href="profile.php?user=<?echo$puser;?>"><b><? echo un($puser);?></b></a><? echo" <span style='cursor:pointer;color:#999;' title='".date_format(date_create($time), 'd F 20y')."'>".date_format(date_create($time), 'g:iA')?></span><br><span style='color:black;'><?echo $result['comment'];?></span></div></td>
</tr></tbody></table>
</div>
<?
}}
}$id=$_GET['pid'];
$sql = "SELECT * FROM fdposts WHERE id='$id' ORDER BY id DESC";
$q = mysql_query($sql) or die(mysql_error());
while($r = mysql_fetch_array($q)) { 
$tl =$r['likes'];
}
if ($action=='likes'){
$data2= mysql_query("SELECT * FROM fdposts WHERE id = '".$pid."'");
while($re = mysql_fetch_array($data2)){echo $re['likes'];}
}
if ($action=='lou'){ 
?><span id='likecount'><? echo $tl; ?></span> <a id="<? echo $id; ?>" style="cursor:pointer;"><?
$data3= mysql_query("SELECT * FROM fdlikes WHERE pid='".$id."'and user='".$user."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'Like' ;}else{echo 'Unlike';}
?>
<script>
$("a").click(function(){
event.preventDefault(); 
var th = this.href;
var pid = this.id;
var lc=$("#likecount");
if (this.text=='Like'){
$.post("action.php", {action: 'like', id: pid}, function(data) {lc.text(data);});
}
if (this.text=='Unlike'){
$.post("action.php", {action: 'unlike', id: pid}, function(data) {lc.text(data);});
}
});
</script>
<?}
if ($action=='pimg'){
$post= $_POST['text']; 
 $target_path = "/home/simsu/subins/accounts/data/fd/uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
$imgurl='//accounts-subins.hp.af.cm/data/fd/uploads/'.$_FILES['uploadedfile']['name'];
echo "<center><img src='$imgurl' class='preview'></center>";
}
}
if ($action=='upphoto'){?>
<div style="color:white;" id='photodiv'>
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="java/jquery.form.js"></script>
<script type="text/javascript" > 	
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#previewfr").html('');
			    $("#previewfr").html('<img src="images/loader.gif" alt="Uploading....">');
			$("#up_photo").ajaxForm({
						target: '#previewfr'
		}).submit();
		
			});
            $('#text1').live('change', function()			{ 
			           $("#previewfr").html('');
			    $("#previewfr").html('<img src="images/loader.gif" alt="Uploading....">');
			$("#up_photo").ajaxForm({
						target: '#previewfr'
		}).submit();
		
			});
        }); 
</script><center>
<form method='post' id='up_photo' action='action.php' enctype="multipart/form-data">
Say something about this photo<br>
<textarea class="input" rows="3" cols="40" name="text" id="text1"></textarea>
<input value="pimg" name="action" type="hidden">
<span class="error" style="display:none"> Please Enter Valid Data.</span>
<div id="up_file" style="border-top:2px outset #EEE;">
<input name="uploadedfile" id="photoimg" type="file"><br>
</form>
<div id='previewfr'></div>
</div></center>
<?}?>
<? if ($action=='ppc'){echo file_get_contents('//accounts-subins.hp.af.cm/profile_pic.php');}
if ($action=='chat'){?>
<table style="width:100%;"><tbody>
<?
$rexi=$_GET['rec'];
mysql_query("UPDATE fdchat SET r='s' WHERE user='$rexi' and recip='$who'");
$fd=mysql_query("SELECT * FROM fdchat WHERE user='$who' and recip='$rexi' or user='$rexi' and recip='$who'");
while($rx = mysql_fetch_array($fd)){$datax = mysql_query("SELECT * FROM members WHERE username='".$rx['user']."' LIMIT 0, 50");while($ra = mysql_fetch_array($datax)){echo '<tr style="width:100%;border-top:1px solid #44B98A;"><td style="width:32px;"><img src="//accounts-subins.hp.af.cm/getimg.php?user='.$rx['user'].'&height=32&width=32" height="32px" width="32px"></td><td><b><a title="'.$rx['user'].'" href="profile.php?user='.$rx['user'].'">'.$ra['name'].'</a></b>  <span title="'.date_format(date_create($rx['posted']), 'd F 20y').'">'.date_format(date_create($rx['posted']), 'g:iA').'</span><br>'.$rx['text'].'</td>';}}?>
</tbody></table>
<?}?>
<?
if($action=='file'){
include("config.php");$data = mysql_query("SELECT * FROM fdfriends WHERE user='$who' LIMIT 0, 10"); while($r = mysql_fetch_array( $data ))  {$datax = mysql_query("SELECT * FROM members WHERE username='".$r['friend']."' LIMIT 0, 10");while($rx = mysql_fetch_array($datax)){$fname=$rx['name'];$fu=$r["friend"];$stus=$rx['status'];echo "<li id=':r3' class='roster_list_item' aria-labelledby=':r4' role='listitem menuitem'><button class='g-button-chat' id=':r4' tabindex='-1' class='roster_row_online'><table><tbody><tr><td><img height='32px' width='32px' src=\"//accounts-subins.hp.af.cm/getimg.php?user=$fu&height=32&width=32\"></td><td><div class=\"bubble $stus-icon\"></div></td><td id=\"fnametd\" title=\"$fu\">$fname</td></button></tr></tbody></table></li>";}}
}
if($action=='red'){?>
<script type="text/javascript" src="//fd-subins.hp.af.cm/java/jquery-latest.js"></script>
<form action='//fd-subins.hp.af.cm/action.php' style='display:none;' id='redfa' method='post'><input type='submit'><input name='action' value='read'><input name='red' value='yes' style='display:none;'></form>
<script>
$(document).ready(function(){
$("#redfa").submit();
window.close();
});
</script>
<?
}
if ($action=='friends'){
$q=$_GET['q'];
 $data = mysql_query("SELECT * FROM members WHERE username LIKE '$q%' or name LIKE '$q%'"); 
 while($r = mysql_fetch_array($data)) 
 { $nbs=$r['name'];$nb=$r['username'];
 echo "<tr><td><img height='32px' width='32px'src='//accounts-subins.hp.af.cm/getimg.php?user=$nb'></td><td style='position: relative;top: -10px;text-align:left;'>$nbs</td></tr>\n"; 
 }
}
if ($action=='share'){?>
<? include('config.php');
$who = $_COOKIE["VisitorName"];
if (isset($pid)){$sql = "SELECT * FROM fdposts WHERE id='$pid' ORDER BY id DESC";}
$q = mysql_query($sql) or die(mysql_error());
$rn = mysql_num_rows($dataa);
while($r = mysql_fetch_array($q)) { 
$id= $r['id'];
$type = $r['type'];
$user=$r['user'];?>
<form id='confirmsh'><input name='action' type="hidden" value="share">
<input name='via' type="hidden" value="Shared from <a href='profile.php?user=<?echo$user;?>'><? echo un($user);?></a>">
<textarea placeholder="Say something about this post" cols="60" name="text"></textarea><br><br>
<div id="<?php echo $id; ?>" style="text-align:left;" class="message_box">
<div id='pholder' style="padding-left:60px;"><table><tbody><tr><td id='pimg'><a><img style="height: 48px;width: 48px;" src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $who; ?>"></a></td><td id='asd'><div id='pcont'>
<div class="ze ie"></div>
<span id='puser'><?php echo "<a id='hreftag' href='//fd-subins.hp.af.cm/profile.php?user=$who'><b>" . un($who) . "</b></a></span><span id='ptime' style='cursor:pointer;' title='".date('g:iA')."'>".date('d F 20y');?></span><h4 id='pcontent'><span><?php echo $r['post']; ?></span></h4><? if ($type=='img'){?><input type="hidden" name='purl' value="<? echo $r['url'];?>"><input type="hidden" name='pt' value="img"><div style="padding: 0px 0px 0px 20px;"><a id="pvfull" href="photo.php?id=<? echo $id; ?>&view=fullscreen"><img id="up_img" title="Click to view this image in Fullscreen" height="48" width="48" alt="<? echo $r['user']; ?>" src="<? echo $r['url'];?>"></a></div><?}?><?}?></div></div><br>
<input type="submit" name='confirm' style="margin-left:10px;background:#3D9400;color:white;" value="Post">
<input onclick="$('#overlay').hide();" type="button" name='confirm' style="margin-left:10px;" value="Cancel">
</form>
<script>
$("#confirmsh").live('submit',function(){event.preventDefault();
$("#confirmsh :input").attr("disabled", true);
$.post("post.php", $(this).serialize(), function(data) {$('#overlay').toggle();$("#previewpc").html(data);});
});
</script>
<?
}
if ($paction=='all'){Header("content-type: application/x-javascript");$nsql=mysql_query("SELECT * FROM `fdchat` WHERE `recip`='$who' AND `r`='n' LIMIT 0,1");while($t=mysql_fetch_array($nsql)){$rew=$t['user'];}
if(mysql_num_rows($nsql)==1){?>
localStorage['acs']='3000';
$('#iframe2').load('//fd-subins.hp.af.cm/get.php?action=chat&rec='+"<?echo$rew;?>");
$("#upbar").html('<table><tbody><tr><td><img height="32px" width="32px" src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$rew;?>&amp;width=32&amp;height=32"></td><td><div class="bubble off-icon"></div></td><td id="<?echo$rew;?>" title="funny">'+"<?echo un($rew);?>"+'</td></tr></tbody></table>');
$("#to").val("<?echo$rew;?>");
$('#chatbox').show();
$("#iframe2").animate({ scrollTop: '1000' }, 'normal');
$("#usermsg").focus();
$("body").append("<div id='asdv' hidden></div>");
<?}
$ncount=mysql_query("SELECT * FROM fdnotify WHERE user=\"$who\" and red=\"no\"");
if(mysql_num_rows($ncount)==!"0"){?>$("#tenb").html("<?echo mysql_num_rows($ncount);?>");
$("#tenb").css('background-color','#D14836');
$("#tenb").css('background-image','-webkit-gradient(linear,left top,left bottom,from(#DD4B39),to(#D14836))');
$("#tenb").css('color','white');
if ($("#notifybox tr:first").html()=='<?$nbox=mysql_query("SELECT * FROM fdnotify WHERE user=\"$who\" and red=\"no\" ORDER BY id DESC LIMIT 1");while($ra = mysql_fetch_array($nbox)) {echo "<tr id=\"nycont\" style=\"background:white;\"><td><img height=\"44px\" width=\"44px\"src=\"//accounts-subins.hp.af.cm/getimg.php?user=".$ra["mention"]."\"></td><td style=\"padding-top: 20px;padding-left: 5px;\"><a target=\"_blank\" style=\"color:green;\" href=\"//fd-subins.hp.af.cm/profile.php?user=".$ra["user"]."\">".$ra["text"]."</a><br><br></td></tr>";}?></div>'){}else{
$("#notifybox tr:first").before('<?$nbox=mysql_query("SELECT * FROM fdnotify WHERE user=\"$who\" and red=\"no\" ORDER BY id LIMIT 1 DESC");while($ra = mysql_fetch_array($nbox)) {echo "<tr id=\"nycont\" style=\"background:white;\"><td><img height=\"44px\" width=\"44px\"src=\"//accounts-subins.hp.af.cm/getimg.php?user=".$ra["mention"]."\"></td><td style=\"padding-top: 20px;padding-left: 5px;\"><a target=\"_blank\" style=\"color:green;\" href=\"//fd-subins.hp.af.cm/profile.php?user=".$ra["user"]."\">".$ra["text"]."</a><br><br></td></tr>";}?></div>');}
<?}
if (isset($_POST['last'])){$re=mysql_query("SELECT * FROM `fdchat` WHERE `recip`='".$who."' and `user`='".$_POST['to']."' or `user`='".$who."' and `recip`='".$_POST['to']."' ORDER BY id DESC LIMIT 0,1");
while($r=mysql_fetch_array($re)){echo"var sop='<td style=\"width:32px;\"><img src=\"//accounts-subins.hp.af.cm/getimg.php?user=".$r['user']."&amp;height=32&amp;width=32\" height=\"32px\" width=\"32px\"></td><td><b><a title=\"".$r['user']."\" href=\"profile.php?user=".$r['user']."\">".un($r['user'])."</a></b>  <span title=\"".date_format(date_create($r['posted']), 'd F 20y')."\">".date_format(date_create($r['posted']), 'g:iA')."</span><br>".$r['text']."</td>';";}
$last=str_replace('"', '\"',$_POST['last']);
?>
if (sop=="<?echo$last;?>"){localStorage['try']='n';}else{localStorage['try']='s';$('#iframe2 table tbody tr:last').after('<tr style="width:100%;border-top:1px solid #44B98A;">'+sop+'</tr>');if ($('#iframe2 table tbody tr:last').find("b").text()=='<?echo un($who);?>'){$('#iframe2 table tbody tr:last').remove();}}
<?}$erw=date('YmdGis', strtotime('-25 seconds'));?>
var asc="<?$data = mysql_query("SELECT * FROM fdfriends WHERE user='$who' and `both`='s'"); while($r = mysql_fetch_array( $data ))  {$datax = mysql_query("SELECT * FROM members WHERE username='".$r['friend']."' ORDER BY `status` DESC");while($rx = mysql_fetch_array($datax)){if($rx['last']<$erw){mysql_query("UPDATE members SET `status`='off' WHERE username='".$rx['username']."'");}$fname=$rx['name'];$fu=$r["friend"];$stus=$rx['status'];
echo '<li id=\":r3\" class=\"roster_list_item\" aria-labelledby=\":r4\" role=\"listitem menuitem\"><button class=\"g-button-chat\" id=\":r4\" tabindex=\"-1\"><table><tbody><tr><td><img height=\"32px\" width=\"32px\" src=\"//accounts-subins.hp.af.cm/getimg.php?user='.$fu.'&amp;width=32&amp;height=32\"></td><td><div class=\"bubble '.$stus.'-icon\"></div></td><td id=\"fnametd\" title=\"'.$fu.'\">'.$fname.'</td></tr></tbody></table></button></li>';
}}?>";
if (asc!==$('.roster_buzz1').html()){$('.roster_buzz').html(asc);$('.roster_buzz1').html(asc);$(".roster_buzz .roster_list_item").each(function(){
if ($(this).find(".on-icon").length==1){$(".roster_buzz li:first").before('<li id=":r3" class="roster_list_item" aria-labelledby=":r4" role="listitem menuitem">'+$(this).html()+'</li>');$(this).remove();}
});}
<?
}?>
