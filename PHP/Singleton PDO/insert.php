<?php

// Initialize Code
require('initialize.php');


$sql = "
	INSERT INTO user (
		first_name, last_name, email
	) VALUES (
		:first_name,  :last_name, :email
	)
	";

$sql_values = [
	':first_name' => 'Douglas',
	':last_name' => 'Crockford',
	':email' => 'doug@crockford.com'
];

// Make a PDO statement
$statement = DB::prepare($sql);

// Bind Parameters individually instead of using sql_values array
//$statement->bindValue(':first_name', 'Douglas');
//$statement->bindValue(':last_name', 'Crockford');
//$statement->bindValue(':email', 'doug@crockford.com');

// Execute
DB::execute($statement, $sql_values);

