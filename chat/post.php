<script src="java/js.js"></script>
<?php    
    $myFile = "log.html";
    $fh = fopen($myFile, 'a+' ); 
    $stringData = ("<div class='msgln'><img style='float:left;height: 32px;width: 32px;' src='//accounts-subins.hp.af.cm/getimg.php?user=".htmlspecialchars($_POST['userimg'])."'><div id='mcontent'><div class='time'><b>".htmlspecialchars($_POST['username'])."</b>&nbsp;&nbsp;&nbsp;&nbsp;(".date("g:i A").")</div><div class='msg' id='msg'>".htmlspecialchars($_POST['usermsg'])."</div></div></div>");
    fwrite($fh, $stringData);  
    fclose($fh);  
?>  
