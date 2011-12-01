/**
* jQuery External Ajax Plugin 1.0
*
* //www.gplus.to/subinsiby
*
* Copyright (c) 2012 Subin Siby 
*/
(function($){
$.fn.extajax = function(options) {
var opts = $.extend({}, $.fn.extajax.defaults, options);
return this.each(function(i,obj)
{
var th=$(this);
var form=$(this);
/**Polu is my brother*/
$("body").append("<div id='polu' style='display:none;'><iframe id='mjio'></iframe></div>");
var attrc = $(this).attr('enctype');
if (typeof attrc !== 'undefined' && attr !== false){$("#mjio").contents().find("body").html('<form enctype='+th.attr('enctype')+'" id="mjiof" method="'+th.attr('method')+'" action="'+th.attr('action')+'?output=embed">'+th.html()+'</form>');}else{$("#mjio").contents().find("body").html('<form id="mjiof" method="'+th.attr('method')+'" action="'+th.attr('action')+'?output=embed">'+th.html()+'</form>');}
var values = {};
$(this.id+' :input').each(function(i, field) {
$("#mjio").contents().find("#mjiof").append("<input name='"+$(field).attr("name")+"' value='"+$(field).val()+"'><input type='submit'>");
});
$("#mjio").contents().find("#mjiof").submit();
var iframe = document.getElementById('mjio');
if (navigator.userAgent.indexOf("MSIE") > -1 && !window.opera) {
  iframe.onreadystatechange = function(){
    if (iframe.readyState == "complete"){
      $("#mjio").remove();
      $("#polu").remove();
    }
  };
} else {
  iframe.onload = function(){
      $("#mjio").remove();
      $("#polu").remove();
  };
}
});
};
})(jQuery);
