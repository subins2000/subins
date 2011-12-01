<html><head>
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script src="//subins.hp.af.cm/files/java/js.php"></script>
<?include('config.php');mysql_query("UPDATE get SET hits=hits+1");$id=$_GET['id'];$sql=mysql_query("SELECT * FROM get WHERE id='$id'");if(mysql_num_rows($sql)==0){echo'<style>html,code{font:15px/22px arial,sans-serif}html{background:#fff;color:#222;padding:15px}body{margin:7% auto 0;max-width:390px;min-height:180px;padding:30px 0 15px}* > body{background:url(//cdn-subins.hp.af.cm/images/robot.png) 100% 5px no-repeat;padding-right:205px}p{margin:11px 0 22px;overflow:hidden}ins{color:#777;text-decoration:none}a img{border:0}@media screen and (max-width:772px){body{background:none;margin-top:0;max-width:none;padding-right:0}}</style></head><body><a href="//subins.hp.af.cm/"><img src="//cdn-subins.hp.af.cm/images/logo.png" alt="Google"></a><p><b>404.</b> <ins>That&acute;s an error.</ins></p><p>The requested app was not found on this server.  <ins>That&acute;s all we know.</ins></p></body></html>';$title="404 Not Found-Subins";}else{while($r=mysql_fetch_array($sql)){$title="Subins Apps - ".$r['title'];?>
<title>Download <?echo$title;?></title></head><body id="content">
<iframe src="<?echo$r['url'];?>" frameborder="0" height="0%" width="1%" hidden></iframe><center><br><br><br><br><br><h1><font size="15" color="red">S</font><font size="15"color="violet">u</font><font size="15" color="blue">b</font><font size="15" color="yellow">i</font><font size="15" color="green">n</font><font size="15" color="red">s</font><br>
<font size="15" color="red">G</font><font size="15" color="blue">E</font><font size="15" color="yellow">T</font>
</h1>
The Requested File will start downloading in a few seconds. If the file is not downloading <a href="get.php?id=<?echo$r['id'];?>">Click Here</a>.</center>
<?}}?>
</body></html>
