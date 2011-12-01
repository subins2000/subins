<?php header('Content-type: image/jpeg;');
if (isset($_GET["user"]) & $_GET['user']!==null)
{$need=$_GET["user"];
if ($need=='server'){echo file_get_contents('//cdn-subins.hp.af.cm/images/server.png');}else{
include('config.php');
$sql=mysql_query("SELECT * FROM members WHERE username='$need'");while($r=mysql_fetch_array($sql)){$email = $r['email'];}
$default = "https://cdn-subins.hp.af.cm/images/guest.png";
if (isset($_GET['width']) & $_GET['width']!==null){$size=$_GET['width'];}else{$size='200';}
$grav_url = "//www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
header("Location:$grav_url");
}
}else{
header('location: //subins.hp.af.cm');
}
?> 
