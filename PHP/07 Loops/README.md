# Lesson 7: Loops

Identifier   | Objectives
-------------|------------
PHP: 7.1     | Demonstrate `while` loop
PHP: 7.2     | Demonstrate `for` loop
PHP: 7.3     | Demonstrate `foreach` loop
PHP: 7.4     | Demonstrate `break` and `continue` statements

## Resources
- __W3 Schools__ [While Loops](http://www.w3schools.com/php/php_looping.asp)
- __W3 Schools__ [For and Foreach](http://www.w3schools.com/php/php_looping_for.asp)

## Extra Study

### While Loops

`While` loops allows you to execute a block of code while a certain condition exists. 

```php
$i = 0;
while ($i <= 10){
  echo $i++, "<br>";
}
```

The above loops until `$i` is bigger than 10 - in other words, until the condition is no longer true

```php
$items = ['dog', 'cat', 'fish', 'horse', 'bird'];
$i = 0;

while ($i < count($items)){
  echo $a = $items[$i], "<br>";
  $i++;
}
```

With this while loop, `count($items)` is equal to 5. So our condition says to loop while `$i` is less than 5. Then since `$i` started at 0 and the loop increments `$i` with each iteration, this while loop is basically a fancy way of counting from 0 to 4.

### For Loops

- `for` loops allow you to execute a block of code a specified number of times.
- The syntax in a `for` loop includes three expressions separated by semicolons.
  - First expression is the initialization
  - Second expression is the condition
  - Third expression is the increment or modification
The first expression initializes the value at the beginning of the loop. The second expression tests the condition each time around the loop, and finally the modification (third) expression is executed at the end of each iteration.

```php
for ($i = 1; $i <= 10; $i++) {
    echo $i, "<br>";
}
```

The above initialized the value of $i to 1, loops through testing the condition for each iteration that $i is less than or equal to 10, and modifies and prints out the numbers 1 through 10.  

```php
$a = 0;
$b = 0;

for( $i=0; $i<5; $i++ ){
    $a += 10;
    $b += 5;
}
echo ("At the end of the loop a=$a and b=$b" );
```

The above will iterate through 5 times and modify the assigned value of two variables with each loop through. So, 
- the first iteration $a is 10 and $b is 5; 
- the second iteration $a is 20 and $b is 10; 
- the third iteration $a is 30 and $b is 15; 
- the fourth iteration $a is 40 and $b is 20; 
- and finally, the fifth iteration $a is 50 and $b is 25. 

So, the result is a sentence that reads: At the end of the loop a=50 and b=25.  

### Foreach Loops

`foreach` loops are used to iterate through arrays and objects and there are two syntaxes

```php
$array = [1, 2, 3, 4];

foreach ($array as $value){
  // execute some code;
}

//or it can be written with the $key and $value as follows:

$array = [
   'a' => 'donut',
   'b' => 'coffee',
   'c' => 'soda',
   'd' => 'cereal'
];

foreach ($array as $key => $value){
  // execute some code;
}
```

The internal array pointer automatically points to the first element when the `foreach` loop begins, then moves to the next element with each iteration. 

The syntax of the `foreach` includes the name of your array ($array), then after 'as' you can have simply the value of the array ($value) or the `$key => $value` pair

#### Example 1:

Output each animal with "I would like to have a " preceeding the animal name:

```php
$animals = ['dog', 'cat', 'fish', 'horse', 'bird'];

foreach ($animals as $animal){
  echo "I would like to have a $animal.<br>";
}
```

The result of the above code will be:

```html
I would like to have a dog.
I would like to have a cat.
I would like to have a fish.
I would like to have a horse.
I would like to have a bird.
```

#### Example 2:

Describe a team's attributes using an associative array. Output each of the team's attributes:

```php
$team = [
	'name' => 'The Suns',
	'players' => 12,
	'primary_color' => 'orange',
	'record' => '5-20',
	'last_championship' => 'never'
];

foreach($team as $property => $value) {
	echo "$property: $value<br>";
}
```

The above result will be: 

```html
name, value: The Suns
players: 12
primary_color: orange
record: 5-20
last_championship: never
```

#### Example 3:

Create a dropdown that allows you to choose from a list of states

```php
<?php

$states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut'];
$states_opts = '';

foreach($states as $state) {
    $state_opts .= "<option>$state</option>\n";
}

?>

<select name="states">
    <?php echo $state_opts; ?>
</select>
 ```
 
#### Example 4:

Create a drop down with a list of products and a "buy it now" button. Note that in this example we'll also use a random SKU for each product and we'll use that SKU as the array's key:

**Step 1: Create your products list**

```php
$products = [
	'7897wej2' => 'desk',,
	'2342314asdf' => 'chair',
	'23314sdf' => 'boat',
	'734253eah' => 'car'
];
```

**Step 2: Create options**

```php
$opts = '';
foreach($products as $key => $product){
    $opts .= "<option value=\"$key\">$product</option>";
}
```

**Step 3: Insert the options in a `<select>` tag in the HTML**

```html
<!DOCTYPE html>
<html lang="en">
<head></head>
<body>

Pick a product:
<form action="">
   <select name="product_id">
	 <?php echo $opts; ?>
   </select>
   <button>Buy it NOW</button>
</form>
</body>
</html>
```

**Step 4: Submit the form somewhere**

Add an action attribute to the form:

```
<form action="process.php">
```

**Step 5: Create the page that receives the form submission:**

This file is a separage file (process.php):

```php
<?php

if(isset($_GET['product_id'])){
   $product_id = $_GET['product_id'];
   echo "You bought a {$products[$product_id]}";
}
```
