<html>
<head>
<?if(!isset($_GET['p']) || $_GET['p']==''){$_GET['p']=1;}?>
<script src='//www.google-analytics.com/ga.js' type='text/javascript'></script>
<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36727183-1']);
  _gaq.push(['_setDomainName', 'hp.af.cm']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : '//www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<title>Subins</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script type="text/javascript" src="//subins.hp.af.cm/files/java/js.php"></script>
<script type="text/javascript" src="files/java/jquery.min.js"></script>
<script type='text/javascript' src='files/java/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="files/css/jquery.autocomplete.css" />
</head>
<body>
<center style="position:fixed;left:40%;top:50px;border: 6px solid #EEE;background:#EEE;border-top-left-radius: 12px;border-top-right-radius: 12px;">
<form id='vlform' action="search.php" method="get">
<input id='vl' autocomplete="off" name="q" type="text" size="30" value="<? echo $_GET['q']; ?>"  />
<input id='vla' name="p" type="text" size="30" value="1"  hidden style="display:none;">
<button class="g-button g-button-submit" style="height: 29px;line-height: 29px;min-width: 54px;"type="submit">
<span style="background: url(files/images/search.png);background-position: -357px 0;display: inline-block;height: 13px;margin: 7px 19px;width: 14px;"></span></button>
<div style="width: 291px;top: 30px;position: absolute;text-align: left;left: 0px;background:white;" id="livesearch"></div>
<?
if (!$_GET['q']==''){
include ('config.php');
 $q= $_GET['q'];
 $data = mysql_query("SELECT * FROM search WHERE title LIKE'$q%'"); 
 $rn = mysql_num_rows($data);
 echo'<br>';
 echo '<span id="nrf">'.$rn.' results found</span>';
}
?>
</form>
</center>
<div class="content">
<br><br><br><br><center>
<div id="result-page" style="">
<script type="text/javascript">
function setrp(text){
SetCookie ('rp', text, '.hp.af.cm');
}
</script>
<script type="text/javascript">
$(document).ready(function(){function Display_Load(){$("#loading").show();$("#loading").html("<img src='files/images/loader.gif'>");}function Hide_Load(){$("#loading").hide();$("#nrf").html($("#contents").find("#nfrp").text());};$("#pagination td:first").css({'color' : '#FF0084'}).css({'border' : 'none'});var str = "<? echo $_GET['q']; ?>";str = str.replace(/ /g, '+');$(".pgn").live('click',function(){Display_Load();$("#pagination td").css({'border' : 'solid #dddddd 1px'}).css({'color' : '#0063DC'});$(this).css({'color' : '#FF0084'}).css({'left' : '0px'}).css({'position' : 'relative'}).css({'border' : 'none'});q = "<?php echo $_GET['q']; ?>";var pageNum = this.id;window.history.replaceState("search.php?q="+q+"&p=", q, "search.php?q="+q+"&p="+this.id);$("#contents").load("pagination_data.php?q=<? echo $_GET['q']; ?>&p=" + pageNum, Hide_Load());});
$("#vlform").live('submit',function(){Display_Load();event.preventDefault();var q = "<?php echo $_GET['q']; ?>";var ana=$(this).find('#vl').val().replace(" ","+");window.history.replaceState("search.php?q=<?php echo $_GET['q']; ?>&p=<? echo $_GET['p']; ?>", q, "search.php?q="+ana+"&p=<? echo $_GET['p']; ?>");$("#contents").load("pagination_data.php?q="+ana+"&p=<? echo $_GET['p']; ?>", Hide_Load());});});
</script>
<div id="loading" style="height"></div>
<style>#settingsbox{position:absolute;right:10px;top:73px;}#sd{position:absolute;left:10px;top:163px;}#td{position:absolute;left:10px;top:163px;}#tda{position:absolute;left:150px;top:203px;}</style>
<div id='lsidebar'><br><br><br><button onclick="$('#td').show('500');$('#sd').hide('500');" class='button'>Tools</button><br><br><button onclick="$('#sd').show('500');$('#td').hide('500');$('#tda').hide('500');" class='button'>Settings</button>
<div id='sd' hidden><br>Results per page<br><input type='text' name='rpv' value="<?php if($_COOKIE['rp']=='0'){echo '0';}else{echo $_COOKIE['rp'];} ?>" onblur="SetCookie('rp', this.value);$('#contents').load('pagination_data.php?q=<? echo $_GET['q']; ?>&p=1');"></div>
<div id='td' style="display:none;"><br>Add a Site<br><button onclick="$('#tda').toggle();$('#sd').hide('500');" class='button'>Add a Site</button></div>
<div id='tda' style="left:0px;top:240px;" hidden><iframe width="150" frameborder='0' src='addlink.php'></iframe></div>
</div>
<div id="contents" style='text-align:left;'><?echo "<br><br><br><br>";include('config.php');$page=$_GET['p'];$tbl_name="search";$q = $_GET['q'];$q = strtoupper($q); $q = strip_tags($q); $q = trim ($q); $dataa = mysql_query("SELECT * FROM $tbl_name WHERE title LIKE'%$q%'"); $rn = mysql_num_rows($dataa); if ($q == ""){echo "<br><br><br><br>";echo "<h2><p>Please Enter a search term</p></h2>"; exit;} $data = mysql_query("SELECT * FROM $tbl_name WHERE title LIKE'%$q%'"); echo "<p>";$rows = mysql_num_rows($data); if ($rows == 0) {echo '<div class="med"><p style="padding-top:.33em">Your search - <b>'.$_GET["q"].'</b> - did not match any documents.  </p><p style="margin-top:1em">Suggestions:</p><ul style="margin:0 0 2em;margin-left:1.3em"><li>Make sure all words are spelled correctly.</li><li>Try different keywords.</li><li>Try more general keywords.</li><li>This link may not be on our database. Please add it <a href="addlink.php">here</a></li></ul></div>'; }else{mysql_query("UPDATE $tbl_name SET hits = hits + 1 WHERE title = '".$q."'");if (isset($_COOKIE['rp'])){if (!$_COOKIE['rp']==null){$limit = $_COOKIE['rp'];}else{$limit = 10; }}else{$limit = 10; }$start = ($page-1)*$limit; $dataz = mysql_query('SELECT * FROM '.$tbl_name.' WHERE title LIKE "'.$q.'%" ORDER BY hits DESC LIMIT '.$start.', '.$limit.''); ?><table style="width:100%;text-align:left;"><tbody><?while($rv = mysql_fetch_array($dataz)){echo '<tr style="border: 2px dashed #EEE;padding-left:10px;"><td style="width:52px;"><img src="getimg.php?img='.$rv['url'].'" height="32px" width="32px"></td><td><a target="_blank" style="color:blue !important;" href="link.php?url='.$rv['url'].'">'.$rv['title'].'</a>'.$ds.'</tr>';  }}?></tbody></table><br><br>
<ul id="pagination">
<table><tbody><tr>
<?php
include('config.php');
if (isset($_COOKIE['rp'])){if (!$_COOKIE['rp']==null){$limit = $_COOKIE['rp'];}else{$limit = 10; }}else{$limit = 10; }
$start = ($page-1)*$limit; 
$q = $_GET['q'];
//Calculating no of pages
$sql = "SELECT * FROM search WHERE title LIKE'$q%'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
$pages = ceil($count/$limit);
//Pagination Numbers
if (!$_GET['q']==''){
for($i=1; $i<=$pages; $i++){echo '<td class="pgn" id="'.$i.'">'.$i.'</td>';
}}
?>
</tr></tbody></table>
</ul></div>
<style>body { margin: 0; padding: 0; font-family:serif; font-size:15px }a{text-decoration:none;color:#B2b2b2;}a:hover{color:#DF3D82;text-decoration:underline;}#loading {display:none;width: 1072px;position: absolute;z-index: 99999999999999999999999999999;text-align: center;height: 487px;top: 100px;background:#EEE;left: 180px;}.pgn{list-style: none;margin-right: 16px;padding:5px;border:solid 1px #dddddd;color:#0063DC;}#pagination{max-width:600px;float:left;margin-left:100px;overflow:auto;cursor: pointer;}#pagination li:hover{color:#FF0084; cursor: pointer; }</style>
</div>
</div>
<script type="text/javascript">
$("body").ready(function() {
	$("#vl").autocomplete("livesearch.php", {
		width: $("#vl").width()+7,
		matchContains: true,
		selectFirst: false
	});
});
</script>
</body>
</html>
