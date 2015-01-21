<?php
class index {

	private $roomName;

	function __construct() {
		;
	}

	function render($roomName) {
		$data =<<<EOS
<!DOCTYPE html>
<html>
	<head>
		<title>メッセージ一覧</title>
	</head>
	<body>
		<h1>$roomName</h1>
	</body>
</html>
EOS;
	echo $data;
	}
	
}
?>
