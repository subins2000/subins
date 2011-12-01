<?php 
 $target_path = "/home/simsu/subins/accounts/data/users/";
$target_path = $target_path .basename( $_POST['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded<br />Reload to view the changes<a href='#'onClick='window.location.reload()'><br /><input type='button' id='button' value='Reload'></a>";
} else{
    echo "There was an error uploading the file, please try again!";
}

?>
<script>
window.location='//chat-subins.hp.af.cm';
</script>
<div hidden>
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
</div>

