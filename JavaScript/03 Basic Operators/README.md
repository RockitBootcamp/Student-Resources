# Lesson 3: Basic Operators and Expressions

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
             | &bull; Prefix/postfix increment `++`
             | &bull; Prefix/postfix decrement `--`

## Resources

- [Operators][operators]

## Pre Study

Increment and decrement operators are very useful and common in programming. Let's look at an example:

```js
var x = 5;
x = x + 1;
```

The expression `x + 1` adds `1` to the current value of `x`. However, if you will be doing this often, there are operators that can simplify the expression:

```js
var x = 5;
++x;
```

This is called a **prefix** operator, because it preceeds the variable name. A **postfix** operator would follow the variable name. Let's take a look at the difference.

```js
var x = 5;
var y = x++;
x === y; // => false
```

In the example we used a postfix increment operator to increment the value. We probably expected both `x` and `y` to equal `6`. So why did the expression `x === y` return `false`?

The answer is that when working with prefix/postfix operators, they will either perform the operation first, or return the value first. Prefix operators perform the operation first, *then* return the value. So let's try that again using the prefix operator instead.

```js
var x = 5;
var y = ++x;
x === y; // => true
```

This time both values were `6`, because when we assigned a value to `y`, the increment operation had already been performed. Let's have another look at that postfix.

```js
var x = 5;
x++; // => 5
x; // => 6
```

This is equivalent to the following:

```js
var x = 5;
x = 5;
x = 6;
```

If we used a prefix, it would be equivalent to:

```js
var x = 5;
x = 6;
x = 6;
```

The same applies for the decrement operator (`--`) when used as a prefix or postfix:

```js
var x = 5;
x--; // => 5
x; // => 4
```

### String Concatenation

While string concatenation was covered in a previous lesson, we'll now cover a nice little shortcut that is similar to the math shortcut we just saw.

```js
welcome = 'Welcome ';
welcome = welcome + 'Dave'; // => "Welcome Dave"
```

An alternative to this is to use the `+=` assignment operator. Just like the `+` operator, it will give preference to strings by coercing the operand if the variable's value is a string, otherwise it will add numbers:

```js
var welcome = 'Welcome ';
welcome += 'Dave'; // => "Welcome Dave"
```

[operators]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators "Expressions and Operators"
