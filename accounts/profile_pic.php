<body style="text-align:center;color:black !important;">
<?php $who=$_COOKIE["VisitorName"]; 
if (!isset($_FILES['uploadedfile'])){?>
<script src="files/java/jquery.form.js"></script>
<script type="text/javascript">
 $(document).ready(function() { 			
            $('#cropimage').submit(function() {
                        event.preventDefault(); 
			  $("#previewci").html('');
			    $("#previewci").html('<img src="images/loader.gif" alt="Uploading....">');
			$("#cropimage").ajaxForm({
						target: '#previewci'
		}).submit();
			    $("#previewci").html("<center>Uploaded.<a href='?fin'onClick='next1'><br><input type='button' id='button' value='Next'></a>");
			});
        }); 
</script>
<form id='cropimage' enctype="multipart/form-data" encoding='multipart/form-data' method='post' action="profile_pic.php">
<center><input name="uploadedfile" type="file" id="photoimg" value="choose">
<input type='hidden' id='name' name='name' value="<? echo $user;?>" hidden></script>
<input type="submit" value="Upload"></center>
<div id="previewci"></div>
</form>	
<?}?>
<?php 
if (isset($_FILES['uploadedfile'])){
 $target_path = "/home/simsu/subins/static/data/users/u$who/o";
array_map('unlink', glob("/home/simsu/subins/static/data/users/u$who/*"));
if(copy($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded<br />Reload to view the changes<br /><a target='_parent' href='//fd-subins.hp.af.cm/profile.php'><input type='button' id='button'  value='View Profile'></a>";
function generate_image_thumbnail($source_image_path, $thumbnail_image_path, $hf, $wf)
{if ($hf!=='' & $wf!==''){$THUMBNAIL_IMAGE_MAX_WIDTH = $wf;
$THUMBNAIL_IMAGE_MAX_HEIGHT=$hf;}else{$THUMBNAIL_IMAGE_MAX_WIDTH = $width;
$THUMBNAIL_IMAGE_MAX_HEIGHT = $height;}
    list($source_image_width, $source_image_height, $source_image_type) = getimagesize($source_image_path);
    switch ($source_image_type) {
        case IMAGETYPE_GIF:
            $source_gd_image = imagecreatefromgif($source_image_path);
            break;
        case IMAGETYPE_JPEG:
            $source_gd_image = imagecreatefromjpeg($source_image_path);
            break;
        case IMAGETYPE_PNG:
            $source_gd_image = imagecreatefrompng($source_image_path);
            break;
    }
    if ($source_gd_image === false) {
        return false;
    }
    $source_aspect_ratio = $source_image_width / $source_image_height;
    $thumbnail_aspect_ratio = $THUMBNAIL_IMAGE_MAX_WIDTH / $THUMBNAIL_IMAGE_MAX_HEIGHT;
    if ($source_image_width <= $THUMBNAIL_IMAGE_MAX_WIDTH && $source_image_height <= $THUMBNAIL_IMAGE_MAX_HEIGHT) {
        $thumbnail_image_width = $source_image_width;
        $thumbnail_image_height = $source_image_height;
    } else if ($thumbnail_aspect_ratio > $source_aspect_ratio) {
        $thumbnail_image_width = (int) ($THUMBNAIL_IMAGE_MAX_HEIGHT * $source_aspect_ratio);
        $thumbnail_image_height = $THUMBNAIL_IMAGE_MAX_HEIGHT;
    } else {
        $thumbnail_image_width = $THUMBNAIL_IMAGE_MAX_WIDTH;
        $thumbnail_image_height = (int) ($THUMBNAIL_IMAGE_MAX_WIDTH / $source_aspect_ratio);
    }
    $thumbnail_gd_image = imagecreatetruecolor($thumbnail_image_width, $thumbnail_image_height);
    imagecopyresampled($thumbnail_gd_image, $source_gd_image, 0, 0, 0, 0, $thumbnail_image_width, $thumbnail_image_height, $source_image_width, $source_image_height);
imagejpeg($thumbnail_gd_image, $thumbnail_image_path,100);
}
                $cas=array("18","32","44","48","120");
                generate_image_thumbnail($exn,"/home/simsu/subins/static/data/users/u$url1/$cas[0]","$cas[0]","$cas[0]"); 
                generate_image_thumbnail($exn,"/home/simsu/subins/static/data/users/u$url1/$cas[1]","$cas[1]","$cas[1]");  
                generate_image_thumbnail($exn,"/home/simsu/subins/static/data/users/u$url1/$cas[2]","$cas[2]","$cas[2]");    
                generate_image_thumbnail($exn,"/home/simsu/subins/static/data/users/u$url1/$cas[3]","$cas[3]","$cas[3]"); 
                generate_image_thumbnail($exn,"/home/simsu/subins/static/data/users/u$url1/$cas[4]","$cas[4]","$cas[4]"); 
} else{
    echo "There was an error uploading the file, please try again!";
}}
?>

