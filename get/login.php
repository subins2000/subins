<html version=5>
<head>
<title>Apps</title>
<script>
window.location='//accounts-subins.hp.af.cm/login.php?service=apps';
</script>
<link href="files/css/main.css" rel="stylesheet" />
<link href="files/css/index.css" rel="stylesheet" />
<script src="files/java/js.js"></script>
<script src="//accounts-subins.hp.af.cm/data/keys.js"></script>
<script src="files/java/jquery.min.js"></script>
<style> 
#yes {
display:none;
}
#<?php echo $_GET['loggedout']; ?>{
display: block;
}
#<?php echo $_GET['id']; ?>{
display:none;
}
</style>
</head>
<body scrolling="no" style="" ONKEYDOWN="if (event.keyCode == 13){document.getElementById('div_dialog_background').style.display = 'none';document.getElementById('div_share').style.display = 'none';}">
<script>
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
if (thisCookie.value=Who()) {
window.location='//apps-subins.hp.af.cm';
}
</script>
<div id="div_dialog_background" style="display:none;">
<a id="x" href="javascript:;" onclick="javascript:Hide('div_share');Hide('div_dialog_background');">x</a>
</div>
<div id="div_share" style="display:none;"> 
  <div id="register" style="text-align:center;">
  <iframe src="files/main.php" scrolling="no" frameborder="0" height="330px;"></iframe>
 </div>
 </div>
<center>
<font size="16">
<div class="content">
Your World
</font></center>
<div class="top-bar2">
<table style="float:left;margin-left:20px;">
<tbody>
<tr>
<td>
<a style="position:absolute;top:0px;left:15px;" href="//apps-subins.hp.af.cm"><h3>Apps</h3></a>
</td>
</tr>
</tbody>
</table>
<SCRIPT type=text/javascript>
    function doClick(buttonName,e)
    {
        //the purpose of this function is to allow the enter key to 
        //point to the correct button to click.
        var key;

         if(window.event)
              key = window.event.keyCode;     //IE
         else
              key = e.which;     //firefox
    
        if (event.keyCode == 13)
        {
            //Get the button the user wants to have clicked
            var btn = document.getElementById('login');
            //If we find the button click it
                btn.click();
                event.keyCode = 0
            
        }
        else {
        alert('failed');
        }
   }
var btn = document.getElementById('login');
</SCRIPT>
<form name="password1" action="//accounts-subins.hp.af.cm/login.php?service=apps" method="post" ONKEYDOWN="if (event.keyCode == 13){var btn = document.getElementById('login');btn.click();}">
<table style="float:right;">
<tbody>
<tr>
<td>Username<input class="input" type="text" id="username2" name="username"></td><td>Password<input class="input" type="password" id="password2" name="password2"></td><td><input class="button" style="margin-top:20px;background-color: #4D90FE;" type="submit" value="Log In" onclick="" name="login" id="login"><input class="button" type="reset" value="Reset"/></td>
</tbody>
</table>
</tr>
</form>
</div>
<?php
if (isset($_POST['username'])){
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="password"; // Mysql password 
$db_name="db"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password2']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
setcookie("VisitorName", $myusername, time()+3600, "/", "subins.hp.af.cm");
header("location:index.php");
}
else {
echo '<center><div id="overlay"><div id="overlay-content"><div id="pop"><font color="red">Username or password is Wrong</font></div></div></div></center>';
}
}
?>
<br /><div id="bg"><center style="padding-top: 60px;">View and manage your apps</center></div>
<div style="float:right;margin-right:50px;height:380px;"><br /><br />
<input type="submit" onclick="Show('div_dialog_background');Show('div_share')" value="Create a Free Account" size="4" maxlength="4">
<br /><br />
IT IS ALWAYS FREE <br />AND ALWAYS WILL BE<br />
<iframe src="files/main.php" scrolling="no" frameborder="0" height="100%"></iframe>
</div>
<div hidden>
cp -R /home/simsu/htmL/subin /var/www
sudo gedit /var/www/subin/index.php
</div>
</div>
<div id="yes">
<h1>
<center>
You have been logged out.<br /><br />
<a href="//apps-subins.hp.af.cm/login"><input type="button" value="Log In Again"></a>
</center>
</h1>
</div>
<iframe src="7.0_0.csrx" hidden></iframe>
</body>
</html>
