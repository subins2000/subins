<?php 
header('Content-Type: text/html');
include('config.php');
if (isset($_POST['checku'])) { 
 $usercheck = $_POST['username'];
 $check = mysql_query("SELECT * FROM members WHERE username='$usercheck'");
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {echo 'The username <b>'.$_POST['username'].'</b> is not available.';}else{echo 'The username <b>'.$_POST['username'].'</b> is available.';}}
 //This code runs if the form has been submitted
 if (isset($_POST['pass'])) { 
 //This makes sure they did not leave any fields blank
 if ($_POST['username']==null | $_POST['pass']==null | $_POST['pass2']==null | $_POST['sex']==null | $_POST['BirthMonth']==null | $_POST['BirthDay']==null | $_POST['BirthYear']==null | $_POST['sex']==null) {
 		die("{error: 'yes',msg:'You did not complete all of the required fields'}");
 	}
 if (strlen($_POST['username']) < 4) {
 		die("{error: 'yes',msg:'Username should have more than 3 letters!'}");
 	}
 if (strlen($_POST['pass']) < 5) {
 		die("{error: 'yes',msg:'Password should have more than 4 characters!'}");
 	}
$pattern='/^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/';
 if (preg_match($pattern,$_POST['email'])){}else{
 		die("{error: 'yes',msg:'Type a valid E-mail address'}");
 	}
 // checks if the username is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['username'] = addslashes($_POST['username']);
 	}
 $usercheck = $_POST['username'];
 $check = mysql_query("SELECT username FROM members WHERE username = '$usercheck'") 
or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		die("{error: 'yes',msg:'Sorry, the username <b>".$_POST['username']."</b> is already in use.'}");
 				}
 // this makes sure both passwords entered match
 	if ($_POST['pass'] != $_POST['pass2']) {
 		die("{error: 'yes',msg:'Your passwords did not match.'}");
 	}
        $em=mysql_query("SELECT * FROM members WHERE email=\"".$_POST['email']."\"");
        if (mysql_num_rows($em)==1) {
 	die("{error: 'yes',msg:'There is already an account with this email.<br><a href=\"//accounts-subins.hp.af.cm/repass.php\">Forgot Password ?</a>'}");
 	}
$bmonth=$_POST['BirthMonth']."/";
$bday=$_POST['BirthDay']."/";
$byear=$_POST['BirthYear'];
$btotal=$bday.$bmonth.$byear;
function age($bMonth,$bDay,$bYear) {
    list($cYear, $cMonth, $cDay) = explode("-", date("Y-m-d"));
    return ( ($cMonth >= $bMonth && $cDay >= $bDay) || ($cMonth > $bMonth) ) ? $cYear - $bYear : $cYear - $bYear - 1;
}
 // now we insert it into the database
 	$insert = "INSERT INTO members (username, password, email, name, age, birthday, sex, location, status) 
        VALUES (\"".$_POST['username']."\", MD5(\"".$_POST['pass']."\"), \"".$_POST['email']."\", \"".$_POST['name']."\", \"".age($_POST['BirthMonth'],$_POST['BirthDay'],$_POST['BirthYear'])."\", \"".$btotal."\", \"".$_POST['sex']."\", \"Null\", \"on\")";
 	$add_member = mysql_query($insert);
mysql_query("INSERT INTO search (title, url)
 			VALUES ('".$_POST['username']."', '//fd-subins.hp.af.cm/profile.php?user=".$_POST['username']."')") or die(mysql_error());
mysql_query("INSERT INTO search (title, url)
 			VALUES ('".$_POST['name']."', '//fd-subins.hp.af.cm/profile.php?user=".$_POST['username']."')") or die(mysql_error());
mysql_query("INSERT INTO `fdfriends` (`user`, `friend`, `both`, `time`) VALUES(\"".$_POST['username']."\", \"subins2000\", \"n\", NOW())") or die(mysql_error());
$myusername=$_POST['username'];
function encryptCookie($value){
   if(!$value){return false;}
   $key = 'The Line Secret Key';
   $text = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);
   return trim(base64_encode($crypttext)); //encode for cookie
}
setcookie("wervsi", encryptCookie($myusername), time()+3600, "/", ".hp.af.cm");
setcookie("VisitorName", $myusername, time()+3600, "/", ".hp.af.cm");
        echo "{error: 'no',msg:'<h1 style=\"color:white !important;\">Registered</h1><p>Thank you, you have registered - you can now login</a>.</p><br><a href=\"?next=1\"><button>Next Step</button></a>'}";
$to = $_POST['email'];$mail = $_POST['email'];$name=$_POST['name'];$subject = "Subins - Welcome to Subins Family, ".$_POST['name'];
$message = "<center style=\"width:100%;background:#EEE;\"><h1><a href=\"//subins.hp.af.cm?utm_source=mail&mail=$mail\"><img src=\"//cdn-subins.hp.af.cm/images/logo.png?utm_source=mail&mail=$mail\"></a></h1></center><div><h2>Thanks for Signing Up.</h2>
<u><h3>Welcome to the Subins Family , $name</h3></u>
<br><a href=\"//subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins</a> is free and Open Source. Any one can add a link to <a href=\"//subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins Search Engine</a> <a href=\"//subins.hp.af.cm/addlink.php?utm_source=mail&mail=$mail\">here</a>.
See Other <a href=\"//subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins</a> Services:<br><br>
<ul>
<li><a href=\"//apps-subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins Apps</a></li>
<li><a href=\"//sag-3.blogspot.com?utm_source=mail&mail=$mail\">Subins Blog</a></li>
<li><a href=\"//chat-subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins Chat</a></li>
<li><a href=\"//fd-subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins Friendshood</a></li>
<li><a href=\"//get-subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins GET</a></li>
</ul>
More Services will launch soon. It might take some time because <a href=\"//fd-subins.hp.af.cm/profile.php?user=subins2000\">I am</a> the only one who is working on <a href=\"//subins.hp.af.cm?utm_source=mail&mail=$mail\">Subins</a> !!<br><br>Manage your account <a href='//accounts-subins.hp.af.cm?utm_source=mail&mail=$mail'>here</a></div><br>";
$headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";$headers .= 'From: Subins <noreply@subins.hp.af.cm>' . "\r\n";
mail($to,$subject,$message,$headers);
$smsg=$_POST['name'].",mail= ".$_POST['email'].", Age-".age($_POST['BirthMonth'],$_POST['BirthDay'],$_POST['BirthYear']);
mail('subins2000@gmail.com',"Subins-New Person Joined",$smsg,$headers);
}
?>
