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
		$this->objMessageView->render();
	}

	function newAction() {

	}

	function createAction() {

	}
	
}

$objMessageControl = new messagesController();
$objMessageControl->indexAction();
?>
