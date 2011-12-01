<script>window.close();</script>
<?php
include('config.php');
$action=$_POST['action'];
$pid=$_POST['id'];
$who=$_COOKIE['VisitorName'];
$user=$_COOKIE['VisitorName'];
function un($n){ include('config.php');
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
  return $asd; 
} 
$data= mysql_query("SELECT * FROM members WHERE username = '".$user."'");
 while($result = mysql_fetch_array( $data )) 
 { 
 $usid=$result['id'];
 }
$data2= mysql_query("SELECT * FROM fdposts WHERE id = '".$pid."'");
 while($result2 = mysql_fetch_array( $data2 )) 
 { 
 $lks=$result2['likers'];
 $addls=$result2['likes']+1;
 $subls=$result2['likes']-1;
 }
 if ($lks==0){ $total= $usid;}else{ $total= $lks.','.$usid;}
if ($action=='like'){
$data3= mysql_query("SELECT * FROM fdlikes WHERE pid='".$pid."'and user='".$user."' LIMIT 0,30");
$matches=mysql_num_rows($data3);
if ($matches==0){
mysql_query("INSERT INTO fdlikes (pid, user) VALUES('".$pid."', '".$user."')");
mysql_query("UPDATE fdposts SET likes='$addls' WHERE id='".$pid."'"); echo $lks;}else{}
}else{}
if ($action=='unlike'){
if ($matches==0){
mysql_query("DELETE FROM fdlikes WHERE pid='".$pid."'and user='".$user."'");
mysql_query("UPDATE fdposts SET likes='$subls' WHERE id = '".$pid."'");
echo $lks;}
}
if ($action=='comment'){
$comment=$_POST['comment'];
mysql_query("INSERT INTO fdcomments (pid, user, comment, time) VALUES('".$pid."', '".$user."', '".$comment."', NOW())");
$ft=mysql_query("SELECT * FROM fdposts WHERE id='".$pid."'");while($ftw = mysql_fetch_array($ft)){$asd=$ftw['user'];}
$data2= mysql_query("SELECT * FROM fdposts WHERE id = '".$pid."'");
 while($result2 = mysql_fetch_array( $data2 )) {$addls=$result2['cm']+1;$subls=$result2['likes']-1;}
mysql_query("UPDATE fdposts SET cm='$addls' WHERE id='".$pid."'");
$fta=mysql_query("SELECT * FROM members WHERE username='".$asd."'");while($fte = mysql_fetch_array($ft)){$asd=$fte['name'];}
if ($asd!==$who){
mysql_query("INSERT INTO fdnotify (user, text, red, mention) VALUES('".$asd."', '<a href=\"//fd-subins.hp.af.cm/profile.php?user=".$who."\">".un($who)."</a> commented on your <a href=\"//fd-subins.hp.af.cm/profile.php?user=".$asd."&pid=".$pid."\">post</a>.', 'no', '".$who."')");}
}
if ($action=='up_profile'){
$new=$_POST['new'];
$tbl_name="members"; // Table name 
$sql="UPDATE members SET location = '$new' WHERE username = '$user';";
$add_member = mysql_query($sql);
}
if ($action=='addfd'){
$friend=$_POST['fd'];
$rty=mysql_query("SELECT * FROM fdfriends WHERE user='$who' and friend='$friend'");
if (mysql_num_rows($rty)==0){$sql="INSERT INTO `fdfriends` (`user`, `friend`, `both`, `time`) VALUES(\"".$who."\", \"".$friend."\", \"n\", NOW())";$add_member = mysql_query($sql);mysql_query("INSERT INTO fdnotify (user, text, red, mention) VALUES('".$friend."', '<a href=//fd-subins.hp.af.cm/profile.php?user=".$who.">".un($who)."</a> added you.', 'no', '".$who."')");}
$tyu=mysql_query("SELECT * FROM fdfriends WHERE user='$who' and friend='$friend'");
$tyu2=mysql_query("SELECT * FROM fdfriends WHERE user='$friend' and friend='$who'");
if (mysql_num_rows($tyu)==1 & mysql_num_rows($tyu2)==1){mysql_query("UPDATE fdfriends SET `both`='s' WHERE user='$who' and friend='$friend'");
mysql_query("UPDATE fdfriends SET `both`='s' WHERE user='$friend' and friend='$who'");
}
}
if ($action=='refd'){
$friend=$_POST['fd'];
mysql_query("DELETE FROM fdfriends WHERE user='".$who."' and friend='".$friend."'");
}
if ($action=='read'){
mysql_query("UPDATE fdnotify SET red='yes' WHERE user='$who'");
}
if($action=='chat'){
$to=$_POST['to'];
if(!$to==null){
$sql=mysql_query("SELECT * FROM members WHERE username='".$to."'");while($d = mysql_fetch_array($sql)){$sts=$d['status'];}
if($sts=='off'){while($fte = mysql_fetch_array($ft)){$asd=$fte['name'];}
mysql_query("INSERT INTO fdnotify (user, text, red, mention) VALUES('".$to."', '<a href=\"//subins.hp.af.cm/profile.php?user=".$who."\">".un($who)."</a> sent you a <a href=\"//fd-subins.hp.af.cm/messages.php?user=".$who."\">message</a>.', 'no', '".$who."')");}
$msg=$_POST['usermsg'];
$re=mysql_query("SELECT * FROM `fdchat` WHERE `recip`='".$who."' and `user`='".$_POST['to']."' or `user`='".$who."' and `recip`='".$_POST['to']."' ORDER BY id DESC LIMIT 0,1");while($r=mysql_fetch_array($re)){$wer=$r['user'];$qwe=$r['posted'];}
if($wer==$who){mysql_query('UPDATE fdchat SET text=CONCAT(text,"<br>'.$msg.'") WHERE user="'.$who.'" and posted="'.$qwe.'"') or die(mysql_error());}else{mysql_query('INSERT INTO fdchat (user, recip, text, posted, r) VALUES("'.$who.'", "'.$to.'", "'.$msg.'", NOW(), "n")') or die(mysql_error());}
}}
?>
