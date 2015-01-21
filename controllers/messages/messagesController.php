<?php
class messagesController {

	private $objMessage;
	private $objMessageView;


	function __construct() {
		require_once('../../models/messages/message.php');
		require_once('../../views/messages/index.php');
		$this->objMessage = new message();
		$this->objMessageView = new index();
	}

	function indexAction() {
		$room_id = $_GET['id'];
		$result = $this->objMessage->all($room_id);
		$this->objMessageView->render($result);
	}

	function newAction() {

	}

	function createAction() {

	}
	
}

$objMessageControl = new messagesController();
$objMessageControl->indexAction();
?>
