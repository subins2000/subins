<?php session_start();
include('../config.php');
function un($n){
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
if(mysql_num_rows($fasdxast)!==0){return $asd;}else{return $n;}
}
if(isset($_COOKIE['guest'])){$who=$_COOKIE['guest'];}else{$who=$_COOKIE['VisitorName'];}
$sql=mysql_query("SELECT * FROM chatters WHERE chatters.user = '".$who."'");if(mysql_num_rows($sql)==0){
mysql_query("INSERT INTO chatters (user,last) VALUES('".$who."','".date_format(date_create(), 'YmdGis')."')") or die(mysql_error());}
if(isset($_POST['username']) && isset($_POST['usermsg'])) {
  if(trim($_POST['username']) != "" && trim($_POST['usermsg']) != "") {
    $message = strip_tags(mysql_real_escape_string(trim($_POST['usermsg'])));  
    $user    = strip_tags(mysql_real_escape_string(trim($_POST['username'])));  
    $img     = strip_tags(mysql_real_escape_string(trim($_POST['userimg'])));  
 
 $_SESSION['username'] = $user;

    $s = "INSERT INTO message(username,message,posted,img) VALUES ('$user', '$message',NOW(), '$img')";
    $q = mysql_query($s) or die(mysql_error());
  }
}$erw=date('YmdGis', strtotime('-20 seconds'));
mysql_query("UPDATE chatters SET last='".date_format(date_create(), 'YmdGis')."' WHERE user='$who'");
$sqler=mysql_query("SELECT * FROM chatters");while($r = mysql_fetch_array($sqler)){if($r['last']<$erw){mysql_query("DELETE FROM chatters WHERE user='".$r['user']."'");}}
  if(isset($_GET['msg'])){$s = "SELECT * FROM message ORDER BY id ASC";}else{$s = "SELECT username,message,posted,img FROM message WHERE (DAY(posted) = DAY(CURDATE()) AND MONTH(posted) = MONTH(CURDATE()) AND YEAR(posted) = YEAR(CURDATE())) ORDER BY id ASC";}
  $q = mysql_query($s) or die(mysql_error()); 
  while($r = mysql_fetch_array($q)) { 
  if($r['username'] == $_SESSION['username']) $user_bg = '#2C50A2'; else $user_bg = '#FF3333';
?>
    <div class='msgln'><img style="float:left;height: 32px;width: 32px;" src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $r['img']; ?>"><div id='mcontent'><?php echo "<strong>" . un($r['username']) . "</strong> " . date('g:i:s a', strtotime($r['posted'])); ?>
    <div class='msg' id='msg'><?php echo $r['message']; ?></div></div></div>
<?php } ?>
<script>
if($(".ousers").html()!=="<?$result = mysql_query('SELECT * FROM chatters');while($row = mysql_fetch_array($result)){echo $row['user'];echo '<br>';}?>"){$(".ousers").html("<?$result = mysql_query('SELECT * FROM chatters');while($row = mysql_fetch_array($result)){echo $row['user'];echo '<br>';}?>");}
</script>
