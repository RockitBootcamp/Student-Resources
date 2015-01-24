# Loop and Array Exercises

## Use these arrays for the exercises:
```php
$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

$users = [1 => 'bob',2 => 'linda',5 => 'fred',3 => 'mary',9 => 'kate',40 => 'roger',
  11 => 'blake',12 => 'baily',13 => 'mark',14 => 'francis',32 => 'luke',21 => 'kenny',
  15 => 'laura',20 => 'lance',25 => 'bill',39 => 'roberta',38 => 'maurice'];

$pet = [
  'name' => 'fluffy',
  'type' => 'alligator',
  'weight' => '400lbs.',
  'diet' => 'kittens & small children',
];
```

## PHP functions that we've covered in class:
```php
// string functions
strlen()
strpos()
substr()

// array functions
print_r()
count()
in_array()
array_key_exists()
array_push()
array_pop()
```
### References:
http://php.net/ref.strings

http://php.net/manual/en/ref.array.php

## Exercises w/ $colors:
- create an ordered list (in HTML) of all the colors
-  create and unordered list (in HTML) of all the colors that includes the **1-based** number of the color, example output html below
```html
<ul>
  <li> color 1: red</li>
  <li> color 2: green</li>
  <li> color 3: blue</li>
  ... all the other colors
</ul>
```
- create a dropdown list of all the colors
- add a form to the above dropdown so that when it is submitted the resulting page first displays the selected color, if any, and then the dropdown box. make sure the URL parameter being passed is the index of the color, not the color name itself
- modify the above so that it only includes colors whose name is **longer** than 4 characters
- as above, but instead of name length, include only colors whose index is odd

## More to come...
