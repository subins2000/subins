<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "//www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/main.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<link href="css/style2.css" rel="stylesheet" />
<script src='java/jquery-latest.js' type='text/javascript'></script>
<script type="text/javascript" src="java/js.php" ></script>
<title><?
$who=$_COOKIE["VisitorName"];
if (isset($_GET['user'])) {
  echo $_GET['user'];
  $user=$_GET['user'];
  }
  else{
  echo $_COOKIE["VisitorName"];
  $user=$_COOKIE["VisitorName"];
  }
$who = $_COOKIE["VisitorName"];
if ($who==null){
header("location: //accounts-subins.hp.af.cm/login?service=friendshood");
}
?> Friends Search - Subins</title>
</head>
<body>
<div id='content'>
<script type="text/javascript" src="java/jquery.autocomplete.js" ></script>
<div id='feed' style="text-align:center;margin-left:100px;">
<form action="<?SELF?>" method="get">
<input class="input" placeholder="Name" name="q" id="q">
</form>
<script>
$("#q").autocomplete("get.php?action=friends", {
		width: $("#vl").width()+7,
		matchContains: true,
		selectFirst: false
	});
</script>
<? $q=$_GET['q'];if (isset($q) & $q!=null){?>
<table><tbody>
<?
 include('config.php');
 $data = mysql_query("SELECT * FROM fdfriends WHERE user='$who' and friend LIKE \"$q%\" or friend=\"$q\" LIMIT 0,5");
 if (mysql_num_rows($data)==0){$sa = mysql_query("SELECT * FROM members WHERE username='$q' or name='$q' or username LIKE \"$q%\" or name LIKE \"$q\" LIMIT 0,5");}else{$sa = mysql_query("SELECT * FROM fdfriends WHERE user='$who' and friend LIKE '$q' or friend=\"$q\" LIMIT 0,5");} echo 'Search Results-'.mysql_num_rows($sa);
 while($result = mysql_fetch_array($sa)) 
 { if (mysql_num_rows($data)==0){$nb=$result['username'];}else{$nb=$result['friend'];}
 $data2 = mysql_query("SELECT * FROM members WHERE username='$nb'"); 
 while($r = mysql_fetch_array($data2)) 
 { $nbs=$r['name'];
 echo "<tr><td><a href='profile.php?user=$nb'><img height='48px' width='48px'src='//accounts-subins.hp.af.cm/getimg.php?user=$nb'></a></td><td style='text-align:left;'><a href='profile.php?user=$nb'>$nbs</a></td></tr>"; 
 }
 }?>
</tbody></table>
<?}?>
</div>
</div>
</body>
</html>
