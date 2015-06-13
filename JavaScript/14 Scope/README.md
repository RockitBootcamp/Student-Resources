# Lesson 14: Scope

Identifier   | Objectives
-------------|------------
JS: 14.1     | Explain lexical scope and closures
JS: 14.2     | Explain how scope relates to functions
JS: 14.3     | Explain the `this` variable and how it relates to scope
JS: 14.4     | Demonstrate how to alias `this` to an alternative variable for nested functions
JS: 14.5     | Demonstrate IIFE (Immediately-Invoking Function Expressions)
             | &bull; How does it help solve scope issues
             | &bull; How can it be used to safely guard the jQuery variable: `$`
             | &bull; How can it be used to safely guard `document` and `undefined`


## Resources

- [Immediately-Invoked Function Expression (IIFE)][iife]
- [Closures][closures]

## Pre Study

### Lexical scope

First of all, the term "scope" in this context refers to the context of a closure. A closure is the combination of a function and the environment in which it was created. The environment contains any variables that were in scope at the time the closure was created.

Lexical scope refers to the fact that functions can be defined inside of other functions and have access to variables and functions defined in the outer function. However, they are not accessible from outside of this scope.

Consider the following:

```js
function foo() {
  var beep = 'boop';

  function bar() {
    console.log(beep);
  }

  bar();
}

foo(); // => "boop" is logged
bar(); // => ReferenceError: bar is not defined
```

In this example, the function `bar` has access to the `beep` variable because they are in the same scope. Here `bar` is being executed from within `foo`, so you expect it to be able to access `beep`.

However, it gets tricky when you create a closure for this.

```js
function foo() {
  var beep = 'boop';

  function bar() {
    console.log(beep);
  }

  return bar;
}

var baz = foo();

baz(); // => logs "boop"
```

We get the same result ("boop" is logged) in both cases, even though in this example the function `foo` has already returned. Typically, once a function returns, its environment gets cleared from memory so you may not expect `bar` to still have access to `beep`. The difference here is that `baz` is a closure. It contains the function `bar` and its environment (which includes `beep`). So when `baz` gets executed, it can still reference `beep`.

Closures and lexical scope are really interesting because they enable things like *function composition*, *currying*, *partial application*, and many other topics that are too advanced for this section. However, they're also important and useful for everyday JavaScript.

### `this` keyword

`this` is a keyword that refers to the *context* of an executing function. It can be really tricky to understand how it works.

Before you begin to understand `this` you first need to understand that not all functions have an execution context. Or rather, any function that doesn't have a context will be assigned the global scope (e.g. `window` in browsers), except when using [strict mode][strict mode].

There are three instances when a function will have a `this` context:

- As an object method: the `this` context will be the object
- As a constructor: the `this` context will be the new object being constructed
- As a DOM event handler: the `this` context will be the element the event fired from

When using `this`, it's important to consider lexical scope. A nested function will not automatically receive the `this` context of its parent. There are two common ways of working around this. We'll use constructors to demonstrate:

```js
function Foo() {
  this.beep = 'boop';

  var _this = this;

  function bar() {
    console.log(_this.beep);
  }
}
```

Popular convention is to assign a new variable `_this` to `this`, as seen here. Now `bar` can access `this.beep` as `_this.beep`.

Also popular, when working with Array iterator methods such as `map`, is to use the context parameter.

```js
function Foo() {
  this.beep = 'boop';

  var arr = [1, 2, 3];

  this.seriesOfBeeps = arr.map(function (num) {
    return this.beep;
  }, this); // <-- `this` is given to the `map` method as its context
}
```

### Immediately-Invoked Function Expression

The "iffy" is useful for things like wrapping a set of instructions and having them evaluated immediately (hence the name) and it's often useful to pass in variables from the outer scope to cache the original value. In other words, you can pass a variable in to an iffy so that even if its value is changed elsewhere, the inner context will have the original value.

An IIFE looks like this:

```js
(function () { ... }());
//                  ^^
```

Note the extra set of parenthesis after the function expression and the fact that the whole expression is wrapped in a set of outer parenthesis.

If you want to make sure jQuery, `window`, `document`, etc are wrapped in your script, you can create a closure with an iffy by passing them as arguments.

```js
(function ($, win, doc) {
  // do stuff with $, win, doc
}(jQuery, window, document));
```

[iife]: http://benalman.com/news/2010/11/immediately-invoked-function-expression/ "Immediately-Invoked Function Expressions"
[closures]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Closures "Closures"
[strict mode]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode "Strict mode"
