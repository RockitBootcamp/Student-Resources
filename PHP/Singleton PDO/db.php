<?php

class DB {
	
	// Singleton Instance
	private static $instance;
	private $link;

	/**
	 * Connect to MySQL database
	 */
	public function __construct() {
		try {
			$this->link = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
			$this->link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	/****************************************
	  Singleton
	*****************************************/

	public static function init() {

		// Singleton
		if (!isset(self::$instance)) {
			$class = __CLASS__;
			self::$instance = new $class();
		}

		// Return Instance
		return self::$instance->link;

	}

	/****************************************
	  Execute
	*****************************************/
	
	public static function execute($statement, $sql_values = []) {
		try {
			$link = self::init();
			if (is_array($sql_values)) {
				$statement->execute($sql_values);
			} else {
				$statement->execute();
			}
			return $statement;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	/****************************************
	  Prepare
	*****************************************/

	public static function prepare($sql) {
		try {
			$link = self::init();
			$statement = $link->prepare($sql);
			return $statement;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	/****************************************
	  Last Insert ID
	*****************************************/

	public static function lastInsertId() {
		$link = self::init();
		return $link->lastInsertId();
	}

}