<?
if (!isset($_POST)){?>
<script>document.close();</script>
<?}
error_reporting( -1 );ini_set( 'display_errors','On' );
include('config.php');$who=$_COOKIE['VisitorName'];$p=$_POST['p']; if($p=='rt'){
$sql=mysql_query("SELECT * FROM sites WHERE user='$who'");while($r=mysql_fetch_array($sql)){$try=$r['id'];}
echo "<div class='nof'></div>";
}if($p=='an'){echo'<div id="content" style="margin-top:100px;margin-left:180px;"><h1><u>Add a Site</u></h1><br>
<form action="action.php" id="aform" method="post">
Site Name<br><input name=\'name\' id="fname" type="text">
<br><br>Site URL<br><input id="fsite" type="text" name=\'url\'><br><br>
<input type="hidden" name="action" value="asite">
<input type="submit" name="submit" value="Add Site">
</form></div>';}
$op=explode("-",$p);
mysql_query("ADD COLUMN id AUTO INCREMENT BEFORE user");
if($op[0]=='site'){
$sql=mysql_query("SELECT * FROM stats WHERE id IN (SELECT ids FROM sites WHERE user='$who' AND url='".$op[1]."')");
echo "<table style='font-size:20px;width:200px;' border='2'><tbody>";
while($r=mysql_fetch_array($sql)){
echo "<tr><td>Views  - </td><td style='font-size:30px;color:White;'>".$r['views'].'</td></tr>';
echo "<tr><td>Views this week - </td><td style='font-size:30px;color:White;'>".$r['views'].'</td></tr>';
echo "</tbody></table><h1>Visits from Countries</h1><table style='font-size:15px;width:200px;' border='2'><tbody><tr><td style='text-align:center;'>Country Flag</td><td style='text-align:center;'>Country</td><td style='text-align:center;'>Views</td>";}
$nsql=mysql_query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME =  'sites' AND LENGTH( COLUMN_NAME )=2");while($t=mysql_fetch_array($nsql)){
$nssql=mysql_query("SELECT ".$t[0]." FROM sites WHERE ".$t[0]." IS NOT NULL");}while($ts=mysql_fetch_array($nssql, MYSQL_NUM))){
print_r($ts);
echo '<tr><td style="text-align:center;"><img src="//www.netip.de/images/flag/'.strtolower($ts[0]).'"></td><td style="text-align:center;">'.$ts[$key].'</td><td style="text-align:center;">'.$ts[0].'</td></tr>';}
echo "</tbody></table>";
}
if (isset($_GET['info'])){var_dump($_SERVER);}
?>
