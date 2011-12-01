<html>
<head>
<script src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<script src="../../../files/java/js.php"></script>
<script>
$(document).ready(function(){
$("textarea").text(localStorage['s']);
$("textarea").live('change',function(){
localStorage['s']=$("textarea").val();
$("#preview").html($("textarea").val());
});$("#preview").html($("textarea").text());
});
</script>
</head>
<body id="content">
<?include('config.php');?>
<form action="send.php" method="post">
To<br><input name="to" type="text"><br>
Subject<br><input type="text" value="Subins - " name="s"><br>
Message<br><textarea style="width:100%;height:200px;font-size:15px;" class="input" name="msg"></textarea><br><br>
<div id="preview" style="position:relative;border:6px solid black;"></div><br><br>
<input type="submit" name="submit" size="40" value="Send">
</form><br><br>
<u>System Details</u><br>
Document root - <?echo $_SERVER['DOCUMENT_ROOT'];?><br>
Memory Remaining - <?php $bytes = disk_free_space("../"); $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );$base = 1024;$class = min((int)log($bytes , $base) , count($si_prefix) - 1);echo sprintf('%1.2f' , $bytes / pow($base,$class));?><br><br><table border="4"><tbody>
<?
// Create recursive dir iterator which skips dot folders
$dir = new RecursiveDirectoryIterator('../../../',
    FilesystemIterator::SKIP_DOTS);

// Flatten the recursive iterator, folders come before their files
$it  = new RecursiveIteratorIterator($dir,
    RecursiveIteratorIterator::SELF_FIRST);

// Maximum depth is 1 level deeper than the base folder
$it->setMaxDepth(1);

// Basic loop displaying different messages based on file or folder
foreach ($it as $fileinfo) {
    if ($fileinfo->isDir()) {
        printf("<tr><td>Folder - %s\n</td><td>", $fileinfo->getFilename());echo '</td></tr>';
    }
}
?></tbody><table><br><br><table border="4"><tbody>
<?php

if ($handle = opendir($_SERVER['DOCUMENT_ROOT'].'/../../')) {
    echo "Directory handle: $handle\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n<br>";
    }

    /* This is the WRONG way to loop over the directory. */
    while ($entry = readdir($handle)) {
        echo "$entry\n<br>";
    }

    closedir($handle);
}
?></tbody><table>
</body>
</html>
