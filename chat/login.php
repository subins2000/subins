<html version=5>
<head>
<script>
window.location='//accounts-subins.hp.af.cm/login.php?service=//chat-subins.hp.af.cm';
</script>
<title>Login to Subins</title>
<script>
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
if (thisCookie.value="<?echo$_COOKIE['VisitorName'];?>") {
window.location='//chat-subins.hp.af.cm';
}
</script>
</head>
</html>
