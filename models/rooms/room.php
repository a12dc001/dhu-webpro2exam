<?php
class room {

	private $id;
	private $name;
	private $objDbFactory;

	function __construct() {
		require_once('/../../dbFactory.php');
		$this->objDbFactory = new dbFactory();
	}

	function all() {
		$result = '-1';
		$conn = $this->objDbFactory->mysql_conn();
		$result = $this->objDbFactory->select_sql($conn, 'rooms', 'name');
		$this->objDbFactory->mysql_disconn($conn);
		return $result;
	}

	function load(int $id) {
		$result = '-1';
		$conn = $this->objDbFactory->mysql_conn();
		$result = $this->objDbFactory->select_sql($conn, 'rooms', 'name');
		$this->objDbFactory->mysql_disconn($conn);
		return $result;
	}

}
?>
