# PHP Objectives

## Basic Concepts
Identifier   | Objectives
-------------|------------
PHP: 1.1     | Demonstrate opening and closing tag syntax
PHP: 1.2     | Use basic PHP Variables
             | &bull; Assignment Operator `=`
PHP: 1.3     | Demonstrate use of strings
             | &bull; Enclosed in double or single quotes
PHP: 1.4     | Demonstrate use of echo function
PHP: 1.5     | Use PHP Comments
             | &bull; One-line
             | &bull; Multi-line
PHP: 1.6     | Demonstrate modularization with...
             | &bull; `include` and `include_once`
             | &bull; `require` and `require_once`

## Variable Types
Identifier   | Objectives
-------------|------------
PHP: 3.2     | Define the various Scalar Primitive types
             | &bull; Integer
             | &bull; Float
             | &bull; Boolean
             | &bull; String  
             | &bull; Null
PHP: 3.2     | Explain addition operator: `+`            
PHP: 3.3     | Explain Type Casting
             | &bull; Implicit Type Casting
             | &bull; Explicit Type Casting

## Basic Operators
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

## Basic Logic
Identifier   | Objectives
-------------|------------
PHP: 5.1     | Demonstrate `if` and `if else` statements
PHP: 5.2     | Demonstrate use of logic operators
             | &bull; `&&` AND operator
             | &bull; `||` OR operator
PHP: 5.3     |
             | &bull; Demonstrate use of comparison operators
             | &bull; `==` Equal value
             | &bull; `===` Equal value and type
             | &bull; `!=` Not equal value
             | &bull; `<>` Not equal value
             | &bull; `!==` Not equal value or type
             | &bull; `>` Greater than
             | &bull; `<` Less than
             | &bull; `>=` Greater than or equal to
             | &bull; `<=` Less than or equal to

## Built-in Functions
Identifier   | Objectives
-------------|------------
PHP: 6.1     | Demonstrate basic function usage syntax
             | &bull; Function Name
             | &bull; Arguments
             | &bull; Return Value
PHP: 6.2     | Demonstrate using function calls as arguments
             | &bull; `$x = foo(bar());`
PHP: 6.3     | Use basic PHP string functions
             | &bull; `strlen()`
             | &bull; `ucwords()`
             | &bull; `ucfirst()`
             | &bull; `substr()`
             | &bull; `htmlentities()`

## Arrays
Identifier   | Objectives
-------------|------------
PHP: 7.1     | Explain Indexed Arrays
PHP: 7.2     | Explain Associative Arrays
PHP: 7.3     | Demonstrate array creation syntax
             | &bull; Indexed: `$x = Array('Joe', 'Smith');`
             | &bull; Indexed: `$x = ['Joe', 'Smith'];`
             | &bull; Associative: `$x = Array('first_name' => 'Joe', 'last_name' => 'Smith');`
             | &bull; Associative: `$x = ['first_name' => 'Joe', 'last_name' => 'Smith'];`
PHP: 7.4     | Demonstrate pushing values to end of array
             | &bull; With empty square brackets: `$x[] = 'value';`
             | &bull; `$x['key'] = 'value';`
PHP: 7.5     | Demonstrate accessing values of arrays
             | &bull; Indexed: `$value = $x[0];`
             | &bull; Associative: `$value = $x['key'];`
PHP: 7.6     | Use basic PHP array functions
             | &bull; `count()`
             | &bull; `in_array()`
             | &bull; `print_r()`
             | &bull; `array_push()`
             | &bull; `array_pop()`
             | &bull; `array_key_exists()`

## Loops
Identifier   | Objectives
-------------|------------
PHP: 8.1     | Demonstrate `while` loop
PHP: 8.2     | Demonstrate `for` loop
PHP: 8.3     | Demonstrate `foreach` loop
PHP: 8.4     | Demonstrate `break` and `continue` statements

## User Defined Functions
Identifier   | Objectives
-------------|------------
PHP: 9.1     | Explain the purpose of making your own functions:
             | &bull; Code reuse
             | &bull; Abstraction of ideas
             | &bull; Making shorter chunks of code
