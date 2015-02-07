# Lesson 14: Connect to MySQL

Identifier   | Objectives
-------------|------------
PHP: 14.1    | Demonstrate connecting to a database using PDO
PHP: 14.2    | Demonstrate catching PDO errors
             | &bull; With adding `ERRMODE_EXCEPTION` to the connection
PHP: 14.3    | Demonstrate executing an SQL query in PDO
PHP: 14.4    | Demonstrate iterating over results returned from MySQL with PHP

## Resources
- __PHP.net__ [MySQL Connections](http://php.net/manual/en/mysqli.quickstart.connections.php)
- __PHP.net__ [MySQL Query](http://php.net/manual/en/mysqli.query.php)

## Extra Study

Connect to a MySQL database using PDO:

```php
$link = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');
```

Notice that the PDO constructor takes three arguments. The first though is a semicolon delimited list of variables. Generally, connecting to a database takes four parts:

- __The DNS location of the database server__
 - In the example above `localhost` is specified (which is what we do for local development) but that could also be an IP address or a domain name of the database location.
- __The database name__
 - Database servers can have multiple databases on them - kind of like a web server can have multiple websites. The example above says "testdb", but you'll put your real database name there.
- __The Username__
 - Databases can have multiple users, each possibly having a different set of permissions.
- __The Password__
 - The password for the specific username

> The charset: UTF-8 part is specifying what character set we want to deal with when connecting to the database. UTF-8 is the most common character set in today's computer programming because it encompass a wide variety of options.

The Object that we get back from this connection, the `$link` in this case is a connection to the database. Generally speaking, you only want to make this connection once per page load. With the page load, you might execute several queries, but you'll do them all on one connection because connecting to the database is an expensive operation.

In our example, we used `$link` but you might see other examples elsewhere that use other variables such as: 

```php
$link = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');

$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');

$connection = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');
```

Just note that it doesn't matter technically what variable name you use. And the end, all these variables are the same thing since they were created with `new PDO()`.

### PDO Errors

Connecting to PDO should always be done within a try / catch statement:

```php
try {
	$link = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');
} catch (PDOException $e) {
	die($e->getMessage());
}
```

That's because if the connection fails, a `PDOException` will be thrown and you don't want to have an un-caught exception do you?

What you choose to do with that exception is up to you. In this example we're simply quiting the PHP script with the error message from the exception.

By default, PDO isn't very descriptive with it's errors. You can tell PDO to be more verbose with it's errors by setting it's error mode to `ERRMODE_EXCEPTION`:

```php
try {
	$link = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');
	$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die($e->getMessage());
}
```

### Query

Executing an SQL Query is a two step process. First prepare a statement handler by passing an SQL statement into the `prepare` method of our link:

```php
$statement = $link->prepare('SELECT * FROM user');
```

Then execute the statement and assign the return value to a new variable (let's call it `$results` for our example):

```php
$results = $statement->execute();
```

`$results` is kind of like an array, but slightly more complicated. `$results` is actually an object which has a method called `fetch()`. The first time the `fetch` method is called, the `$results` will return the first row of results. The second time it's called, the second row results will be returned. You can call `fetch` as many times as you like, but when there are no more results to return, `fetch` will return `false`. 

This makes it ideal to use in a while loop. Often times we won't know how many results we'll get back from our SQL statement. Let's see what happens when we write this code:

```php
while ($row = $results->fetch()) {
	
}
```

Remember how `while` loops work? They keep executing until the condition is `false`. That's perfect because `$results->fetch()` will return `false` after it has no more results to return to you. So before it runs out of results, it will assign our row of results to the `$row` variable. Here's the best part, the `$row` variable is a simple associative array of our row.

Here's the whole thing in action. Let's imagine we have a user table with this data:

user_id | name | Email
--------|------|------
1|Brad|brad@aol.com
2|Daniel|daniel@msn.com
3|Kris|kris@yahoo.com