$("a[href]").live('click',function(){
event.preventDefault();
window.history.pushState('','','?page='+$(this).attr("href"));
$("#content").html('Loading');
$.post('get.php',{p:$(this).attr("href")},function(data){$("#content").html(data);});
});
$("").live('keyup',function(){
$("#cg").html("&lt;script&gt;<br>(function() {<br>var gas = document.createElement('script'); <br>gas.type = 'text/javascript'; gas.async = true;<br>ga.src = ('https:' == document.location.protocol ? 'https://' : '//') + 'analytics-subins.hp.af.cm/js/dc.php';<br>var sx = document.getElementsByTagName('script')[0]; <br>sx.parentNode.insertBefore(gas, sx);})();<br>&lt;/script&gt;");
});
$("#aform").live('submit',function(){
event.preventDefault();$("#aform:input").attr('disabled');
$.post('action.php',$("#aform").serialize(),function(data){$("#aform").html(data);});
});
$(".lb").live('click',function(){
$(".lba").removeClass('lba');
$(this).addClass("lba");
if ($(this).text()=='Sites'){
$("#sss,#ssb").toggle();
}
});
