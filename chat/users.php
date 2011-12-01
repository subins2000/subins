<?php
if (isset($_POST['logout'])){removeuser();}
function removeuser(){
// Connects to your Database 
include('config.php');
$sql="DELETE FROM chatters WHERE chatters.user = '".$_COOKIE['VisitorName']."'";
mysql_query("DELETE FROM chatters WHERE chatters.user = '".$_COOKIE['guest']."'");
$r_member = mysql_query($sql);
}
?>
