/**
* jQuery External Ajax Plugin 1.2
*
* //www.gplus.to/subinsiby
* //sag-3.blogspot.com
*
* Copyright (c) 2013 Subin Siby 
*/
(function($){
$.fn.extajax = function(options) {
var opts = $.extend({}, $.fn.extajax.defaults, options);
return this.each(function(i,obj)
{
/**Configuration -- Start**/
var asdvafile='asdva.php';//URL to asdva.php
/**Configuration -- End (Do not edit beyond this file.**/
var th=$(this);
var form=$(this);
/**Polu is my brother*/
$("body").append("<div id='polu' style='display:none;'><iframe id='mjio'></iframe></div>");
var attrc = $(this).attr('enctype');
if (typeof attrc !== 'undefined' && attr !== false){$("#mjio").contents().find("body").html('<form enctype='+th.attr('enctype')+'" id="mjiof" method="'+th.attr('method')+'" action="'+th.attr('action')+'?output=embed">'+th.html()+'</form>');}else{$("#mjio").contents().find("body").html('<form id="mjiof" method="'+th.attr('method')+'" action="'+th.attr('action')+'?output=embed">'+th.html()+'</form>');}
var values = {};
$(this.id+' :input').each(function(i, field) {
if (opts.target=='undefined'){}else {if(opts.target==null){}else{
if (localStorage['zfehtsa']==null){localStorage['zfehtsa']='['+i+']->'+$(field).attr("name")+'||"'+$(field).val()+'"';}else{
localStorage['zfehtsa']=localStorage['zfehtsa']+'['+i+']->'+$(field).attr("name")+'||"'+$(field).val()+'"';}
}}
$("#mjio").contents().find("#mjiof").append("<input name='"+$(field).attr("name")+"' value='"+$(field).val()+"'><input type='submit'>");
});
if (opts.target=='undefined'){}else {if(opts.target==null){}else{$("body").append("<iframe style='display:none;' src='"+asdvafile+'?data='+localStorage['zfehtsa']+"&method="+th.attr('method')+"&url="+th.attr('action')+"' id='aczxsa'></iframe>");}}
$('#aczxsa').load(function (){$(opts.target).html($('#aczxsa').contents().find('html').html());$('#aczxsa').remove();});
localStorage.removeItem('zfehtsa');
$(opts.target).html($('#aczxsa').contents().find('html').html());
$("#mjio").contents().find("#mjiof").submit();
var iframe = document.getElementById('mjio');
  iframe.onreadystatechange = function(){
    if (iframe.readyState == "complete"){
      $("#mjio").remove();
      $("#polu").remove();
    }
  };
  iframe.onload = function(){
      $("#mjio").remove();
      $("#polu").remove();
  };
});
};
})(jQuery);
