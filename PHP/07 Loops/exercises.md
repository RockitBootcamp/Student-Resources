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
1. create an ordered list (in HTML) of all the colors
1.  create and unordered list (in HTML) of all the colors that includes the **1-based** number of the color, example output html below
  
  ```html
  <ul>
    <li> color 1: red</li>
    <li> color 2: green</li>
    <li> color 3: blue</li>
    ... all the other colors
  </ul>
  ```
1. create a dropdown list of all the colors
1. add a form to the above dropdown so that when it is submitted the resulting page first displays the selected color, if any, and then the dropdown box. make sure the URL parameter being passed is the index of the color, not the color name itself
1. modify the above so that it only includes colors whose name is **longer** than 4 characters
1. as above, but instead of name length, include only colors whose index is odd
1. create a **new** array that has only colors whose name is 4 characters or less
1. create a **new** array that has only colors whose index is a multiple of 3


## Exercises with $users
**Note: In this set of exercises, "index" and "user_id" are used synonymously**
- create an unordered list (in HTML) of all users whose name starts with "m", example output below:
```php
<ul>
  <li>user #3: mary</li>
  <li>user #13: mark</li>
  ...etc
</ul>
```
- create a dropdown
## More to come...
