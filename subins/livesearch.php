<?php
include('config.php');
$page=$_POST['p'];
$q = $_POST['q'];
$tbl_name="search";
$q = $_GET['q'];
 $dataa = mysql_query("SELECT * FROM search WHERE title LIKE'%$q%' ORDER BY id"); 
 if ($q == "") 
 { 
 echo "<h2><p>Please Enter a search term</p></h2>"; 
 exit; 
 } 
 $anymatches=mysql_num_rows($dataa); 
 if ($anymatches == 0) 
 { 
 echo ''; 
 }  
else{
$limit = 10;
 $data = mysql_query("SELECT * FROM search WHERE title LIKE'$q%' ORDER BY hits DESC LIMIT 0,$limit"); 
 while($result = mysql_fetch_array($data)) 
 { $nb=$result['title'];
 echo "$nb\n"; 
 }
}
?>
