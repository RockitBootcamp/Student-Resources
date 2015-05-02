# Lesson 6: Callback and Anonymous Functions

Identifier   | Objectives
-------------|------------
JS: 6.1      | Explain Callback Functions
JS: 6.2      | Explain Anonymous Functions
JS: 6.3      | Demonstrate a callback function with
             | &bull; `setTimeout()`
             | &bull; `setInterval()`

## Resources

- [Callback Functions in JavaScript](http://www.impressivewebs.com/callback-functions-javascript/)
- __W3 Schools__ [setTimeout()](http://www.w3schools.com/jsref/met_win_settimeout.asp)
- __W3 Schools__ [setInterval()](http://www.w3schools.com/jsref/met_win_setinterval.asp)

## Extra Study

### Callback Functions

Keep in mind that anything that can be assigned to a variable, can be passed into a function. In JavaScript we can assign functions to variables like this:

```js
// This is a function expression
var getName = function() {
    return 'Brad';
}
```

Since `getName` is a variable, we can pass it into other functions like this:

```js
var greetings = function(n) {
    console.log(n());
}

greetings(getName);
```

The last line of code where we call `greetings()` is where we are passing the variable `getName`. Notice we are not calling `getName()` because calling (or invoking) means we're using parenthesis. So it's not like we're calling getName and having the value which is returned passed into `greetings()`. We're actually passing the reference to the function itself. 

Then the `greentings` function assignes that argument to the `n` variable. Now we choose when we want to invoke the `n()` which is essentially the same as invoking `getName()`. In this case, `n` is a callback function. A callback function is when a function is passed into another function, to be called later.

### Anonymous Functions

Annonymous functions are functions that get passed into another function (as an argument), but without using variable names. Here is the same code as above but without the `getName` variable:

```js
var greetings = function(n) {
    console.log(n());
}

greetings(function() {
    return 'Brad';
});
```




