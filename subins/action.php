<style>
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
height:200px;
text-align:center;
}
#preview
{
width:200px;
height:200px;
color:#cc0000;
font-size:12px;
text-align:center;
}
</style>
<?php
include('config.php');
$action=$_POST['action'];
$pid=$_POST['id'];
$who=$_COOKIE['VisitorName'];
$user=$_COOKIE['VisitorName'];
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
if ($action=='pimg'){
$name = $_FILES['uploadedfile']['name'];
if(strlen($name)){
$post= $_POST['text']; 
 $target_path = "/home/simsu/subins/accounts/data/fd/uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
$imgurl='//accounts-subins.hp.af.cm/data/fd/uploads/'.$_FILES['uploadedfile']['name'];
?><script src="java/jquery-latest.js"></script>
<div style="color:black;" id='contpre'>
<script>
function confirmp(e){
var iurl ="<? echo $imgurl; ?>";
var ptext ="<? echo $post; ?>";
var finame = "<? echo $_FILES['uploadedfile']['name'];?>";
$.post("action.php", {confirm:e,url:iurl,text:ptext,fname:finame}, function(data) {$("#contpre").html(data);});
$("#contents").load("data.php");
$("#contents").load("data.php");
$("#contents").load("data.php");
$("#contents").load("data.php");
}
</script>
<div style="border:2px solid white;" hidden>Confirm Upload { <a style='cursor:pointer;' onclick="confirmp('yes');">Yes</a>  
<a style='cursor:pointer;' onclick="confirmp('no');">No</a> }</div>
<? if ($post==''){}else{echo '<span hidden>'.$post.'</span>';} ?>
<?
echo "<center><img src='//accounts-subins.hp.af.cm/data/fd/uploads/".$_FILES['uploadedfile']['name']."'  class='preview'></center>";
}}else{echo "Choose a image please.";}
}
if ($_POST['confirm']=='yes'){
$post= $_POST['text']; 
mysql_query("INSERT INTO fdposts(user,post,posted,type,url) VALUES ('$user', '$post',NOW(), 'img', '".$imgurl."')");
echo "<h2>Your post is posted</h2>";
}
if ($_POST['confirm']=='no'){
unlink("/home/simsu/subins/accounts/data/fd/uploads/".$_POST['fname']);
echo "<h2>Your post has been deleted</h2>";
}
if ($action=='comment'){
$comment=$_POST['comment'];
mysql_query("INSERT INTO fdcomments (pid, user, comment, time) VALUES('".$pid."', '".$user."', '".$comment."', '".time()."')");
$ft=mysql_query("SELECT * FROM fdposts WHERE id='".$pid."'");while($ftw = mysql_fetch_array($ft)){$asd=$ftw['user'];}
$fta=mysql_query("SELECT * FROM members WHERE username='".$asd."'");while($fte = mysql_fetch_array($ft)){$asd=$fte['name'];}
mysql_query("INSERT INTO fdnotify (user, text, red, mention) VALUES('".$asd."', '<a href=\"profile.php?user=".$who."\">".$who."</a> commented on your <a href=\"profile?user=".$asd."&pid=".$pid."\">post</a>.', 'no', '".$who."')");
}
if ($action=='up_profile'){
$new=$_POST['new'];
$tbl_name="members"; // Table name 
$sql="UPDATE members SET location = '$new' WHERE username = '$user';";
$add_member = mysql_query($sql);
}
if ($action=='addfd'){
$friend=$_POST['fd'];
mysql_query("INSERT INTO fdnotify (user, text, red, mention) VALUES('".$friend."', '<a href=profile.php?user=".$who.">".$who."</a> added you as a friend.', 'no', '".$who."')");
$sql="INSERT INTO fdfriends (user, friend) VALUES('".$who."', '".$friend."')";
$add_member = mysql_query($sql);
}
if ($action=='red'){
$friend=$_POST['fd'];
mysql_query("INSERT INTO fdnotify (user, text, red, mention) VALUES('".$who."', '<a href=profile.php?user=".$friend.">".$friend."</a> unfriended you.', 'no', '".$friend."')");
$sql="DELETE FROM fdfriends WHERE user='".$who."' and friend='".$friend."'";
$add_member = mysql_query($sql);
}
if ($action=='read'){
mysql_query("UPDATE fdnotify SET red='yes' WHERE user='$who'");
}
if($action=='chat'){
$to=$_POST['to'];
if(!$to==null){
$sql=mysql_query("SELECT * FROM members WHERE username='".$to."'");while($d = mysql_fetch_array($sql)){$sts=$d['status'];}
if($sts=='off'){while($fte = mysql_fetch_array($ft)){$asd=$fte['name'];}
mysql_query("INSERT INTO fdnotify (user, text, red, mention) VALUES('".$to."', '<a href=\"profile.php?user=".$who."\">".$who."</a> sent you a <a href=\"messages?user=".$who."\">message</a>.', 'no', '".$who."')");}
$msg=$_POST['usermsg'];
mysql_query('INSERT INTO fdchat (user, recip, text, posted) VALUES("'.$who.'", "'.$to.'", "'.$msg.'", "'.time().'")') or die(mysql_error());
}}
?>
