function Who(info){
// Who
var VisitorName = "<? echo $_COOKIE['VisitorName'];";
return VisitorName;
}
// ********************* General Cookie handling *********************
// Cookie Functions - Second Helping (21-Jan-96)
// Written by: Bill Dortch, hIdaho Design <bdortch@netw.com>
// The following functions are released to the public domain.
function setCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
function eraseCookie(name) {
	createCookie(name,"",-1);
}
// End Script -->
function Show(divId)
{
if(document.getElementById(divId).style.display = 'none')
{
$('#'+divId).show();
}
}
function Hide(divId)
{
if(document.getElementById(divId).style.display = 'block')
{
$('#'+divId).hide();
}
}
function keys(){
if (event.keyCode == 27){$('#div_dialog_background1').hide('500');$('#overlay').hide('500');$('#div_dialog_background6').hide('500');$('#div_share5').hide('500'); }
if (event.keyCode == 71){games();}
if (event.keyCode == 36){window.location="//videos.subins.hp.af.cm/files/Home.php";}
if (event.keyCode == 80){document.getElementById('div_dialog_background').style.display = 'block';}
if (event.keyCode == 67){document.getElementById('chatbox').style.display = 'block';}
window.history.replaceState("", "title","Home.php");
}
if (location.href=='//fd-subins.hp.af.cm') 
{var btn1 = document.getElementById('homemv');btn1.click();}else{}
var script = document.createElement('script');
script.src = 'java/js.php';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
