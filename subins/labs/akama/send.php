<? include('config.php');
$tos=$_POST['to'];$msga=$_POST['msg'];$t=$_POST['type'];$subject=$_POST['s'];
if (isset($_POST['submit']) & $tos!==null & $subject!=="Subins - "){
if ($tos=='all'){$sql=mysql_query('SELECT * FROM members');}else{$sql=mysql_query('SELECT * FROM members WHERE username="'.$tos.'"');}
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: <noreply@subins.hp.af.cm>' . "\r\n";
while($r=mysql_fetch_array($sql)){
$msg1=str_replace('$name',$r['name'],$msga);
$msg=str_replace('$mail',$r['email'],$msg1);
if(mail($r['email'],$subject,$msg,$headers)){
echo "Mail sent to ".$r['name']." (".$r['email'].")<br>";
}else{echo "Can't send mail to ".$r['name']." (".$r['email'].")<br>";}
}
}else{echo"Error. Some field must be empty.";}
?>
