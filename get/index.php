<html>
<head>
<meta name="description" content="F"></meta>
<title>Subins Get</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="css/style2.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet" />
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php"></script>
<script>
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
if (thisCookie.value='<?echo$_COOKIE["VisitorName"];?>') {
window.location='//get-subins.hp.af.cm/Home.php';
}
</script>
<style>
a:-webkit-any-link {
color:green;
}
</style> 
</head>
<body>
<div id="div_share" style="display:none;"> </div>
<div class="content">
<center><br><br><br><br><br><br><br><h1><font size="15" color="red">S</font><font size="15"color="violet">u</font><font size="15" color="blue">b</font><font size="15" color="yellow">i</font><font size="15" color="green">n</font><font size="15" color="red">s</font><br>
<font size="15" color="red">G</font><font size="15" color="blue">E</font><font size="15" color="yellow">T</font>
</h1>
<?php
if (isset($_COOKIE["VisitorName"]))
  echo 'Browse the Gallery <a href="Home.php">Here</a>' ;
else
  echo "<a href='//accounts-subins.hp.af.cm/login.php?service=//get-subins.hp.af.cm/Home.php'><input type='button' class='button' value='Log In'></a>";
?>
</div>
</body>
</html>
