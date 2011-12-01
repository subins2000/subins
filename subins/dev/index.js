$(document).ready(function(){
$("#link").live('change',function(){
$("#preview").attr("src","index.php?url="+$(this).val()+"&style="+$("#style").val());
});
$("#style").live('change',function(){
$("#preview").attr("src","index.php?url="+$(this).val()+"&style="+$("#style").val());
});
$("#gc").live('click',function(){
$("#overlay-content code").css("-webkit-margin-start","0px");$("#overlay-content code").css("-webkit-margin-end","0px");$("#overlay").css("left","33%");$("#overlay").toggle();$("#overlay").css("top","20%");$("#overlay").css("width","400px");$("#overlay-content").css("width","400px");$("#overlay-content").html("<code></code>");$("#overlay-content code").text("<script src=\"//subins.hp.af.cm/dev/all.js\"><div class=\"subins-like\" type=\""+$("#style").val()+"\" data-href=\""+$("#link").val()+"\"></div>");
});
});
