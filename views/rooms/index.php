<?php
class index {

	function __construct() {
		
	}

	function render($rooms) {
		$data =<<<EOS
<!DOCTYPE html>
<html>
	<head>
		<title>ルーム一覧</title>
	</head>
	<body>
		<h1>ルーム一覧</h1>
		<p>発言したいルームを選択してください。</p>
		<ul>
			<li><a href="controllers/messages/messagesController.php?id=0">$rooms[0]</a></li>
			<li><a href="controllers/messages/messagesController.php?id=1">$rooms[1]</a></li>
			<li><a href="controllers/messages/messagesController.php?id=2">$rooms[2]</a></li>
			<li><a href="controllers/messages/messagesController.php?id=3">$rooms[3]</a></li>
			<li><a href="controllers/messages/messagesController.php?id=4">$rooms[4]</a></li>
		</ul>
	</body>
</html>
EOS;
	echo $data;
	}
	
}
?>
