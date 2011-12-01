<?php
include('config.php');
$page=$_GET['p'];
$q = $_GET['q'];
include('config.php');
$host="localhost"; // Host name 
$title="root"; // Mysql title 
$password="backstreetboys"; // Mysql password 
$db_name="db"; // Database name 
$tbl_name="search"; // Table name 
$q = $_GET['q'];
 $dataa = mysql_query("SELECT * FROM search WHERE title LIKE'%$q%'"); 
 $rn = mysql_num_rows($dataa);
 echo $rn.' results found';
 echo "<center><h2>Results</h2>"; 
 //If they did not enter a search term we give them an error 
 if ($q == "") 
 { 
 echo "<p>You forgot to enter a search term</p>"; 
 exit; 
 } 
 // Otherwise we connect to our Database 
 mysql_connect("$host", "$title", "$password") or die(mysql_error()); 
 mysql_select_db("db") or die(mysql_error()); 
 // We preform a bit of filtering 
 $q = $_GET['q'];
 //Now we search for our search term, in the field the user specified 
 $data = mysql_query("SELECT * FROM search WHERE title LIKE'%$q%'"); 
 //And we display the results
echo "<p>";
 // This shows the user what page they are on, and the total number of page
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page. 
$rows = mysql_num_rows($data); 
 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
 $anymatches=mysql_num_rows($data); 
 if ($anymatches == 0) 
 { 
 echo '<div class="med"><p style="padding-top:.33em">Your search - <b>'.$_GET["q"].'</b> - did not match any documents.  </p><p style="margin-top:1em">Suggestions:</p><ul style="margin:0 0 2em;margin-left:1.3em"><li>Make sure all words are spelled correctly.</li><li>Try different keywords.</li><li>Try more general keywords.</li></ul></div>'; 
 }  
else{
if (isset($_COOKIE['rp'])){$limit = $_COOKIE['rp'];}else{$limit = 2; }
$start = ($page-1)*$limit; 
 $data = mysql_query("SELECT * FROM search WHERE title LIKE'%$q%' LIMIT $start, $limit"); 
 while($result = mysql_fetch_array( $data )) 
 { 
 echo '<a target="_blank" href="//'.$result['url'].'">'.$result['title'].'</a>'; 
 echo " <br>";  
 }}
?>
