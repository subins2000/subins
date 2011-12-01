<?
error_reporting('-1');ini_set( 'display_errors','On' );
$pattern = '/\[(.*?)\]/i';
$data1=preg_replace($pattern,'',$_GET['data']);
$data=explode('->',$data1);
foreach($data as $f){
if($f!=null){
$rty=explode('||',$f);
if ($_GET['method']=='post'){
$url = $_GET['url'];
   $params = $rty[0]."=".str_replace('"','',$rty[1])."&";
   $user_agent = "Mozilla/5.0 (compatible; MSIE 5.01; Linux)";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_POST,1);
   curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
   curl_setopt($ch, CURLOPT_URL,$url);
   curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
   $result=curl_exec ($ch);
   curl_close ($ch);
   echo $result;
}}}$url = $_GET['url'];
if ($_GET['method']!=='post'){
reset($data);
while (list($key, $val) = each($data))
  {if($val!=null){$rty=explode('||',$val);
  if($url==$_GET['url']){$url.='?'.$rty[0].'='.str_replace('"','',$rty[1]);}else{
  $url.='&'.$rty[0].'='.str_replace('"','',$rty[1]);}}
  }
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_URL, $url);
$user_agent = "Mozilla/5.0 (compatible; MSIE 5.01; Linux)";
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$tmp = curl_exec($ch);
curl_close($ch);
echo $tmp;
}echo $url;
?>
