<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>AJAX Driven Web Chat</title>
		<style type="text/css" media="screen">
			.chat_time {
				font-style: italic;
				font-size: 9px;
			}
		</style>
		<script language="JavaScript" type="text/javascript">
			var sendReq = getXmlHttpRequestObject();
			var receiveReq = getXmlHttpRequestObject();
			var lastmessages = 0;
			var mTimer;
			//Function for initializating the page.
			function startChat() {
				//Set the focus to the messages Box.
				document.getElementById('txt_messages').focus();
				//Start Recieving messagess.
				getChatText();
			}		
			//Gets the browser specific XmlHttpRequest Object
			function getXmlHttpRequestObject() {
				if (window.XMLHttpRequest) {
					return new XMLHttpRequest();
				} else if(window.ActiveXObject) {
					return new ActiveXObject("Microsoft.XMLHTTP");
				} else {
					document.getElementById('p_status').innerHTML = 'Status: Cound not create XmlHttpRequest Object.  Consider upgrading your browser.';
				}
			}
			
			//Gets the current messagess from the server
			function getChatText() {
				if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
					receiveReq.open("GET", 'getChat.php?chat=1&last=' + lastmessages, true);
					receiveReq.onreadystatechange = handleReceiveChat; 
					receiveReq.send(null);
				}			
			}
			//Add a messages to the chat server.
			function sendChatText() {
				if(document.getElementById('txt_messages').value == '') {
					alert("You have not entered a messages");
					return;
				}
				if (sendReq.readyState == 4 || sendReq.readyState == 0) {
					sendReq.open("POST", 'getChat.php?chat=1&last=' + lastmessages, true);
					sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					sendReq.onreadystatechange = handleSendChat; 
					var param = 'messages=' + document.getElementById('txt_messages').value;
					param += '&name=Ryan Smith';
					param += '&chat=1';
					sendReq.send(param);
					document.getElementById('txt_messages').value = '';
				}							
			}
			//When our messages has been sent, update our page.
			function handleSendChat() {
				//Clear out the existing timer so we don't have 
				//multiple timer instances running.
				clearInterval(mTimer);
				getChatText();
			}
			//Function for handling the return of chat text
			function handleReceiveChat() {
				if (receiveReq.readyState == 4) {
					var chat_div = document.getElementById('div_chat');
					var xmldoc = receiveReq.responseXML;
					var messages_nodes = xmldoc.getElementsByTagName("messages"); 
					var n_messagess = messages_nodes.length
					for (i = 0; i < n_messagess; i++) {
						var user_node = messages_nodes[i].getElementsByTagName("user");
						var text_node = messages_nodes[i].getElementsByTagName("text");
						var time_node = messages_nodes[i].getElementsByTagName("time");
						chat_div.innerHTML += user_node[0].firstChild.nodeValue + '&nbsp;';
						chat_div.innerHTML += '<font class="chat_time">' + time_node[0].firstChild.nodeValue + '</font><br />';
						chat_div.innerHTML += text_node[0].firstChild.nodeValue + '<br />';
						chat_div.scrollTop = chat_div.scrollHeight;
						lastmessages = (messages_nodes[i].getAttribute('id'));
					}
					mTimer = setTimeout('getChatText();',2000);
				}
			}
			//This functions handles when the user presses enter.  Instead of submitting the form, we
			//send a new messages to the server and return false.
			function blockSubmit() {
				sendChatText();
				return false;
			}
			//This cleans out the database so we can start a new chat session.
			function resetChat() {
				if (sendReq.readyState == 4 || sendReq.readyState == 0) {
					sendReq.open("POST", 'getChat.php?chat=1&last=' + lastmessages, true);
					sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					sendReq.onreadystatechange = handleResetChat; 
					var param = 'action=reset';
					sendReq.send(param);
					document.getElementById('txt_messages').value = '';
				}							
			}
			//This function handles the response after the page has been refreshed.
			function handleResetChat() {
				document.getElementById('div_chat').innerHTML = '';
				getChatText();
			}	
		</script>
	</head>
	<body onload="javascript:startChat();">
		<h2>AJAX Driven Web Chat.</h2>
		<p id="p_status">Status: Normal</p>
		<p>Try opening two browser windows to see the AJAXy Results.</p>
		Current Chitter-Chatter:
		<div id="div_chat" style="height: 300px; width: 500px; overflow: auto; border: 1px solid #555555;"></div>
		<form id="frmmain" name="frmmain" onsubmit="return blockSubmit();">
			<input type="button" name="btn_get_chat" id="btn_get_chat" value="Refresh Chat" onclick="javascript:getChatText();">
			<input type="button" name="btn_reset_chat" id="btn_reset_chat" value="Reset Chat" onclick="javascript:resetChat();"><br>
			<input type="text" id="txt_messages" name="txt_messages" style="width: 447px;">
			<input type="button" name="btn_send_chat" id="btn_send_chat" value="Send" action="getChat.php" onclick="javascript:sendChatText();">
		</form>
	
	
</body></html>
