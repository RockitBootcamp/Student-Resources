# JavaScript Objectives

## Basic Concepts
Identifier   | Objectives
-------------|------------
JS: 1.1      | Explain how to use the script tag
             | &bull; For Embedded JavaScript
             | &bull; For External JavaScript
JS: 1.1      | Explain how JavaScript loads in serial
JS: 1.1      | Demonstrate definition of local and global variables
             | &bull; Assignment Operator `=`
JS: 1.3      | Demonstrate use of strings
             | &bull; Enclosed in double or single quotes
JS: 1.4      | Demonstrate use of echo function
JS: 1.5      | Use JavaScript Comments
             | &bull; One-line
             | &bull; Multi-line

## Variable Types
Identifier   | Objectives
-------------|------------
JS: 2.1      | Define primitive data types
             | &bull; Number
             | &bull; Boolean
             | &bull; String
JS: 2.2      | Define special data types
             | &bull; Null
             | &bull; Undefined
JS: 2.3      | Explain Type Casting
             | &bull; Implicit Type Casting
             | &bull; Explicit Type Casting

## Basic Operators
Identifier   | Objectives
-------------|------------
JS: 3.1      | Demonstrate Arithmetic Operators
             | &bull; `+` Addition
             | &bull; `-` Subtraction
             | &bull; `*` Multiplication
             | &bull; `/` Division
JS: 3.2      | Demonstrate String Operators
             | &bull; `+` Concatenation
JS: 3.3      | Demonstrate Increment / Decrement Operators
             | &bull; `+=`
             | &bull; `-=`
             | &bull; `*=`

## Basic Logic
Identifier   | Objectives
-------------|------------
JS: 4.1      | Demonstrate `if` and `if else` statements
JS: 4.2      | Demonstrate use of logic operators
             | &bull; `&&` AND operator
             | &bull; `||` OR operator
JS: 4.3      |
             | &bull; Demonstrate use of comparison operators
             | &bull; `==` Equal value
             | &bull; `===` Equal value and type
             | &bull; `!=` Not equal value
             | &bull; `<>` Not equal value
             | &bull; `!==` Not equal value or type
             | &bull; `>` Greater than
             | &bull; `<` Less than
             | &bull; `>=` Greater than or equal to
             | &bull; `<=` Less than or equal to

## Built-in Methods and Properties
Identifier   | Objectives
-------------|------------
JS: 5.1      | Demonstrate basic function usage syntax
             | &bull; Function Name
             | &bull; Arguments
             | &bull; Return Value
JS: 5.2      | Demonstrate using function calls as arguments
             | &bull; `x = foo(bar());`
JS: 5.3      | Use basic JavaScript string functions
             | &bull; `.length`
             | &bull; `.charAt()`
             | &bull; `.toLowerCase()`
             | &bull; `.toUpperCase()`
             | &bull; `.substr()`

## DOM and Document Methods
Identifier   | Objectives
-------------|------------
JS: 6.1      | Explain the concept of objects
JS: 6.2      | Explain the `document` object
JS: 6.3      | Explain the DOM (Document Object Model)
JS: 6.4      | Demonstrate `document` methods to fetch `elements`
             | &bull; `var e = document.getElementById(...);`
             | &bull; `var e = document.getElementsByTagName(...);`
             | &bull; `var e = document.getElementsByClassName(...);`
             | &bull; `var e = document.querySelector(...);`
             | &bull; `var e = document.querySelectorAll(...);`
JS: 6.5      | Demonstrate `element` methods and properties
             | &bull; `e.innerHTML = 'foo';`
             | &bull; `e.setAttribute('class', 'bar');`

## Arrays
Identifier   | Objectives
-------------|------------
JS: 5.1      | Demonstrate array creation syntax
             | &bull; `var x = new Array('Joe', 'Smith');`
             | &bull; `var x = ['Joe', 'Smith'];`
JS: 5.1      | Demonstrate pushing values to end of array
             | &bull; `x.push('value');`
JS: 5.1      | Explain Indexed Arrays
JS: 5.1      | Demonstrate accessing values of arrays
             | &bull; `var value = x[0];`
