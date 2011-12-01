<?
if(isset($_GET['t'])){
?><style>#t{position:relative;height:60px;width:111px;cursor:pointer;text-align:center;padding-top: 40px;margin: 0 0 12px 12px;border:1px solid black;}</style>
<table><tbody><tr>
<td theme="girly"><div id="t" style="background:pink;">Girly</div>&nbsp;&nbsp;</td>
<td theme="girly2"><div id="t" style="background:#d67eec;">Girly2</div>&nbsp;&nbsp;</td>
<td theme="dbs"><div id="t" style="background-image: url(//cdn-subins.hp.af.cm/images/themes/cloudy.gif);background-attachment: fixed;background-color: #B2DFDA;background-repeat: repeat repeat;">Cloudy Sky</div>&nbsp;&nbsp;</td>
</tr>
<tr>
<td theme="birds"><div id="t" style="background:url(//twitter.com/images/themes/theme18/bg.gif);background-attachment: fixed;background-color:#ACDED6;background-repeat: no-repeat repeat;">Birds</div>&nbsp;&nbsp;</td>
<td theme="birds2"><div id="t" style="background-color: #FCEBB6;background-image: url(//colourlovers.com.s3.amazonaws.com/images/patterns/3311/3311604.png);background-position: 0px 0px;background-repeat: repeat repeat;">Cuckoo</div>&nbsp;&nbsp;</td>
<td theme="butterfly"><div id="t" style="background-color: #F6E7D2;background-image: url(//colourlovers.com.s3.amazonaws.com/images/patterns/3315/3315032.png);background-position: 0px 0px;background-repeat: repeat repeat;">Butterfly Dance</div>&nbsp;&nbsp;</td>
</tr>
</tbody></table><br><input type="button" value="Save" id="bs">
<script>
$.cssHooks.backgroundColor = {
    get: function(elem) {
        if (elem.currentStyle)
            var bg = elem.currentStyle["background-color"];
        else if (window.getComputedStyle)
            var bg = document.defaultView.getComputedStyle(elem,
                null).getPropertyValue("background-color");
        if (bg.search("rgb") == -1)
            return bg;
        else {
            bg = bg.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
            function hex(x) {
                return ("0" + parseInt(x).toString(16)).slice(-2);
            }
            return "#" + hex(bg[1]) + hex(bg[2]) + hex(bg[3]);
        }
    }
}
$("[theme]").live('click',function(){
var hex=$(this).find('div').css('background');
$("body").css({'background': hex});
});
$("#bs").live('click',function(){
$.save('action.php',{action:'cp',color:$("body").css("background").replace('#','')},'.load-con','.load-con zc');
});
</script>
<?}
?>
