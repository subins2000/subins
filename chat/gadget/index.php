<link href="main.css" rel="stylesheet" />
<link href="//fd-subins.hp.af.cm/css/style2.css" rel="stylesheet" />
<script src="//fd-subins.hp.af.cm/java/jquery-latest.js"></script>
<script src="//fd-subins.hp.af.cm/java/js.js"></script>
<ul class="roster_buzz">
<? include('config.php');
$user=$_COOKIE['VisitorName'];
str_replace("$user", "ss","");
$space ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$who = $_COOKIE["VisitorName"];
include('config.php');
  $sql = "SELECT * FROM members WHERE username = '$who'";
$q = mysql_query($sql) or die(mysql_error());
$rn = mysql_num_rows($dataa);
while($r = mysql_fetch_array($q)) { 
  $name = $r['name']; 
}
$who = $_COOKIE["VisitorName"];
if ($who==null){
header("location: //accounts-subins.hp.af.cm/login?service=friendshood");
}
$data = mysql_query("SELECT * FROM fdfriends WHERE user='$who' LIMIT 0, 10"); 
 while($r = mysql_fetch_array( $data ))  {
 $datax = mysql_query("SELECT * FROM members WHERE username='".$r['friend']."' LIMIT 0, 10"); 
while($rx = mysql_fetch_array($datax)){$fname=$rx['name'];
echo "<li id=':r3' class='roster_list_item' aria-labelledby=':r4' role='listitem menuitem'><button class='g-button-chat' id=':r4' tabindex='-1' class='roster_row_online'><table><tbody><tr><td><img height='32px' width='32px' src='//accounts-subins.hp.af.cm/getimg.php?user=".$r['friend']."'></td><td><div class='bubble ".$rx['status']."-icon'></div></td><td id='fnametd' title='".$r['friend']."'>".$fname."</td></button></tr></tbody></table></li>";}}?></ul>
