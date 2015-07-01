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

Returns the index of the first occurrence of the specified value.

```js
'Hello world'.indexOf('world') // => 6
```

#### match

Returns the matches described by a Regular Expression.

```js
'Hello world'.match(/(e?ld?)/) // => [ 'el', 'l', 'ld' ]
```

#### replace

Returns a new string with some or all of matches of a pattern replaced by the given replacement.

```js
'Hello world'.replace(/lo/, 'icopter') // => "Helicopter world"
```

#### slice

Returns a section of a string.

```js
'Hello world'.slice(4) // => "o world"

// You can also specify the ending index
'Hello world'.slice(1, 5) // => "ello"
```

#### toLowerCase / toUpperCase

Converts a string to either all caps or all lower-case.

```js
'OMG'.toLowerCase() // => "omg"
'I am batman'.toUpperCase() // => "I AM BATMAN"
```

#### trim

Removes the whitespace from both ends of a string.

```js
' o hai '.trim() // => 'o hai'
```

> This is also useful for removing newlines (`\n`)

[global]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects
[string]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String
