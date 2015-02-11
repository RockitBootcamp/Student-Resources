$(function() {

	// Add Buttons
	$('ul.inventory button').on('click', function() {
		var itemText = $(this).parents('li').find('span').text();

		// Make the new item
		var item = $('<li>');
		var title = $('<span>').text(itemText)
		var button = $('<button>').text('Remove');
		item.append(title).append(button);

		$('.cart').append(item);
	});

	// Remove Buttons
	$('ul.cart').on('click', 'button', function() {
		$(this).parents('li').remove();
	});

});