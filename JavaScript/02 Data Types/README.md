# Lesson 2: Data Types

Identifier   | Objectives
-------------|------------
JS: 2.1      | Define primitive data types
             | &bull; String
             | &bull; Number
             | &bull; Boolean
             | &bull; Null
             | &bull; Undefined
JS: 2.2      | Define Objects
JS: 2.3      | Explain concatenation operator `+`  
             | &bull; `var a = 'hello ' + 'world';`
JS: 2.4      | Explain addition operator: `+`
             | &bull; `var a = 5 + 7;`
JS: 2.5      | Explain type coercion
             | &bull; Implicit type coercion
             | &bull; Explicit type coercion
JS: 2.6      | Explain difference between local and global variables
             | &bull; Local: `var a = true;`
             | &bull; Global: `a = true;`

## Resources

- [JavaScript data types and data structures][data types]
- [`String` Methods][string methods]
- [`Array` Methods][array methods]
- [`Object` Methods][object methods]
- [Variables and Primitive Data Types](https://gist.github.com/bradwestfall/002312c3628eac9cc215)


## Pre Study

Almost all programming is about input and output. So knowing how to manipulate values is very important.

### Data Types

In JavaScript there are 6 primitive data types. Primitives are defined as types that are not Objects and contain no methods. However, JavaScript provides wrappers for most primitives that give you access to some helpful methods.

The primitives are

- [String][string type]
- [Number][number type]
- [Boolean][boolean type]
- [Null][null type]
- [Undefined][undefined type]

As well as a new `Symbol` type, but it's not widely implemented yet, so we won't cover it.

#### String

The string type is a sequence of characters used to represent text. Strings are *immutable*. Once a string is created it cannot be modified. However, a new string can be created and assigned as a new value.

```js
'This is a string'

var myString = 'This is a string';

typeof myString; // => "string"
```

The `String` object provides several useful methods

```js
var myString = 'This is a string';

myString.substr(0, 4); // => "This"
myString.concat('!'); // => "This is a string!"
myString.charAt(0); // => "T"
myString.replace('a string', 'SPARTA!'); // => "This is SPARTA!"
```

There are many, many more. Read more about [`String` methods][string methods].

#### Number

All numbers in JavaScript are [floating-point numbers][float], meaning there is technically no concept for Integer in JavaScript, even though you will most often be working with "whole" number floating-point numbers. Try not to think about it too much.

```js
// All are numbers
42
1.0434
0.1954

// Proof that all numbers in JS are floats
1 === 1.0 // => true
```

JavaScript also has 3 special Number constructs:

- `+Infinity` (or `Infinity`)
- `-Infinity`
- `NaN` ("not a number")

#### Boolean

Boolean can have one of two values, `true` or `false`. 

#### Null

Null has exactly one value: `null`. The keyword `null` can be used to check if a variable (or expression) has the value of `null`.

#### Undefined

Any variable that has not been assigned a value has the value of `undefined`. A variable can also be intentionally assigned the value of `undefined`, though in practice it's not very useful to do so. Like null, the `undefined` keyword can be used to check when a variable has not been defined.

#### Object

For everything else, there's `Object`. The following constructs are all types of objects, in addition to `Object` itself:

- Functions
- Arrays
- Dates

JavaScript also has a subset of objects called [JSON][json] (JavaScript Object Notation). It's a special format for data interchange, commonly used for sending data to/from APIs.

There are a few more types of objects that were intentially not listed, because they will not be covered, but you can read about them in the [data types][data types] article on MDN.

#### Concatenation

It's important to know how to combine two or more "string" values into one. This is called "concatenation". It's most commonly done using the concatenation operator `+`. Unfortunately (or maybe forunately) `+` is also the addition operator, the unary plus (number coercion) operator, and the absolute number operator. Sometimes more than one at once. You'll have to be very careful when you see the `+` operator that you know what it could be doing. Sometimes it's not exactly what you would expect.

Consider the following code demonstrating simple string concatenation:

```js
var firstName = 'Dave';
var lastName = 'Smith';

var fullName = firstName + lastName;
```

This code defines the `fullName` variable with `"DaveSmith"` as it's value. We use the concatenation operator `+` to do this. But let's correct it so there is a space between the names:

```js
var firstName = 'Dave';
var lastName = 'Smith';

var fullName = firstName + ' ' + lastName;
```

Notice in this case we're concatenating two variables with a string value in between. The string value in between just happens to be a space. Now the `fullName` variable will have the value `"Dave Smith"`.

In this example the `+` operator behaves as an addition operator:

```js
var a = 5 + 8;
```

In this example, the value of `a` will be the number `13` since the value is based on adding two numbers.

But what if we try to add a number to a string?

```js
var a = '5' + 8;
```

In this case, the interpreter has to choose between doing math or doing string concatenation because the plus sign suggests both. The interpreter chooses string concatenation in this case. The result is that the value of `a` will be the string `"58"`.

See if you can determine what the value of the expression below would be:

```js
var a = 5 + + '8';
```

### Type Coercion

Type coercion happens when certain operators attempt to *coerce* a value into a different, matching type that's the same as the other operand in the expression. In other words, an expression with a string and a number in it will first try to change the values to the same type. Strings take precedence over all other types. Any expression containing a string will result in all other values being converted to strings before resolving the expression.

Notice that if we use variables to assign `a` instead of literal values, type coercion works the same way:

```js
var x = '5';
var y = 8;
var z = x + y; // => "58"
```

This is because operators work on *values*, not references.

So far we've seen examples of **implicit type coercion**. In other words, the coercion happens automatically in JavaScript. Now we can talk about **explicit type coercion** which is when we deliberately convert a value to another data type.

A common example of explicit type coercion is coercing strings into numbers, most commonly so we can do math:

```js
var x = '5';
var y = 8;
var z = parseInt(x, 10) + y;
```

> Note: The second argument in `parseInt()` instructs it to use *decimal* conversion.

Now because we've parsed the value of `x` into a number before we do the math, the end result will be `13` instead of `"58"`.

More examples:

```js
var a = String(1); // => "1"
var b = Boolean(1); // => true
var c = Boolean(0); // => false
var d = Number(true); // => 1
```

## Exercises

#### Create variables with differently typed values

```js
var a = 5;
var b = '5';
var c = 5.2;
var d = false;
var e = 'false';
var f = null;
var g = 'null';
var h = 'one' + 2;
var i = +'42';
```

What is the type of each value? Use `typeof` to check your answers:

```js
console.log(typeof a);
console.log(typeof b);
// ...
```

#### Try your hand at coercing values

```js
var a = 5 + '7';
var b = 5 + +'7';
var c = '' + 5 + 7;
var d = false + '7';
var e = Number(true) + 7;
```

**Come up with your own combinations and see if you get the value you were expecting!** Why did each result end up being what it was?


[data types]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures "JavaScript data types and data structures"
[string type]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#String_type "string type"
[number type]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Number_type "number type"
[boolean type]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Boolean_type "boolean type"
[null type]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Null_type "null type"
[undefined type]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Undefined_type "undefined type"
[string methods]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/prototype#Methods "String methods"
[array methods]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/prototype#Methods "Array methods"
[object methods]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/prototype#Methods "Object methods"
[float]: http://en.wikipedia.org/wiki/Double_precision_floating-point_format "Double precision floating-point format"
[json]: http://www.json.org/
