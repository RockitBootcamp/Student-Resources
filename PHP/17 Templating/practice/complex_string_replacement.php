<?php

// View Class
class View {
	
	// Fill Template
	public static function fill($record, $template) {
		foreach ($record as $key => $field) {
			$template = str_replace('{{' . $key . '}}', $field, $template);
		}
		return $template;
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