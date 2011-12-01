$q=$_GET['q'];
include('config.php');
$sql=mysql_query("SELECT * FROM members WHERE username='".$q."'");while($d = mysql_fetch_array($sql)){$sts=$d['status'];$uname=$d['uname'];$name=$d['name'];}
echo $name;
