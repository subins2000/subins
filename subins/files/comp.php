<div class="top-bar">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a onmouseover="$('#b-menu').show('900');" style="position:absolute;top:0px;left:15px;color:green;" target="_parent" href="//subins.hp.af.cm/"><h3>Subins</h3></a>
</td>
<td style="top: 10px;position: absolute;left: 100px;">
<div id="menu-left">
 <a  target="_parent" href="//subins.hp.af.cm/" class="g-button g-button-submit" style="color:white !important;" id="homem">Home</a>
 <a  target="_parent" href="//chat-subins.hp.af.cm" id="gamesm" class="g-button g-button-submit" style="color:white !important;">Chat</a>
 <a  target="_parent" href="//fd-subins.hp.af.cm/" id="gamesm" class="g-button g-button-submit" style="color:white !important;">Friendshood</a>
 <a  target="_parent" href="//games-subins.hp.af.cm" id="gamesm" class="g-button g-button-submit" style="color:white !important;">Games</a>
 <a  target="_parent" href="//vtube.subins.hp.af.cm/" id="gamesm" class="g-button g-button-submit" style="color:white !important;">V Tube</a>
 <a  target="_parent" href="//music.subins.hp.af.cm/" id="gamesm" class="g-button g-button-submit" style="color:white !important;">Music</a>
 <a  target="_parent" href="//subins.hp.af.cm/products" id="gamesm" class="g-button g-button-submit" style="color:white !important;">PRODUCTS</a>
 <a  target="_parent" href="//quiz.subins.hp.af.cm" id="gamesm" class="g-button g-button-submit" style="color:white !important;">Quiz</a>
</div>
</td>
</tr>
</tbody>
</table>
<?
$user=$_COOKIE['VisitorName'];
$space ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$who = $_COOKIE["VisitorName"];
include('config.php');
  $sql = "SELECT * FROM members WHERE username = '$who'";
$q = mysql_query($sql) or die(mysql_error());
$rn = mysql_num_rows($dataa);
while($r = mysql_fetch_array($q)) { 
  $name = $r['name']; 
}
?>
<div class="menu">Welcome <button onclick="$('.sprofile').show('900');" class="button"><? echo $name;?></button>
<? include('config.php');$ncount=mysql_query("SELECT * FROM fdnotify WHERE user='$who' and red='no'");if(mysql_num_rows($ncount)=='0'){echo '<button id=\'tenb\' class="button">0';}else{echo '<button id=\'tenb\' style="background:#D14836;color:white;background-image: -webkit-gradient(linear,left top,left bottom,from(#DD4B39),to(#D14836));background-image: -webkit-linear-gradient(top,#DD4B39,#D14836);background-image: -moz-linear-gradient(top,#DD4B39,#D14836);background-image: -ms-linear-gradient(top,#DD4B39,#D14836);background-image: -o-linear-gradient(top,#DD4B39,#D14836);background-image: linear-gradient(top,#DD4B39,#D14836);" class="button">'.mysql_num_rows($ncount).'</span>';} ?></button></div></div>
<div id="notifybox" hidden><table style="padding: 12px;"><tbody><? $nbox=mysql_query("SELECT * FROM fdnotify WHERE user='$who' ORDER BY id DESC");
while($ra = mysql_fetch_array($nbox)) 
 {if($ra['red']=='no'){echo "<tr id='nycont' style='background:white;'>";}else{echo "<tr id='nycont'>";}echo"<td><img height='44px' width='44px'src='//accounts-subins.hp.af.cm/getimg.php?user=".$ra['mention']."'></td><td style='padding-top: 20px;'>&nbsp;&nbsp;<a target='_blank' style='color:green;' href='profile.php?user=".$ra['user']."'>".$ra['text']."</a><br><br></td></tr>"; }?></tbody></table></div>
<div class="sprofile" id="sprofile">
<div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;"><a onclick="document.getElementById('overlay').style.display='block'" style="cursor:pointer;">Change Picture</a></div>
<div class="sprofile" id="sprofile">
<div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;"><a onclick="document.getElementById('overlay').style.display='block'" style="cursor:pointer;color:white;">Change Picture</a></div>
<img id='savatar' src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $who;?>" height='100px'>
<b><div id="sname"><? echo $name;?></div></b>
<form method="post" action='//accounts-subins.hp.af.cm/login.php?service=friendshood'><input id="sout" type='submit' name='logout' value="Log Out"></form>
</div>
</div>
