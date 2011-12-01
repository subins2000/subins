<head>
<script type="text/javascript" src="files/java/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="files/java/jquery-1.2.3.pack.js"></script>
<link href="files/css/main.css" rel="stylesheet" />
<link href="files/css/home.css" rel="stylesheet" />
<link href="files/css/index.css" rel="stylesheet" />
</head><body>
If you have an account @ <a href="//en.gravatar.com">Gravatar</a> with the email id you used to create anaccount on Subins. 
Then you have to change the image @ <a target="_blank" href="//en.gravatar.com">Gravatar</a>.
<?php
if (isset($_FILES['uploadedfile'])){ 
 $target_path = "/home/simsu/subins/accounts/data/users/";
$target_path = $target_path .basename( $_POST['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded<br />Reload to view the changes<a href='#'onClick='window.location.reload()'><br /><input type='button' id='button' value='Reload'></a>";
} else{
    echo "There was an error uploading the file, please try again!";
}
}
else{}
?>
