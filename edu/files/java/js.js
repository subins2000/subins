function Who(info){
// Who
var VisitorName = getCookie('VisitorName');
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
document.getElementById(divId).style.display='block';
}
}
function Hide(divId)
{
if(document.getElementById(divId).style.display = 'block')
{
document.getElementById(divId).style.display='none';
}
}

function replaceEmoticons(text) {
  var emoticons = {
    ':-)' : 'smile1.gif',
    ':)'  : 'smile2.gif',
    ':D'  : 'smile3.gif',
    ':-|'  : 'smile4.gif'
  }, url = "//www.domain.com/", patterns = [],
     metachars = /[[\]{}()*+?.\\|^$\-,&#\s]/g;

  // build a regex pattern for each defined property
  for (var i in emoticons) {
    if (emoticons.hasOwnProperty(i)){ // escape metacharacters
      patterns.push('('+i.replace(metachars, "\\$&")+')');
    }
  }

  // build the regular expression and replace
  return text.replace(new RegExp(patterns.join('|'),'g'), function (match) {
    return typeof emoticons[match] != 'undefined' ?
           '<img src="'+url+emoticons[match]+'"/>' :
           match;
  });
}

replaceEmoticons('this is a simple test :-) :-| :D :)');
function changeText(){
document.getElementById('name1').innerHTML=Who();
document.getElementById('vjs-text-track-display').innerHTML='Subins';
}
function keys(){
if (event.keyCode == 27)
{
$('#div_dialog_background').hide('500');$('#overlay').hide('500');
$('#div_dialog_background6').hide('500');$('#div_share5').hide('500');
}
if (event.keyCode == 71)
{
games();
}
if (event.keyCode == 36)
{
window.location="//videos.subins.hp.af.cm/files/Home.php";
}
if (event.keyCode == 80)
{
document.getElementById('div_dialog_background').style.display = 'block';
}
if (event.keyCode == 67)
{
document.getElementById('chatbox').style.display = 'block';
}
if (location.href=='//videos.subins.hp.af.cm/files/Home.php') 
var btn1 = document.getElementById('homemv');
{
btn1.click();
}
}
function Large(obj)
{
    var imgbox=document.getElementById("img_big");
    var imgbox1=document.getElementById("div_share5");
    var img_cont=document.getElementById("div_dialog_background6");
    img_cont.style.display='block';
    imgbox1.style.display='block';
    var img = document.createElement("img");
    imgbox.innerHTML='<center style="padding-top:0px;"><img id="img_big" src='+obj.src+'></center>';
    if(img.addEventListener){
        img.addEventListener('mouseout',Out,false);
    } else {
        img.attachEvent('onmouseout',Out);
    }             
    imgbox.appendChild(img);
    imgbox.style.left=(getElementLeft(obj)-50) +'px';
    imgbox.style.top=(getElementTop(obj)-50) + 'px';
}
function move_up() {
    iframe1.scrollTop = 0;
  }
		$(document).ready(function(){
			$('.text').emoticonize({
				//delay: 800,
				//animate: false,
				//exclude: 'pre, code, .no-emoticons'
			});
			$('#toggle-headline').toggle(
				function(){
					$('#large').unemoticonize({
						//delay: 800,
						//animate: false
					})
				}, 
				function(){
					$('#large').emoticonize({
						//delay: 800,
						//animate: false
					})
				}
			);
		});
