<html><head><title>New App</title>
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script src="//subins.hp.af.cm/files/java/js.php"></script>
</head><body id="content">
<center>Fill out the form below.<table><tbody><br><br>
<form action="new.php" method="post" enctype="multipart/form-data">
<tr><td>File Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input name="name" placeholder="File Name" type="text"></td></tr>
<tr><td>File Description&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;<textarea class="input" name="ds" placeholder="File Description" type="text"></textarea></td></tr><tr><td>File Download URL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="25" name="t" type="text" placeholder="File Setup File Download URL" /></td></tr><tr><td>File Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select class="g-button" id="style" name="type"><option value="music">Music</option><option value="sf">Software</option><option value="o">Other</option></select></td></tr><tr><td>File Thumbnail URL&nbsp;&nbsp;</td><td><input type="text" placeholder="Thumbnail Image URL" name="th"></td></tr><tr><td></td><td><br><center><input type="submit" value="Submit File"></center></td></tr>
</form>
</center></tbody></table>
</body></html>
<?
$f=$_POST['name'];$who=$_COOKIE['VisitorName'];$title=$_POST['name'];$ds=$_POST['ds'];$upath=$_POST['t'];$path=$_POST['th'];$type=$_POST['type'];
if(!isset($who)){header("location://accounts-subins.hp.af.cm/login.php?service=//get-subins.hp.af.cm/new.php");}
if($title!==null & $ds!==null & $upath!==null & $type!==null){
include('config.php');mysql_query("INSERT INTO get (user,title,ds,url,img,type) VALUES(\"$who\",\"$title\",\"$ds\",\"$upath\",\"$path\",\"$type\")");
$ais=mysql_query("SELECT * FROM get WHERE user='$who' and url='$upath'");while($r=mysql_fetch_array($ais)){$ai=$r['id'];}
echo "Your app has been uploaded. Download file <a href=\"//get-subins.hp.af.cm/download.php?id=".$ai."\">here</a>";
}else{"<h2>Please complete all the fields</h2>";}
?>
