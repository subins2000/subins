<?php
/*
	This is the PHP backend file for the AJAX Driven Chat application.
	
	You may use this code in your own projects as long as this copyright is left
	in place.  All code is provided AS-IS.
	This code is distributed in the hope that it will be useful,
 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
	For the rest of the code visit //www.DynamicAJAX.com
	
	Copyright 2005 Ryan Smith / 345 Technical / 345 Group.
*/

//Send some headers to keep the user's browser from caching the response.
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
header("Content-Type: text/xml; charset=utf-8");

require('database.php');

//Check to see if a messages was sent.
if(isset($_POST['messages']) && $_POST['messages'] != '') {
	$sql = "INSERT INTO messages(chat_id, user_id, user_name, messages, post_time) VALUES (" . 
			db_input($_GET['chat']) . ", 1, '" . db_input($_POST['name']) . 
			"', '" . db_input($_POST['messages']) . "', NOW())";
	db_query($sql);
}
//Check to see if a reset request was sent.
if(isset($_POST['action']) && $_POST['action'] == 'reset') {
	$sql = "DELETE FROM messages WHERE chat_id = " . db_input($_GET['chat']);
	db_query($sql);
}

//Create the XML response.
$xml = '<?xml version="1.0" ?><root>';
//Check to ensure the user is in a chat room.
if(!isset($_GET['chat'])) {
	$xml .='Your are not currently in a chat session.  <a href="">Enter a chat session here</a>';
	$xml .= '<messages id="0">';
	$xml .= '<user>Admin</user>';
	$xml .= '<text>Your are not currently in a chat session.  &lt;a href=""&gt;Enter a chat session here&lt;/a&gt;</text>';
	$xml .= '<time>' . date('h:i') . '</time>';
	$xml .= '</messages>';
} else {
	$last = (isset($_GET['last']) && $_GET['last'] != '') ? $_GET['last'] : 0;
	$sql = "SELECT messages_id, user_name, messages, date_format(post_time, '%h:%i') as post_time" . 
		" FROM messages WHERE chat_id = " . db_input($_GET['chat']) . " AND messages_id > " . $last;
	$messages_query = db_query($sql);
	//Loop through each messages and create an XML messages node for each.
	while($messages_array = db_fetch_array($messages_query)) {
		$xml .= '<messages id="' . $messages_array['messages_id'] . '">';
		$xml .= '<user>' . htmlspecialchars($messages_array['user_name']) . '</user>';
		$xml .= '<text>' . htmlspecialchars($messages_array['messages']) . '</text>';
		$xml .= '<time>' . $messages_array['post_time'] . '</time>';
		$xml .= '</messages>';
	}
}
$xml .= '</root>';
echo $xml;
?>
