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

// Sql Values
$sql_values = [
	'first_name' => $_POST['first_name'],
	'last_name' => $_POST['last_name'],
	'email' => $_POST['email']
];

// Execute
DB::execute($sql, $sql_values);

// Redirect
header('Location: profile.php?user_id=' . DB::lastInsertId());
exit();