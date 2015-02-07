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

### Reserved words

Like many languages, SQL has reserved words. "Select", for instance, is one of them. If you use a reserved word as a table name or column name, you might get into trouble. You can use reserved words as long as you put single back ticks around them:

```sql
SELECT `count` FROM `select`
```

This is a silly example but it illustrates our point. If you want to have a table called "select" and a column called "count" (which is also a reserved word), you would have to use back ticks or you'll confuse the SQL parser. Some companies might encourage always using back ticks no matter what, but many are okay with using them only if necessary. 

### `WHERE`

By default, `SELECT` wants to grab as much information as possible. If you do `SELECT * FROM USER`, you can expect to get every record from the user table even if there are millions. The `WHERE` clause allows us to reduce the amount of data we want back by asking for more specific data. For instance:

```sql
SELECT name, email
FROM user
WHERE id = 1
```

Lets assume the above SQL statement was ran against this table:

id | name | email | password | date_added
---|------|-------|----------|----------
1|brad|brad@aol.com|cssguy|2015-01-11
2|daniel|daniel@msn.com|thegreathunter!|2015-01-19
3|kris|kris@yahoo.com|14.1rocks|2015-01-21

This says "Select all information about users where the user table's id column is 1". Note that the `name`, `email`, and `id` columns in this statement are all from the user table. The `WHERE` clause reduces the number of results we get back by saying we only want records that match the criteria given in the `WHERE` clause:

name | email
-----|------
brad |brad@aol.com

The `user` table has many more columns and rows, but we're only asking for `name` and `email` column of the row that has an `id` of `1`