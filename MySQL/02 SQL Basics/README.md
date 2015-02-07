# Lesson 2: SQL Basics

Identifier   | Objectives
-------------|------------
MySQL: 2.1   | Demonstrate use of MySQL's command line client
MySQL: 2.2   | Use built-in functions:
             | &bull; `NOW()`
             | &bull; `CURDATE()`
             | &bull; `SHA1()`
             | &bull; `PASSWORD()`
MySQL: 2.3   | Use `CREATE TABLE` syntax
MySQL: 2.4   | Use `INSERT` syntax
MySQL: 2.5   | Use `SELECT` syntax
MySQL: 2.6   | Use `WHERE` syntax
MySQL: 2.7   | Use `UPDATE` syntax
MySQL: 2.7   | Use `DELETE` syntax

## Resources
- __W3 Schools__ [Create MySQL Tables](http://www.w3schools.com/php/php_mysql_create_table.asp)
- __W3 Schools__ [Insert Data](http://www.w3schools.com/php/php_mysql_insert.asp)
- __W3 Schools__ [Select Data](http://www.w3schools.com/php/php_mysql_select.asp)
- __W3 Schools__ [Update Data](http://www.w3schools.com/php/php_mysql_update.asp)
- __W3 Schools__ [Delete Data](http://www.w3schools.com/php/php_mysql_delete.asp)
- [MySQL 101 - Retrieving data: SELECT and JOIN](http://blogs.sakienvirotech.com/index.php/random/2011/09/09/mysql-101-retrieving-data-select)

## Extra Study

SQL stands for Structured Query Language. SQL is generally used to query, or "ask" the database a question and to get a response. For instance, you can query the database for "Give me all the users in the database". Written as SQL this would look like:

```sql
SELECT * FROM user;
```

This is called a "SELECT" statement. It's used to get information out of the database. Other statements include:

- `CREATE TABLE`: To create a new database table
- `INSERT`: To insert row(s) into a database table
- `UPDATE`: to update row(s) of a database table
- `DELETE`: to delete row(s) of a database table

First, let's break down the simple `SELECT` statement from above. In it's most simple form, you can select a mere function like this:

```sql
SELECT NOW();
```

> Output: 2015-02-07 12:25:36

Doing `SELECT` is just saying "I want results back". The `NOW()` function gets the database's current time. Similarly, you can do:

```sql
SELECT PASSWORD('abc123');
```

> Output: *6691484EA6B50DDDE1926A220DA01FA9E575C18A

This is MySQL's way of encrypting "abc123" so we can safely store it in the database.

Doing selects like this is cool for learning, but not necessarily practical real contexts. Typically when we want to select something, it comes from a table. Selecting from a table requires us to say what data we want back and what table we want it from:

```sql
SELECT * FROM user;
```

The `*` astersik in this case is a wildcard that says "Select all the fields". Then notice the `FROM` keyword followed by the table name `user`. So in a sense, a basic select statement looks like this:

SELECT [what] FROM [where]

While it's not required, generally developers type SQL keywords in all caps. In contrast, we generally use all lowercase (with hyphens for spaces) for table and column names. This makes it easier to read SQL statements:

```sql
SELECT name, email FROM user;
```

In this case, we're not using the wildcard for what we want back, but rather specifying column names with commas between them. Note that these column names must be in the user table or this will cause errors.

### Beautify

Sometimes `SELECT` statements can get long with regards to what columns are being selected. It's very common to put the `FROM` clause on its own line to "beautify" the statement

```sql
SELECT id, name, email, password, date_added, age
FROM user;
```

Another way to do it is like this:

```sql
SELECT
	id,
	name,
	email,
	password,
	date_added,
	age
FROM user;
```