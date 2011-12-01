<html>
<head>
<title>Quiz || Subins</title>
<script type="text/javascript">
var cookieStart=document.cookie.indexOf('VisitorName'+"=");
var cookieEnd=document.cookie.indexOf(';', cookieStart);
var thisCookie=document.cookie.substring(cookieStart,cookieEnd);
function double1(){
var uiks=document.getElementById('name');
if (uiks.value==''){
window.location='//quiz.subins.hp.af.cm/';
}
}
function eraseIt(name) {
        document.cookie= name + "=;domain=.subins.hp.af.cm;path=/; expires=Sun, 04 Nov 2010 14:02:54 GMT";
	window.location ="//quiz.subins.hp.af.cm/login?loggedout=yes&id=bg" ;
}
    </script>
<script src='java/jquery-1.1.min.js' type='text/javascript'></script>
<script src='java/slider.js' type='text/javascript'></script>
<script src='java/js.js' type='text/javascript'></script>
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="java/js.js" ></script>
<script src="java/jquery.min.js"></script>
<link href="css/main.css" rel="stylesheet">
<link href="css/home.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function(){
$('#my-slideshow').bjqs({
'width' : 940,
'height' : 340,
'showMarkers' : true,
'showControls' : true,
'centerMarkers' : false
});
});
</script>
<style>
#<? echo $_POST["qno"]; ?> {
display:block;
}
#<? echo $_POST["qidn"]; ?> {
display:none;
}
</style>
<script language="JavaScript">
<!-- hide
var ans = new Array;
var done = new Array;
var score = 0;
var tot_ques=9;
ans[0]='d';
ans[1]='b';
ans[2]='a';
ans[3]='c';
ans[4]='d';
ans[5]='d';
ans[6]='c';
ans[7]='a';
ans[8]='b';
ans[9]='a';
function Engine(question, answer) {
        if (answer != ans[question]) {
                if (!done[question]) {
                       done[question] = -1;
                       var corwsay=document.getElementById('corwsay');
                       var correct=document.getElementById('correctan');
                       var wrong=document.getElementById('wrongan');
                       corwsay.play();
                       corwsay.addEventListener("ended", function() {
                       wrong.play();
                       });
                       wrong.addEventListener("ended", function() {
                       $('#submitquiz').click();
                       });
                       }
               else {
                       alert('You have already answered that!');
                       }
               }
       else {
               if (!done[question]) {
                       done[question] = -1;
                       score++;
                       var corwsay=document.getElementById('corwsay');
                       var correct=document.getElementById('correctan');
                       corwsay.play();
                       corwsay.addEventListener("ended", function() {
                       correct.play();
                       });
                       correct.addEventListener("ended", function() {
                       var y=parseInt(document.getElementById("score").value, 10);
                       var x=y+1;
                       var demoP=document.getElementById("score");
                       demoP.value=null;
                       demoP.value=x;
                       $('#submitquiz').click();
                       });
                       }
               else {
                       alert('You have already answered that!');
                       }
               }
}
function Test_result() {
        if (score == tot_ques) {
                alert('Oh!  You got full points!');
                }
        else {
                alert('You got ' + score + ' point(s) out of ' + tot_ques + ' questions.')
                }
}
//-->
</script>
<script>
function ChangeText(){
document.getElementById("scoredivv").innerHTML=document.getElementById("score").value;
}
</script>
</head>
<body onload="ChangeText();double1();check();checkCookie();" ONKEYDOWN="keys()" >>
<div id="overlay" style="display:none;">
<div id="overlay-content">
<script src="java/jquery.form.js"></script>
<script type="text/javascript">
 $(document).ready(function() { 
	
			
					
            $('#submit3').click(function()			
			{ 
			
			  $("#preview").html('');
			    $("#preview").html('<img src="images/loader.gif" alt="Uploading...."//>');
	
			$("#cropimage").ajaxForm({
						target: '#preview'
		}).submit();
		 
	
			});
        }); 
</script>
<script>document.write("<form id='cropimage' encoding='multipart/form-data' enctype='multipart/form-data' name='file' method='post' action='profile_pic.php?name="+Who()+"'>");</script>
<center><input name="uploadedfile" type="file" id="photoimg" value="choose">
<script>document.write("<input type='text' id='name' name='name' value='"+Who()+"' hidden>");</script>
<input id="submit3" type="button" value="Upload"></center>
<div id="preview"></div>
</form>	
</div></div>
<div class="top-bar">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a style="position:absolute;top:0px;left:15px;" href="#"><br>Quiz</a>
</td>
<td style="top: 10px;position: absolute;left: 100px;">
<div id="menu-left">
 <a onclick="window.location='Home.php'" class="button">Home</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//fd.subins.hp.af.cm/" id="gamesm" class="button">Friendshood</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//vtube.subins.hp.af.cm/" id="gamesm" class="button">V Tube</a>
 &nbsp;
