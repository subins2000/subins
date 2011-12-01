
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
function move_up() {cdn-
    iframe1.scrollTop = 0;
  }
var script = document.createElement('script');
script.src = '//subins.hp.af.cm/files/java/js.php';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
