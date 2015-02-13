<?php

// View Class
class View {
	
	// Fill Template
	public static function fill($record, $template) {
		$search_keys = array_keys($record);
		array_walk($search_keys, ['self', 'fixKeys']);
		$values = array_values($record);
		return str_replace($search_keys, $values, $template);
	}

	// Callback to fix keys with mustashes
	private static function fixKeys(&$search) {
		$search = '{{' . $search . '}}';
	}

}


// Template
$template = '
	<div class="product">
		<h1>{{title}}</h1>
		<div class="description">{{description}}</div>
	</div>';

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
	$output .= View::fill($record, $template);
}

echo $output;