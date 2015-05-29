# Lesson 5: Built-in Functions

Identifier   | Objectives
-------------|------------
PHP: 5.1     | Demonstrate basic function usage syntax
             | &bull; Function Name
             | &bull; Arguments
             | &bull; Return Value
PHP: 5.2     | Demonstrate using function calls as arguments
             | &bull; `$x = foo(bar());`
PHP: 5.3     | Use basic PHP string functions
             | &bull; `htmlentities()`
             | &bull; `strlen()`
             | &bull; `is_numeric()`
             | &bull; `ucwords()`
             | &bull; `ucfirst()`
             | &bull; `substr()`

## Function Exercises

```php
// Exercise 1: Write a function that adds two numbers

// Exercise 2: Write a function that adds three numbers

// Exercise 3: Write a function that adds 4 numbers

// Exercise 4: Write a function that returns the absolute value of a number

// Exercise 5: Write a function that concatinates a first and last name

// BONUS Exercise 6: Write a function that checks that a sentance has at least 20 characters, and the first 2 characters are numberic
// "41.67% of people add decimal places to make their statistics look more credible" TRUE
// "Forty-one point sixty-seven per cent of people add decimal places to make their statistics look more credible" FALSE
// "42 owls sing songs" FALSE
// "two owls sing songs" FALSE
```
## String Function Exercises

```php
$message = "the system is down";
$text = "i can program";
$password = "5rep-thucat_at&56AfecRafum";
$age = 25;

// Exercise 1: Echo the length of the message

// Exercise 2: What is the length of the text variable?

// Exercise 3: How many characters are in the password?

// Exercise 4: Check if $age is numeric

// Exercise 5: Echo IsNumeric if $password is numeric

// Exercise 6: Make each word in $text uppercase

// Exercise 7: Make first letter in each word of $text uppercase

// Exercise 8: Make first letter in each word of $message uppercase

// Exercise 9: Make first letter of the first word of $text uppercase

// Exercise 10: Make first letter of the first word of $message uppercase

// Exercise 11: Show only the first word of $message;

// Exercise 12: Show only the second word of $message;

// Exercise 13: Show only the last word of $message;

// Exercise 14: What are the first 6 characters of the password?

// Exercise 15: Are the 15-16 characters of the password numeric?

// Exercise 16: Show a sanitized password.


/////////////////////////////////////////////
///// ANSWERS
/////////////////////////////////////////////

echo strlen($message);  // 18
echo strlen($text);     // 13
echo strlen($password); // 26
echo is_numeric($age);  // 1 (True)
if (is_numeric($password)) {
    echo "'$password' is numeric";
} else {
    echo "'$password' is NOT numeric";
}
echo strtoupper($text);         // I CAN PROGRAM
echo strtoupper($message);      // THE SYSTEM IS DOWN
echo ucwords($text);            // I Can Program
echo ucwords($message);         // The System Is Down
echo ucfirst($text);            // I can program
echo ucfirst($message);         // The system is down
echo substr($message, 0,3);     // the
echo substr($message, 4,6);     // system
echo substr($message, -4,4);    // down
echo substr($message, 14,4);    // down
echo substr($password, 0,6);    // 5rep-t
echo is_numeric(substr($password, 15,2)); // 1 (True)
echo htmlentities($password);   // 5rep-thucat_at&amp;56AfecRafum
```


## Resources
- __PHP.net__ [PHP String Functions](http://php.net/manual/en/ref.strings.php)
