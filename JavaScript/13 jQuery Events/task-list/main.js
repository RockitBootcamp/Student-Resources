$(function() {

	/**
	 * Clear Input
	 */
	var clearInput = function() {
		$('input').val('')
	}

	/**
	 * Add
	 */
	$('.add').click(function() {

		// Get Input
		var input = $('input').val();
		clearInput();

		// Make new DOM
		var del = $('<button class="delete">X</button>');
		var li = $('<li>').text(input).append(del);

		// Append to ul
		$('ul').append(li);

	});

	/**
	 * Remove
	 */
	 $('ul').on('click', '.delete', function() {
	 	$(this).parent().remove();
	 });

});