<form action="<?php SELF ?>" method="post">
<table >
<tbody>
<tr>
<td>Name<input class="input" type="text" id="name2" name="name"></td><td>Url<input class="input" type="text" id="url2" name="url"></td><td>Confirm Url<input class="input" type="text" id="url2" name="url2"><input class="button" type="submit" value="Add" name="submit" id="login"><input class="button" type="reset" value="Reset"/><input type="text" value="//subins.hp.af.cm/" id="id" hidden></td>
</tbody>
</table>
</tr>
</form>
<?php 
 // Connects to your Database 
 include('config.php');
 //This code runs if the form has been submitted
 if (isset($_POST['submit'])) { 
 //This makes sure they did not leave any fields blank
 if (!$_POST['name'] | !$_POST['url'] | !$_POST['url2'] ) {
 		die('You did not complete all of the required fields');
 	}
 // checks if the name is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['name'] = addslashes($_POST['name']);
 	}
 $usercheck = $_POST['name'];
 $check = mysql_query("SELECT title FROM search WHERE title = '$usercheck'") 
or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		die('Sorry, the name <b>'.$_POST['name'].'</b> is already in use.');
 				}
 // this makes sure both urls entered match
 	if ($_POST['url'] != $_POST['url2']) {
 		die('Your urls did not match. ');
 	}
 	// here we encrypt the url and add slashes if needed
 	if (!get_magic_quotes_gpc()) {
 		$_POST['url'] = addslashes($_POST['url']);
 		$_POST['name'] = addslashes($_POST['name']);
 			}
 // now we insert it into the database
 	$insert = "INSERT INTO search (title, url)
 			VALUES ('".$_POST['name']."', '".$_POST['url']."')";
 	$add_member = mysql_query($insert);
echo'<h1>Added</h1>
 <p>Link has been added</a>.</p>';
}
 	?>
