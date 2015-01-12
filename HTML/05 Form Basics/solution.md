# Practice Solution

## Form 1
```html
<form method="GET">
	<input type="text" name="first_name" required>
	<input type="text" name="last_name" required>
	<button type="submit">Submit</button>
</form>
```

## Form 2
```html
<form method="POST" action="login.php">
	<input type="email" name="email" required>
	<input type="password" name="password" required>
	<input type="submit" value="Submit">
</form>
```

## Form 3
```html
<form method="GET" action="view_products.php">
	<select name="product" required>
		<option value=""></option>
		<option>Product One</option>
		<option>Product Two</option>
		<option>Product Three</option>
	</select>
	<input type="number" name="quantity" value="10" required>
	<button type="submit">Submit</button>
</form>
```