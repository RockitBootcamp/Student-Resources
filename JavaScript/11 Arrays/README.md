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
- __MDN__ [Array Literals](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Values,_variables,_and_literals#Array_literals)
- [Arrays for Beginners](http://htmldog.com/guides/javascript/beginner/arrays/)
- __Brad's Gist__ [Arrays](https://gist.github.com/bradwestfall/002312c3628eac9cc215)

## Pre Study

Arrays are Objects that represent ordered lists, what is known as an *indexed collection*. They are considered to be indexed because every value has a specific index value representing its *order* within the collection.

An **Array Literal** is written as

```js
var myArray = [] // => empty Array Literal
var myArray = [1, 2, 3] // => Array with a "list" of numbers 1-3
```

> Arrays have several useful methods which you will use frequently, including *push*, *pop*, *shift*, *unshift*, *map*, *sort*, and many more.

### Accessing values

Each *value* in an Array is formally referred to as an **element** or less-commonly an *item* of the Array.

Elements can be accessed using "bracket notation". When working with an array, to access a value you reference the array by its name followed by square brackets `[]` containing a numerical value. The numerical value refers to the **index** of the element you want to access.

> Arrays use a **zero-based** index, meaning that the first element will have an index of **0** rather than 1

```js
// access the first element in the Array
myArray[0]
```

You can also assign values using the bracket notation.

```js
// assign "new value" as the value of element 1
myArray[1] = 'new value'
```

You can also use a variable to specify the index.

```js
var idx = 1
myArray[idx] // => 'new value'
```

### Methods and Properties

#### length

Return the length (or size) of an Array with the `length` property.

```js
var myArray = [1, 2]
myArray.length // => 2
```

#### indexOf

Find the index of an element in the array using `indexOf`

```js
var myArray = [1, 2, 3]
myArray.indexOf(3) // => 2
```

#### push

You can push (or "append") values onto the end of any Array using the `push` method.

```js
var myArray = []
myArray // => []

myArray.push(1)
myArray // => [1]

myArray.push(2)
myArray // => [1, 2]

myArray.push(3, 4, 5)
myArray // => [1, 2, 3, 4, 5]
```

#### pop

The `pop` method will remove the last value from an array and return it.

```js
var myArray = [1, 2, 3, 4, 5]
var five = myArray.pop()
five // => 5
myArray // => [1, 2, 3, 4]
```

#### shift

Remove the first element from an Array and return the value by calling the `shift` method. It's called shift because all the other values *shift* up to fill the gap.

```js
var myArray = [1, 2, 3, 4, 5]
var one = myArray.shift()
one // => 1
myArray // => [2, 3, 4, 5]
```

#### unshift

A value can be added to the beginning of an Array using the `unshift` method.

```js
var myArray = [1, 2, 3, 4]
myArray.unshift(5)
myArray // => [5, 1, 2, 3, 4]
```

#### slice

Copy a range of values from anywhere in the array by calling the `slice` method. This method can take one or two arguments. The first argument is the *start* index. The second argument is the *end* index. If *end* is specified, the copy will contain everything from *start* up to but **not including** *end*. If *end* is omitted, `slice` will copy from *start* to the last element of the array.

```js
var myArray = ['a', 'b', 'c', 'd', 'e']
var cd = myArray.slice(2, 4)
var de = myArray.slice(4)
cd // => ['c', 'd']
de // => ['d', 'e']
myArray // => ['a', 'b', 'c', 'd', 'e']
```

#### splice

Cut a range out of the Array, optionally inserting new values in its place by calling the `splice` method. The first argument is the *start* index of where the splice will begin. The second argument is *how many* elements to remove after the *start* index. Optionally, each additional argument can be any values you want to insert at the *start* index.

```js
var myArray = ['a', 'b', 'c', 'd', 'e']

myArray.splice(1, 1)
myArray // => ['a', 'c', 'd', 'e']

myArray.splice(2, 1, 'D')
myArray // => ['a', 'c', 'D', 'e']

myArray.splice(1, 0, 'B')
myArray // => ['a', 'B', 'c', 'D', 'e']
```

#### join

Return a string by combining all of an Array's values together when calling the `join` method. Optionally you can specify what character to join with (defaults to `,`).

```js
var myArray = ['a', 'b', 'c', 'd', 'e']

var myString = myArray.join()
myString // => "a,b,c,d,e"

var myString = myArray.join('/')
myString // => "a/b/c/d/e"
```

#### concat

Create a new array by concatenating given arguments onto the end of an Array using the `concat` method.

```js
var myArray = ['a', 'b', 'c']
var newArray = myArray.concat('d', 'e')
myArray // => ['a', 'b', 'c']
newArray // => ['a', 'b', 'c', 'd', 'e']
```

### Advanced Methods

#### forEach (see also [Loops](../12 Loops))

Perform an operation for each element in an Array individually (i.e. iterate over the items). The `forEach` method takes a *function* which will be called on each iteration and the current value is given as the first argument.

```js
var myArray = ['a', 'b', 'c', 'd', 'e']
myArray.forEach(function (el) {
  // first call, el = "a"
  // second call, el = "b"
  // third call, el = "c"
  // and so on...
  console.log(el)
})
```

#### map

Mutate the values in an array by using the `map` method. The `map` method takes a *function* and calls the function with each element in the array as its argument, just like `forEach`. The function must `return` a new value to replace the current value.

```js
var myArray = [1, 2, 3]

var newArray = myArray.map(function (el) {
  return el * 2
})

newArray // => [2, 4, 6]
```

#### filter

Create a new array containing a subset of values with the `filter` method. The `filter` method takes a *function* and calls it for each element in the array just like `forEach`. If the `return` value is truthy the current element will be included, otherwise it will be excluded from the final array.

```js
var myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]

var odd = myArray.filter(function (el) {
  return el % 2
})

odd // => [1, 3, 5, 7, 9, 11, 13]
```

## Exercises

Try these exercises to test your understand of Arrays. Use `console.log` after each step to see what the current value of your Array is.

1. Declare a new var `myArray` with an empty array.
1. Assign index `1` the value `'Hello'`
1. Use `push` to add the values `1` and `4` to your array.
1. Log the value at index `1`.
1. Declare a new var `num` with the value `4`.
1. Using `num` as the index, add the value `2` to your array.
1. Log the length of your array.
1. Pop the last value from your array into a new var `last`.
1. Shift your array.
1. Slice index 2 into a new var `sliced`.
1. Unshift `0` onto your array.
1. Remove index 1 using `splice`.
1. Insert the values `last` and `3` at index 2 of your array.
1. Log the index of the number `1`.
1. Replace index 4 with the number `5`.
1. Log the array as a string.
1. Log each value individually using `forEach`.
1. Add 1 to each value using `map` and save the output as a new var `newArray`.
1. Log `newArray`.
1. Filter `newArray` to get only values greater than 2 and save the output to a new var `filtered`.
1. Log `filtered`.

At the end, each array should have the following values:

```js
myArray // => [0, 1, 2, 3, 4]
newArray // => [1, 2, 3, 4, 5]
filtered // => [3, 4, 5]
```
