<?php
function deCookie($value){
   if(!$value || $value==null || $value==''){return 'truth';}else{
   $key = 'The Line Secret Key';
   $crypttext = base64_decode($value); //decode cookie
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $crypttext, MCRYPT_MODE_ECB, $iv);
   return trim($decrypttext);}
}
$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
$username = $mysql_config["username"];
$password = $mysql_config["password"];
$hostname = $mysql_config["hostname"];
$port = $mysql_config["port"];
$db = $mysql_config["name"];
$link = mysql_connect("$hostname:$port", $username, $password);
mysql_select_db($db, $link) or die(mysql_error);$who=$_COOKIE['VisitorName'];
if($_COOKIE['VisitorName']==deCookie($_COOKIE['wervsi'])){
$sql=mysql_query("SELECT * FROM members WHERE username='$who'");
while($r=mysql_fetch_array($sql)){
$umail=$r['email'];
$uname=$r['name'];
$uphone=$r['phone'];
}
}
?>
