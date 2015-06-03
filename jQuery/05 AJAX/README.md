# Lesson 16: AJAX

Identifier   | Objectives
-------------|------------
JS: 14.1     | Explain Asynchronous Code
JS: 14.2     | Demonstrate jQuery's `$.ajax()` method
             | &bull; With Caching Settings
             | &bull; HTTP Type
             | &bull; Response Type
             | &bull; Callbacks for `success` and `error`
JS: 14.3     | Demonstrate a successful response callback
JS: 14.4     | Demonstrate alternative ways to use AJAX in jQuery:
             | &bull; `$.get()`
             | &bull; `$.post()`
             | &bull; `$.getJSON()`

## Resources

- [JSON Specification](http://www.json.org/)
- __jQuery.com__ [Ajax](http://learn.jquery.com/ajax/)
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
