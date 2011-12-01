<?php
  $_SESSION['username'] = "";
?>

<html>
<head>
<link href='../css/index.css' type='text/css' rel='stylesheet'>
<link href='../css/main.css' type='text/css' rel='stylesheet'>
<link href='../css/style2.css' type='text/css' rel='stylesheet'>
<link href='../css/home.css' type='text/css' rel='stylesheet'>
<link href='../css/style.css' type='text/css' rel='stylesheet'>
<link href='../../css/index.css' type='text/css' rel='stylesheet'>
<title>Simple Chat Application</title>
<script type="text/javascript">
  function getPage(page, id) {
    var xmlhttp=false; //Clear our fetching variable
    try {
      //Try the first kind of active x object 
      xmlhttp = new ActiveXObject('Msxml2.XMLHTTP'); 
    } catch (e) {    
      try {
        //Try the second kind of active x object
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); 
      } catch (E) {
        xmlhttp = false;
      }
    }
   
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    var file = page; 
    xmlhttp.open('GET', file, true);   
    xmlhttp.onreadystatechange=function() {
      //Check if it is ready to recieve data
      if (xmlhttp.readyState==4) { 
        var content = xmlhttp.responseText;
        if( content ) { 
          document.getElementById(id).innerHTML = content; 
        }
      }
    }
    xmlhttp.send(null) //Nullify the XMLHttpRequest
    return;
  }

  function chat() {  
    var user     = document.getElementById('user').value;
    var message  = document.getElementById('message').value;
  
    getPage("chat.content.php?user=" + user + "&message=" + message,"screen");
 document.getElementById('message').value = "";
  
  }
  
  function getMessage() {
   getPage("chat.content.php","screen");
  }
  
</script>
</head>
<style type="text/css">
body {
  font:12px arial;
}
 
#panel {
  border:1px solid #cccccc; 
  height:430px; 
  width:462px;
  padding:5px;
}
 
#title {
  margin-bottom:5px;
}
 
#screen {
  width:460px; 
  height:300px; 
  border:1px solid #cccccc;
  margin-bottom:5px;
  overflow-x:hidden;
  overflow-y:auto;
}
 
#input {
  float:left; 
  margin-right:5px;
}
 
#send {
  float:left;
}
 
#user {
  border:1px solid #cccccc; 
  width:150px;
}
 
#message {
  height:80px; 
  width:345px; 
  border:1px solid #cccccc;
}
 
#post {
  height:50px; 
  width:100px;
}
</style>
<body>
<script type="text/javascript">
 process = setInterval("getMessage()", 1000);
</script>
<div id="panel"> 
  <div id="title">
    <span>Username:&nbsp;</span>
    <span><input type="text" name="user" id="user" maxlength="15"></span>
  </div>
  <div id="screen"></div>
  <div>
    <div id="input">
      <textarea name="message" id="message"></textarea>
    </div>
    <div id="send">
      <input type="button" name="post" id="post" maxlength="500" value="Post" onClick="javascript:chat();" />
    </div>
  </div> 
</div>
</body>
</html>

