<html version=5>
<head>
<script>
var whovar=document.getElementById('phpcookie');
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
if (thisCookie.value="<?echo$_COOKIE['VisitorName'];?>") {
window.location='//fd-subins.hp.af.cm/Home.php';
}
</script>
<script>
window.location='//accounts-subins.hp.af.cm/login.php?service=//fd-subins.hp.af.cm/Home.php';
</script>
</head>
</html>
