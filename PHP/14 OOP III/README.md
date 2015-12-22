# Lesson 14: OOP III

Identifier   | Objectives
-------------|------------
PHP: 14.1    | Explain Static Members
PHP: 14.2    | Call static members from outside class
             | &bull; `ClassName::foo();`
             | &bull; `ClassName::$bar;`
PHP: 14.3    | Call static members from inside classes
             | &bull; `self::foo()`
             | &bull; `self::$bar;`

## Resources
- [Static Objects](http://www.zentut.com/php-tutorial/php-static/)


## Example static usages

### Examples from Laravel projects
```php
  // inside of the routes.php file
  Route::get('some/path', function() { return "hello"; });
  
  // inside of a Controller class
  $first_name = Request::input('first_name');
  
  // inside of a Model class
  $rows = DB::select('select * from monsters');
```

### Examples with the User model from the User CRUD project
```php
  // get user by id (static)
  $user = User::get($id)     // result is a User instance
  
  // get all users (static)
  $users = User::getAll();   // result is array of User instances

  // delete user (static)
  User::delete(4);           // delete record with id=4 from the db

  // create new user (instance)
  $user = new User();        // create new User instance.
  $user->first_name = 'fred';
  $user->insert();           // create a new record in the db

  // update user (instance)
  $user = User::get($id);    // get record from db as a User instance
  $user->relationship_status = 'it\'s complicated';
  $user->update();           // update an existing record in the db

  // delete user (instance)
  $user = User::get(17);      // get record from db as a User instance
  $user->delete();           // delete record with id=17 from the db
```
### Question: after delete() of id=17 above, what is the current state of the $user variable?
- is it not null?
- does it still have its property values
- what will happen if I make either of these calls?
  - $user->update()
  - $user->insert()

you could take your existing user-crud project and implement your delete method the "instance way" and see...
