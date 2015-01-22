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

###Extra Study

#### `while` loops
- `While` loops allows you to execute a block of code while a certain condition exists. 
```php
$i = 0;
while ($i <= 10){
  echo $i++, "<br>";
}
```
The above loops through until $i is no longer less than or equal to 10 and will print the numbers 1 through 10.
```php
$items = ['dog', 'cat', 'fish', 'horse', 'bird'];
$i = 0;

while ($i < count($items)){
  echo $a = $items[$i], "<br>";
  $i++;
}
```
The above will loop through the array as long as $i is less than the length of the array. It will print each item listed in the array. 

#### `for` loops
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
#### `foreach` loops
`foreach` loops are used to iterate through arrays and objects
```php
$array = [1, 2, 3, 4];

foreach ($array as $value){
  execute some code;
}
```
The internal array pointer automatically points to the first element when the `foreach` loop begins, then moves to the next element with each iteration. 
#####example 1:
```php
$animals = ['dog', 'cat', 'fish', 'horse', 'bird'];

foreach ($animals as $animal){
  echo "I would like to have a $animal.", "<br>";
}
```
The result of the above code will be:
```ssh
I would like to have a dog.
I would like to have a cat.
I would like to have a fish.
I would like to have a horse.
I would like to have a bird.
```
#####example 2:
```php
$team = [
	'name' => 'The Suns',
	'num_player' => 7,
	'primary_color' => 'orange',
	'record' => '5-20',
	'last_championship' => 'never'
];

foreach($team as $property => $value) {
	echo "idx: $property, value: $value<br>";
}
```
The above result will be: 
```ssh
idx: name, value: The Suns
idx: num_player, value: 7
idx: primary_color, value: orange
idx: record, value: 5-20
idx: last_championship, value: never
```
