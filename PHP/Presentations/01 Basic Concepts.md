# PHP: Basic Concepts

## PHP Tags and the echo Function

<?php echo ("hello php!"); ?>
- &bull; <?php ... ?> are required for php code to get executed
- &bull; echo (...) is a __function__ which prints its __argument(s) to the response output
- &bull; all PHP statements should be terminated by a semicolon

## Strings Part I

A string is a collection of characters enclosed in single or double quotes.
- Examples:
- &bull; "this is a string"
- &bull; 'this, too, is a string'
- &bull; "this is a syntax error'

## Comments

There are two types of comments:
- &bull; single line ex: // this is a comment
- &bull; multi-line or "block" comment ex: 
```
*/ 
	this is also a comment
*/
```
- &bull; multi-line comments CANNOT be nested

## Variables & Assignments

A __variable__ holds a value like:
```
	$name = "Bob";
	$size = 42;
```

Using '=' like this is called __assignment__. This is how you give a variable a value. 

The variable can now be used like: 
echo($name);

## Strings Part II

For the most part, single and double work the same with two main exceptions:
&bull; string interpolation:
	&bull; "Hello $name"
	&bull; "Hello {$name}"
&bull; escape sequences:
	&bull; "line1\nline 2"
	&bull; "\this is tabbed in"
	&bull; "this is backslash \\"
	&bull; single quotes represent strings exactly as they look