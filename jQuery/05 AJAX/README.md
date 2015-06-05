# Lesson 16: AJAX

Identifier   | Objectives
-------------|------------
JS: 14.1     | Explain Asynchronous Code
JS: 14.2     | Explain JSON
JS: 14.3     | Demonstrate jQuery's `$.ajax()` method
             | &bull; With Caching Settings
             | &bull; HTTP Method
             | &bull; Response Type
             | &bull; Callbacks for `success` and `error`
JS: 14.4     | Demonstrate a successful response callback
JS: 14.5     | Demonstrate alternative ways to use AJAX in jQuery:
             | &bull; `$.get()`
             | &bull; `$.post()`
             | &bull; `$.getJSON()`

## Resources

- [JSON Specification](http://www.json.org/)
- __jQuery.com__ [Ajax](http://learn.jquery.com/ajax/)
- [jQuery AJAX docs][ajax docs]
- __W3 Schools__ [ajax()](http://www.w3schools.com/jquery/ajax_ajax.asp)
- __W3 Schools__ [AJAX Methods](http://www.w3schools.com/jquery/jquery_ref_ajax.asp)

## Pre Study

### AJAX

AJAX stands for *Asynchronous JavaScript And XML*. It's actually an outdated term, but still in common use, so it's good to know. The updated acronym is XHR (XML HTTP Request). 

AJAX, or XHR, is used to interact with a server from the client without needing to load a new page. This is how Single-Page Applications are made possible. Some basic example interactions would be: getting user data, creating new content, updating content, and so on.

### JSON

JSON stands for JavaScript Object Notation. It's used to share data between machines (i.e. client and servers). An example of JSON:

```json
{
  "id": 1,
  "username": "batman",
  "firstName": "Bruce",
  "lastName": "Wayne"
}
```

Today, AJAX will typically work with JSON rather than XML, despite the name (AJAX/XHR).

### AJAX methods

jQuery provides some useful helpers for handling AJAX requests. These are just convenience methods that wrap JavaScript's builtin `XMLHttpRequest` methods.

#### `$.ajax()`

Unlike most jQuery methods you're already familiar with, these methods don't use the `$(selector).method()` syntax. Instead they are just methods directly on the jQuery variable `$`.

The main method is `$.ajax()`, which all the other helper methods extend from. This method takes a single `options` parameter as an Object. Refer to the [jQuery API docs][ajax docs] for a complete reference of the available options.

Here's a basic example:

```js
$.ajax({
  url: '/foo'
});
```

With the code above, jQuery will try to make an AJAX request to the `/foo` path on the current domain. By itself, this code won't actually produce any results, because we aren't doing anything with the potential response. For that, we need to chain `.then()` or `.done()` and usually also `.fail()` to handle errors. Each of these methods takes a callback function.

```js
$.ajax({
  url: '/foo'
}).then(function (data) {
  // if the request is successful, the `data` parameter will contain the results
});
```

Remember that by default requests are GET. If you want to make a POST request, for instance, you would need to pass in the `method` property in your options object.

```js
$.ajax({
  url: '/foo',
  method: 'POST'
}).then(function () {

});
```

While you shouldn't use it, you should be familiar with the deprecated syntax, because you may come across it:

```js
$.ajax({
  url: '/foo',
  success: function (data) {
    // do something with `data`
  }
});
```

#### `$.get()`

This method is a more simplified shortcut for making a GET request. There is also a `$.post()` method. They are symantically the same, so the following information applies to both.

```js
$.get('/foo').then(function (data) {
  // do something with `data
});
```

And again, the `.done()`, `.always()`, and `fail()` methods are also available, just like `$.ajax()`.

```js
$.get('/foo').fail(function () {
  console.log('Oops, we got an error!');
});
```

Typically you want at least `then` and `fail` to handle success and failure conditions.

The deprecated syntax for `$.get()` and `$.post()` is to pass success and failure callbacks are arguments.

```js
$.get('/foo', function success(data) {
  
}, function failure(err) {
  
});
```

> Note that the functions do not need to be named, this was done in the example to illustrate which callback is which.

#### `.getJSON()`

This method is just a shorthand for `$.ajax({ dataType: 'json' })`. It works the same as `$.ajax()` and the other shorthand methods, with the same chainable methods. 

```js
$.getJSON('/foo').then(function (data) {
  // do something with `data`
});
```

The code above is equivalent to:

```js
$.ajax({
  url: '/foo',
  dataType: 'json',
}).then(function (data) {
  // do something with `data`
});
```

[ajax docs]: http://api.jquery.com/jQuery.ajax/ "jQuery.ajax() documentation"
