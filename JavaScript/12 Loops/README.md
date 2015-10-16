# Lesson 12: Loops

Identifier   | Objectives
-------------|------------
JS: 12.1     | Demonstrate `while` loop
JS: 12.2     | Demonstrate `for` loop
JS: 12.3     | Demonstrate `for-in` loop
JS: 12.3     | Demonstrate `forEach` loop
JS: 12.4     | Demonstrate `break` and `continue` statements

## Resources

- [`while` loops][while]
- [`for` loops][for]
- [`for..in` loops][forin]
- [Array `forEach` method][forEach]
- [`break` statement][break]
- [`continue` statement][continue]

## Pre Study

### `while` Iterator

[MDN Reference][while]

`while` loops allow you to execute (i.e. iterate over) a block of code **while** a certain condition is truthy.

```js
var i = 0;
while (i <= 10) {
  console.log(i++);
}
```

The above code loops until `i` is greater than 10; in other words, until the condition is no longer `true`.

```js
var items = ['dog', 'cat', 'fish', 'horse', 'bird'];
var i = 0;
var len = items.length;

while (i < len) {
  console.log(items[i++]);
}
```

With this `while` loop, `items.length` is equal to 5. So our condition says to loop while `i` is less than 5. Then since `i` started at 0 and the loop increments `i` with each iteration, this loop is counting from 0 to 4.

The end result outputs:

```
"dog"
"cat"
"fish"
"horse"
"bird"
```

### `for` Iterator

[MDN Reference][for]

`for` loops allow you to execute a block of code a specified number of times. The first expression initializes the value at the beginning of the loop. The second expression sets the limit for how many times the loop should iterate. The third expression is executed for each iteration, in this case increasing `i` by one.

`for (EXPRESSION 1; EXPRESSION 2; EXPRESSION 3) { ... }`

```js
for (var i = 0; i <= 10; i++) {
  console.log(i);
}
```

The above loop initialized the value of `i` to 0. The loop will iterate as long as `i` is less than or equal to 10. On each iteration `i` will increase by `1` (`i++`).

Example `for` loop used with an Array:

```js
var items = ['dog', 'cat', 'fish', 'horse', 'bird'];

for (var i = 0; i < items.length; i++) {
  console.log(items[i]);
}
```

Note that `items.length` is equal to `10` so this array is the same as stating `for (var i = 0; i < 10; i++)`.


### `for..in` Iterator

[MDN Reference][forin]

When we're deciding which type of loop we want to use, consider that all loops are capable iterating over an array. However, `for..in` was specifically designed with *Objects* in mind. It iterates of *enumerable* properties of the Object, **in arbitrary order**.

The for-in loop works as follows:

```js
var user = {
  firstName: 'Kevin',
  lastName: 'Lanni',
  handle: '@therealklanni'
};

for (var key in user) {
  console.log(key);
}
```

The above will output `"firstName"`, `"lastName"`, and `"handle"`. That's because `key` represents the current key of the Object that's being iterated over.

So how do we output the values?

```js
var user = {
  firstName: 'Kevin',
  lastName: 'Lanni',
  handle: '@therealklanni'
};

for (var key in user) {
  console.log(user[key]);
}
```

Since `key` represents each property of the Object, we can access the value of each property with the bracket notation: `user[key]`.

### Array `forEach` Iterator

[MDN Reference][forEach]

The `forEach` method of Array is a special helper that takes a *callback* function. The Array will be iterated over, calling the function once for *each iteration* and giving it 3 arguments: the current element, the current iteration, and the array being iterated over.

`Array.forEach(function (ELEMENT, ITERATION, ARRAY) { ... })`

However, you should only name the parameters you'll *actually* use.

```js
var animals = ['puppies', 'kittens', 'ducklings'];

animals.forEach(function(element) {
  console.log(element);
});
```

Just as in all functions, the name of the parameters is completely up to us.

In the example, the code outputs:

```
"puppies"
"kittens"
"ducklings"
```

---

### `break` and `continue`

[MDN Reference (break)][break] |
[MDN Reference (continue)][break]

The `break` statement allows us to terminate a loop. Consider the following:

```js
var i = 0;

while (true) {
  i++;
  if (i === 1000) {
    break;
  }
}
```

It would seem that it is an infinite loop because the `while` loop suggests it will always loop as long as `true` is equal to `true` - which means forever. However, notice that the loop increments `i` with each iteration. Then we have an `if` statement which will see if `i` is equal to `1000` and if it is, the loop will `break` which means it will exit the loop. This example isn't meaningful in accomplishing very much - it just proves that if we need to, we can `break` out of a loop.

`continue` is similar but it means to "break *this* iteration and *continue* to the next iteration". Let's see an example:

```js
for (var i = 1; i < 6; i++) {
  if (i === 3) {
    continue;
  }
  console.log(i);
}
```

The above `for` loop counts from 1 to 5 (remember `i < 6` means loop until `i` is smaller than 6 which means loop to 5). The `console.log` will output 1, 2, 4, and 5. So what about 3? Well the `if` statement says that if `i` is equal to 3, then *continue* to the next iteration. So when `i` is 3 the `console.log` doesn't get a chance to execute. What if we had used a break instead?

```js
for (var i = 1; i < 6; i++) {
  if (i === 3) {
    break;
  }
  console.log(i);
}
```

Now the output will be 1, 2. This time the code says "When we get to 3, exit the loop".


## Exercise

Use the following variable to complete the tasks below.

```js
var animals = ['puppy', 'kitten', 'penguin', 'muskrat', 'hippo', 'baboon']

var moreAnimals = [
  {
    type: 'canine',
    legs: 4,
    eyes: 2,
    teeth: ['sharp']
  },
  {
    type: 'cat',
    legs: 4,
    eyes: 2,
    teeth: ['sharp']
  },
  {
    type: 'bird',
    legs: 2,
    eyes: 2,
    teeth: [],
    wings: true
  },
  {
    type: 'rodent',
    legs: 4,
    eyes: 2,
    teeth: ['pointy']
  },
  {
    type: 'large mammal',
    legs: 4,
    eyes: 2,
    teeth: ['blunt']
  },
  {
    type: 'ape',
    legs: 2,
    eyes: 2,
    teeth: ['sharp', 'blunt']
  }
]
```

1. Print out each animal from `animals`
  1. Use a `while` loop
  1. Use a `for` loop
  1. Use a `forEach` on the array
1. Print out each animals type from `moreAnimals`
  1. Use a `while` loop
  1. Use a `for` loop
  1. Use a `forEach` on the array
1. Print out only animals that have more than 2 legs from `moreAnimals`
  1. Use a `while` loop
  1. Use a `for` loop
  1. Use a `forEach` on the array


[while]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/while
[for]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/for
[forin]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/for...in
[continue]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/continue
[forEach]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach
[break]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/break
