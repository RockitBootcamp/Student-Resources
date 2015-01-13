# PHP: Basic Concepts

## PHP Tags and the echo Function

<?php echo ("hello php!"); ?>
-<?php ... ?> are required for php code to get executed
-echo (...) is a __function__ which prints its __argument(s)__ to the response output
-all PHP statements should be terminated by a semicolon

## Strings Part I

A string is a collection of characters enclosed in single or double quotes.

Examples:
-"this is a string"
-'this, too, is a string'
-"this is a syntax error'

## Comments

There are two types of comments:
-single line ex: // this is a comment
-multi-line or "block" comment ex: 
```
*/ 
	this is also a comment
*/
```
-multi-line comments CANNOT be nested

## Variables & Assignments

A __variable__ holds a value like:
```
	$name = "Bob";
	$size = 42;
```

Using '=' like this is called __assignment__. This is how you give a variable a value. 

The variable can now be used like: 
```echo($name);```

## Strings Part II

For the most part, single and double work the same with two main exceptions:
```string interpolation:
	&bull; "Hello $name"
	&bull; "Hello {$name}"```
```escape sequences:
	&bull; "line1\nline 2"
	&bull; "\this is tabbed in"
	&bull; "this is backslash \\"
	&bull; single quotes represent strings exactly as they look```