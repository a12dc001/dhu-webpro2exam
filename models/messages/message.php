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

	function all() {
		
	}

	function save() {

	}
	
}
?>
