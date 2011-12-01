<?
$urla = explode('=', $_GET['url']); $dswe=explode('?', $urla[0]);
if($dswe[1]=='user'){
if(substr($_GET['url'], 0, 4) !== 'www.'){
$url=$_GET['url'].'&utm_source=subins.hp.af.cm';
}
}else{if(substr($_GET['url'], 0, 4) !== 'www.'){
$url=$_GET['url'].'?utm_source=subins.hp.af.cm';
}else{$url='//'.$_GET['url'].'?utm_source=subins.hp.af.cm';}}
header("location:$url");
?>
