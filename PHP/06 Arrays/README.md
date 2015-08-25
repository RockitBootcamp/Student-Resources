# Lesson 6: Arrays

Identifier   | Objectives
-------------|------------
PHP: 6.1     | Explain Indexed Arrays
PHP: 6.2     | Explain Associative Arrays
PHP: 6.3     | Demonstrate array creation syntax
             | &bull; Indexed: `$x = Array('Joe', 'Smith');`
             | &bull; Indexed: `$x = ['Joe', 'Smith'];`
             | &bull; Associative: `$x = Array('first_name' => 'Joe', 'last_name' => 'Smith');`
             | &bull; Associative: `$x = ['first_name' => 'Joe', 'last_name' => 'Smith'];`
PHP: 6.4     | Demonstrate pushing values to end of array
             | &bull; With empty square brackets: `$x[] = 'value';`
             | &bull; `$x['key'] = 'value';`
PHP: 6.5     | Demonstrate accessing values of arrays
             | &bull; Indexed: `$value = $x[0];`
             | &bull; Associative: `$value = $x['key'];`
PHP: 6.6     | Use basic PHP array functions
             | &bull; `count()`
             | &bull; `in_array()`
             | &bull; `print_r()`
             | &bull; `array_push()`
             | &bull; `array_pop()`
             | &bull; `array_key_exists()`
             | &bull; `implode()`
             | &bull; `explode()`

## Exercise
- 1 Create an array of Fruit and echo out the 3rd item
- 2 Create an array of Prime Numbers and echo out the 5th one
- 3 Create an associative array of State=>Capitals ... 2nd
- 4 Create an associative array of Movie=>Ratings ... 1st
- 5. Explode the poem If by Kipling into words
- 6 Implode the array ["I", "love", "beans"]
- 7 Check if the key exists for 'c' for ["a"=>"1", "b"=>2, "c"=> 3]
- 8 Use push and pop to manage an array of colors

**Bonus**
Remove any special characters from the poem If by Kipling before exploding into an array (i.e ' , - )

## Resources
- __W3 Schools__ [PHP Arrays](http://www.w3schools.com/php/php_arrays.asp) 
- __PHPKnowHow__ [PHP Arrays](http://www.phpknowhow.com/basics/arrays/)
