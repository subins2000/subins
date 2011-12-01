<html>
<head>
<title>Subins</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="java/js.js" ></script>
<link href="css/style2.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" />
<link href="css/index.css" rel="stylesheet" />
<script src="java/js.js"></script>
<script src="//accounts-subins.hp.af.cm/data/keys.js"></script>
<script src="java/jquery.min.js"></script>
<style>
a:-webkit-any-link {
color:green;
}
</style> 
<style> 
#yes {
display:none;
}
#<?php echo $_GET['loggedout']; ?>{
display: block;
}
#<?php echo $_GET['id']; ?>{
display:none;
}
</style>
</head>
<body>
<div class="top-bar">
<table>
<tbody>
<tr>
<td style="top:0px;position: absolute;left:20px;">
<a style="position:absolute;top:0px;left:15px;" href="#"><h3>Vtube</h3></a>

<td style="top: 10px;position: absolute;left: 100px;">
<div id="menu-left">
 <a role="button" onclick="document.getElementById('myaudio').play()"class="button" href="//vtube.subins.hp.af.cm" id="homem">Home</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//fd.subins.hp.af.cm/" id="gamesm" class="button">Friendshood</a>
 <a role="button" onclick="document.getElementById('myaudio').play()"href="//games.subins.hp.af.cm" id="gamesm" class="button">Games</a>
 <a role="button" target="_blank" onclick="document.getElementById('myaudio').play()"href="//vtube.subins.hp.af.cm/" id="gamesm" class="button">Videos</a>
</div>

</tr>
</tbody>
</table>
<div class="menu"><?php
if (isset($_COOKIE["VisitorName"]))
  echo 'Welcome,<button id="namebutton"class="button" onclick=$(".sprofile").fadeIn(500).show();>'.$_COOKIE["VisitorName"] ;
else
  echo "<a href='//vtube.subins.hp.af.cm/login.php'><input type='button' class='button' value='Log In'></a>";
