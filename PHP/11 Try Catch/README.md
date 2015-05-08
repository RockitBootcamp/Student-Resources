# Lesson 11: Try / Catch

Identifier   | Objectives
-------------|------------
PHP: 11.1    | Demonstrate Try & Catch Statements
PHP: 11.2    | Demonstrate throwing new exceptions

## Resources
- [PHP Try/Catch](http://phptrycatch.blogspot.com/)
- [Try/Catch/Finally](https://www.adayinthelifeof.nl/2013/02/12/php5-5-trycatchfinally/)

## Example Code 

This code shows how the need to delete a user (in the `try` block) will use several functions that are deeply nested. We will need to check if the user exists before we can delete them, and before we can check if the user exists, we will need to see if we have a database connection. If the database connection is not available (it's hardcoded to `false` in this case), then we cannot continue to check to see if the user exists. Therefore, we can throw and exception to return the control of the code to the `catch` part of the `try` block.

```php
function connectToDatabase() {
	$connection = false;
	if ($connection) {
		return $connection;
	} else {
		throw new Exception('No Connection');
	}
}

function doesUserExist() {
	connectToDatabase();
	return false;
}

function deleteUser() {
	if (doesUserExist()) {
		echo 'here is the code to delete the user';
	} else {
		throw new Exception('user doesnt exist');
	}
}

try {
	deleteUser();
} catch (Exception $e) {
	echo $e->getMessage();
}
```

## Exercises

1. Write a function to check if number is positive. Throw an exception if number is negative
2. Write a function to lowercase a string lower($s). Throw an exception if the $s is not a string
3. Write a function to validate Age. Throw an exception if not between (0-108)
4. Write a function to validate a password. Throw an exception if not at least length 8
   
