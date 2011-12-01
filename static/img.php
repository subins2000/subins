<?php 
$action=$_GET['action'];$size=$_GET['size'];$url = $_GET['id'];$sizec = explode('x', $size);$txg=$_GET['fsize'];
if (isset($action) & $action=='generate'){
header("Content-Type: image/png");
$text=$_GET['text'];
if (isset($size) && $size==!null){$h=$sizec[1];$w=$sizec[0];}else{$h=100;$w=100;}
if (isset($txg) && $txg==!null){$tx=$txg;}else{$tx=10;}
$im = @imagecreate($w, $h) or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 1000, 1000, 1000);
imagestring($im, $tx, 0, 0,  $text, $text_color);
imagepng($im);
imagedestroy($im);
}else{
include('/home/simsu/subins/accounts/config.php');
$sql=mysql_query("SELECT * FROM img WHERE id=$url");
while($q=mysql_fetch_array($sql)){
$src=$q['url'];}
$exists = file_exists($src);
if($exists) {
header('Content-type: image/jpeg;');
echo file_get_contents($src);
} else {
echo "<h1>404 Not Found</h1>";
}
}
?> 
