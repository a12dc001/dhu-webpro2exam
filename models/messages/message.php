<?php
class message {

	private $id;
	private $room_id;
	private $sent_at;
	private $content;
	private $objDbFactory;

	function __construct() {
		require_once('/../../dbFactory.php');
		$this->objDbFactory = new dbFactory();
	}

	function all($room_id) {
		$conn = $this->objDbFactory->mysql_conn();
		$result = $this->objDbFactory->select_sql($conn, 'messages', 'id='.$room_id);
		$this->objDbFactory->mysql_disconn();
	}

	function save() {

	}
	
}
?>
