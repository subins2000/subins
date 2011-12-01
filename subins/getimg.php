<?php header('Content-type: image/jpeg;');
$url1 = $_GET['img']; $url = explode('=', $_GET['img']); $dswe=explode('?', $url[0]);include('config.php');
$sql=mysql_query("SELECT * FROM members WHERE username='".$url[1]."'");while($r=mysql_fetch_array($sql)){$email = $r['email'];}
$gravcheck = "//www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) ."?d=404";
$response = get_headers($gravcheck);
if ($response[0]== "HTTP/1.0 404 Not Found"){
if($dswe[1]=='user' & mysql_num_rows($sql)==1){
echo file_get_contents("//cdn-subins.hp.af.cm/images/guest.png");
}else{
echo file_get_contents("files/images/web.png");}
}else{echo file_get_contents($gravcheck);}
?>
