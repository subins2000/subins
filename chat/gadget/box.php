<link href="//fd-subins.hp.af.cm/css/style2.css" rel="stylesheet" />
<link href="//fd-subins.hp.af.cm/css/main.css" rel="stylesheet" />
<div id="chatbox" style="overflow: hidden; z-index: 99999999; display: none; ">
<div id="upbar" onclick="Hide('chatbox');" style="text-align:left;cursor:pointer;"></div>
<div id="chatcont" style="overflow:hidden;z-index:99999999;"><div style='text-align:left;' id="iframe2"></div></div>	
<div style="margin-bottom:0px;float:bottom;">
<table style="border-top:1px solid grey;width:100%;"><tbody><tr>
<form method="post" id="fdchat" action="">  
<td><img height='32px' width='32px' src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$who;?>" id='img1'></td>
<td><input value='' id='to' name="to" hidden></td>
<td><input value='chat' name="action" hidden></td>
<td><input type="text" id="usermsg" size="15" autocomplete="off" suggestion="flase" cols="5" rows="1" name="usermsg"></td>
<td><input name="submitmsg" type="submit" class="submit1" id="submitmsg" value="Send"></td>
	</form>
</tr></tbody></table>
</div>	
</div>
