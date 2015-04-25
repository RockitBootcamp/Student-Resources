<?php

// View
class View {

	// Fill Template
	function fill($vars, $template_path) {
		
		// Filename must exist
		if (!file_exists($template_path)) {
			die('File Doesn\'t Exist');
		}

		// Turn Vars into unique variables
		extract($vars);

		// Get View Output
		ob_start();
		require($template_path);
		$output = ob_get_contents();
		ob_end_clean();

		return $output;

	}

}

$vars = ['title' => 'HTML', 'description' => 'A markup language for content'];
$product = View::fill($vars, 'template.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php echo $product; ?>

</body>
</html>