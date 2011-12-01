<?
include('../config.php');
if(isset($_POST)){
$action=$_POST['action'];
if($action=='con'){
mysql_query("UPDATE members SET phone='".$_POST['phone']."',email='".$_POST['email']."' WHERE username='".$_COOKIE['VisitorName']."'");
}
if($action=='cp'){
$co=$_POST['color'];
$sql=mysql_query("SELECT * FROM members WHERE username='".$_COOKIE['VisitorName']."'");
while($r=mysql_fetch_array($sql)){
$arr = array('bg' => $co);
if($r['set']=='' || $r['set']==null){mysql_query("UPDATE members SET `set`='".json_encode($arr)."' WHERE username='".$_COOKIE['VisitorName']."'");}else{
$arr = json_decode($r['set'],true);
global $arr;
$arr["bg"]=$co;
var_dump($arr);
mysql_query("UPDATE members SET `set`='".json_encode($arr)."' WHERE username='".$_COOKIE['VisitorName']."'");
}
}
}
}
?>
