<?php

// Initialize Code
require('initialize.php');


$sql = "
	SELECT *
	FROM user
	WHERE user_id = :user_id
	";

// Make a PDO statement
$statement = DB::prepare($sql);

$prepare_values = [
	':user_id' => $_GET['user_id']
];

// Execute
DB::execute($statement, $prepare_values);

// Get all the results of the statement into an array
$results = $statement->fetchAll();

// Get the first result as a row
$row = $results[0];
$first_name = $row['first_name'];

?>


<h1>This is the profile for: <?php echo $first_name; ?></h1>
