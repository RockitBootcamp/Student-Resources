# Sql Class

## Installation

1. Create a new folder: `app/Library`
1. Place the `Sql.php` file in the `app/Library` folder

Edit your PDO configurations settings by going to `/config/database.php` and adding this line to the "connections => mysql" array:

```php
'options' => [PDO::ATTR_EMULATE_PREPARES => TRUE]
```

> Without this option you can expect to get parameter binding issues especially for `UPDATE` statements

The `Sql.php` class is a utility class that will help you write `INSERT` and `UPDATE` SQL statements. To use the class be sure to `use App\Library\Sql;` where you plan on calling the methods of `Sql`.

## Insert Statements

The following code will perform an `INSERT` statement and will return to you the ID that was created:

```php
$data = [
		'first_name'   => 'William',
		'last_name'    => 'Clinton',
		'email'        => 'honestguy@yahoo.com',
		'password'     => 'monicalove'
	];

// Insert the data into the "user" table
$id = Sql::insert('user', $data);
```

Passing a third argument into `insert()` will let the insert statement know which fields to "ignore" for the purposes of binding parameters:

```php
$data = [
		'first_name'      => 'William',
		'last_name'       => 'Clinton',
		'email'           => 'honestguy@yahoo.com',
		'password'        => 'monicalove',
		'datetime_added'  => 'NOW()'
	];

// Insert the data into the "user" table
$id = Sql::insert('user', $data, ['datetime_added']);
```

In the above example, we want the `datetime_added` column of our table to get MySQL's `NOW()` function applied to it. If we didn't pass the ignore array as the third argument, it would be like saying we wanted the string of "NOW()" to be inserted.

> Note that in both examples above, we didn't have to pass an ID into `insert()` because we're assuming this table has an automatic incrementing ID.

## Update Statements

The update statements work just like the insert one. Simply call `Sql::update()` as follows:

```php
$data = [
		'user_id'      => 1,
		'first_name'   => 'Bill'
	];

// Update the data in the "user" table
Sql::update('user', $data, "WHERE user_id = :user_id");
```

Notice the third parameter to update is an SQL "WHERE" clause. Be sure to include the parameterized value (`:user_id` in this case) in the `$data`. Also note that the data is only updating the user's name and does not have to contain each field from the database, only the ones you want updated.