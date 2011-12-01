<link href="files/css/style2.css" rel="stylesheet">
<link href="files/css/main.css" rel="stylesheet" />
<link href="files/css/index.css" rel="stylesheet" />
<form action="<?php SELF ?>" method="POST">
<input type='text' name='title' placeholder="Site Name">
<input type='text' name='url' placeholder="Site Url"><br><br>
<input type='submit' value='Add' name='submit'>
</form>
<?php 
 // Connects to your Database 
 include('config.php');
  
 //This code runs if the form has been submitted
 if (isset($_POST['submit'])) { 
 //This makes sure they did not leave any fields blank
 if (!$_POST['title'] | !$_POST['url'] ) {
 		die('You did not complete all of the required fields');
 	}
 // checks if the title is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['title'] = addslashes($_POST['title']);
 	}
 $usercheck = $_POST['title'];
 $check = mysql_query("SELECT title FROM search WHERE title = '$usercheck'") 
or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 = 0) {
 		die('Sorry, the Site <b>'.$_POST['title'].'</b> is already added.');
 				}
 // this makes sure both urls entered match
 	// here we encrypt the url and add slashes if needed
 	if (!get_magic_quotes_gpc()) {
 		$_POST['url'] = addslashes($_POST['url']);
 		$_POST['title'] = addslashes($_POST['title']);
 			}
 // now we insert it into the database
 	$insert = "INSERT INTO search (title, url)
 			VALUES ('".$_POST['title']."', '".$_POST['url']."')";
        echo "Added ".$_POST['title']." to Subins <a target='_parent' href='//subins.hp.af.cm/search.php?q=".$_GET['q']."'>Reload</a>";
 	$add_member = mysql_query($insert);
}
 	?>