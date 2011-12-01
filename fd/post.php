<?php
header('Content-Type: text/html');
include('config.php');
function un($n){ include('config.php');
$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$n."'");while($ftw = mysql_fetch_array($fasdxast)){$asd=$ftw['name'];}
  return $asd; 
} 
    $who=$_COOKIE['VisitorName']; 
$action=$_POST['action'];
if(isset($_POST['via'])){$pv=$_POST['via'];}if(isset($_POST['via'])){$ptype=$_POST['pt'];}
if ($action=='pimg'){
 $name= $_FILES['uploadedfile']['name'];
 $post= $_POST['text']; 
 $target_path = $_SERVER['DOCUMENT_ROOT']."/asdvdx/";
 $target_path = $target_path.basename($_FILES['uploadedfile']['name']); 
  if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
  $imgurl='//accounts-subins.hp.af.cm/data/fd/uploads/'.$_FILES['uploadedfile']['name'];
  $spi = 'SELECT * FROM fdposts WHERE post="'.$post.'"'; while($r = mysql_fetch_array($spi)){$pid=$r['id'];}
  mysql_query("INSERT INTO fdposts(user,post,posted,type,url) VALUES ('$who', '$post',NOW(), 'img', '$imgurl')");
  $spi = mysql_query('SELECT * FROM fdposts WHERE user="'.$who.'" ORDER BY id DESC LIMIT 1'); 
   while($r = mysql_fetch_array($spi)){echo "{pid:'".$r['id']."',iurl:'".$imgurl."'}";}
  }else{echo "Error.-".$_FILES['uploadedfile']['tmp_name'];}
}
elseif($action=='share'){
    $post    = str_replace('"', '\"',$_POST['text']);  
    mysql_query('INSERT INTO fdposts(user,post,posted,via,type,url) VALUES ("'.$who.'", "'.$post.'", NOW(), "'.$pv.'", "'.$ptype.'", "'.$_POST['purl'].'")');
}
elseif(isset($_POST['text']) && isset($who) && $action!='pimg'){
 if ($_POST['text']!==''){
    $post    = preg_replace("/\*\*(.*?)\*\*/",'<b>$1</b>',$_POST['text']);  
    $post    = str_replace('"','\"',$post);  
    $post    = preg_replace("/\*\/(.*?)\/\*/",'<i>$1</i>',$post); 
    $post    = preg_replace("/\[link\((.*?)\)\](.*?)\[\/link\]/",'<a target="_blank" href="$1">$2</a>',$post); 
    $user    = $_COOKIE['VisitorName'];  
    $img     = $_POST['userimg'];  
    mysql_query('INSERT INTO fdposts(user,post,posted,via) VALUES ("'.$user.'", "'.$post.'", NOW(), "stream")');
    $spi = mysql_query('SELECT * FROM fdposts WHERE user="'.$who.'" ORDER BY id DESC LIMIT 1'); 
  while($r = mysql_fetch_array($spi)){echo "{pid:'".$r['id']."',text:'$post'}";}
 }else{echo'Type Something dude.';}
}else{
echo '<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width"><title>Error 404 (Not Found)!!1</title><style>*{margin:0;padding:0}html,code{font:15px/22px arial,sans-serif}html{background:#fff;color:#222;padding:15px}body{margin:7% auto 0;max-width:390px;min-height:180px;padding:30px 0 15px}* > body{background:url(//cdn-subins.hp.af.cm/images/robot.png) 100% 5px no-repeat;padding-right:205px}p{margin:11px 0 22px;overflow:hidden}ins{color:#777;text-decoration:none}a img{border:0}@media screen and (max-width:772px){body{background:none;margin-top:0;max-width:none;padding-right:0}}</style></head><body><a href="//subins.hp.af.cm/"><img src="//cdn-subins.hp.af.cm/images/logo.png" alt="Google"></a><p><b>404.</b> <ins>That&acute;s an error.</ins></p><p>The requested URL <b><script>document.write(window.location.pathname);</script></b> was not found on this server.  <ins>That&acute;s all we know.</ins></p></body></html>';
}
?>
