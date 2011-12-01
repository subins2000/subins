<?include('config.php');
function un($n){
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
if(mysql_num_rows($fasdxast)!==0){if ($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){return $n;}else{return $asd;}}else{return $n;}}
if ($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){if($_POST['name']==null){$who='guest';}else{$who=$_POST['name'];}}else{$who=$_COOKIE['VisitorName'];}$action=$_POST['action'];
if ($action=='scf'){mysql_query("INSERT INTO gscore(`id`,`user`,`score`)VALUES('".$_POST['id']."','$who','".$_POST['score']."')");
echo "<ul style='list-style-image:url(\"//accounts-subins.hp.af.cm/getimg.php?user=".$who."&width=32&height=32\")'><li>".un($who)." : ".$_POST['score']."</li></ul><script>$('#scf :input').attr('disabled', false);</script>";}
if ($action=='cmf'){mysql_query("INSERT INTO gcomments(`id`,`user`,`comment`)VALUES('".$_POST['id']."','$who','".$_POST['cmt']."')");
echo "<ul style='list-style-image:url(\"//accounts-subins.hp.af.cm/getimg.php?user=".$who."&width=32&height=32\")'><li>".un($who)." : ".$_POST['cmt']."</li></ul><script>$('#scf :input').attr('disabled', false);</script>";}
?>
