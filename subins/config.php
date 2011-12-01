<?php
function dob($birthday){
    list($day,$month,$year) = explode("/",$birthday);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if ($day_diff < 0 || $month_diff < 0)
      $year_diff--;
    return $year_diff;
  }
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
mysql_select_db($db, $link) or die(mysql_error());
$sql=mysql_query("SELECT * FROM members") or die(mysql_error());
while($r=mysql_fetch_array($sql)){
mysql_query("UPDATE members SET age='".dob($r['birthday'])."',lb='n' WHERE username='".$r['username']."'") or die(mysql_error());
mysql_query("UPDATE members SET username='".$r['email']."',lb='n' WHERE `username`='".$r['username']."'");
list($day,$month,$year) = explode("/",$r['birthday']);
if($day.$month==date("dm")){
if($r['lb']!='s'){
mysql_query("UPDATE members SET lb='s' WHERE username='".$r['username']."'") or die(mysql_error());
}
}
}
?>
