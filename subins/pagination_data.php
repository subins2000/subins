<?
include('config.php');
$pagea=$_GET['p'];
if (isset($pagea)){if (!$pagea==null){$page = $_GET['p'];}else{$page = 1; }}else{$page = 1; }
if (isset($_GET['pages'])){?>
<table><tbody><tr>
<?php
if (isset($_COOKIE['rp'])){if (!$_COOKIE['rp']==null){$limit = $_COOKIE['rp'];}else{$limit = 10; }}else{$limit = 10; }
$start = ($page-1)*$limit; 
$q = $_GET['q'];
 $q = strtoupper($q); 
 $q = strip_tags($q); 
 $q = trim ($q); 
//Calculating no of pages
$sql = "SELECT * FROM search WHERE title LIKE'%$q'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
$pages = ceil($count/$limit);
//Pagination Numbers
for($i=1; $i<=$pages; $i++)
{
echo '<td class="pgn" id="'.$i.'">'.$i.'</td>';
}
?>
</tr></tbody></table>
<?}else{
include('config.php');
$tbl_name="search"; // Table name
$q = $_GET['q'];
 $q = strtoupper($q); 
 $q = strip_tags($q); 
 $q = trim ($q); 
 $dataa = mysql_query("SELECT * FROM $tbl_name WHERE title LIKE\"%$q%\""); 
 $rn = mysql_num_rows($dataa);
 echo '<script>$("#nrf").text("'.$rn.' results found");</script>';
 echo "<br><br><br><br>"; 
 //If they did not enter a search term we give them an error 
 if ($q == "") 
 { 
 echo "<h2><p>Please Enter a search term</p></h2>"; 
 exit; 
 } 
 //Now we search for our search term, in the field the user specified 
 $data = mysql_query("SELECT * FROM $tbl_name WHERE title LIKE'%$q%'"); 
 //And we display the results
echo "<p>";
 // This shows the user what page they are on, and the total number of page
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page. 
$rows = mysql_num_rows($data); 
 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
 if ($rows == 0) 
 {
   echo '<div class="med"><p style="padding-top:.33em">Your search - <b>'.$_GET["q"].'</b> - did not match any documents.  </p><p style="margin-top:1em">Suggestions:</p><ul style="margin:0 0 2em;margin-left:1.3em"><li>Make sure all words are spelled correctly.</li><li>Try different keywords.</li><li>Try more general keywords.</li><li>This link may not be on our database. Please add it <a href="addlink.php">here</a></li></ul></div>'; 
 }  
else{
mysql_query("UPDATE $tbl_name SET hits = hits + 1 WHERE title = '".$q."'");
if (isset($_COOKIE['rp'])){if (!$_COOKIE['rp']==null){$limit = $_COOKIE['rp'];}else{$limit = 10; }}else{$limit = 10; }
$start = ($page-1)*$limit; 
 $dataz = mysql_query('SELECT * FROM '.$tbl_name.' WHERE title LIKE "%'.$q.'%" ORDER BY hits DESC LIMIT '.$start.', '.$limit.''); ?>
<table style="width:100%;text-align:left;"><tbody>
<?
 while($rv = mysql_fetch_array( $dataz )) 
 { 
 echo '<tr style="border: 2px dashed #EEE;padding-left:10px;"><td style="width:52px;"><img src="getimg.php?img='.$rv['url'].'" height="32px" width="32px"></td><td><a target="_blank" style="color:blue !important;" href="link.php?url='.$rv['url'].'">'.$rv['title'].'</a>'.$ds.'</tr>';  
 }echo "</tbody></table>";
$sql = "SELECT * FROM search WHERE title LIKE'%$q%'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
$pages = ceil($count/$limit);
echo"<br><br><table id='pagination'><tbody id='pagination'><tr>";
for($i=1; $i<=$pages; $i++)
{
echo "<td class=\"pgn\" id=\"".$i."\">".$i."</td>";
}
echo"</tr></tbody></table>";
}}?>
<script>
$("#pagination #<?echo$page;?>").css({'color' : '#FF0084'}).css({'border' : 'none'});
</script>
