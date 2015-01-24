# Loop and Array Exercises

Below are 4 sets of exercises that will build and tone your loopius-maximus muscles. They are meant to be done in order with each one building off of concepts from the previous. That said, you can do them in any order you want. 

**NOTE:** Each exercise stands on it own. Don't try to have one chunk of code handle multiple exercises unless you are just trying to make life extra difficult. ;-)

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
1. create an unordered list (in HTML) of all users whose name starts with "m", example output below:

  ```php
  <ul>
    <li>user #3: mary</li>
    <li>user #13: mark</li>
    ...etc
  </ul>
  ```
1. create a dropdown of the users such that the user-id is what will be submitted (not the user name)
1. wrap a form around the above dropdown and make it so it prints the user name when the form is submitted
2. as above, but only show users whose name starts with 'b' and the length is less than 4 or greater than 4
3. as above, but now make it so the dropdown has the previously selected user pre-selected (if there is one)
4. create a **new** array that has **only** names that start with 'r' **and** has the keys and values reversed. So it would be the same as if you created the array as below:

  ```php
  $users2 = ['linda' => 2,'luke' => 32,'laura' => 15,'lance' => 20];
  ```
  
## Exercises with $pet, it's gonna start getting trickier, but it's all the same stuff
1. create an unordered list that has each key/value pair as a list item
2. create a form that has a text input for each key in the array. Note you are going to create the text inputs inside a loop, not as static html.
3. update above so that the value from the array is displayed as the value inside the text input (this is basically an "edit" page)

## Exercises with strings
With all these exercises you will reimplement the functionality of a standard PHP string function. Don't worry about properly making a function, just worry about the code to do it. Below is an example:
```php
// implement the PHP implode function (http://php.net/function.implode)
$glue = ','; // or other seperator
$pieces = $colors; // or other test array
$output_string = '';
foreach($pieces as $idx => $piece) {
  if($idx > 0) {
    $output_string .= $glue;
  }
  $output_string .= $piece;
}
```

Feel free to use any of the other standard PHP functions **except** the one you are reimplementing. So you can't use strrev() to reimplement strrev()

1. get the n'th character out of a string so the 9th character of "it's a small world" would be 'm'
2. reimplement the strlen() function
3. reimplement the substr() function
4. reimplement the strrev() function
5. reimplement the strpos() function



## More to come...
