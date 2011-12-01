<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "//www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/main.css" rel="stylesheet" />
<link href="css/home.css" rel="stylesheet" />
<link href="css/index.css" rel="stylesheet" />
<link href="css/style2.css" rel="stylesheet" />
<title>
Home - Videos
</title>
<?
$space ='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
?>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="//cdn-subins.hp.af.cm/java/jquery.js"></script>
<link href="css/video-js.css" rel="stylesheet">
<script src="//subins.hp.af.cm/files/java/js.php"></script>
</head>
<body onload="double1();check();keys();changeText();checkCookie();" ONKEYDOWN="keys()">
<audio id="myaudio" src="click.wav"></audio>
<div id='content'>
<table>
<tbody>
<h2>Upload a Video</h2>
<br><br>Fill out the video information Below.<br><br>
<?php 
if(isset($_POST['submit'])){
$user=$_COOKIE['VisitorName'];
include('config.php');
session_start();
$session_id='1'; //$session id
$path = "/home/simsu/subins/videos/data/videos/";

	$valid_formats = array("wmv", "ogv", "mp4", "3gp", "ogg", "");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['uploadedfile']['name'];
			$size = $_FILES['uploadedfile']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(100024*100024))
						{
							$actual_image_name = $path.time();
							$tmp = $_FILES['uploadedfile']['tmp_name'];
                                             if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $actual_image_name)) {
                                             $upurl="//vtube.subins.hp.af.cm/files/video?vid=".time();
                                             $title=$_POST['vn'];
		                             mysql_query("INSERT INTO videos(title,user,url,vid,ext) VALUES (\"$title\", \"$user\",\"$upurl\",NOW(),\"$ext\")");
				             echo '<br><h1>'.$_FILES['uploadedfile']['name'] . " uploaded.</h1>";
	                                        }
						}
						else
						echo "<br><h1>Video file size max 100 MB";					
						}
						else
						echo "<br><h1>Invalid file format..";	
				}
				
			else
				echo "<br><h1>Please select a video..!";
				
			exit;
		}
}
?>
<center>
<form enctype="multipart/form-data" action='upload.php' method='post'>
<tr><td>Video Name&nbsp;&nbsp;&nbsp;<input type='text' id='vn' name='vn'></td></tr>
<tr><td>Uploaded by&nbsp;&nbsp;&nbsp;<input type='text' value="<? echo $_COOKIE['VisitorName']; ?>" id='un' name='un' disabled></td></tr>
<tr><td><input type='file' id='uploadedfile' name='uploadedfile'><br></td></tr>
<tr><td><input type='submit' name='submit'></td></tr>
</form>
</center>
</table>
</tbody>
</div>
</body>
</html>
