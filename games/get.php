<?include('config.php');function un($n){
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
if(mysql_num_rows($fasdxast)!==0){return $asd;}else{return $n;}
}$action=$_GET['a'];$gid=$_GET['gid'];
if($action=='s'){?>
<script src="java/js.php?script=scf"></script>
<?
echo"<form id='scf'><input type='hidden' name='action' value='scf'><input type='hidden' name='id' value='$gid'>";if ($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){echo "<input type='text' placeholder='Type name here' name='name'>";}echo"<input type='text' placeholder='Type score here and submit' name='score'><input type='submit'></form><br>";
$sql=mysql_query("SELECT * FROM gscore WHERE id='$gid'");if(mysql_num_rows($sql)==0){echo"No Scores Submitted. Be the first to submit score !";}while($r=mysql_fetch_array($sql)){echo "<ul style='list-style-image:url(\"//accounts-subins.hp.af.cm/getimg.php?user=".$r['user']."&width=32&height=32\")'><li style='margin-top:-4px;'>".un($r['user'])." : ".$r['score']."</li></ul>";}}
if($action=='c'){?><script src="java/js.php?script=cmf"></script>
<?
echo"<form id='scf'><input type='hidden' name='action' value='cmf'><input type='hidden' name='id' value='$gid'>";if ($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){echo "<input type='text' placeholder='Type name here' name='name'>";}echo"<input type='text' placeholder='Type comment here and submit' name='cmt'><input type='submit'></form><br>";
$sql=mysql_query("SELECT * FROM gcomments WHERE id='$gid'");if(mysql_num_rows($sql)==0){echo"No Comments. Be the first to comment !";}while($r=mysql_fetch_array($sql)){echo "<ul style='list-style-image:url(\"//accounts-subins.hp.af.cm/getimg.php?user=".$r['user']."&width=32&height=32\")'><li style='margin-top:-4px;'>".un($r['user'])."<br>".$r['comment']."</li></ul>";}}
if(isset($_GET['dir'])){?>
<center><div id="directory" style="text-align:center;margin-top:100px;">
<table width="100%"><tr>
<?$appu=1;$sql=mysql_query("SELECT * FROM games");while($r=mysql_fetch_array($sql)){?>
<td><div id="demo-4" class="demobox"><?if($r['imgbig']==''){?><img src="images/swf.gif" height="200px" width="240px" /><?}else{?><img src="<?echo$r['imgbig'];?>" height="200px" width="240px" /><?}?><div><h3><?echo$r['name'];?></h3><span title="<?echo$r['name'];?>"><?echo$r['ds'];?></span><br><center><a class="g-button g-button-submit" href="play.php?game=<?echo$r['id'];?>" id="link-signup" style="height: 0.65cm; width: 2.71cm;">Play Now</a></center></div></div></td><?if($appu==5){?></tr><tr><?}if(substr($appu,-1)==0){?></tr><tr><?}if(substr($appu,-1)==5){?></tr><tr><?}$appu++;?>
<?}?>
</table>
</div></center>
<?}?>

