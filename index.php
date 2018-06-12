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
			<p><b>Podepod:</b> Lolz</p>
			<p><b>Test:</b> Dees is nog ni aant werke</p>
			<p><b>Podepod:</b> inderdaad</p>
			<p><b>Test:</b> Dees is gewoon om de style is te teste en te zien of die werkt</p>
			<p><b>Podepod:</b> er zijn nog heel wa aanpassinge da k ga moete doen</p>
			<p><b>Test:</b> Ma da komt wel</p>
			<p><b>Podepod:</b> k moet bijvoorbeeld de username en de text van de user een aparte ding make</p>
			<p><b>Test:</b> anders ga ik zo geen tekstballonne kunne make</p>
			<p><b>Podepod:</b> ma zo moeilijk kan de ni zijn nrml</p>
			<p><b>Test:</b> en ik moet dees ding ook nog koppele aan mn database</p>
			<p><b>Podepod:</b> ma ook da komt nog wel</p>
			<p><b>Test:</b> dees moet ook altijd update as er een nieuw bericht wordt gestuurd</p>
			<p><b>Podepod:</b> ma da weet ik nog ni hoe k da percies ga doen</p>
			<p><b>Test:</b> usernames moete ook nog gekoze kunne worde</p>
			<hr>
			<p><b>Test:</b> Dees is het laatste bericht verstuurd door de user, omdat dit ding nogni verbonde is met de database kan ik dus alleen net verstuurde berichten echoën met php
			<p><b>Last typed:</b> <?php $lastMSG = $_POST['UserMSG']; echo $lastMSG ?>
		</div>
		<form action="index.php" method="post">
			<textarea name="UserMSG" placeholder="Type your message..."></textarea>
			<input type="submit" value="Send">
		</form>
	</div>
</body>
</html>