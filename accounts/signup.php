<html>
<head>
<title>
Create an Account
</title>
<?
$user=$_COOKIE['VisitorName'];
$who=$_COOKIE["VisitorName"];
?>
<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php" ></script>
<link href='//subins.hp.af.cm/files/css/home.css' rel='stylesheet' />
<link href="//accounts-subins.hp.af.cm/files/css/style2.css" rel="stylesheet" />
<script>
if(window.location.protocol=='http:'){
window.location='https://accounts-subins.hp.af.cm/signup.php';
}
function check()
{
	if (document.getElementById("usernames").value.length < 4){ alert("This username is too short!"); return false; }
	var valid_username = /^[\w\s_]+$/; if (!valid_username.test(document.getElementById("username").value)){ alert("This username contains unauthorized characters."); return false; }
	if (document.getElementById("pass").value.length < 5){ alert("This password is too short!"); return false; }
	var valid_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; if (!valid_email.test(document.getElementById("email").value)){ alert("This email address isn't valid!"); return false; }	
}
function validateForm()
{
var x=document.forms["password1"]["usernames"].value;
if (x==null || x=="")
  {
  document.getElementById('a').style.display='block';
  return false;
  }
var x=document.forms["password1"]["pass"].value;
if (x==null || x=="")
  {
  document.getElementById('b').style.display='block';
  return false;
  }
var x=document.forms["password1"]["email"].value;
if (x==null || x=="")
  {
  document.getElementById('c').style.display='block';
  return false;
  }
var x=document.forms["password1"]["name"].value;
if (x==null || x=="")
  {
  document.getElementById('d').style.display='block';
  return false;
  }  
var x=document.forms["password1"]["age"].value;
if (x==null || x=="")
  {
  document.getElementById('e').style.display='block';
  return false;
  }        
}
</script>
</head>
<body>
<div id='content' style="width:auto;">
<div id="overlay" style="display:none;">
<div id="overlay-content">
<script src="//accounts-subins.hp.af.cm/files/java/jquery.form.js"></script>
<script type="text/javascript">
 $(document).ready(function() { 
	
			
					
            $('#submit3').click(function()			
			{ 
			
			  $("#preview").html('');
			    $("#preview").html('<img src="//accounts-subins.hp.af.cm/files/images/loader.gif" alt="Uploading...."//>');
	
			$("#cropimage").ajaxForm({
						target: '#preview'
		}).submit();
		 
	
			});
        }); 
</script>
<form id='cropimage' encoding='multipart/form-data' enctype='multipart/form-data' name='file' method='post' action="profile_pic.php?name=<? echo $_COOKIE['VisitorName'];?>">
<div id='big_up'>
<center style="margin-top:180px;">
<h2>Drag Your File Here</h2></center><center><br>
<input id="big_up_input" name="uploadedfile" type="file" id="photoimg" value="choose"><br>
<script>document.write("<input type='text' id='name' name='name' value='"+Who()+"' hidden>");</script>
<input id="submit3" type="button" value="Upload"></center>
</div>
<div id="preview"></div>
</form>	
</div></div>
<div class="signuponepage main content clearfix">
<div class="signup-steps step-1 clearfix">
  <h1 class="redtext">Create a new Subins Account</h1>
  <ol style="border-bottom: 1px solid black;">
<? if(isset($_GET['fin'])) 
{
?>
 <li class="step-1">1</li>
  <li class="step-2">2</li>
  <li class="step-3  selected">3</li>
<? }else{?>
<? if(isset($_GET['next'])) 
{
?>
  <li class="step-1">1</li>
  <li class="step-2 selected">2</li>
  <li class="step-3">3</li>
<?}else{?>
  <li class="step-1 selected">1</li>
  <li class="step-2">2</li>
  <li class="step-3">3</li>
<?}}?>
  </ol>
</div>
<div class='clearfix'>
<div class="product-info mail" style="width: 500px;"><br><br>
<div class="product-headers">
  <h1 class="redtext">
Connect to people in the world using Subins.
</h1>
</div>
  <p hidden>
  Subins is built on the idea that searching, chatting etc.. can be more intuitive, <br>efficient, and useful. And maybe even fun. After all, Subins has:
</p>
<ul class="features">
  <li>
  <img src="//accounts-subins.hp.af.cm/files/images/filing_cabinet-g42.png" alt="">
  <p class="title">Lots of space</p>
  <p>
