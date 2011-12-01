<html><head><link href="css/style.css" rel="stylesheet" /><script src="//cdn-subins.hp.af.cm/java/jquery.js"></script><script src="//subins.hp.af.cm/files/java/js.php"></script></head>
<div class="top-bar" style="top:29px;">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a style="position:absolute;top:0px;left:15px;" href="#"><image height="50px" src="images/logo.png"></a>
</td>
<td style="top: 10px;position: absolute;left: 100px;">
<center><div id="menu-left" style="display:inline-block;margin-top:15px;">
<ul class="tabs group"><li><a href="Home.php#box-one">Slideshow</a></li><li><a href="Home.php#box-two">My Games</a></li><li><a href="Home.php#box-three">History</a></li></ul>
</div></center></td></tr></tbody></table></div>
<body id="content" style="text-align:center;margin-top:100px;">
<h1>Fill the form below</h1>
<form action="add.php" method="post">
<input name="name" type="text" placeholder="Game name"><br><br>
<input name="src" type="text" placeholder="Game SWF file URL"><br><br>
<input name="image" type="text" placeholder="Game Image URL(optional)"><br><br>
<textarea name="ds" type="text" placeholder="Game Description (optional)"></textarea><br><br>
<input name="submit" type="submit" value="Add Game">
</form>
</body></html>
<?
if ($_COOKIE['VisitorName']!=deCookie($_COOKIE['wervsi'])){header("Location://accounts-subins.hp.af.cm/login.php?service=//games-subins.hp.af.cm/add.php");}
if (isset($_POST['submit'])){
if($_POST['src']==NULL | $_POST['name']==null){echo 'Fill all information.';}else{
include('config.php');$who=$_COOKIE['VisitorName'];$sql=mysql_query("SELECT * FROM games WHERE url='".$_POST['src']."' OR name='".$_POST['name']."'");
if (mysql_num_rows($sql)==1){die("A game with this SWF url or Name has been already added.");}
mysql_query("INSERT INTO games (name,url,ds,imgbig,user)VALUES('".$_POST['name']."','".$_POST['src']."','".$_POST['ds']."','".$_POST['img']."','$who')");
$sql=mysql_query("SELECT * FROM games WHERE url='".$_POST['src']."' AND user='$who'");while($r=mysql_fetch_array($sql)){
echo "Game added. Play your game <a href='play.php?game=".$r['id']."'>here</a>";}}}
?>
