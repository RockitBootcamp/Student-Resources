<?php

class Sql {

	/****************************************
	  Insert
	*****************************************/

	/**
	 * Execute Standard INSERT statement
	 */
	public static function insert($table_name, $sql_values, $ignore = []) {
		$sql = self::makeInsertStatement($table_name, $sql_values, $ignore);
		$sql_values = self::removeIgnores($sql_values, $ignore);
		return db::execute($sql, $sql_values);
	}

	/**
	 * Execute INSERT statement with ON DUPLICATE KEY UPDATE added
	 */
	public static function insertUpdate($table_name, $sql_values, $ignore = []) {
		$sql = self::makeInsertStatement($table_name, $sql_values, $ignore) . "\r\nON DUPLICATE KEY UPDATE " . self::makeUpdateValues($sql_values, $ignore);
		$sql_values = self::removeIgnores($sql_values, $ignore);
		return db::execute($sql, $sql_values);
	}

	/**
	 * Create Standard INSERT statement
	 */
	private static function makeInsertStatement($table_name, $sql_values, $ignore = []) {
		
		// Create SQL statement
		$sql = "INSERT INTO `{$table_name}` (`" . implode('`, `', array_keys($sql_values)) . "`) VALUES (:" . implode(', :', array_keys($sql_values)) . ")";
		
		// Replace prepared placeholders with original values if needed
		foreach ($ignore as $key) {
			$sql = str_replace(':' . $key, $sql_values[$key], $sql);
		}

		// Return SQL
		return $sql;
	}

	/****************************************
	  Update
	*****************************************/

	/**
	 * Execute Standard UPDATE statement
	 */
	public static function update($table_name, $sql_values, $sql_where, $ignore = []) {
		$sql = "UPDATE `{$table_name}` SET " . self::makeUpdateValues($sql_values, $ignore) . ' ' . $sql_where;
		$sql_values = self::removeIgnores($sql_values, $ignore);
		return db::execute($sql, $sql_values);
	}

	/**
	 * Create UPDATE key-value pairs
	 */
	public static function makeUpdateValues($sql_values, $ignore = []) {

		// Loop values to make query string in UPDATE format
		$sql_array = [];
		foreach ($sql_values as $key => $value) {
			if (in_array($key, $ignore)) {
				$sql_array[] = "`{$key}`={$value}";
			} else {
				$sql_array[] = "`{$key}`=:{$key}";
			}
		}

		return implode(',', $sql_array);

	}


	/****************************************
	  Utilities
	*****************************************/

	/**
	 * Removes keys from $sql_values if they match values from $ignore
	 */
	private static function removeIgnores($sql_values, $ignore) {
		return array_diff_key($sql_values, array_flip($ignore));
	}

}
