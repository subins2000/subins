<?php
$id=$_GET['id'];
include('config.php');$sql=mysql_query("SELECT * FROM get WHERE id='$id'");while($r=mysql_fetch_array($sql)){$name=$r['title'];$l=$r['url'];}
header('Content-Type: text/plain');         # its a text file
 header("Content-Disposition: attachment;filename=$name");
readfile($l);
?>