<script>
$(document).ready(function(){
$('#username2').focus();
$('#quota').html("<? echo 14.06+10;?>");
});
setInterval(function() {
var i=$('#quota').text();
var p=4;
var e=i+p;
var randomnumber=Math.floor(Math.random()*200);
$('#quota').html('');
$('#quota').html(4*randomnumber);
},1000);
</script>
  Over <a id="quota"><?php 
    $bytes = disk_free_space("/"); 
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    echo sprintf('%1.2f' , $bytes / pow($base,$class));
?></a> <?echo $si_prefix[$class];?> (and adding) of free storage.
  </p>
  </li><br><br>
  <li>
  <img src="//accounts-subins.hp.af.cm/files/images/nosign-r42.png" alt="">
  <p class="title">No Ads</p>
  <p>Disturbed of Ads? Well No More.</p>
  </li><br><br>
  <li>
  <img src="//accounts-subins.hp.af.cm/files/images/free.png" alt="">
  <p id="title">Everything Free</p>
  <p>Everything is free of cost. Don't worry.</p>
  </li>
</ul>
  </div>
<div class="sign-up">
<div id='preview1'></div>
<div class="signup-box">
<div class="jfk-bubble" style="visibility: visible; left: 485px; top: 215px; opacity: 1; "><div class="jfk-bubble-content-id">Username you want to login</div><div class="jfk-bubble-arrow-id jfk-bubble-arrow jfk-bubble-arrowdown" style="left:100px;"><div class="jfk-bubble-arrowimplbefore"></div><div class="jfk-bubble-arrowimplafter"></div></div></div>
<script src='files/java/jquery.validate.js'></script>
<script type="text/javascript">
$(document).ready(function() {
$('.jfk-bubble').css("top",parseFloat($("#usernames").offset().top-30));		
$('.jfk-bubble').css("left",parseFloat($("#usernames").offset().left));		
$('#submitp').click(function()			
{
var pass = $("#pass");
var pass2 = $("#pass2");
var username = $("#usernames");
var submit = 'submit';
var email = $("#email");
var age = $("#age");
if (username.val()=='' || pass.val()=='' || pass2.val()=='' || email.val()=='' || age.val()=='' )
{
var bubble = $(".jfk-bubble-content-id");
$('.jfk-bubble').css("top",parseFloat($("#usernames").offset().top-60));
if (username.val()==''){$(username).addClass("errort");}else{username.removeClass("errort");}
if (pass.val()==''){pass.addClass("errort");}else{age.removeClass("errort");}
if (pass2.val()==''){$(pass2).addClass("errort");}else{age.removeClass("errort");}
if (email.val()==''){$(email).addClass("errort");}else{age.removeClass("errort");}
if (age.val()==''){$(age).addClass("errort");}else{age.removeClass("errort");}
bubble.html('<div id="pvtext" style="color:red !important;">Please fill all the fields</div>');
}else{
$(".jfk-bubble-content-id").css('top','50%');
$(".jfk-bubble-arrow-id").remove();
$(".jfk-bubble-content-id").html('');
$(".jfk-bubble-content-id").html('<img src="files/images/loader.gif" alt="Uploading....">');
$.post("files/keywrite.php", $("#password1").serialize(),
   function(data) {
     var json = eval("(" + data + ")");
     if(json.error=='yes'){
     $(".jfk-bubble-content-id").html('<div id="pvtext" style="color:red !important;">'+json.msg+'</div><br><a id="ta">Try Again</a>');
     }else{$(".jfk-bubble-content-id").html('<div id="pvtext">'+json.msg+'</div>');}
   });
$("#password1 :input").attr("disabled", true);
}
});
$("#ta").live('click',function(){
var name = $("#usernames");
var nameInfo = $(".jfk-bubble-content-id");
name.addClass("errort");
nameInfo.html("We want username with more than 3 letters!");
nameInfo.addClass("error");
nameInfo.removeClass("sucess");
$('.jfk-bubble').animate({top:parseFloat(name.offset().top-120)});
$('.jfk-bubble').append('<div class="jfk-bubble-arrow-id jfk-bubble-arrow jfk-bubble-arrowdown" style="left:100px;"><div class="jfk-bubble-arrowimplbefore"></div><div class="jfk-bubble-arrowimplafter"></div></div>');
$(".jfk-bubble-content-id").html('Username you want to login');
$("#password1 :input[type=password]").val("");
$("#password1 :input").removeAttr("disabled");
});
$('#uc').click(function()			
{ 
var username = $("#usernames").val();
if (username==''){
alert('Type a username');
}
else{
var username = $("#usernames").val();
$.post("files/keywrite.php", { username: username, checku: "2pm"},
   function(data) {
     $("#previewuc").html(data);
   });
}
});
}); 
</script>
<audio src='files/nah.wav' id='nah'></audio>
<? if(isset($_GET['fin'])) 
{
?>
<center><br><br><br><br><br><br><br><br><br><br><br><h2>Congratulations</h2><br>
<h3>You Created your Subins Account !!!<br>Enjoy our Services</h3><br><br><br><br><br><br><br><br></center>
<script>
$('.jfk-bubble').hide('900');
</script>
<?} else{?>
<? if(isset($_GET['next'])) 
{
?>
<button class="g-button g-button-submit" onclick="window.location='signup.php?fin';">Skip</button><br><br>
If you have an account @ Gravatar then you can skip this step.<br>
<h2>If you don't have an account at Gravatar then signup for <a target="_blank" href="https://en.gravatar.com/site/signup">Gravatar</a></h2>
<blockquote>Gravatar is an avatar uploading service which helps you to upload your profile images. Over 2.3 billion Sites have implemented Gravatar. <a href="//subins.hp.af.cm?utm_source=signuppage">Subins</a> is also using Gravatar.</blockquote>
<script>
$('.jfk-bubble').hide('900');
</script>
<?
}
else{
?>
<form id='password1' method="post" name="password1">
Username:<br><center><input style='' placeholder="Username you want to login to" class="required" type="text" name="username" id="usernames" size="26" maxlength="20" value=""></center><span id="a" hidden><font color="red">You didnt type your name</font></span><a id='uc'>Check Availability</a><br><div id='previewuc'></div>
Name:<br><center><input style='' placeholder="Your Name" class="required" type="text" name="name" id="usernames" size="26" maxlength="20" value=""></center><br>
Create a Password:<br><center><input placeholder="Password" type="password" name="pass" id="pass" size="26"value=""></center><br>
Confirm Your Password:<br><center><input placeholder="Retype Password(for security)" id='pass2' type="password"  size="26" name="pass2"></center><br>
Your Email :<br><center><input placeholder="Your E-mail" type="text" name="email" id="email" size="26" value=""></center><span id="c" hidden><font color="red">You didnt type your email</font></span><br>
<table>
<tbody>
<tr>
  Birthday
  <label class="month">
  <td><select id="BirthMonth" name="BirthMonth">
  <option value="">Month</option>
  <option value="01" >January</option>
  <option value="02" >February</option>
  <option value="03" >March</option>
  <option value="04" >April</option>
  <option value="05" >May</option>
  <option value="06" >June</option>
  <option value="07" >July</option>
  <option value="08" >August</option>
  <option value="09" >September</option>
  <option value="10" >October</option>
  <option value="11" >November</option>
  <option value="12" >December</option>
  </select></td>
  </span>
  </label>
  <label class="day">
  <td><select placeholder='Day' style='position:relative;left:10px;float:left;' name="BirthDay" id="BirthDay" ><option value="-1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></td>
  </label>
  <label class="year">
  <td><select placeholder='Year' style='position:relative;left:20px;float:right;' name="BirthYear" id="BirthYear"><option value="-1">Year</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select></td>
  </label>
  </fieldset>
</tr>
</tbody>
</table><br>
I am:<select class="select" name="sex" id="sex"><option value="0">Select</option><option value="female">Female</option><option value="male">Male</option></select>
<div hidden>
Do you have a job ?&nbsp;<input type="button" onclick="$('#job').show('900');$('body').animate({margin-bottom:'0px});" name="vehicle" value="Yes" /><input type="button" onclick="$('#job').hide('500');"name="vehicle" value="No" /><br></div></tbody>
</table>
<div id="job" style="display:none;">

Works at:<input type="text"  name="work" id="work" size="26" maxlength="35" value=""><br />
Position:<font style="color:#EEE;">Password</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" name="position" id="position" size="26" maxlength="35" value="">
</tbody>
</table>
</div>
<center><br><input class="g-button" name="submit" id='submitp' value="Next" type="button" /><br></center>
By clicking Next you are agreed to accept our <a href="toc.pdf">Terms & Conditions</a>.
</form>
<? }}?>
</div>
</div>
</div>
</div>
</body>
</html>
