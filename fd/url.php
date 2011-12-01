<?
$as=str_replace("&","&amp;",$_GET['url']);
if(preg_match('&amp;', $as)) 
{
$url=$_GET['url'].'&show='.$_GET['show'].'&p='.$_GET['p'];
header("location:$url");
}else{$url=$_GET['url'].'?show='.$_GET['show'].'&p='.$_GET['p'];
header("location:$url");}
?>