JS: 5.1      | Use basic array methods and properties
             | &bull; `.length`
             | &bull; `.indexOf()`
             | &bull; `.join()`
             | &bull; `.pop()`

## Loops
Identifier   | Objectives
-------------|------------
JS: 6.1      | Demonstrate `while` loop
JS: 6.2      | Demonstrate `for` loop
JS: 6.3      | Demonstrate `for-in` loop
JS: 6.4      | Demonstrate `break` and `continue` statements

## Object Literals
Identifier   | Objectives
-------------|------------
JS: 7.1      | Demonstrate Object Literal Creation Syntax
             | &bull; `var x = {};` Empty Object
             | &bull; `var x = {'firstName': 'Joe', 'lastName': 'Smith'};`
JS: 7.2      | Demonstrate adding new members to objects
             | &bull; `x.age = 50;` Dot Syntax
             | &bull; `x['age'] = 50;` Square Bracket Syntax
JS: 7.3      | Demonstrate accessing values of object
             | &bull; `var value = x.age` Dot Syntax
             | &bull; `var value = x['age'];` Square Bracket Syntax
JS: 7.4      | Explain JSON        

## User Defined Functions
Identifier   | Objectives
-------------|------------
JS: 8.1      | Explain the purpose of making your own functions:
             | &bull; Code reuse
             | &bull; Abstraction of ideas
             | &bull; Making shorter chunks of code
JS: 8.2      | Demonstrate proper function creation syntax
             | &bull; `function foo() {}` Function Declaration
             | &bull; `var foo = new function() {}` Function Expression
JS: 8.3      | Explain and demonstrate the return statement
             | &bull; No return means "void"
JS: 8.4      | Explain function "hoisting"         

## Callback and Anonymous Functions
Identifier   | Objectives
-------------|------------
JS: 9.1      | Explain Callback Functions
JS: 9.2      | Explain Anonymous Functions
JS: 9.3      | Demonstrate a callback function with
             | &bull; `setTimeout()`
             | &bull; `setInterval()`

## jQuery Basics
Identifier   | Objectives
-------------|------------
JS: 10.1     | Demonstrate using jQuery Syntax
             | &bull; `jQuery();`
             | &bull; `$();`
JS: 10.2     | Demonstrate Method Calling and Chaining Syntax 
             | &bull; `$('div').remove();`
             | &bull; `$('div').append('foo').addClass('bar');`
JS: 10.3     | Demonstrate common jQuery Methods:
             | &bull; `.append()`
             | &bull; `.appendTo()`
             | &bull; `.html()`
             | &bull; `.text()`
             | &bull; `.val()`
             | &bull; `.attr()`
             | &bull; `.remove()`
             | &bull; `.addClass()`
             | &bull; `.removeClass()`
             | &bull; `.parent()`
             | &bull; `.parents()`
             | &bull; `.find()`
JS: 10.4     | Demonstrate Document Readiness with
             | &bull; `$(document).ready(function() { ... });`
             | &bull; `$(function() { ... });`

## jQuery Events
Identifier   | Objectives
-------------|------------
JS: 11.1     | Explain how JavaScript/jQuery events work and the these common event types:
             | &bull; `click`
             | &bull; `mouseOver`
             | &bull; `keyDown`
             | &bull; `keyUp`
             | &bull; `focus`
             | &bull; `blur`
             | &bull; `submit`
JS: 11.2     | Demonstrate a jQuery events with `.on()` method and with event's specific method:
             | &bull; `$('button').on('click', foo);` (with `on` method)
             | &bull; `$('button).click(foo);` (with event method)
JS: 11.3     | Explain the `$(this)` keyword in the context of an event callback function

## Delegated Events
Identifier   | Objectives
-------------|------------
JS: 12.1     | Explain Delegated Events
JS: 12.2     | Demonstrate using the `.on()` method with delegated events
             | &bull; `$('body').on('click', 'button', foo);`

## Templating with Handlebars
Identifier   | Objectives
-------------|------------
JS: 13.1     | Demonstrate Handlebars Template Syntax
JS: 13.2     | Demonstrate use of `<script>` tag to house template markup
JS: 13.3     | Demonstrate compiling a source template to receive the `template()` function
JS: 13.4     | Demonstrate use of `template()` function

## AJAX
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