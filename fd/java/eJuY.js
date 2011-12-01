function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
var plottan=function(){
function pJ(){
$(document).ready(function(){
$("button").live('click',function(){
var fdvar=$(this).attr('id');
if ($(this).text()=='Follow'){
$.post("action.php", {action: 'addfd', fd: fdvar});
$(this).text("Unfollow");
}else{
if ($(this).text()=='Unfollow'){
$.post("action.php", {action: 'refd', fd: fdvar});
$(this).text("Follow");
}}
});
$("#tbt").live('click', function(){
if ($(this).html()=='About'){
$('#p-about').show('700');$('.p-about-friends-add').hide('700');$('.p-about-friends-fol').hide('700');$('.p-about-friends').hide('700');
}
if ($(this).html()=='Following'){
$('#p-about').hide('700');$('.p-about-friends-add').show('700');$('.p-about-friends-fol').hide('700');$('.p-about-friends').hide('700');
}
if ($(this).html()=='Followers'){$(this).toggleClass('.g-button-submit-c');
$('#p-about').hide('700');$('.p-about-friends-add').hide('700');$('.p-about-friends-fol').show('700');$('.p-about-friends').hide('700');
}
if ($(this).html()=='Friends'){
$('#p-about').hide('700');$('.p-about-friends-add').hide('700');$('.p-about-friends-fol').hide('700');$('.p-about-friends').show('700');
}
});
$("#userposts").html('');
if(getCookie('pid')){
$("#userposts").load('data.php?pid='+getCookie('pid'));}
if(getCookie('pidu')){
$("#userposts").load('data.php?user='+getCookie('pidu'));}
$("#userposts").css('color','#36C');
if($(window).width() < 1224){$("#userposts").hide();}else{$("#userposts").show();}
if($("#userposts").text()==''){$("#userposts").html("<h2>No Posts</h2>");}
if($("#p-about-friends").text==''){$("#p-about-friends").html("<h2>No Friends</h2>");}
if($("#p-about-friends-add").text()==''){$("#p-about-friends-add").html("<h2>No Friends</h2>");}
$(window).resize(function(){
if($(this).width() < 1224){$("#userposts").hide();}else{$("#userposts").show();}});
if (getCookie('VisitorName')==""){$('.edit').remove();}
});
}
function hJ(){
$(document).ready(function(){
$("body").append('<div id="div_dialog_background"><a id="x" onclick="$(\'#div_dialog_background6\').hide(\'500\');">x</a></div><div id="div_share5" style="display:none;"> </div></div>');
$("#pvfull").live('click',function(){
event.preventDefault(); 
$("#div_dialog_background").show();
$("#div_share5").show();
$("#div_share5").load($(this).attr('href'));
window.history.replaceState("", "title",$(this).attr('href'));
});
$('.postcmt').live('submit',function() {
event.preventDefault(); 
$.post("action.php", $(this).serialize());
var ccount=$("#cmtcount"+$(this).attr('id')).text();
$("#cmtcount"+$(this).attr('id')).text(parseFloat(ccount)+1);
var pidc=$("#pidv"+$(this).attr('id')).val();var who=getCookie('VisitorName');
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
var currentdate = new Date(); 
var time=currentdate.getHours()+":"+currentdate.getMinutes();
var ttime=currentdate.getDate() + " " + monthNames[currentdate.getMonth()]  + " " + currentdate.getFullYear();
if ($("#comment-loader"+$(this).attr('id')).text()=='No comment yet'){$("#comment-loader"+$(this).attr('id')).html('');}
$("#comment-loader"+$(this).attr('id')).append("<div id='cbox'><table><tbody><tr><td><img src=\"//accounts.subins.com/getimg.php?user="+who+"\" height='32px' width='32px'></td><td><div id='cbox-cont'><a href='profile.php?user="+who+"'><b>"+$("#sname b").text()+"</b></a><span style='cursor:pointer;' title='"+ttime+"'>"+time+"</span><br>"+$(this).find("#cmti").val()+"</div></td></tr></tbody></table></div>");
$(this).find("#cmti").val("");
});
$(".message_box .sof").live('click',function(){
if ($(this).attr('id')!='hreftag'){
event.preventDefault();}
var th = $(this).attr('href');
var pid = $(this).attr('id');
var lcount=$("#likecount"+pid).text();
if ($(this).attr('title')=='Unlike'){
$.post("action.php", {action: 'unlike', id: pid});
$(this).parent().append('<a id="'+pid+'" style="position: relative;left:4px;top:-10px;" class="sof" style="cursor:pointer;" title="Like"><button style="border:0px;cursor:pointer;background: url(\'images/mixed.png\') 104px 98%;height: 16px;width: 17px;"></button></a>');
$("#likecount"+pid).text(parseFloat(lcount)-1);
$(this).parent().find("a:first").remove();
}else {if ($(this).attr('title')=='Like'){
$.post("action.php", {action: 'like', id: pid});
$(this).parent().append('<a id="'+pid+'" style="position: relative;left:4px;top:-8px;" class="sof" style="cursor:pointer;" title="Unlike"><button style="border:0px;cursor:pointer;background: url(\'images/mixed.png\') 83px 100%;height: 16px;width: 17px;"></button></a>');
$("#likecount"+pid).text(parseFloat(lcount)+1);
$(this).parent().find("a:first").remove();
}}
if ($(this).attr('title')=='Comment'){
var table =$("#table"+$(this).attr('id'));
$("#comment-loader"+$(this).attr('id')).toggle();table.toggle();
}
if ($(this).attr('title')=='Share'){
var box =$("#overlay");
var mid=$(this).parents(".message_box").attr('id');
if (box.css('display')=='block'){$("#overlay-content").hide();box.hide();}else{$("#overlay-content").show();box.show();}
$("#overlay-content").load("get.php?action=share&pid="+mid,function(){$("#overlay-content").find("#pcontent").text($("#overlay-content").find("#pcontent").text().slice(0, 300));});
}
});
$('#read_more').live('click',function(){
    var fgs='bvg'+$(this).closest(".message_box").attr('id');
    $(this).closest("#pcontent").html($(this).parents(".message_box").find('#more-c').text()+'<div id="c_more">Collapse Post</div>');
});
$('#c_more').live('click',function(){
    $(this).closest("#pcontent").text($(this).closest("#pcontent").text().slice(0, 300));
    $(this).closest("#pcontent").append(' <div id="read_more">Expand Post</div>');
});
});
}
function fJ(){
$(document).ready(function(){
$("head").append('<script type="text/javascript" src="java/jquery.autocomplete.js" ></script>');
$("#q").autocomplete("get.php?action=friends", {
		width: $("#vl").width()+7,
		matchContains: true,
		selectFirst: false
	});
});
}
if(window.location.pathname=='/profile.php'){pJ();hJ();}
if(window.location.pathname=='/Home.php'){hJ();}
if(window.location.pathname=='/find.php'){fJ();}
};
plottan();
