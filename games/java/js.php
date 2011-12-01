<?include('../config.php');$s=$_GET['script'];if ($s=='scf'){?>
$("#scf").live('submit',function(){event.preventDefault();
$.post("../action.php",$(this).serialize(),function(data){$('#coloader br:first').after(data);});$("#scf :input").attr("disabled", true);
});<?}if ($s=='cmf'){?>
$("#scf").live('submit',function(){event.preventDefault();
$.post("../action.php",$(this).serialize(),function(data){$('#coloader br:first').after(data);});$("#scf :input").attr("disabled", true);
});
<?}?>
