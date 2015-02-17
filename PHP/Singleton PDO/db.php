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

	/**
	 * Init
	 */
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
	
	public static function execute($sql, $sql_values = []) {
		try {
			$link = self::init();
			
			// Prepare SQL Statement
			$statement = $link->prepare(trim($sql));

			// Execute Statement
			$statement->execute(self::cleanSqlValues($sql_values));

			// Return Statement
			return $statement;

		} catch (PDOException $e) {
			//echo $statement->debugDumpParams();
			die($e->getMessage());
		}
	}

	/****************************************
	  Utilities
	*****************************************/

	public static function lastInsertId() {
		$link = self::init();
		return $link->lastInsertId();
	}

	private static function cleanSQLValues($sql_values) {
		array_walk($sql_values, function(&$v) {
			$v = trim($v) == '' ? NULL : trim($v);
		});
		return $sql_values;
	}

}