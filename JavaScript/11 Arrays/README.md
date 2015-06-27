# Lesson 11: Arrays

Identifier   | Objectives
-------------|------------
JS: 11.1     | Demonstrate array creation syntax
             | &bull; `var x = ['Joe', 'Smith'];`
JS: 11.1     | Demonstrate pushing values to end of array
             | &bull; `x.push('value');`
JS: 11.1     | Explain Indexed Arrays
JS: 11.1     | Demonstrate accessing values of arrays
             | &bull; `var value = x[0];`
JS: 11.1     | Use basic array methods and properties
             | &bull; `.length`
             | &bull; `.indexOf()`
             | &bull; `.join()`
             | &bull; `.pop()`

## Resources

- [Array](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array)
- __Brad's Gist__ [Arrays](https://gist.github.com/bradwestfall/002312c3628eac9cc215)
- [Beginner Arrays](http://htmldog.com/guides/javascript/beginner/arrays/)
- __W3 Schools__ [Arrays](http://www.w3schools.com/jsref/jsref_obj_array.asp)
- __MDN__ [Array Literals](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Values,_variables,_and_literals#Array_literals)

## Pre Study

Arrays are Objects that represent lists.

An **Array Literal** is written as

```js
[] // => empty Array Literal
[1, 2, 3] // => Array with a "list" of numbers 1-3
```

Arrays have several useful methods which you will use frequently, including *push*, *pop*, *shift*, *unshift*, *map*, *sort*, and many more.

### Accessing values

Each *value* in an Array is referred to as an **element** or less-commonly an *item* of the Array.

Elements can be accessed using "bracket" notation. When working with an array, to access a value you reference the array by its name followed by square brackets `[]` containing a numerical value. The numerical value refers to the **index** of the element you want to access.

> Arrays use a **zero-based** index, meaning that the first element will be element **0** rather than 1

```js
// access the first element in the Array
myArray[0]
```

You can also assign values using the bracket notation

```js
// assign "new value" as the new value of element 1
myArray[1] = 'new value'
```

