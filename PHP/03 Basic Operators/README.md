# Lesson 3: Basic Operators

Identifier   | Objectives
-------------|------------
PHP: 4.1     | Demonstrate Arithmetic Operators
             | &bull; `+` Addition
             | &bull; `-` Subtraction
             | &bull; `*` Multiplication
             | &bull; `/` Division
             | &bull; `%` Modulus
             | &bull; `**` Exponentiation
PHP: 4.2     | Use parenthesis to group mathematical operations
             | &bull; `$x = ((6 / 3) * (2 * 9)) + 1`
PHP: 4.3     | Demonstrate String Operators
             | &bull; `.` Concatenation
PHP: 4.4     | Demonstrate Increment / Decrement Operators
             | &bull; `+=`
             | &bull; `-=`
             | &bull; `*=`
             | &bull; `/=`
             | &bull; `.=`

## Resources
- __W3 Schools__ [PHP Operators](http://www.w3schools.com/php/php_operators.asp)

## Pre Study

Increment and Decrement operators are very useful and common in programming. Let's look at some code:

```php
$x = 5;
$x = $x + 3;
```

This code adds `3` to the existing value of `$x`. It's like saying, "Take what x was (5) and add 3 to it". However, it's so common to need to add numbers to existing values that we have a shortcut:

```php
$x = 5;
$x += 3;
```

This code, with the `+=` operator says the same thing - take what `$x` was and add `3` to it. While this works for any number we want to add, let's look at adding `1`:

```php
$x = 5;
$x += 1;
```

Now `$x` is equal to 6. But it's so much more common to add `1` to existing values that we have a better shortcut:

```php
$x = 5;
$x++;
```

Notice there's no space between `$x` and `++`. This operator allows us to increment the variable by one. It also works the same for `--`:

```php
$x = 5;
$x--; // x is 4
```

### String Concatenation

While string concatenation was covered in a previous lesson, we'll now cover a nice little shortcut that will remind you of `+=`. Here is some code:

```php
$welcome = 'Welcome ';
$welcome = $welcome . 'Dave';
echo $welcome; // Outputs: Welcome Dave
```

This is the long way of doing it. This is like saying "Make the welcome variable what it was, plus some more characters added to it";

The shortcut goes as follows:

```php
$welcome = 'Welcome ';
$welcome .= 'Dave';
echo $welcome; // Outputs: Welcome Dave
```