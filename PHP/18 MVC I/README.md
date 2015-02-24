# Lesson 18: MVC I

Identifier   | Objectives
-------------|------------
PHP: 18.1    | Explain Routers
PHP: 18.1    | Describe a Controller
PHP: 18.1    | Explain Views
PHP: 18.1    | Explain relationship between Views and Template

## Resources
[Laravel Routing](http://laravel.com/docs/4.2/routing)

###Extra Study
####Routers
- URL patterns, known as routes, let you map to specific files in a website by passing in parameters. First is where to navigate - which file or controller you want to go to, then your action - what you want to happen when you go to the file or controller. 
```php
Route::get('/', function()
{
    return 'Hello World';
});
//or
Route::post('foo/bar', function()
{   
    return 'Hello World';
});
```
- We can use placeholders, known as URL parameters, as well by enclosing them in curly braces `{}`
```php
Route::get('user/{id}', function($id)
{
  return 'User ' . $id;
});
//or
Route::get('browse/{state}/{city}', function($state, $city)
{
  //some action here
});
```
- Regular expression route constraints 
```php
Route::post('user/{id}', function($id){
    //some action
});->where('id', '[0-9]+');
```
