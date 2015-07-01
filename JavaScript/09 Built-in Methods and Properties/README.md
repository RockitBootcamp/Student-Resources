# Lesson 9: Built-in Methods and Properties

Identifier   | Objectives
-------------|------------
JS: 9.1      | Demonstrate using built-in basic method names
             | &bull; How to call built-in methods
             | &bull; How to pass arguments
             | &bull; How to accept a return value
JS: 9.2      | Use basic JavaScript string properties and methods
             | &bull; `.length`
             | &bull; `.charAt()`
             | &bull; `.toLowerCase()`
             | &bull; `.toUpperCase()`
             | &bull; `.substr()`
             |

## Resources

- [Built in Functions][global]

## Pre Study

JavaScript provides some useful builtin functions and methods for working with values. Remember that Strings are *immutable*, lucky for us JavaScript wraps every string with a helper function that provides us some of these useful builtin methods for working specifically with Strings. The same goes for Numbers. Array, Function, Date, all are types of Object, so they have their own sets of properties and methods built-in as well, without needing a special wrapper function.

### String

String has many properties and methods you can take advantage of. Check out the documentation on MDN for a [complete reference][string]. Here are a few of the more useful/common properties and methods you should know about.

#### length

The `length` property will tell you the length (or number of characters) of a string.

```js
'string'.length // => 6
```

#### concat

The `concat` method will bind two (or more) strings together as a new string.

```js
'This is a '.concat('string') // => "This is a string"

// Additional arguments will also be concatenated
'This is a '.concat('string', '!') // => "This is a string!"
```

#### indexOf

The `indexOf` method returns the index of the first occurrence of the specified value.

```js
'Hello world'.indexOf('world') // => 6
```

#### match

The `match` method returns the matches described by a Regular Expression.

```js
'Hello world'.match(/(e?ld?)/) // => [ 'el', 'l', 'ld' ]
```

#### replace

The `replace` method returns a new string with some or all of matches of a pattern replaced by the given replacement.

```js
'Hello world'.replace(/lo/, 'icopter') // => "Helicopter world"
```

#### slice

The `slice` method returns a section of a string.

```js
'Hello world'.slice(4) // => "o world"

// You can also specify the ending index
'Hello world'.slice(1, 5) // => "ello"
```

#### toLowerCase / toUpperCase

The `toLowerCase` or `toUpperCase` methods convert a string to either all caps or all lower-case.

```js
'OMG'.toLowerCase() // => "omg"
'I am batman'.toUpperCase() // => "I AM BATMAN"
```

#### trim

The `trim` method removes the whitespace from both ends of a string.

```js
' o hai '.trim() // => 'o hai'
```

> This is also useful for removing newlines (`\n`)

### Number

Check out the documentation on MDN for a [complete reference][number]. Here are a few of the more useful/common properties and methods you should know about.

#### toFixed

The `toFixed` method rounds the number to the specified decimal place and returns the result as a **String**.

> It's necessary to return the value as a string because numbers cannot have trailing zeros after the decimal point if not followed by any other digits, e.g. `42.00000`

```js
var num = 1

num1.toFixed(5) // => "1.00000"
Math.PI.toFixed(2) // => "3.14"
```

### Math

The `Math` object provides useful properties and methods for mathematical operations. Check out the documentation on MDN for a [complete reference][math]. Here are a few of the more useful/common properties and methods you should know about.

#### PI

The `PI` property provides the value of PI.

```js
Math.PI // => 3.141592653589793
```

#### abs

The `abs` method returns the absolute value of a number.

```js
Math.abs(-42) // => 42
```

#### ceil

The `ceil` method returns the lowest integer greater or equal to the given value.

```js
Math.ceil(41.0001) // => 42
```

#### floor

The `floor` method return the lowest integer less than or equal to the given value.

```js
Math.floor(42.9999999) // => 42
```

#### round

The `round` method rounds the given value to the nearest integer.

```js
Math.round(42.0001) // => 42
Math.round(42.9999999) // => 43
```

#### random

The `random` method generates a pseudo-random number between 0 and 1.

> **Note:** Math.random() does not provide cryptographically secure random numbers. Do not use them for anything related to security.

```js
Math.random() // => 0.7521957787685096
```

To generate larger numbers, simply multiply the result.

```js
Math.random() * 2 // a random number between 0 and 2, e.g. 1.9085579885169864
Math.random() * 10 // a random number from 0-9 (with decimals), e.g. 2.5148108252324164
```

### Date

The `Date` object provides useful properties and methods for mathematical operations and can also be used as a *constructor* to generate a Date object. Check out the documentation on MDN for a [complete reference][date]. Here are a few of the more useful/common properties and methods you should know about.

#### Current date as a string

Calling `Date` as a function returns the current date as a string.

```js
Date() // => "Tue Jun 30 2015 20:01:24 GMT-0700 (MST)"
```

#### Used as a constructor

Calling `Date` as a constructor returns an *object* representing a date.

```js
new Date() // => Tue Jun 30 2015 20:01:24 GMT-0700 (MST)
// Yes, that's an object

// You can also provide a date string (ISO 8601 compliant formatted)
new Date('1979-03-24T00:00:01') // => Fri Mar 24 1979 17:00:00 GMT-0700 (MST)

// Or pass separate arguments
new Date(1979, 2, 24) // => Fri Mar 24 1979 17:00:00 GMT-0700 (MST)
// That's not a typo! The month parameter is zero-based
```

The returned Date object will have methods such as `getDate`, `getHours`, `getSeconds`, etc. Refer to the [documentation][date] for more details.

#### now

The `now` method returns the number of milliseconds since Jan 1, 1970 00:00:00 (Unix Epoch).

```js
Date.now() // => 1435720193244
```

This is useful for timestamps because they can be stored with a small number of bytes and can be easily converted to a Date object.

[global]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects
[string]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String
[number]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number
[math]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math
[date]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date
