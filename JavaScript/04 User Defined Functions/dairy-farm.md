## The Dairy Farm Exercise

> Teachers: this one takes at least 45 minutes to do right!

Create a series of function calls that organize farmer John's day. Since it's a dairy farm, he's going to be milking some cows. Each step in John's day will require a function call. Each function call should perform an `echo` to to indicate the step was completed. Start off my calling the `milkCow()` function:

```js
var milkCow = function() {
    console.log('Milk the cow');
}

milkCow();
```

So far so good right? We'll I guess you like milking cows without buckets. We forgot to get a  bucket first! Let's write that function now:

```js
var getBucket = function() {
    console.log('Get a bucket');
}

var milkCow = function() {
    getBucket();
    console.log('Milk the cow');
}

milkCow();
```

Notice that we don't call `getBucket()` at the same place that we called `milkCow()`? This is because `getBucket()` is a prerequisite for milking cows and we want to always make sure we do it, so let's put that function call directly in the `milkCow()` function so it would be impossible to milk the cow without getting a bucket first. You might say that this is a strategy for how we've organized our functions.

Are we good now? We'll I suppose so if we like to milk cows in the nude! We forgot to get dressed!

```js
var getDressed = function() {
    console.log('Get dressed');
}

var getBucket = function() {
    console.log('Get a bucket');
}

var milkCow = function() {
    getDressed();
    getBucket();
    console.log('Milk the cow');
}

milkCow();
```

Ok, now if we run this code we'll get:

```sh
Get dressed
Get a bucket
Milk the cow
```

> Remember, milking cows in the nude is illegal in at least 3 states!

Now let's plan for Sunday. What do we do on Sundays? Well we go to church and we don't milk any cows. So let's write that function:

```js
var getDressed = function() {
    console.log('Get dressed');
}

var getBucket = function() {
    console.log('Get a bucket');
}

var milkCow = function() {
    getDressed();
    getBucket();
    console.log('Milk the cow');
}

function goToChurch() {
    console.log('Amen!');
}

//milkCow();
goToChurch();
```

Ok great, now we went to church on Sunday. Oh wait :\  This is embarrassing, let's fix this:

```js
var getDressed = function() {
    console.log('Get dressed');
}

var getBucket = function() {
    console.log('Get a bucket');
}

var milkCow = function() {
    getDressed();
    getBucket();
    console.log('Milk the cow');
}

function goToChurch() {
    getDressed();
    console.log('Amen!');
}

//milkCow();
goToChurch();
```

Ok, we're dressed for church :)

## Main Points

As silly as this exercise is so far, we hope you've learned something. We've been practicing modularity - the process of breaking steps down into small reusable functions. In programming there is a principal called [The Single Responsibility Principal](http://en.wikipedia.org/wiki/Single_responsibility_principle) which describes that objects (and functions) should have one responsibility. Notice that had we not had the `getDressed()` function isolated on its own, we would have needed to repeat logical steps in the two places that needed that logic. Creating it as a separate function allows us to reuse functionality without repeating ourselves.

## More Cows

> One must understand arrays for this part

Let's make the problem a little more difficult by adding even more cows. What if we had a group of cows we needed to milk. How do we do "groups" or "lists" in programming? We do them with arrays:

```js
var getDressed = function() {
    console.log('Get dressed');
}

var getBucket = function() {
    console.log('Get a bucket');
}

var milkCow = function($name) {
    getDressed();
    getBucket();
    console.log('Milk cow: ' . $name . '');
}

var cows = ['Sally', 'Betsy', 'Bell'];

for (i in cows) {
    milkCow(cows[i]);
}
```

Take a moment to study the code. We now have an array of cow names and we're looping through each one to milk all three cows. Notice how we changed the `milkCow()` function to receive an argument for the name of the cow? The code now outputs:

```sh
Get dressed
Get a bucket
Milk cow: Sally
Get dressed
Get a bucket
Milk cow: Betsy
Get dressed
Get a bucket
Milk cow: Bell
```

So it's cleaver that we're using an array and a loop to milk multiple cows, but if you really look at the output, something seems strange. Why do we have to get dressed and get a bucket multiple times? Let's change our code a bit:

```js
var getDressed = function() {
    console.log('Get dressed');
}

var getBucket = function() {
    console.log('Get a bucket');
}

var milkCow = function(name) {
    console.log('Milk cow: ' + name);
}

var milkCows = function(cowNames) {
    getDressed();
    getBucket();
    
    for(i in cowNames) {
        milkCow(cowNames[i]);
    }
}

var cows = ['Sally', 'Betsy', 'Bell'];
milkCows(cows);
```

Ok, now this is better! This time we're passing the whole array of cow names to a function called `milkCows()`. Notice it's plural. This function knows that we only have to get dressed and get a bucket once. Then it loops over each cow name and calls off to the milk cow function.

It's such a happy farm!