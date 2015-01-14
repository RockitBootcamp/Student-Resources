# Lesson 3: Basic Logic

Identifier   | Objectives
-------------|------------
PHP: 3.1     | Demonstrate `if` and `if else` statements
PHP: 3.2     | Demonstrate use of logic operators
             | &bull; `&&` AND operator
             | &bull; `||` OR operator
PHP: 3.3     | Demonstrate use of comparison operators
             | &bull; `==` Equal value
             | &bull; `===` Equal value and type
             | &bull; `!=` Not equal value
             | &bull; `<>` Not equal value
             | &bull; `!==` Not equal value or type
             | &bull; `>` Greater than
             | &bull; `<` Less than
             | &bull; `>=` Greater than or equal to
             | &bull; `<=` Less than or equal to

## Resources
- __W3 Schools__ [PHP If and If Else](http://www.w3schools.com/php/php_if_else.asp)

## Extra Study

Programming languages have "Control Structures". A control structure is a way for the developer to control the flow of their program. If-Statements are basic control structures that allow us to make decisions, which is sometimes called logic.

### If-Statement Syntax

```php
$x = 5;

if ($x == 5) {
    echo 'The x variable is set to five';
}
```

If-Statements sometimes make use of the "comparison operator" which is a `==` double equal sign (with no space between). The comparison operator is very different from the single equal sign `=` assignment operator. The assignment operator will assign values to variables, in this case assigning `5` to `$x` on the first line above. In the If-Statement, it might look like we're assigning `5` to `$x` again but since we're using the comparison operator, it's not an assignment but rather a question. The If-Statement is asking "If `$x` is equal to `5`".

If-Statements use curly braces to define an area of code that will execute if the If-Statement results in true. The code within the "curlies" will only execute if the If-Statement evaluates to true. The code within the curlies will be skipped otherwise.

```php
$x = 5;

if ($x == 6) {
    $y = 3;
}

$z = 4;
```

In this example, `$y` is never set to `3` because the line of code that sets `$y` to `3` only runs if the If-Statement is true. In this case it's not true. However, `$z` will be set to `4` because this line of code is outside of the If-Statement (therefore the If-Statement doesn't apply).

### Else

```php
$x = 5;

if ($x == 6) {
    $y = 3;
} else {
    $y = 9;
}
```

This code is similar to before but now it uses an Else-Statement with the If-Statement. Take note that each opening curly brace is accompanied by a closing curly brace. The curly before the `else` is closing off the If-Statement. The opening curly after the `else` starts the new block that applies to the `else`. Doing this code creates two distinct "blocks" where it's only possible for either the `if` or the `else` block to run. `$y` will either be assigned `3` or `9`. This depends on the part that's between the parenthesis. In english this code says "If $x is  equal to 6, then set $y to 3, otherwise (else) set $y to 9".











