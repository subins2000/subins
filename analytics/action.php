<?
function getUserIpAddr(){ 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){ 
        return $_SERVER['HTTP_CLIENT_IP']; 
    }else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
        $ite=explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']); return str_replace(" ",'',$ite[0]); 
    }else{ 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
$ucip=getUserIpAddr();
$response=@file_get_contents('//www.netip.de/search?query='.$ucip);if (empty($response)){throw new InvalidArgumentException("Error contacting Geo-IP-Server");}$patterns=array();$patterns["IP"] = '#IP: (.*?)&nbsp;#i';$patterns["domain"] = '#Domain: (.*?)&nbsp;#i';$patterns["country"] = '#Country: (.*?)&nbsp;#i';$patterns["state"] = '#State/Region: (.*?)<br#i';$patterns["city"] = '#City: (.*?)<br#i';foreach ($patterns as $key => $pattern){$ipInfo[$key] = preg_match($pattern,$response,$value) && !empty($value[1]) ? $value[1] : 'not found';}
$uip=$ipInfo["IP"];$ucd=$ipInfo["domain"];$ucss=$ipInfo["state"];$uco=$ipInfo["country"];$uci=$ipInfo["city"];$ipInfo=explode('-',$ipInfo["country"]);$ucs=str_replace(' ','',$ipInfo[0]);
include('config.php');$who=$_COOKIE['VisitorName'];$action=$_POST['action'];if ($who!==null){
if ($action=='asite'){
$title=$_POST['name'];$url=$_POST['url'];
$sqln=mysql_query("SELCT * FROM sites WHERE url='$url' AND user='$who'");if(mysql_num_rows($sqln)==0){
mysql_query("INSERT INTO sites(user,title,url)VALUES('$who',\"$title\",\"$url\")");
$sql=mysql_query("SELECT * FROM sites WHERE url='$url' AND user='$who'");while($r=mysql_fetch_array($sql)){$try=$r['ids'];}
mysql_query("INSERT INTO stats(id,url)VALUES('$try',\"$url\")");
echo "<u>Paste this code on the page you want to track</u><br><br><code>&lt;script&gt;<br>(function() {<br>document.cookie='uid'+'='+$try;var saga = document.createElement('script');<br>saga.type = 'text/javascript';saga.src = ('https:' == document.location.protocol ? 'https://' : '//') + 'analytics-subins.hp.af.cm/js/dc.js';<br>var head= document.getElementsByTagName('head')[0];head.appendChild(saga);<br>&lt;/script&gt;</code><br><a href='db'>View Dashboard</a>";
}else{echo "You already are tracking this site.";}
}
}
$uid=$_POST['uid'];
function getWeekDates($year, $week){$from = date("Ymd", strtotime("{$year}-W{$week}-1"));$to = date("d", strtotime("{$year}-W{$week}-7"));return $from.$to;}
if ($action=='up' & $uid!==null){$sql=mysql_query("SELECT * FROM stats WHERE id='$uid'");while($r=mysql_fetch_array($sql)){$try=$r['weekd'];}
if ($try<getWeekDates(date('Y'),date('W', strtotime(date('Y-m-d'))))){mysql_query("UPDATE stats SET weekd=".getWeekDates(date('Y'),date('W', strtotime(date('Y-m-d')))).",week='0' WHERE id='$uid'");}
mysql_query("UPDATE stats SET week=week+1,views=views+1 WHERE id='$uid'");
mysql_query("UPDATE sites SET `$ucs`=`$ucs`+1");
mysql_query("INSERT INTO viewers (id,ip,p,city,state,country,domain) VALUES('$uid','$ucip','".$_POST['page']."','$uci','$ucss','$uco','$ucd')");
}
?>
