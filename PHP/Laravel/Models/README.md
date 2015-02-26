# Laravel Models

## Installation

1. Create two new folders: `app/Models` and `app/Library`
1. Place the `Model.php` file in the `app/Models` folder
1. Place the `Collection.php` file in the `app/Models` folder
1. Place the `Sql.php` file in the `app/Library` folder

Edit your PDO configurations settings by going to `/config/database/php` and adding this line to the "connections / mysql" array:

```php
'options' => [PDO::ATTR_EMULATE_PREPARES => TRUE]
```

> Without this option you can expect to get parameter binding issues especially for `UPDATE` statements

## SQL Class

The `Sql.php` class is a utility class that will help you write `INSERT` and `UPDATE` SQL statements. To use the class be sure to `use App\Library\Sql;`

### Insert

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

Should you have fields that you don't want PDO to perform binding on, like a "datetime_added" field which uses MySQL's `NOW()` function, then pass a third argument into `insert()` which is an array of "ignore" keys

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

### Update

The update statements work just like the insert ones. Simply call `Sql::update()` as follows:

```php
$data = [
		'user_id'      => 1
		'first_name'   => 'Bill'
	];

// Update the data in the "user" table
Sql::update('user', $data, "WHERE user_id = :user_id");
```

Notice the third parameter to update is an SQL "WHERE" clause. Be sure to include the parameterized value, `:user_id` in this case, in the `$data`. Also note that the data is only updating the user's name and does not have to contain each field from the database, only the ones you want updated.


## Models

Models are objects that represent your data in the database. More specifically , a model class maps to one table and abstracts some of the database interactions of that table for you. When you instantiate a model object, the object will represent exactly one row from the model's table.

To make a model, create a class that extends the base `Model` class:

```php
namespace App\Models;
use DB;
use App\Library\Sql;

class User extends Model {
	protected static $table = 'user';
	protected static $key = 'user_id';
}
```

Be sure to namespace your model to `App\Models`. Technically, this is a complete model, but if you plan to add your own methods to enhance the model and you plan to use the Database or SQL classes in those methods, then be sure to `use` the database and SQl class.

Extending the base model gives this `user` model a lot of power. All you need to do is define which `$table` and `$key` the model maps to. If your table simply uses `id` as its primary key, then you won't need to identify that property. But for the examples, let's assume your table's ID is `user_id`,

### Instatiate

To use this model, simply instantiate an object by passing the user's ID into the constructor:

```php
$user = new User(21);
```

Doing this will automatically grab user 21's information and populate the model with it. You can access database field as properties like this:

```php
$user = new User(21);
echo $user->first_name; // Outputs: William
echo $user->last_name;  // Outputs: Clinton
```

> Assuming your user table has `first_name` and `last_name` fields

Even though the `$user` variable is an object, you can echo the `$user` variable to get the output of it's data. This is probably only useful for debugging:

```php
echo $user;
```

### Inserting

While you could write your own insert logic on your own (using `Sql::insert()` from above), models make this super convenient. Start by making an empty model (one where you don't pass an ID into), and then set the properties of your model as follows:

```php
$user = new User();

$user->first_name  = 'William';
$user->last_name   = 'Clinton';
$user->email       = 'honestguy@yahoo.com';
$user->password    = 'monicalove';

$user_id = $user->save();
```

When you're done setting the properties, you can call the `save()` method as seen above to save the model to the database. The `save()` method will return to you the newly created user ID.

Or, if you prefer, you can pass an array of data directly into the model's `insert()` method. 

```php
$user = new User();

$data = [
		'first_name' => 'William',
		'last_name' => 'Clinton',
		'email' => 'honestguy@yahoo.com',
		'password' => 'monicalove',
		'datetime_added' => 'NOW()'
	];

$user_id = $user->insert($data, ['datetime_added']);
```
Technically, the `save()` method from above calls the `insert()` method internally so it doesn't matter which method you go with. Although only the `insert()` method lets you pass in the "ignore keys" array similar to calling `Sql:insert()`.

### Updating

Before when we inserted a new record by setting the properties and calling `save()`, we had an empty model. The `save()` method performs an `INSERT` when the model is empty. But in this case we have a model that represents user: 1

```php
$user = new User(1);
$user->first_name = 'Bill';
$user->password = 'sorryhillary';
$user->save();
```

Calling the `save()` method on an object that already exists will perform an update. And just as we could insert with `save()` or `insert()`, we can update with `save()` or `update()`. The following code does the same update but by passing in an array into the model's `update()` method directly:

```php
$user = new User(1);

$data = [
	'first_name'  => 'Bill',
	'password'    => 'sorryhillary'
];

$user->update($data);
```


