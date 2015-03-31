# Setting up authentication in Laravel
This readme will describe how to setup authentication in a new laravel5 installation. Including:
- database setup
- user table creation
- authentication configuration
- default auth controllers and views

## Initial Setup
- setup .env file to point to database

## User table creation
Since laravel authentication uses Eloquent ORM by default, there are two columns that must be included in the database table that is used for user authentication. These fields are:
- remember_token varchar(255), (must be >= 100 chars)
- created_date datetime,
- updated_date datetime
 
The default configuration for authentication uses these fields:
- name
- password
- email

Additionally, the default table name is "users". I could have used all the defaults and there would be *zero* changes to make, but I think it is good to know where to make the changes if you need, so I am going to call my table "user" and use these fields:
- first_name
- last_name
- password
- email

The (my)sql for the table is:

```sql
create table user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),    
    remember_token varchar(255),
    created_at datetime,
    updated_at datetime
);
```
notice the last three fields added are those required for the authorization

## Initial Auth Configuration
There are three files that must be updated to accomodate my changes to the default:

in config/auth.php change:
```php
	'table' => 'users',
// to your table name 
	'table' => 'user',
```

in app/User.php change:
```php
  protected $table = 'users';
  // to your table name
  protected $table = 'user';
  
  // and
  protected $fillable = ['name', 'email', 'password'];
  // to your fields being used
   protected $fillable = ['first_name', 'last_name', 'email', 'password'];
```

in app/Services/Registrar.php change:
```php
			'email' => 'required|email|max:255|unique:users',
			// to your table name on the end
			'email' => 'required|email|max:255|unique:user',
```

## Test the Default Controllers and Views
By default the following routes are built in and provide full registration and login functionality:
- /auth/login
- /auth/register

## Default Views and Controller
There are several views and two controllers that are available for use, modification, or as models for creating your own. The views live under resources/views/auth and the controllers live under app/Http/Controllers/Auth. The AuthController utilizes a "trait" called AuthenticatesAndRegistersUsers.php which lives at vendor/laravel/framework/src/Illuminate/Foundation/Auth/AuthenticatesAndRegistersUsers.php (from here on known as AARU.php). You'll need to crack this guy open if you want to really use or understand the AuthController.

NOTE: while it might be reasonable to change and use the views and the AuthController, you *really* shouldn't change AARU.php. If you want to override what it does, do so by overriding its methods or properties in AuthController or in your own subclass of AuthController.
