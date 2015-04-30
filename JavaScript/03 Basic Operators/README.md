# Lesson 3: Basic Operators

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

## Resources

- __W3 Schools__ [Operators](http://www.w3schools.com/jsref/jsref_operators.asp)


## Extra Study

Increment and Decrement operators are very useful and common in programming. Let's look at some code:

```js
var x = 5;
x = x + 3;
```

This code adds `3` to the existing value of `x`. It's like saying, "Take what x was (5) and add 3 to it". However, it's so common to need to add numbers to existing values that we have a shortcut:

```js
var x = 5;
x += 3;
```

This code, with the `+=` operator says the same thing - take what `x` was and add `3` to it. While this works for any number we want to add, let's look at adding `1`:

```js
var x = 5;
x += 1;
```

Now `x` is equal to 6. But it's so much more common to add `1` to existing values that we have a better shortcut:

```js
var x = 5;
x++;
```

Notice there's no space between `x` and `++`. This operator allows us to increment the variable by one. It also works the same for `--`:

```js
var x = 5;
x--; // x is 4
```

### String Concatenation

While string concatenation was covered in a previous lesson, we'll now cover a nice little shortcut that is similar to the math shortcut we just saw.

```js
welcome = 'Welcome ';
welcome = welcome + 'Dave';
console.log(welcome); // Outputs: Welcome Dave
```

This is the long way of doing it. This is like saying "Make the welcome variable what it was, plus some more characters added to it";

The shortcut goes as follows:

```js
welcome = 'Welcome ';
welcome += 'Dave';
console.log(welcome); // Outputs: Welcome Dave
```