<?php

// Initialize Code
require('initialize.php');


$sql = "
	INSERT INTO user (
		first_name, last_name, email
	) VALUES (
		:first_name, :last_name, :email
	)
	";

$sql_values = [
	'first_name' => $_POST['first_name'],
	'last_name' => $_POST['last_name'],
	'email' => $_POST['email']
];

// Make a PDO statement
$statement = DB::prepare($sql);

// // Bind Parameters individually instead of using sql_values array
// $statement->bindValue(':first_name', $_POST['first_name']);
// $statement->bindValue(':last_name', $_POST['last_name']);
// $statement->bindValue(':email', $_POST['email']);

// Execute
DB::execute($statement);

// Redirect
header('Location: profile.php?user_id=' . DB::lastInsertId());
exit();