PHP: 9.2     | Demonstrate proper function declaration 
PHP: 9.3     | Explain and demonstrate the return statement
             | &bull; No return means "void"

## OOP I
Identifier   | Objectives
-------------|------------
PHP: 10.1    | Demonstrate making a class:
             | &bull; Enclosing class structure
             | &bull; Defining methods
             | &bull; Defining attributes
PHP: 10.2    | Demonstrate making a constructor
PHP: 10.3    | Demonstrate instantiating a class with the `new` keyword
PHP: 10.4    | Demonstrate use of the `this` keyword
PHP: 10.5    | Explain Encapsulation
PHP: 10.6    | Use of visibility keywords:
             | &bull; `public`
             | &bull; `private`

## OOP II
Identifier   | Objectives
-------------|------------
PHP: 11.1    | Explain purpose of Inheritance
             | &bull; Code reuse
             | &bull; Abstraction
             | &bull; Modularity
PHP: 11.2    | Demonstrate Inheritance
PHP: 11.3    | Demonstrate Method Overriding
PHP: 11.4    | Use of visibility keyword:
             | &bull; `protected`

## Try / Catch
Identifier   | Objectives
-------------|------------
PHP: 12.1    | Demonstrate Try & Catch Statements
PHP: 12.2    | Demonstrate throwing new exceptions

## Server-Side Validation
Identifier   | Objectives
-------------|------------
PHP: 13.1    | Demonstrate validation with Regular Expressions
PHP: 13.2    | Demonstrate validation with Try / Catch Statements
PHP: 13.3    | Demonstrate using OOP to make a validation object
PHP: 13.4    | Demonstrate form filling for forms with errors using a recursive form submission technique

## Sessions
Identifier   | Objectives
-------------|------------
PHP: 14.1    | Explain how session variables work with cookies
PHP: 14.2    | Explain the Session ID (SID)
PHP: 14.3    | Demonstrate `session_start()` and `$_SESSION`
PHP: 14.4    | Demonstrate persistent data between pages
             | &bull; Including use cases for logins

## Connect to MySQL
Identifier   | Objectives
-------------|------------
PHP: 15.1    | Demonstrate connecting to a database using `mysqli_connect`
PHP: 15.2    | Demonstrate handling `mysql_connection` errors
PHP: 15.3    | Demonstrate executing an SQL query in PHP
PHP: 15.4    | Demonstrate iterating over results returned from MySQL with PHP

## OOP III
Identifier   | Objectives
-------------|------------
PHP: 16.1    | Explain Static Members
PHP: 16.2    | Call static members from outside class
             | &bull; `ClassName::foo();`
             | &bull; `ClassName::$bar;`
PHP: 16.3    | Call static members from inside classes
             | &bull; `self::foo()`
             | &bull; `self::$bar;`
PHP: 16.4    | Explain the Singleton Pattern

## OOP IV
Identifier   | Objectives
-------------|------------
PHP: 17.1    | Explain Interfaces
PHP: 17.2    | Demonstrate Creating an Interface
PHP: 17.3    | Demonstrate Creating a Class that Implements an Interface

## Templating
Identifier   | Objectives
-------------|------------
PHP: 18.1    | Demonstrate Simple String Replacement Strategies
             | &bull; Template: `$template = "Welcome {{name}}"`;
             | &bull; Replace by: `str_replace('{{name}}', $name, $template);`
             | &bull; Replace by: `str_replace($array_keys, $array_values, $template);`
PHP: 18.2    | Explain Output Buffering
PHP: 18.3    | Demonstrate a simple "View" class using Output Buffering to fill an external template

## MVC I
Identifier   | Objectives
-------------|------------
PHP: 19.1    | Explain Routers
PHP: 19.1    | Describe a Controller
PHP: 19.1    | Explain Views
PHP: 19.1    | Explain relationship between Views and Template

## MVC II
Identifier   | Objectives
-------------|------------
PHP: 20.1    | Explain Models
PHP: 20.1    | Explain MVC