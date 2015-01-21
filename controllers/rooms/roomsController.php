<?php
class roomsController {

	private $objRoom;
	private $roomAll;

	function __construct() {
		require_once('models/rooms/room.php');
		require_once('views/rooms/index.php');
		$this->objRoom = new room();
		$this->objRoomView = new index();
	}

	function indexAction() {
		$roomAll = $this->objRoom->all();
		$this->objRoomView->render($roomAll);
	}
	
}
?>
