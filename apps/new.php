<html><head><title>New App</title>
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script src="//subins.hp.af.cm/files/java/js.php"></script>
</head><body id="content">
<center>Fill out the form below.<table><tbody><br><br>
<form action="new" method="post" enctype="multipart/form-data">
<tr><td>App Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input name="name" placeholder="App Name" type="text"></td></tr>
<tr><td>App Description&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;<textarea class="input" name="ds" placeholder="App Description" type="text"></textarea></td></tr><tr><td>App Canvas URL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input placeholder="App URL" name="t" type="text" /></td></tr><tr style="color:red;"><td>If you haven't yet hosted</td><td> your app on a site. Then host it for free on <a href="//appfog.com?utm_source=apps-subins.hp.af.cm" target="_blank">AppFog</a></td></tr><tr><td>App Thumbnail URL&nbsp;&nbsp;</td><td><input type="text" placeholder="Thumbnail Image URL" name="th"></td></tr><tr><td></td><td><br><center><input type="submit" value="Submit App"></center></td></tr>
</form>
</center></tbody></table>
</body></html>
<?
$f=$_POST['name'];$who=$_COOKIE['VisitorName'];$title=$_POST['name'];$ds=$_POST['ds'];$upath=$_POST['t'];$path=$_POST['th'];
if(!isset($who)){header("location://accounts-subins.hp.af.cm/login.php?service=//apps-subins.hp.af.cm/new.php");}
if($title!==null & $ds!==null & $upath!==null & $path!==null){
include('config.php');mysql_query("INSERT INTO apps (user,title,ds,url,img) VALUES(\"$who\",\"$title\",\"$ds\",\"$upath\",\"$path\")");
$ais=mysql_query("SELECT * FROM apps WHERE user='$who' and url='$upath'");while($r=mysql_fetch_array($ais)){$ai=$r['id'];}
echo "Your app has been uploaded. View your app <a href=\"//apps-subins.hp.af.cm/app.php?id=".$ai."\">here</a>";
}else{"<h2>Please complete all the fields</h2>";}
?>
