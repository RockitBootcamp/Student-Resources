<?php

// Product Class
class Product {

	// Template
	private static $template = '
		<div class="product">
			<h1>{{title}}</h1>
			<div class="description">{{description}}</div>
		</div>';
	
	// Fill Template
	public static function fillTemplate($record) {
		$result = self::$template;
		$result = str_replace('{{title}}', $record['title'], $result);
		$result = str_replace('{{description}}', $record['description'], $result);
		return $result;
	}

}


// Values
$values = [
	['title' => 'HTML', 'description' => 'A markup language for content'],
	['title' => 'JavaScript', 'description' => 'A functional programming language'],
	['title' => 'CSS', 'description' => 'The design layer for HTML']
];

// Start Output String
$output = '';

// Loop all values and build output
foreach ($values as $record) {
	$output .= Product::fillTemplate($record);
}

echo $output;