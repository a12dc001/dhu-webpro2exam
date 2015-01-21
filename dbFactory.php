<?php
class dbFactory {

	private $mysql_dbName;
	private $mysql_host;
	private $mysql_user;
	private $mysql_pass;

	function __construct() {
		$this->mysql_dbName = 'webpro2examdb';
		$this->mysql_host = '127.0.0.1';
		$this->mysql_user = 'root';
		$this->mysql_pass = 'pass';
	}

	function mysql_conn() {
		$result = mysql_connect($this->mysql_host, $this->mysql_user, $this->mysql_pass);
		if(!$result) {
			die('Connect Failure.' . mysql_error());
		}
		return $result;
	}

	function mysql_disconn($conn) {
		$result = mysql_close($conn);
		if(!$result) {
			die('Disconnect Failure.' . mysql_error());
		}
		return $result;
	}

	function select_db($conn) {
		$result = mysql_select_db($this->mysql_dbName, $conn);
		if(!$result) {
			die('select db failure.' . mysql_error());
		}
		return $result;
	}

	function select_sql($conn, $table, $column = '*') {
		$result = array();
		$this->select_db($conn);
		$sql = 'SELECT ' . $column . ' FROM ' . $table;
		$query = mysql_query($sql);
		while($row = mysql_fetch_assoc($query)) {
			array_push($result, $row['name']);
		}
		if(!$result) {
			die('select query failure.' . mysql_error());
		}
		return $result;
	}

}
?>