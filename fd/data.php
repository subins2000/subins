<?php
include('config.php');
$who = $_COOKIE["VisitorName"];
$start=$_GET['s'];
$stop=$_GET['st'];
$ex=$_GET['ex'];
function un($n){
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
  return $asd; 
} 
if (isset($_GET['pid']) & $_GET['pid']!==null){$sql = "SELECT * FROM fdposts WHERE id='".$_GET['pid']."'";}else{
if (isset($_GET['user'])){$sql = "SELECT * FROM fdposts WHERE user='".$_GET['user']."' ORDER BY id DESC";}else{if(isset($ex)){if(isset($_GET['posts']) & $_GET['posts']=='all'){$sql = "SELECT * FROM fdposts WHERE id < '$ex' ORDER BY id DESC LIMIT 5";}else{$sql = "SELECT * FROM fdposts WHERE id < '$ex' or user IN (SELECT friend FROM `fdfriends` WHERE user='$who') and user='$who' ORDER BY id DESC LIMIT 5";}}else{if(isset($_GET['posts']) & $_GET['posts']=='all'){$sql = "SELECT * FROM fdposts ORDER BY posted DESC LIMIT 5";}else{$dataaw = mysql_query("SELECT * FROM fdfriends WHERE user=\"$who\"");if(mysql_num_rows($dataaw)!=='0'){$sql = "SELECT * FROM fdposts WHERE user IN (SELECT friend FROM `fdfriends` WHERE user='$who') or user='$who' ORDER BY posted DESC LIMIT 5";}else{$sql = "SELECT * FROM fdposts ORDER BY posted DESC LIMIT 5";}}}}}

