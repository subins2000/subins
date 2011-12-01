<script type="text/javascript">
function up_photo(){
$("#photodiv").show('500');
$("#formpc").hide('500');
}
function up_status(){
$("#photodiv").hide('500');
$("#formpc").show('500');
}
</script>
<?include('config.php');$who=$_COOKIE['VisitorName'];$fasdxast=mysql_query("SELECT * FROM members WHERE username='".$who."'");
while($ftw = mysql_fetch_array($fasdxast)){$unw=$ftw['name'];}?>
<body onload="changeText()"><div style="margin-left:12.5%;">
<td><strong onclick="up_status()" style="text-align:center;background-color:#EEE;width:90px;cursor:pointer;">Update Status</strong></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><strong onclick="up_photo()" style="background-color:#EEE;width:90px;cursor:pointer;">Upload Photo</strong></td></div>
<script type="text/javascript" >
$("#formpc").live('submit',function(){
event.preventDefault();
$("#submitpo").text('Posting....');
$("#formpc :input").attr("readonly", true);
var textv = $("#text").val();
var currentdate = new Date(); 
var time=currentdate.getHours()+":"+currentdate.getMinutes();
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
var ttime=currentdate.getDate() + " " + monthNames[currentdate.getMonth()]  + " " + currentdate.getFullYear();
$.post("post.php", $(this).serialize(), function(data) {
var json = eval("(" + data + ")");
$(".message_box:first").before('<div id="'+json.pid+'" style="max-width: 600px;" class="message_box"><div id="pholder"><table><tbody><tr><td id="pimg"><a><img style="height: 48px;width: 48px;" src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$who;?>&amp;height=48&amp;width=48"></a></td><td id="asd"><div id="pcont"><div class="ze ie"></div><span id="puser"><a id="hreftag" href="//fd-subins.hp.af.cm/profile.php?user=<?echo$who;?>" class=""><b><?echo$unw;?></b></a></span><span id="ptime" style="cursor:pointer;color:#999;" title="'+ttime+'">'+time+'</span><h4 style="margin-right: 60px;text-align:left;" id="pcontent">​'+json.text+'</h4><div id="post-footer"><table><tbody><tr><td><div style="padding-left: 8px;padding-top: 4px;background: url(images/mixed.png) 0px 4px;height: 30px;width: 30px;color:white;position:relative;top:-3px;"><span class="lcount" id="likecount'+json.pid+'">0</span></div><a id="'+json.pid+'" style="position: relative;left:4px;top:-10px;" class="sof" title="Like"><button style="border:0px;cursor:pointer;background: url(images/mixed.png) 104px 98%;height: 16px;width: 17px;"></button></a></td><td><div style="padding-left: 8px;padding-top: 4px;background: url(images/mixed.png) 0px 4px;height: 30px;width: 30px;color:white;"><span class="ccount" id="cmtcount'+json.pid+'">0</span></div><a id="'+json.pid+'" class="sof" style="position: relative;left:2px;top:-6px;" title="Comment"><button style="border:0px;cursor:pointer;background: url(images/mixed.png) 62px 100%;height: 12px;width: 17px;top:4px;"></button></a>&nbsp;&nbsp;</td><td><div style="padding-left: 8px;padding-top: 4px;background: url(images/mixed.png) 0px 4px;height: 30px;width: 30px;top: -3px;position: relative;color:white;"><span class="shcount" id="shcount'+json.pid+'">0</span></div><a id="'+json.pid+'" class="sof" title="Share"><button style="border:0px;cursor:pointer;background: url(images/mixed.png) -107px -23px;height: 15px;width: 25px;top: -5px;position: relative;"></button></a></td></tr></tbody></table></div><center><div id="table'+json.pid+'" style="display:none;" hidden=""><div class="comment-loader" id="comment-loader'+json.pid+'" href="'+json.pid+'"></div><form id="'+json.pid+'" class="postcmt" method="post" action="action.php"><div style="float:center;"><img style="position:relative;top:10px;" id="img_big_comment_img" src="//accounts-subins.hp.af.cm/getimg.php?user=<?echo$who;?>" height="32px" width="32px"><input value="comment" name="action" type="hidden"><input class="input" value="" id="cmti" style="color:black !important;max-width:300px;width:300px;" placeholder="Type your comment here" name="comment"><button style="bottom:5px;position:relative;" class="g-button g-button-submit" type="submit" value="Comment" id="cmtsub">Comment</button></div><input value="'+json.pid+'" id="pidv'+json.pid+'" name="id" type="hidden"><br></form></div></center></div></td></tr></tbody></table></div><br><div id="more-c" hidden="">​Yeah he is.</div></div>');$("#text").val('');$("#load-con").show("10000");$(".zc").text("Posted");$(".load-con").delay('3000').hide('100');
$("#comment-loader"+json.pid).load("get.php?action=comment&limit=2&pid="+json.pid);
});
});
$("#openpb").click(function(){
$("#pb").show();
var edit = $("#text");
edit.focus(); 
$(this).hide();
}); 
$("#text").live('keyup',function(){
if ($("#text").val()==''){
$("#submitpo").attr("disabled","disabled");
}else{$("#submitpo").removeAttr('disabled');}
});
</script>
<form id="formpc" onsubmit='post()'>
<table style="width:498px;"><tbody><tr><td id='pimg'><a><img style="height: 48px;width: 48px;" src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $_COOKIE['VisitorName']; ?>"></a></td><td id='asd'><div style="left:10px;" id='pcont'>
<div class="ze ie"></div><style>.wtd{color:red;}#openpb{margin:15px;}​</style>
<center><input id='openpb' type="text" role='button' placeholder="Share what's new :-)"></center>
<div style="display:none;" id="pb"><center style="margin-top:10px;">
Bold Text- <span class="wtd">**text**</span> , Italic text- <span class="wtd">*/tetx/*</span>, Link- <span class="wtd">[url]text[/url]</span></center>
<div id='sghyu'></div>
<textarea name="text" id='text' style="border-radius:10px;border:2px solid blue;overflow:auto;" rows="4" cols="53" placeholder="Share what's new :-)"></textarea>​<br>
<input disabled="disabled" type="submit" style="margin: 0 0 10px 20px;" class="g-button-g" id="submitpo" name="submit" value="Post">&nbsp;&nbsp;&nbsp;<input type="button" style="margin: 0 0 10px 20px;" onclick="$('#openpb,#pb').toggle()" class="g-button" name="submit" value="Cancel"></tr></div></tbody></table>
</form>
<div id='previewpc' hidden></div>
<div style="color:white;" id='photodiv' hidden>
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="java/jquery.form.js"></script>
<script type="text/javascript" > 	
 $(document).ready(function() { 
	   $("#textEditor").contents().find("body").change(function(){$("#text").val($("#textEditor").contents().find("body").html());});
        }); 
</script>
<script>
$("#up_photo").live('submit',function(){event.preventDefault();
$("#up_photo").ajaxForm({target:'#previewpc'});$(".message_box:first").before($('#previewpc').html());
$("#previewfr").html('Posted.');
$("#text1").html('');
$("#previewfr").hide('100');
});
</script>
<form method='post' id='up_photo' action='post.php' enctype="multipart/form-data">
<table style="width:498px;"><tbody><tr><td id='pimg'><a><img style="height: 48px;width: 48px;" src="//accounts-subins.hp.af.cm/getimg.php?user=<? echo $_COOKIE['VisitorName']; ?>"></a></td><td id='asd'><div style="left:10px;" id='pcont'>
<div class="ze ie"></div><br>
<textarea name="text" id='text1' style="border-radius:20px;overflow:auto;" rows="4" cols="52" placeholder="Say something about this photo"></textarea>
<input value="pimg" name="action" type="hidden">
<span class="error" style="display:none"> Please Enter Valid Data.</span>
<div id="up_file" style="border-top:2px outset black;">
<input name="uploadedfile" id="photoimg" type="file"><br>
<span class="error" style="display:none"> Please Enter Valid Data.</span>
<input id="submit4" class="submit4" type="submit" name='confirm' style="margin-left:10px;background:#3D9400;color:white;" value="Post"><br><br>
</form>
</div>
</div>
<script>
$("#textEditor").contents().find('body').bind("keydown", function(event) {}).autocomplete("get.php?action=friends", {
		matchContains: true,
		selectFirst: false
	});
​</script>
</body>
</html>
