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
$lis = '';
foreach ($results as $row) {
	$lis .= '<li><a href="profile.php?user_id=' . $row['user_id'] . '">' . $row['first_name'] . '</a></li>';
}

?>


<ul>
	<?php echo $lis; ?>
</ul>