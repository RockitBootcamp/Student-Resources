# Lesson 2: Variable Types

Identifier   | Objectives
-------------|------------
PHP: 2.1     | Define the various Scalar Primitive types
             | &bull; Integer
             | &bull; Float
             | &bull; Boolean
             | &bull; String  
             | &bull; Null
PHP: 2.2     | Explain addition operator: `+`
PHP: 2.3     | Explain concatenation operator `.`  
             | &bull; `$a = "hello " . $name;`
PHP: 2.4     | Variable interpolation
             | &bull; `$a = "hello $name";`
PHP: 2.5     | Explain Type Casting
             | &bull; Implicit Type Casting
             | &bull; Explicit Type Casting

## Resources
- __W3 Schools__ [PHP Data Types](http://www.w3schools.com/php/php_datatypes.asp)

## Practice

Create variables of different types:

```php

$a = 5;        // Integer
$b = '5'       // String
$c = 5.2       // Float
$d = false     // Boolean
$e = 'false'   // String
$f = Null;     // Null
$g = 'Null';   // String

```

PHP has operators which allow us to do more with variables. For instance the `+` addition operator can be used to do math:

```php
$a = 5 + 8;    // Creates an integer with the value of 13
```

In this case PHP knows that you're adding two integer values so it's easy for PHP to know you want `$a` to be an integer. But what if we do this...

```php
$a = 5 + 2.2;  // Creates a float with the value of 7.2
```

In this case since we're trying to add an integer value to a float, PHP has to choose if we want the resulting `$a` variable to be either integer or float. PHP realizes that you probably want `7.2` as a result in this case so it's pretty easy for PHP to decide you want a float. But this brings up a new concept called type casting. PHP had to decide to take `5` (and integer) and cast it to a float to do this operation. Further, this is called Implicit Type Casting because PHP implicitly (without you asking it to) casted the type.

```php
$a = '5' + 8;  // Creates an integer with the value of 13
```

In this case we're trying to add a string to an integer. PHP is smart enough to Implicitly Type Cast the string to a number, in order to do the math. The end result is an integer with `13` as a value.

Type casting works with variables as well. This code will produce the exact same result as the previous example:

```php
$x = '5';
$y = 8;
$a = $x + y;  // Creates an integer with the value of 13
```

### String Concatenation

Strings can be concatenated in PHP, which means more than one string can be combined. This example shows two strings being combined into one:

```php
$text1 = 'Hello';
$text2 = 'World';
$combined = $text1 . $text2;
echo $combined; // Outputs: HelloWorld
```

Notice that the `.` dot is used to concatenate the two string variables. The result is assigned to the `$combined` variable before it is echoed. But did you notice that the output for "HelloWorld" has no space? Let's change the code a bit to add the space:

```php
var $text1 = 'Hello';
var $text2 = 'World';
var $combined = $text1 . ' ' . $text2;
echo $combined; // Outputs: Hello World
```

In this case we're building the `combined` string by using variables and an extra small string (of one empty space).

Let's do it again but a different way:

```php
var $text1 = 'Hello'
var $combined = $text1 . ' ' . 'World';
echo $combined; // Outputs: Hello World
```

This one doesn't use a variable for "World" but it works the same. But it's a little strange to have the string with the space be separate from the last string with "World". Let's do it again:

```php
var $text1 = 'Hello'
var $combined = $text1 . ' World';
echo $combined; // Outputs: Hello World
```

The main point of showing these examples is to show how expressive your code can be. There are many ways to do the same thing and it's good to see a variety of them to get a sense of how things work.