</div>
</td>
</tr>
</tbody>
</table>
<div class="menu">Welcome to Quiz <button id="namebutton"class="button" onclick="$('.sprofile').fadeIn(500).show();"><script>document.write(Who())</script>
</div>
<div class="sprofile" id="sprofile">
<div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;"><a onclick="document.getElementById('overlay').style.display='block'" style="cursor:pointer;">Change Picture</a></div>
<script>document.write("<img id='savatar' src='//accounts-subins.hp.af.cm/data/users/"+Who()+"' height='100px'>");</script>
<div id="sname"><b><script>document.write(Who())</script></b></div>
<form method="post" action='//accounts-subins.hp.af.cm/login.php?service=quiz'><input id="sout" type='submit' name='logout' value="Log Out"></form>
</div>
</div>
<div class="content"><br><br>
<div class="quiz">
<center>
<form method="POST" action="//quiz.subins.hp.af.cm/files/Home.php">
<h1><u>Millionare</u></h1>&nbsp;<h6 style="float: right;right: 530px;position: absolute;top: 160px;">from Subins</h6>
<script>
var randomnumber=[0,1,2,3,4,5,6,7,8,9];
randomnumber.sort(function(a,b){return a-b})
document.write("<input type='text' id='qnov' name='qno' value=q"+randomnumber[1]+" hidden>");
</script><br><br><br>
<div id='q0'>
<b><span id="qnoq"></span>Who is the current American President?</b><br><p>
<a id='option'><input type="radio" value="a" onclick="Engine(1, this.value)">Hilary Klinton</a>
<a id='option'><input type="radio" value="b" onclick="Engine(1, this.value)">Barack Obama<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(1, this.value)">George Bush</a>
<a id='option'><input type="radio" value="d" onclick="Engine(1, this.value)">Manmohan Singh</a><br><br><br></div>
<div id='q1' hidden>
<b><span id="qnoq"></span>Who created Google?</b><br><br></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(9, this.value)">Larry Page and Sergey Brin.</a>
<a id='option'><input type="radio" value="b" onclick="Engine(9, this.value)">Larry Mark and Sergey Brin.<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(9, this.value)">Mark Page and Sergey Buck.</a>
<a id='option'><input type="radio" value="d" onclick="Engine(9, this.value)">Mark Twain and Sergey Brin.</a><br><br><br>
</div>
<div id='q2' hidden>
<b>Who invented the BALLPOINT PEN?</b></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(2, this.value)">Biro Brothers<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(2, this.value)">Waterman Brothers<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(2, this.value)">Bicc Brothers<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(2, this.value)">Write Brothers<br></a><br><br>
</div>
<div id='q3' hidden>
<b>The hazards of radiation belts include__?</b></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(0, this.value)">deterioration of electronic circuits<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(0, this.value)">damage of solar cells of spacecraft<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(0, this.value)">adverse effect on living organisms<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(0, this.value)">All of the above<br></a><br><br>
</div>
<div id='q4' hidden>
<b>In which decade was the first solid state integrated circuit demonstrated?</b></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(3, this.value)">1980's<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(3, this.value)">1930's<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(3, this.value)">1950's<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(3, this.value)">1940's<br></a><br><br>
</div>
<div id='q5' hidden>
<b>What J. B. Dunlop invented?</b></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(4, this.value)">Rubber boot<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(4, this.value)">Automobile wheel rim<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(4, this.value)">Model airplanes<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(4, this.value)">Pneumatic rubber tire<br></a><br><br>
</div>
<div id='q6' hidden>
<b>Which scientist discovered the radioactive element radium?</b></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(5, this.value)">Isaac Newton<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(5, this.value)">Albert Einstein<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(5, this.value)">Benjamin Franklin<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(5, this.value)">Marie Curie<br></a><br><br></a>
</div>
<div id='q7' hidden>
<b>What is the name of the CalTech seismologist who invented the scale used to measure the magnitude of earthquakes?</b></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(7, this.value)">Charles Richter<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(7, this.value)">Hiram Walker<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(7, this.value)">Giuseppe Mercalli<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(7, this.value)">Joshua Rumble<br></a><br><br></a>
</div>
<div id='q8' hidden>
<b>When was barb wire patented?</b>
<a id='option'><input type="radio" value="a" onclick="Engine(6, this.value)">1900's<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(6, this.value)">1864's<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(6, this.value)">1874's<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(6, this.value)">1890's<br></a><br><br>
</div>
<div id='q9' hidden>
<b>What Galileo invented?</b></p><p>
<a id='option'><input type="radio" value="a" onclick="Engine(8, this.value)">Pendulum clock<br></a>
<a id='option'><input type="radio" value="b" onclick="Engine(8, this.value)">Thermometer<br></a>
<a id='option'><input type="radio" value="c" onclick="Engine(8, this.value)">Microscope<br></a>
<a id='option'><input type="radio" value="d" onclick="Engine(8, this.value)">Barometer<br></a>
</p>
</div>
<input type='text' name='qidn' value="q0" hidden>
</center>
<?
if (isset($_POST["score"]))
  echo "<input type='text' id='score' name='score' value='".$_POST['score']."'hidden>";
else
  echo '<script>document.write("<input type=text id=score name=score value="+score+" hidden>");</script>';
?>
<input type="submit" id="submitquiz" value="Next Question">
</form><center>
</div>
<div class='scorediv' onmouseover="$('.scorediv').animate({right:'0px',width:'100px',},900);document.getElementById('scoredivv').style.display='block';"><h3>Score --</h3><a id='scoredivv' hidden></a>
</div>
<audio src="audio/correct.wav" id='correctan' autobuffer hidden>
<audio src="audio/corwsay.wav" id='corwsay' autobuffer hidden>
<audio src="audio/wrong.wav" id='wrongan' autobuffer hidden>
</body>
</html>
