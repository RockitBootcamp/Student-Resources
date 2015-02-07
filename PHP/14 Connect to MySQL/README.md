# Lesson 14: Connect to MySQL

Identifier   | Objectives
-------------|------------
PHP: 14.1    | Explain connecting to a database using PDO
PHP: 14.2    | Explain catching PDO errors
             | &bull; With adding `ERRMODE_EXCEPTION` to the connection
PHP: 14.3    | Demonstrate executing an SQL query in PDO
PHP: 14.4    | Demonstrate iterating over results returned from PDO with PHP
PHP: 14.5    | Demonstrate prepared statements
             | &bull; By passing an array into `execute()`
             | &bull; By calling `bindValue()` for each value

## Resources
- [Why you should be using PDO](https://code.tutsplus.com/tutorials/why-you-should-be-using-phps-pdo-for-database-access--net-12059)
- [PHP Database access, are you doing it correctly?](https://code.tutsplus.com/tutorials/php-database-access-are-you-doing-it-correctly--net-25338)

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

Just note that it doesn't matter technically what variable name you use. In the end, all these variables are the same thing since they were created with `new PDO()`.

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
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die($e->getMessage());
}
```

### Executing SQL

For the next few examples, lets assume a database table that looks like this:

id | name | email
---|------|------
1|Brad|brad@aol.com
2|Daniel|daniel@msn.com
3|Kris|kris@yahoo.com

Executing an SQL Query takes some steps. First prepare a statement handler by passing an SQL statement into the `prepare` method of our link:

```php
$statement = $link->prepare('SELECT * FROM user');
```

Then execute the statement

```php
$statement->execute();
```

Then fetch all of the data from the executed query and assign it to our `$results` variable.

```php
$results = $statement->fetchAll();
```

The `$results` variable at this point is an array of associative arrays. It's basically like this:

```php
$results = [
	['id' => 1, name' => 'Brad', 'email' => 'brad@aol.com'],
	['id' => 2, name' => 'Daniel', 'email' => 'daniel@msn.com'],
	['id' => 3, name' => 'Kris', 'email' => 'kris@yahoo.com']
]
```

We already know how to work with arrays right? So now we can loop over the array to get the contents with a `foreach` loop:

```php
foreach ($result as $row) {
	echo $row['name'];	
}
```

Here's the whole thing in action. Assuming we already have a `$link` established, let's query the database for all user's names and output them to the browser:

```php
try {

	// Make a PDO statement
	$statement = $link->prepare('SELECT * FROM user');

	// Execute the statement
	$statement->execute();

} catch (PDOException $e) {
	die($e->getMessage());
}

// Loop over the results
$results = $statement->fetchAll();
foreach ($result as $row) {
	echo $row['name'];	
}
```

> The output would be `Brad, Daniel, Kris,`

Notice that the `prepare` and `execute` code must also be within a try / catch because they could throw a `PDOException`. It doesn't have to be the same try / catch statement as the connection, as long as the `$link` variable is in our scope.

The `while` loop will iterate exactly three times because our SQL statement found three results. In every iteration, the `$row` variable is filled with an associative array representing each row in our results. The first row that was returned was the record for "Brad". Because we selected everything in that row (with the `*` in SQL), we will have each column of the database as a key in our `$row` array.

There's one thing we didn't tell you before because we didn't want to confuse you at that point. Normally you would have to tell each statement that you want to receive it's results in associative array format. That's tedious if you always want associative array data back. So with our connection, we'll need to do one more thing:

```php
try {
	$link = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	die($e->getMessage());
}
```

### Prepared Statements with `bindValue()`

In the above example, our SQL statement was pretty strait-forward. We were simply selecting all users from the `user` table. More common is to select very specific records, for instance:

```sql
SELECT *
FROM user
WHERE user_id = 5
```

This SQL statement specifically selects user 5. Okay, it says select all the users that match `user_id` of 5, but as you probably guessed, we'll be setting up our database so `user_id` is unique and only one user will have 5 as their `user_id`. So in actuality, this selects the one and only: user 5.

Let's do this in PDO and make the statement more dynamic:

```php
try {

	// Make a PDO statement
	$statement = $link->prepare('SELECT * FROM user WHERE user_id = ' . $_GET['user_id']);

	// Execute the statement
	$results = $statement->execute();

} catch (PDOException $e) {
	die($e->getMessage());
}

// Get the row
$row = $results->fetch();
```

Did you notice that instead of typing `5` we're dynamically creating our SQL statement from the URL's GET variables? This is actually a very cool concept if you think about it. We can make "profile" page for users and have one PHP page create the profile of any user simply by passing in the `user_id` into the URL.

There is one caveat however. Dynamically building SQL statements in this way creates the perfect opportunity for hackers to mess with our database. We won't go into the details, but the code above creates an attack vector called an SQL Injection Attack. in other words, the hacker can type anything they want in the URL into the `user_id` GET variable and it will end up in our SQL statement. Again, without going into the details, just know that this is very very dangerous. What we need is a "prepared" statement. In other words, we need PDO to prepare the SQL statement and it's dynamic qualities for us in a safe way.

Let's do this now in the code:

```php
try {

	// Make a PDO statement
	$statement = $link->prepare('SELECT * FROM user WHERE user_id = :id');

	// Bind Parameters
	$statement->bindValue(':id', $_GET['user_id']);

	// Execute the statement
	$results = $statement->execute();

} catch (PDOException $e) {
	die($e->getMessage());
}

// Get the row
$row = $results->fetch();
```

Now we're safe. Adding `:id` to our SQL statement creates a "placeholder" which allows us to use `bindValue()` to safely bind the PHP variable to the SQL statement. If the GET variable for `user_id` were `5`, the ultimate SQL statement here would be:

```sql
SELECT *
FROM user
WHERE user_id = 5
```

Note that there is nothing special about the term `:id`. You can make any variable name you want as long as it starts with `:`. You can also bind as many variables as necessary. Let's do it again so you can see the same concept with different SQL:


```php
// Make a PDO statement
$statement = $link->prepare('SELECT * FROM user WHERE name = :name AND email = :email');

// Bind Parameters
$statement->bindValue(':name', $_GET['name']);
$statement->bindValue(':email', $_GET['email']);
```

#### One Result

On a side note, perhaps you noticed that `$row = $results->fetch()` was not in a while loop in our recent examples? Well, if you're anticipating only one result (because we only want to get user 5), then we don't need the loop. The loop was just there to ask `fetch` to give us more results after the first one.

### Prepared Statements with Arrays

Often times we'll have many variables to bind and using `bindValue` can be tedious. Let's assume we're making an insert statement like this:

```sql
INSERT INTO user (user_id, name, email) VALUES (4, 'Brig', 'brig@rockit.com')
```

This is the end-goal SQL statement we want. But in PHP we'll need to make it dynamically which means we'll need to bind parameters for the values. But this time let's use an associative array instead of using `bindValue()`:

```php
try {

	// Make a PDO statement
	$statement = $link->prepare('INSERT INTO user (user_id, name, email) VALUES (:id, :name, :email)');

	// SQl Values
	$sql_values = [
		':id' => 4,
		':name' => 'Brig',
		':email' => 'brig@rockit.com'
	];
	
	// Execute the statement
	$results = $statement->execute($sql_values);

} catch (PDOException $e) {
	die($e->getMessage());
}
```

It turns out that you can pass an associative array into the `execute` method which will look for the keys to match the bound parameters of the SQL statements.