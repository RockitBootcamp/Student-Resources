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

For this lesson we will focus on jQuery's AJAX methods. However, jQuery is *not required* for AJAX. Many other libraries and frameworks can handle AJAX, and in fact AJAX can be achieved with pure JavaScript as well.

AJAX stands for *Asynchronous JavaScript And XML*. It's actually an outdated term, but still in common use, so it's good to know. The updated acronym is XHR (XML HTTP Request).

AJAX, or XHR, is used to interact with a server from the client without needing to load a new page. This is how Single-Page Applications (SPA) are made possible. Some basic example interactions would be: getting user data, creating new content, updating content, and so on.

The term *asynchronous* means "things happening in parallel", or in other words "at the same time". So when we say something is *asynchronous* we are simply saying it happens while other operations could also be happening. Async operations do not *block* (or stop) other operations from running.

When you use AJAX, you send a request to a server and your application continues doing other things while waiting for the server's response.

Consider the following diagrams.

```
[------]
 [---------]
  [-----]
```

If we imagine each line above is an *asynchronous* operation, you can see how each operation can start even before the previous operation has finished.

Now let's see what *synchronous* operations would look like.

```
[-------]
         [-----------]
                      [-----]
```

Notice how now each operation doesn't start until the one before it finishes? Now look at the cumulative length of all 3 together. The total length of all 3 operations is much bigger than the total length of the 3 async operations.

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

> See [Objects I][objects] for more about JSON

### AJAX methods

jQuery provides some useful helpers for handling AJAX requests. These are just convenience methods that wrap JavaScript's builtin `XMLHttpRequest` methods.

#### `$.ajax()`

Unlike most jQuery methods you're already familiar with, these methods don't use the `$(selector).method()` syntax. Instead they are just methods directly on the jQuery variable `$`.

The main method is `$.ajax()`, which all the other helper methods extend from. This method takes a single `options` parameter as an Object. Refer to the [jQuery API docs][ajax docs] for a complete reference of the available options.

Here's a basic example:

```js
$.ajax({
  url: '/users'
});
```

With the code above, jQuery will try to make an AJAX request to the `/users` path on the current domain. By itself, this code won't actually produce any results, because we aren't doing anything with the potential response. *We actually threw away the response.* In order to process the response, we need to chain `.then()` or `.done()` and usually also `.fail()` to handle errors. Each of these methods takes a callback function.

```js
$.ajax({
  url: '/users'
}).done(function (data) {
  // if the request is successful, the `data` parameter will contain the results
});
```

Remember that by default requests are GET. If you want to make a POST request, for instance, you would need to pass in the `method` property in your options object. Also, for a POST request, you will typically be sending some data as well. For that you'll need to add the `data` property as well.

```js
$.ajax({
  url: '/users',
  method: 'POST',
  data: {
    bar: 'bar'
  }
}).done(function () {

});
```

While you shouldn't use it, you should be familiar with the deprecated syntax, because you may come across it:

```js
$.ajax({
  url: '/users',
  success: function (data) {
    // do something with `data`
  }
});
```

#### `$.get()` and `$.post()`

This method is a more simplified shortcut for making a GET request. There is also a `$.post()` method. They are symantically the same, so the following information applies to both.

```js
$.get('/users').done(function (data) {
  // do something with `data
});
```

And again, the `.done()`, `.always()`, and `fail()` methods are also available, just like with `$.ajax()`.

```js
$.get('/users').fail(function () {
  console.log('Oops, we got an error!');
});
```

Typically you want at least `done` and `fail` to handle success and failure conditions.

The deprecated syntax for `$.get()` and `$.post()` is to pass success and failure callbacks are arguments.

```js
$.get('/users', function success(data) {

}, function failure(err) {

});
```

> Note that the functions do not need to be named, this was done in the example to illustrate which callback is which.

#### `.getJSON()`

This method is just a shorthand for `$.ajax({ dataType: 'json' })`. It works the same as `$.ajax()` and the other shorthand methods, with the same chainable methods.

```js
$.getJSON('/users').done(function (data) {
  // do something with `data`
});
```

The code above is equivalent to:

```js
$.ajax({
  url: '/users',
  dataType: 'json',
}).done(function (data) {
  // do something with `data`
});
```

[ajax docs]: http://api.jquery.com/jQuery.ajax/ "jQuery.ajax() documentation"
[objects]: ../../JavaScript/05%20Objects%20I