?>
</div>
<div class="sprofile" id="sprofile">
<div style="position:fixed;background-color:rgba(82, 82, 82, 0.7);color:white;mouse:pointer;"><a onclick="document.getElementById('overlay').style.display='block'" style="cursor:pointer;">Change Picture</a></div>
<script>document.write("<img id='savatar' src='//accounts-subins.hp.af.cm/data/users/"+Who()+"' height='100px'>");</script>
<div id="sname"><b><script>document.write(Who())</script></b></div>
<a id="sout" class="button" onclick="eraseIt('VisitorName')" href="#">Log Out</a>
</div>
</div>
<div class="content">
<br><br><br><br>
<center><h1><font size="15" color="red">S</font><font size="15"color="violet">u</font><font size="15" color="blue">b</font><font size="15" color="yellow">i</font><font size="15" color="green">n</font><font size="15" color="red">s</font>
</h1>
<form action="search" method="get">
<input name="q" type="text" size="30" value="<? echo $_GET['q']; ?>" onkeyup="showResult(this.value)" />
<button class="g-button g-button-submit" style="height: 29px;line-height: 29px;min-width: 54px;"type="submit">
<span style="background: url(images/search.png);background-position: -357px 0;display: inline-block;height: 13px;margin: 7px 19px;width: 14px;"></span></button>
<div id="livesearch"></div>
</form>
<div hidden>
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="";
for($i=0; $i<($x->length); $i++)
  {
  $y=$x->item($i)->getElementsByTagName('title');
  $z=$x->item($i)->getElementsByTagName('url');
  if ($y->item(0)->nodeType==1)
    {
    //find a link matching the search text
    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
      if ($hint=="")
        {
        $hint="<a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "' target='_blank'><b>" . 
        $y->item(0)->childNodes->item(0)->nodeValue."</b></a>";
        }
      else
        {
        $hint=$hint . "<br /><a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "' target='_blank'>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint=="")
  {
  $response="";
  }
else
  {
  $response=$hint;
  }

//output the response
?><
$xmlDoc=new DOMDocument();
$xmlDoc->load("sindex.htm");

$x=$xmlDoc->getElementsByTagName('td');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="";
for($i=0; $i<($x->length); $i++)
  {
  $y=$x->item($i)->getElementsByTagName('a');
  if ($y->item(0)->nodeType==1)
    {
    //find a link matching the search text
    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
      if ($hint=="")
        {
        $hint="<br><a href='//edu.subins.hp.af.cm?id=content&show=page&p=" . 
        $y->item(0)->getAttribute( 'href' ) . 
        "' target='_blank'><b>" . 
        $y->item(0)->childNodes->item(0)->nodeValue."</b></a>";
        }
      else
        {
        $hint=$hint . "<br /><a href='//edu.subins.hp.af.cm?id=content&show=page&p=" . 
        $y->item(0)->getAttribute( 'href' ) . 
        "' target='_blank'>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint=="")
  {
  $response='<div class="med"><p style="padding-top:.33em">Your search - <b>'.$_GET["q"].'</b> - did not match any documents.  </p><p style="margin-top:1em">Suggestions:</p><ul style="margin:0 0 2em;margin-left:1.3em"><li>Make sure all words are spelled correctly.</li><li>Try different keywords.</li><li>Try more general keywords.</li></ul></div>
';
  }
else
  {
  $response=$hint;
  }

//output the response
?></div>
<script>
$("#morebutton").click(function() {
  $("#result-page").animate(overflow: "visible");
}
</script>
<a href="#" onclick="$('#result-page').animate({overflow:'visible',width:'100px',},900);" id='morebutton' hidden>More</a>
<div id="result-page" style="">
<style>
.pagination{
bottom:140px;
position: absolute;
text-align: center;
left: 600px;
}
#settingsbox{
position:absolute;
right:10px;
top:73px;
}
#sd{
position:absolute;
right:10px;
top:143px;
}
#td{
position:absolute;
right:10px;
top:143px;
}
#tda{
position:absolute;
right:10px;
top:213px;
}
</style>
<div id='settingsbox'><button onclick="$('#td').show('500');$('#sd').hide('500');" class='button'>Tools</button><br><br><button onclick="$('#sd').show('500');$('#td').hide('500');$('#tda').hide('500');" class='button'>Settings</button></div>
<div id='sd' hidden><br>Results per page<br><input type='text' name='rpv' value="<?php if($_COOKIE['rp']=='0'){echo '0';}else{echo $_COOKIE['rp'];} ?>" onblur="SetCookie('rp', this.value);$('#contents').load('pagination_data.php?q=<? echo $_GET['q']; ?>&p=1');"></div>
<div id='td' hidden><br>Add a Site<br><button onclick="$('#tda').show('500');$('#sd').hide('500');" class='button'>Add a Site</button></div>
<div id='tda' hidden><iframe frameborder='0' src='addlink'></iframe></div>
<script>
function setrp(text){
SetCookie ('rp', text, '.subins.hp.af.cm');
}
</script>
<script type="text/javascript">
	
	$(document).ready(function(){
		
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
		$("#loading").html("<img src='images/loader.gif'>");
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	

   //Default Starting Page Results
   
	$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#contents").load("pagination_data.php?q=<? echo $_GET['q']; ?>&p=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'border' : 'solid #dddddd 1px'})
		.css({'color' : '#0063DC'});
		
		$(this)
		.css({'color' : '#FF0084'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		
		$("#contents").load("pagination_data.php?q=<? echo $_GET['q']; ?>&p=" + pageNum, Hide_Load());
	});
	
	
});
	</script>
<?php
include('config.php');
if (isset($_COOKIE['rp'])){$limit = $_COOKIE['rp'];}else{$limit = 2; }
$start = ($page-1)*$limit; 
$q = $_GET['q'];
//Calculating no of pages
$sql = "SELECT * FROM search WHERE title LIKE'%$q%'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
$pages = ceil($count/$limit);
?>

<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="jquery_pagination.js"></script>

<div id="loading" ></div>
<div id="contents" ></div>
<center><ul id="pagination">
<?php
//Pagination Numbers
for($i=1; $i<=$pages; $i++)
{
echo '<center><li id="'.$i.'">'.$i.'</li></center>';
}
?>
</ul></center>
<style>
body { margin: 0; padding: 0; font-family:Verdana; font-size:15px }
a
{
text-decoration:none;
color:#B2b2b2;
}
a:hover
{
color:#DF3D82;
text-decoration:underline;
}
#loading { 
width: 92.5%; 
position: absolute;
}
#pagination
{
text-align:center;
margin-left:550px;
}
#pagination li{	
list-style: none; 
float: left; 
margin-right: 16px; 
padding:5px; 
border:solid 1px #dddddd;
color:#0063DC; 
}
#pagination li:hover
{ 
color:#FF0084; 
cursor: pointer; 
}
</style>
</div>
</div>
</body>
</html>
