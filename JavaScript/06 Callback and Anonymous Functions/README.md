# Lesson 6: Callback and Anonymous Functions

Identifier   | Objectives
-------------|------------
JS: 6.1      | Explain Functions as Callbacks
JS: 6.2      | Explain Anonymous Functions
JS: 6.3      | Demonstrate a callback function with
             | &bull; `setTimeout()`
             | &bull; `setInterval()`

## Resources

- [Callback Functions in JavaScript](http://www.impressivewebs.com/callback-functions-javascript/)
- __W3 Schools__ [setTimeout()](http://www.w3schools.com/jsref/met_win_settimeout.asp)
- __W3 Schools__ [setInterval()](http://www.w3schools.com/jsref/met_win_setinterval.asp)

## Pre Study

### Functions as Callbacks (i.e. Continuation Passing Style)

A callback function is a function that is passed into another function to be called later as a means of control flow. This is also known as *Continuation Passing Style*, because in order to continue the operation control is being passed to the callback function (often with some values).

Keep in mind that anything that can be assigned to a variable, can be passed into a function. In JavaScript we can assign functions to variables like this:

```js
// This is a function expression
var getName = function() {
  return 'Brad';
}
```

Since `getName` is a variable, we can pass it into other functions like this:

```js
var greetings = function(callback) {
  // get some values to pass to callback
  callback(myValues);
}

greetings(getName);
```

The last line of code where we call `greetings()` is where we are passing the variable `getName`. Notice we are not calling `getName()` because using parenthesis means we're calling (invoking) the function. So we're not trying to get the return value of `getName`, we're actually passing the reference to the function itself.

Then the `greetings` function receives that argument as the `callback` parameter. Now we choose when we want to invoke `callback()` which is essentially the same as invoking `getName()`. In this case, `callback` is a callback function. 

### Anonymous Functions

Annonymous functions are functions that have no name. Here is the same code as above but without the `getName` parameter:

```js
var greetings = function(n) {
  console.log(n());
}

greetings(function() {
  return 'Brad';
});
```
