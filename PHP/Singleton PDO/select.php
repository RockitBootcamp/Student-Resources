<?php

// Initialize Code
require('initialize.php');


$sql = "
	SELECT *
	FROM user
	";

// Make a PDO statement
$statement = DB::prepare($sql);

// Execute
DB::execute($statement);

// Get all the results of the statement into an array
$results = $statement->fetchAll();

// Loop array to get each row
foreach ($results as $row) {
	print_r($row);
}