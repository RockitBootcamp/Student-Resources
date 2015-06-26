# Lesson 12: Loops

Identifier   | Objectives
-------------|------------
JS: 12.1     | Demonstrate `while` loop
JS: 12.2     | Demonstrate `for` loop
JS: 12.3     | Demonstrate `for-in` loop
JS: 12.4     | Demonstrate `break` and `continue` statements

## Resources

- __W3 Schools__ [For Loops](http://www.w3schools.com/js/js_loop_for.asp)
- __W3 Schools__ [While Loops](http://www.w3schools.com/js/js_loop_while.asp)
- __MDN__ [For Each](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach)
- __W3 Schools__ [Break and Continue](http://www.w3schools.com/js/js_break.asp)

## Pre Study

### While Loops

`While` loops allows you to execute a block of code while a certain condition exists. 

```js
var i = 0;
while (i <= 10){
  console.log(i++);
}
```

The above loops until `i` is bigger than 10; in other words, until the condition is no longer `true`.

```js
var items = ['dog', 'cat', 'fish', 'horse', 'bird'];
var i = 0;

while (i < items.length) {
  console.log(items[i]);
  i++;
}
```

With this while-loop, `items.length` is equal to 5. So our condition says to loop while `i` is less than 5. Then since `i` started at 0 and the loop increments `i` with each iteration, this while loop is basically a fancy way of counting from 0 to 4.

The end result is the output of each animal name in the array.

While-loops are generally good for looping to an unknown value. It's difficult at the beginner level to understand what circumstances would create an unknown amount of loop iterations. So the above loop just looks at the array to determine how many times it should loop.

### For Loops

- `for` loops allow you to execute a block of code a specified number of times.
- The syntax in a `for` loop includes three expressions separated by semicolons.
  - First expression is the initialization
  - Second expression is the condition
  - Third expression is the increment or modification

The first expression initializes the value at the beginning of the loop. The second expression tests the condition each time around the loop, and finally the modification (third) expression is executed at the end of each iteration.

```js
for (i = 0; i <= 10; i++) {
    console.log(i);
}
```

The above loop initialized the value of `i` to 0. The loop will iterate (loop) as long as `i` is smaller than 10. Also `i` will increase by `1` (`i++`) with each iteration of the loop.

Each type of loop has a purpose. For-Loops are generally good for looping to an exact number. Since arrays have a finite number of values they hold, the for-loop has traditionally been used to loop through the values of an array. Let's see an example: 


```js
var items = ['dog', 'cat', 'fish', 'horse', 'bird'];

for (i = 0; i < items.length; i++) {
  console.log(items[i]);
}
```

Notice that this array does the same thing as the while-loop example. Only with the while-loop, we had to control the iterations by inventing our own variable to count with - so we used `i`. In the for-loop however, the mechanism for counting `i` form 0 to the length of the array is built into the mechanics of the for-loop.

### Review

Where while-loops are idea for looping an unknown number of times, for-loops are good at looping a specific number of times. Both can be used to loop over an array though as seen with examples.


### For-In Loops

When we're deciding which type of loop we want to use, consider that all loops are capable looping through an array. However, the next few loops were specifically designed with arrays in mind.

The for-in loop works as follows:

```js
var list = [5, 6, 7, 8];

for (i in list){
    console.log(i);
}
```

The above will output 0, 1, 2, then 3. That's because `i` represents the index of the array items. The end result is that this loop works just like the for-loop in terms of `i` counting through all the array items, only the syntax is much easier to remember.

So how do we output the values?

```js
var list = [5, 6, 7, 8];

for (i in list){
    console.log(list[i]);
}
```

Since `i` represents each index of the array, we can access the values by stating `list[i]`.

### For-Each Loops

The previous loops are very traditional and most programming languages will have a while-loop, a for-loop, and something that closely resembles JavaScript's for-in loop. However, JavaScript (as of version 5) has a new type of loop which is a bit more exotic called the for-each loop. The reason why it's more exotic is because it's the only one in the group that has a callback function:

```js
var animals = ['puppies', 'kittens', 'ducklings'];

animals.forEach(function(animal, i) {
    console.log(animal);
});
```

Take note that `animals` and `animal` are two difference variables. `animals` is our array that we're looping over. Then our callback function defines two new variables `animal` and `i`. Just as in all callback functions, the names of the variables is completely up to us, just know that this callback function for `forEach` will pass you the array's value first and the index second. So naturally it names sense to call the first variable `animal` and the second `i`.

Since we're not using the index variable in the example above, we can write the code like this:

```js
var animals = ['puppies', 'kittens', 'ducklings'];

animals.forEach(function(animal) {
    console.log(animal);
});
```

Without the `i` variable. Just because the loop is going to pass us that second variable doesn't mean we have to accept it. In each of these two examples, the code output:

```sh
puppies
kittens
ducklings
```