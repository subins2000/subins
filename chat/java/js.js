<!-- Begin Script
/*
-----------------------------------------
| By Mattias Sjberg 9/10-96 |
|You're welcome to use/edit this script.|
| Keep the comments and drop me a note. |
-----------------------------------------
| mattias.sjoberg@swipnet.se |
| www.geocities.com/SiliconValley/7116 |
| Vote for my page at the above URL |
-----------------------------------------
*/
var expDays = 30;
var exp = new Date();
exp.setTime(exp.getTime() + (expDays*24*60*60*1000));

function Who(info){
// Who
var VisitorName = GetCookie('VisitorName');
if (VisitorName == null) {
VisitorName = document.password1.username.value;
SetCookie ('VisitorName', VisitorName, exp);
}

return VisitorName;
}

function When(info){
// When
var rightNow = new Date()
var WWHTime = 0;
WWHTime = GetCookie('WWhenH')

WWHTime = WWHTime * 1
/*This part is written by 
Cut & Paste JavaScript 
Copyright 1996, IMA STUDIOS, Inc. 
This code may not be resold.
This Copyright notice must be included
on every document that contains this code.
A link to //www.imastudios.com should
be included somewhere on your document. 
*/
var lastHereFormatting = new Date(WWHTime); // Date-i-fy that number
var intLastVisit = (lastHereFormatting.getYear() * 10000)+(lastHereFormatting.getMonth() * 100) + lastHereFormatting.getDate()
var lastHereInDateFormat = "" + lastHereFormatting; // Gotta use substring functions
var dayOfWeek = lastHereInDateFormat.substring(0,3)
var dateMonth = lastHereInDateFormat.substring(4,11)
var timeOfDay = lastHereInDateFormat.substring(11,16)
var year = lastHereInDateFormat.substring(23,25)
var WWHText = dayOfWeek + ", " + dateMonth + " at " + timeOfDay // display



SetCookie ("WWhenH", rightNow.getTime(), exp)

return WWHText;
}

function Count(info){
var psj=0;
// How many times
var WWHCount = GetCookie('WWHCount')
if (WWHCount == null) {
WWHCount = 0;
}
else{
WWHCount++;
}
SetCookie ('WWHCount', WWHCount, exp);


return WWHCount;
}



function set(){
VisitorName = document.password1.username2.value;
SetCookie ('VisitorName', VisitorName, exp);
SetCookie ('WWHCount', 0, exp);
SetCookie ('WWhenH', 0, exp);
}

// ********************* General Cookie handling *********************
// Cookie Functions - Second Helping (21-Jan-96)
// Written by: Bill Dortch, hIdaho Design <bdortch@netw.com>
// The following functions are released to the public domain.

function getCookieVal (offset) { 
var endstr = document.cookie.indexOf (";", offset); 
if (endstr == -1) 
endstr = document.cookie.length; 
return unescape(document.cookie.substring(offset, endstr));
}

function GetCookie (name) { 
var arg = name + "="; 
var alen = arg.length; 
var clen = document.cookie.length; 
var i = 0; 
while (i < clen) { 
var j = i + alen; 
if (document.cookie.substring(i, j) == arg) 
return getCookieVal (j); 
i = document.cookie.indexOf(" ", i) + 1; 
if (i == 0) break; 
} 
return null;
}

function SetCookie (name, value) { 
var argv = SetCookie.arguments; 
var argc = SetCookie.arguments.length; 
var expires = (argc > 2) ? argv[2] : null; 
var path = (argc > 3) ? argv[3] : null; 
var domain = (argc > 4) ? argv[4] : null; 
var secure = (argc > 5) ? argv[5] : false; 
document.cookie = name + "=" + escape (value) + 
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) + 
((path == null) ? "" : ("; path=" + path)) + 
((domain == null) ? "" : ("; domain=" + domain)) +
((secure == true) ? "; secure" : "");
}

function DeleteCookie (name) { 
var exp = new Date(); 
exp.setTime (exp.getTime() - 1); 
// This cookie is history 
var cval = GetCookie (name); 
document.cookie = VisitorName + "=" + cval + "; expires=" + exp.toGMTString();

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
document.getElementById('div_dialog_background').style.display = 'none';document.getElementById('overlay').style.display = 'none';
document.getElementById('div_dialog_background6').style.display = 'none';document.getElementById('div_share5').style.display = 'none';
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
function check() {
var url = $("#url").html();
if (url==''){
document.getElementById('not').style.display='block';
document.getElementById('div_dialog_background1').style.display='block';
}
else {
}
var VisitorName = GetCookie('VisitorName');
if (VisitorName == null)
{
window.location="//videos.subins.hp.af.cm/";
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
var script = document.createElement('script');
script.src = '//subins.hp.af.cm/files/java/js.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
