<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="css\style.css">
</head>
<body>
	<div class="block">
		<div class="title">
			<p>Chatroom TEST #1</p>
		</div>
		<div class="chatBox">
			<?php
          $username="root";$password="";$servername = "localhost";
          $database="chat_test";mysql_connect($servername,$username,$password);
          @mysql_select_db($database) or die( "Unable to select database");
          $query="SELECT * FROM chat";$result=mysql_query($query);
          $num=mysql_numrows($result);mysql_close();
          $i=0;while ($i < $num) {$readUser=mysql_result($result,$i,"MsgUsername");
          $readMsg=mysql_result($result,$i,"MsgCont");
          echo "
			<p><b>$readUser:</b> $readMsg</p>
		  ";$i++;}?>
			<div id="last"></div>
		</div>
		<form action="msgCreate.php" method="post">
			<textarea name="UserMSG" placeholder="Type your message..."></textarea>
			<input type="submit" value="Send">
		</form>
	</div>
</body>
</html>