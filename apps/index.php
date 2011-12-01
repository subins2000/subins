<html>
<head>
<meta name="description" content="F"></meta>
<title>Subins Apps</title>
<link rel="shortcut icon" href="//cdn-subins.hp.af.cm/images/favicon.ico" type="image/x-icon">
<link href="css/style2.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet" />
<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php"></script>
<script type="text/javascript">
function eraseIt(name) {
        document.cookie= name + "=;path=//accounts-subins.hp.af.cm; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location = "//subins.hp.af.cm/login?loggedout=yes&id=bg";
}
    </script>
<script>
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
if (thisCookie.value='<?echo$_COOKIE["VisitorName"];?>') {
window.location='//apps-subins.hp.af.cm/Home.php';
}
</script> 
</head>
<body>
<div class="content">
<center><br><br><br><br><br><br><h1><font size="15" color="red">S</font><font size="15"color="violet">u</font><font size="15" color="blue">b</font><font size="15" color="yellow">i</font><font size="15" color="green">n</font><font size="15" color="red">s</font><br>
<font size="15" color="red">A</font><font size="15"color="violet">P</font><font size="15" color="blue">P</font><font size="15" color="yellow">S</font>
</h1>
<?php
if (isset($_COOKIE["VisitorName"]))
  echo 'Welcome,'.$_COOKIE["VisitorName"].'. You will be redirected' ;
else
  echo "To View your apps <a href='//apps-subins.hp.af.cm/login.php'><input type='button' class='button' value='Log In'></a><br> Or you can try it out <a href='Home.php'>here</a>";
?>
</div>
</body>
</html>
<div hidden>
<h1><font color="red">This website is currently down for maintenance.</font></h1>
<h2>
<font color="grey">Sorry! We'll be back as soon as possible. Check back shortly!</font></h2>
</div hidden>
