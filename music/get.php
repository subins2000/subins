<script src="java/countdown.js"></script>
<script>
$('div.tfo > div').each(function(i) {
    if( i % 5 == 0 ) {
        $(this).nextAll().andSelf().slice(0,5).wrap('<div id="tr"></div>');
    }
});​
$("a").click(function(){
event.preventDefault();
var th = this.href;
var href = '/'+th.substr(24); 
var Df = th.substr(24);
function getEx(filename)
{
var filename = '/'+th.substr(24); 
return (/[.]/.exec(filename)) ? /[^.]+$/.exec(filename) : undefined;
}
var filename=getEx(this.href);
if (filename==undefined){
$('#folder').load('//music.subins.hp.af.cm/get.php?dir='+Df);
}else{
$("#playm").attr({src: href});
document.getElementById('playm').play();
}
});
$(document).scroll(function() {
  var leftPos = $(document).scrollLeft();
  $(document).animate({scrollLeft: leftPos + 200}, 800);
});
});
</script>
<?php
// open this directory 
$dir=$_GET['dir'].'/';
$myDirectory = opendir($dir);

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount = count($dirArray);

// sort 'em
sort($dirArray);

// print 'em
print("<div id='tfo' class='tfo' style='display: table;'><div id='table'><div id='tbody'><div id='tr'>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
while($i<=$index)
  {
  $i++;
  }?><?
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
                if (filetype($dir.$dirArray[$index])=='dir'){
		echo"<div id='td'><center><div id='mitem'><a href='$dir$dirArray[$index]'><div style='height:30%;background:url(images/folder.png) no-repeat;padding-top: 40px;text-align:left;'></div><span>$dirArray[$index]</span></a></div></center></div>";                
                }
                if (filetype($dir.$dirArray[$index])=='file'){
		echo"<div id='td'><center><div id='mitem'><a href=\"$dir$dirArray[$index]\"><div style=\"height:30%;background:url(images/music.png) no-repeat;padding-top: 40px;text-align:center;\"></div><span style='max-width:10px;'>$dirArray[$index]</span></a></div></center></div>";                
                }
	}
}
print("</div><div></div></div>\n");
?><br><br><br>
<b hidden>
                $bytes = filesize($dir.$dirArray[$index]); 
                $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
                $base = 1024;
                $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
                echo sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class];
include('config.php');
$insert = "INSERT INTO musics (title, url) VALUES ('$dirArray[$index]', '$dirArray[$index]')";
 	$add_member = mysql_query($insert);
</b>
