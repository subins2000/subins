<link href="//subins.hp.af.cm/files/css/style2.css" rel="stylesheet" />
<link href="//subins.hp.af.cm/files/css/index.css" rel="stylesheet" />
<form action="<?php SELF ?>" method="POST">
<input type='text' size="10" name='title' placeholder="Site Name"><br>
<input type='text' size="10" name='url' placeholder="Site Url"><br><br>
<input type='submit' class="g-button g-button-submit" value='Add' name='submit'>
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
 		die('Sorry, the Topic/Person <b>'.$_POST['title'].'</b> is already added. We\'l add a +1 ');
 				}
 // this makes sure both urls entered match
 	// here we encrypt the url and add slashes if needed
 // now we insert it into the database
 	$insert = "INSERT INTO search (title, url)
 			VALUES ('".$_POST['title']."', '".$_POST['url']."')";
        echo "Added ".$_POST['title']." to Subins <a target='_parent' href='search.php?q=".$_POST['title']."'>Reload</a>";
 	$add_member = mysql_query($insert);
}
 	?>
<backup hidden>
if (isset($_GET['q'])){
$host="localhost"; // Host name 
$title="root"; // Mysql title 
$password="backstreetboys"; // Mysql password 
$db_name="db"; // Database name 
$tbl_name="search"; // Table name 
$q = $_GET['q'];

 echo "<h2>Results</h2><p>"; 
 
 //If they did not enter a search term we give them an error 
 if ($q == "") 
 { 
 echo "<p>You forgot to enter a search term"; 
 exit; 
 } 
 // Otherwise we connect to our Database 
 mysql_connect("$host", "$title", "$password") or die(mysql_error()); 
  
 // We preform a bit of filtering 
 $q = $_GET['q'];
//This checks to see if there is a page number. If not, it will set it to page 1 
 if (!(isset($pagenum))) 
 { 
 $pagenum = 1; 
 } 
 //Here we count the number of results 
 //Edit $data to be your query 
 $data = mysql_query("SELECT * FROM search WHERE title LIKE'%$q%'") or die(mysql_error()); 
 $rows = mysql_num_rows($data); 
 //This is the number of results displayed per page 
 $page_rows = 4; 
 //This tells us the page number of our last page 
 $last = ceil($rows/$page_rows);
$per_page = 9; 
$start = ($page-1)*$per_page;
$result4 = mysql_query($data);
$count = mysql_num_rows($result4);
$pages = ceil($count/$per_page);
for($i=1; $i<=$pages; $i++)
{
echo '<li id="'.$i.'">'.$i.'</li>';
}
 //this makes sure the page number isn't below one, or more than our maximum pages 
 if ($pagenum < 1) 
 { 
 $pagenum = 1; 
 } 
 elseif ($pagenum > $last) 
 { 
 $pagenum = $last; 
 } 
 //This sets the range to display in our query 
 $max = 'limit ' .($pagenum - 1) * $page_rows .',' .$page_rows.'order by msg_id limit $start,$per_page';
//This is your query again, the same one... the only difference is we add $max into it
 $data_p = mysql_query("SELECT * FROM search WHERE title LIKE'%$q%' $max") or die(mysql_error()); 
 //This is where you display your query results
 while($info = mysql_fetch_array( $data_p )) 
 { 
 Print '<a target="_blank" href="'.$info['url'].'">'.$info['title'].'</a>'; 
 echo "<br>";
 } 
 echo "<p>";
 // This shows the user what page they are on, and the total number of pages
 echo " --Page $pagenum of $last-- <p>";
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.

 if ($pagenum == 1) 
 {
 } 
 else 
 {
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$q&pagenum=$previous'> <<-First</a> ";
 echo " ";
 $previous = $pagenum-1;
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$q&pagenum=$previous'> <-Previous</a> ";
 } 
//just a spacer
 echo " ---- ";
 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
 if ($pagenum == $last) 
 {
 } 
 else {
 $next = $pagenum+1;
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$q&pagenum=$next'>Next -></a> ";
 echo " ";
 echo " <a href='{$_SERVER['PHP_SELF']}?q=$q&pagenum=$last'>Last ->></a> ";
 } 
 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
 $anymatches=mysql_num_rows($data); 
 if ($anymatches == 0) 
 { 
 echo "Sorry, but we can not find an entry to match your query<br><br>"; 
 } 
}
</backup>
