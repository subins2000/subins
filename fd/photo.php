<?php
include('config.php');
$pid=$_GET['id'];
$view=$_GET['view'];
$sql = "SELECT * FROM fdposts WHERE id='$pid' ORDER BY id DESC";
$q = mysql_query($sql) or die(mysql_error());
$rn = mysql_num_rows($dataa);
$user=$_COOKIE['VisitorName'];$who=$_COOKIE['VisitorName'];
function un($n){
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
  return $asd; 
} 
while($r = mysql_fetch_array($q)) { 
$url= $r['url'];
$type = $r['type'];
$puser= $r['user'];
list($width, $height, $type, $attr) = getimagesize($url);
$ratio = $width / $height;
$top=(500-$height)/2;
$top35=(500-$height)/2-$height;
}
$sqls = "SELECT * FROM members WHERE username = '$puser'";
$qs = mysql_query($sqls) or die(mysql_error());
while($r = mysql_fetch_array($qs)) { 
  $rname = $r['name']; 
}
if ($_SERVER['HTTP_REFERER']=='https://fd-subins.hp.af.cm/Home.php' || $_SERVER['HTTP_REFERER']=='http://fd-subins.hp.af.cm/Home.php' || $_SERVER['HTTP_REFERER']=='https://fd-subins.hp.af.cm/profile.php' || $_SERVER['HTTP_REFERER']=='http://fd-subins.hp.af.cm/Home.php'){
if ($view=='fullscreen'){
?>
<div id="img_big"><? if($ratio>1){?><img style="vertical-align:center;line-height:520px;margin-top:<?echo$top;?>px;" src="<?echo $url;?>"><?}else{?><img style="vertical-align:center;line-height:520px;margin-top:<?echo$top35;?>px;" src="<?echo $url;?>"><?}?></div>
<div id="img_big_right" aria-busy="false">
<img id='img_big_right_img' src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $puser; ?>" height='100px'>
<a href="profile.php?user=<? echo $puser;?>" id="img_big_right_name"><? echo $rname;?></a></div>
<div id="img_big_right_content" aria-busy="true">
<br>
<script>
$('#postcmt').submit(function() {
event.preventDefault(); 
$.post("action.php", $('#postcmt').serialize());
var ccount=$("#cmtcount<?php echo $pid; ?>").text();
$("#cmtcount<?php echo $pid; ?>").text(parseFloat(ccount)+1);
var pidc=$("#pidv<?php echo $pid; ?>").val();
if ($("#comment-loader").text()=='No comment yet'){$("#comment-loader<?php echo $id; ?>").html('');}
$("#comment-loader").append("<div id='cbox'><table><tbody><tr><td><img src=\"//accounts-subins.hp.af.cm/getimg.php?user=<? echo $who; ?>\" height='32px' width='32px'></td><td><div id='cbox-cont'><b><? echo un($who);?></b><? echo '  <span style=\'cursor:pointer;\' title=\''.date('d F 20y').'\'>'.date('g:iA');?></span><br>"+$('#postcmt').find("#cmti").val()+"</div></td></tr></tbody></table></div>");
$('#postcmt<?php echo $pid; ?>').find("#cmti").val("");
});
$(document).ready(function() {
$("#comment-loader").load("get.php?action=comment&pid=<?php echo $pid; ?>&limit=30");
$("#comment-loader").addClass("comment-loader");
});
</script>
<table><tbody><tr>
<td><div id='lou' style="margin-left:10px;"></div></td></tr></tbody></table><center>
<table><tbody><tr>
<form id="postcmt" method="post" action="action.php">
<td><img id='img_big_comment_img' src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $user; ?>" height='32px' width='32px'></td><td>
<input value="comment" name='action' type="hidden">
<input class="input" name='comment' id="cmti" style="color:black !important;" size="14" placeholder="Type your comment"></td>
<td><button class="g-button g-button-submit" type="submit" value="Comment">Comment</button>
<input value="<?php echo $pid; ?>" id="pidv" name='id' type="hidden"></td>
</tr></tbody></table>
</form></center><br>
<div id='comment-loader' style="height:300px;overflow:auto;display:block;"></div>
</div>
<?}else{header("location://fd-subins.hp.af.cm");}}else{header("location://fd-subins.hp.af.cm");}?>