$q = mysql_query($sql);
$rn = mysql_num_rows($dataa);
while($r = mysql_fetch_array($q)) { 
$id= $r['id'];
$type = $r['type'];
$user=$r['user'];
$data2= mysql_query("SELECT * FROM members WHERE username = '".$user."'");
 while($result = mysql_fetch_array($data2)) 
 { 
 $usid=$result['id'];
  $name = $result['name'];
 }
?>
<div id="<?php echo $id; ?>" style="max-width: 600px;" class="message_box">
<div id='pholder'><table><tbody><tr><td id='pimg'><a><img style="height: 48px;width: 48px;" src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $r['user']; ?>&height=48&width=48"></a></td><td id='asd'><div id='pcont'>
<div class="ze ie"></div>
<span id='puser'><?php echo "<a id='hreftag' href='//fd-subins.hp.af.cm/profile.php?user=$user'><b>" . $name . "</b></a></span><span id='ptime' style='cursor:pointer;color:#999;' title='".date_format(date_create($r['posted']), 'd F 20y')."'>".date_format(date_create($r['posted']), 'g:iA');?></span><span><?$arr=explode(' ',trim($r['via']));if($arr[0]=="Shared"){echo$r['via'];}?></span><h4 style='margin-right: 60px;text-align:left;' id='pcontent'>​<?php echo $r['post']; ?><? if ($type=='img'){?><br><a id="pvfull" href="photo.php?id=<? echo $id; ?>&view=fullscreen"><img id='up_img' title="Click to view this image in Fullscreen" alt="<? echo $r['user']; ?>" src="<? echo $r['url'];?>"></a><?}?></h4><div id='post-footer'><table><tbody><tr><td><div style="padding-left: 8px;padding-top: 4px;background: url('images/mixed.png') 0px 4px;height: 30px;width: 30px;color:white;position:relative;top:-3px;"><span class="lcount" id="likecount<? echo $id; ?>"><?echo$r['likes'];?></span></div><a id="<? echo $id; ?>" style="position: relative;left:4px;top:-10px;" class="sof" style="cursor:pointer;" <? $data3=mysql_query("SELECT * FROM fdlikes WHERE pid='".$r['id']."' and user='".$who."' LIMIT 0,30");$matches=mysql_num_rows($data3);if ($matches==0){echo 'title="Like"' ;}else{echo 'title="Unlike"';}?>><button style="border:0px;cursor:pointer;background: url('images/mixed.png') 104px 98%;height: 16px;width: 17px;"></button></a></td><td><div style="padding-left: 8px;padding-top: 4px;background: url('images/mixed.png') 0px 4px;height: 30px;width: 30px;color:white;"><span class="ccount" id="cmtcount<? echo $id; ?>"><?echo$r['cm'];?></span></div><a id="<? echo $id; ?>" class="sof" style="position: relative;left:2px;top:-6px;" title="Comment" style="cursor:pointer;"><button style="border:0px;cursor:pointer;background: url('images/mixed.png') 62px 100%;height: 12px;width: 17px;top:4px;"></button></a>&nbsp;&nbsp;</td><td><div style="padding-left: 8px;padding-top: 4px;background: url('images/mixed.png') 0px 4px;height: 30px;width: 30px;top: -3px;position: relative;color:white;"><span class="shcount" id="shcount<? echo $id; ?>"><?echo$r['sh'];?></span></div><a id="<? echo $id; ?>" class="sof" title="Share"><button style="border:0px;cursor:pointer;background: url('images/mixed.png') -107px -23px;height: 15px;width: 25px;top: -5px;position: relative;"></button></a></td></tr></tbody></table></div>
<center>
<div id="table<?php echo $id; ?>" style="display:none;" hidden>
<div class="comment-loader" id="comment-loader<?php echo $id; ?>" href="<?php echo $id; ?>"></div>
<form id="postcmt<?php echo $id; ?>" method="post" action="action.php">
<div style='float:center;'>
<img style='position:relative;top:10px;' id='img_big_comment_img' src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $who; ?>" height='32px' width='32px'><input value="comment" name='action' type="hidden">
<input class="input" value="" id='cmti' style="color:black !important;max-width:300px;" placeholder="Type your comment here" name='comment'>
<button style="bottom:5px;position:relative;" class="g-button g-button-submit" type="submit" value="Comment" id="cmtsub">Comment</button></div>
<input value="<?php echo $id; ?>" id="pidv<?php echo $id; ?>" name='id' type="hidden"><br /></div>
</div>
</tr></tbody></table>
</form>
</center>
</div><br />
<div id='more-c' hidden>​<?php echo $r['post']; ?></div>
</div>
<?php }?>
<script>
$('.message_box').each(function() {
$(this).mouseover(function(){$(this).addClass('mbbl');$(this).find('#hreftag').addClass('mbbl');});
$(this).mouseleave(function(){$(this).removeClass('mbbl');$(this).find('#hreftag').removeClass('mbbl');});
  var fgh='bvg'+$(this).attr('id');  
  var rte = $(this).find('#pcontent').html().replace(/<[^>]+>/g, "");  
  localStorage[fgh]=rte;     
    if($(this).find('#pcontent').text().length > 500)
    {
     $(this).find('#pcontent').text($(this).find('#pcontent').text().slice(0, 300));
     $(this).find('#pcontent').append('<div id="read_more">Expand Post</div>');
    }
});
$('.message_box a[href],#comment-loader').each(function(){if($(this).attr("href").match('user')){$(this).attr('id','hreftag');}});
$('.message_box #pcontent a[href]').each(function(){
if($(this).attr('id')!="pvfull" && $(this).attr('id')!="hreftag"){if($(this).attr('href').match('url.php')){}else{$(this).attr("href","url.php?url="+$(this).attr('href'));$(this).attr("target","_blank");}}});
$(".message_box .sof").each(function(){if($(this).attr('title')=='Unlike'){$(this).css("top","-8px");$(this).css("left","4px");$(this).find("button").css("background","url('images/mixed.png') 83px 100%");}});
$(".comment-loader").each(function(){
var pid = $(this).attr("href");
$(this).load("get.php?action=comment&limit=2&pid="+pid);
});
</script>
<?if (!isset($ex)){?>><?}?>
