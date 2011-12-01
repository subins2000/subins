<body style="color:white !important;">
<?php 
include('config.php');
if (isset($_POST['checku'])) { 
 $usercheck = $_POST['username'];
 $check = mysql_query("SELECT * FROM members WHERE username='$usercheck'");
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {echo 'The username <b>'.$_POST['username'].'</b> is not available.';}else{echo 'The username <b>'.$_POST['username'].'</b> is available.';}}
 //This code runs if the form has been submitted
 if (isset($_POST['pass'])) { 
mysql_query("INSERT INTO search (title, url)
 			VALUES ('It@School', '//itschool.gov.in')") or die(mysql_error());
 //This makes sure they did not leave any fields blank
 if ($_POST['username']==null | $_POST['pass']==null | $_POST['pass2']==null | $_POST['sex']==null) {
 		die('You did not complete all of the required fields');
 	}
 // checks if the username is in use
 $usercheck = $_POST['username'];
 $check = mysql_query("SELECT * FROM members WHERE username='$usercheck'");
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {die('Sorry, the username <b>'.$_POST['username'].'</b> is already in use.');}
 // this makes sure both passwords entered match
 	if ($_POST['pass'] != $_POST['pass2']) {
 		die('Your passwords did not match. ');
 	}
        $em=mysql_query("SELECT * FROM members WHERE email=\"".$_POST['email']."\"");
        if (mysql_num_rows($em)==1) {
 		die('There is already an account with this email. <a href="//accounts-subins.hp.af.cm/login.php?page=fpass">Forgot Password ?</a>');
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
$myusername=$_POST['username'];
setcookie("VisitorName", $myusername, time()+3600, "/", "subins.hp.af.cm");
        echo '<h1 style="color:white !important;">Registered</h1>
 <p>Thank you, you have registered - you may now login</a>.</p><br><a class="g-button g-button-submit" href="?next=1"><button>Next Step</button></a>';
$to = $_POST['email'];$subject = "Subins - Welcome to Subins Family, ".$_POST['name'];$message = "<html><head><title>Thanks for Signing Up.</title></head><body><center style=\"left:0px;position:absolute;right:0px;width:100%;background:#EEE;top:0px;\"><h1><a href=\"//subins.hp.af.cm?utm_source=mail\"><img src=\"//cdn-subins.hp.af.cm/images/logo.png?utm_source=mail\"></a></h1></center><div style=\"margin-top:100px;\"><h2>Thanks for Signing Up.</h2><u><h3>Welcome to the Subins Family , ".$_POST['name']."</h3></u><br><a href=\"//subins.hp.af.cm?utm_source=mail\">Subins</a> is free and Open Source. Any one can add a link to <a href=\"//subins.hp.af.cm?utm_source=mail\">Subins Search Engine</a> <a href=\"//subins.hp.af.cm/addlink.php?utm_source=mail\">here</a>.
See Other <a href=\"//subins.hp.af.cm?utm_source=mail\">Subins</a> Services:<br><ul>
<li><a href=\"//apps-subins.hp.af.cm?utm_source=mail\">Subins Apps</a></li>
<li><a href=\"//sag-3.blogspot.com?utm_source=mail\">Subins Blog</a></li>
<li><a href=\"//chat-subins.hp.af.cm?utm_source=mail\">Subins Chat</a></li>
<li><a href=\"//fd-subins.hp.af.cm?utm_source=mail\">Subins Friendshood</a></li>
<li><a href=\"//get-subins.hp.af.cm?utm_source=mail\">Subins GET</a></li></ul>
More Services will launch soon. It might take some time because <a href=\"//fd-subins.hp.af.cm/profile.php?user=subins2000\">I am</a> the only one who is working on <a href=\"//subins.hp.af.cm?utm_source=mail\">Subins</a> !!<br><br><br>
Manage your account <a href='//accounts-subins.hp.af.cm?utm_source=mail'>here</a></div></body></html>
";$headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";$headers .= 'From: <noreply@subins.hp.af.cm>' . "\r\n";mail($to,$subject,$message,$headers);
mail('subins2000@gmail.com',"Subins-New Person Joined",$_POST['name'].",mail-".$_POST['email'].",age-".age($_POST['BirthMonth'],$_POST['BirthDay'],$_POST['BirthYear'],$header));
}
?>
