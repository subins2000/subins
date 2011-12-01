<?
include('config.php');
$vid=$_GET['vid'];
$viw='/home/simsu/subins/videos/data/videos/'.$vid;
$file=$viw;
header("Content-type: video/mp4");
echo file_get_contents($file);
?>
