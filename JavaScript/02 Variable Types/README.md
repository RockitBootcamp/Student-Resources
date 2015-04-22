# Lesson 2: Variable Types

Identifier   | Objectives
-------------|------------
JS: 2.1      | Define primitive data types
             | &bull; Number
             | &bull; Boolean
             | &bull; String
JS: 2.2      | Define special data types
             | &bull; Null
             | &bull; Undefined
JS: 2.3      | Explain concatenation operator `+`  
             | &bull; `var a = 'hello ' + 'world';`
JS: 2.4      | Explain addition operator: `+`
             | &bull; `var a = 5 + 7;`
JS: 2.5      | Explain Type Casting
             | &bull; Implicit Type Casting
             | &bull; Explicit Type Casting
JS: 2.6      |Demonstrate definition of local and global variables
             | &bull; Local: `var a = true;`
             | &bull; Global: `a = true;`

## Resources

- [Variables and Primitive Data Types](https://gist.github.com/bradwestfall/002312c3628eac9cc215)
- __W3 Schools__ [Data Types](http://www.w3schools.com/js/js_datatypes.asp)

## Extra Study

Create variables of different types:

```js
var a = 5;        // Number
var b = '5';      // String
var c = 5.2;      // Number
var d = false;    // Boolean
var e = 'false';  // String
var f = null;     // Null
var g = 'null';   // String
```

Almost all programming is about input and output. So knowing how to manipulate text is very important. Since we'll keep a lot of our data in variables, it's important to know how to turn two or more "string" variables into one. This is called "concatenation".

Consider the following code that has two String variables:

```js
var firstName = 'Dave';
var lastName = 'Smith';

var fullName = firstName + lastName;
```

This code creates a `fullName` variable with "DaveSmith" as it's value. We use the concatenation operator `+` to do this. But let's correct it so there is a space between the names:

```js
var firstName = 'Dave';
var lastName = 'Smith';

var fullName = firstName + ' ' + lastName;
```

Notice in this case we're concatenating two variables with a string value in between. The string value in between just happens to be a space. Now the `fullName` variable will be "Dave Smith".

in JavaScript, the plus sign is also used as a math operator:

```js
var a = 5 + 8;    // Creates number variable with the value of 13
```

For the previous example, the `a` variable will be a `number` type since the value is based on adding two numbers. JavaScript is smart enough to tell that `a` should be a number and not a String in this case.

But what if we add a number and a string?

```js
var a = '5' + 8;  // Creates a string "58"
```

In this case, JavaScript has to choose between doing math or doing string concatenation because the plus sign suggests both. JavaScript actually chooses string concatenation in this case. The resulting `a` variable will be a string of "58"


### Type Casting

When programming languages make decisions about what type of variable is created based on the context of the value being assigned, this is called type casting. Notice that if we use variables to assign `a` instead of literal values, the type casting works the same way:

```js
var x = '5';
var y = 8;
var a = x + y;  // String: 58
```

So far the examples we've shown are examples of **implicit type casting**. In other words, the casting happens automatically in JavaScript. On the other hand, **explicit type casting** is when we as programmers purposely and manually cast values from one type to another.

A common example of explicit type casting is to cast strings that have numbers into real numbers, most commonly so we can do math:

```js
var x = '5';
var y = 8;
var a = parseInt(x) + y;  // Number: 13
```

Now because we've parsed the `x` variable to a number before we do the math, the end result will be 13 instead of 58. But pay attention to the order, had we done this:

```js
var x = '5';
var y = 8;
var a = parseInt(x + y);  // Number: 58
```

In this case we we're doing the math first before we parse to an integer. The string of `5` and the number `8` is going to do concatenation to make the string of `58`. Then we're parsing the string of `58` to be the number `58`