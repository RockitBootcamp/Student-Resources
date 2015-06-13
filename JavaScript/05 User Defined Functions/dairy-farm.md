## The Dairy Farm Exercise

Create a series of function calls that organize farmer John's day. Since it's a dairy farm, he's going to be milking some cows. Each step in John's day will require a function call. Each function call should perform an `echo` to to indicate the step was completed. Start off my calling the `milkCow()` function:

```php
function milkCow() {
    echo 'Milk the cow <br>';
}

milkCow();
```

> Note that the `<br>` tags will become necessary as we get lots of messages.

So far so good right? We'll that is if you like milking cows without buckets. We forgot to get a  bucket first! Let's write that function now:

```php
function getBucket() {
    echo 'Get a bucket <br>';
}

function milkCow() {
    getBucket();
    echo 'Milk the cow <br>';
}

milkCow();
```

Notice that we don't call `getBucket()` at the same place that we called `milkCow()`? This is because `getBucket()` is a prerequisite for milking cows and we want to always make sure we do it, so let's put that function call directly in the `milkCow()` function.

Are we good now? We'll I suppose so if we like to milk cows in the nude! We forgot to get dressed!

```php
function getDressed() {
    echo 'Get dressed <br>';
}

function getBucket() {
    echo 'Get a bucket <br>';
}

function milkCow() {
    getDressed();
    getBucket();
    echo 'Milk the cow <br>';
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

```php
function getDressed() {
    echo 'Get dressed <br>';
}

function getBucket() {
    echo 'Get a bucket <br>';
}

function milkCow() {
    getDressed();
    getBucket();
    echo 'Milk the cow <br>';
}

function goToChurch() {
    echo 'Amen! <br>';
}

//milkCow();
goToChurch();
```

Ok great, now we went to church on Sunday. Oh wait :\  This is embarrassing, let's fix this:

```php
function getDressed() {
    echo 'Get dressed <br>';
}

function getBucket() {
    echo 'Get a bucket <br>';
}

function milkCow() {
    getDressed();
    getBucket();
    echo 'Milk the cow <br>';
}

function goToChurch() {
    getDressed();
    echo 'Amen! <br>';
}

//milkCow();
goToChurch();
```

Ok, we're dressed for church :)

## Main Points

As silly as this exercise is so far, we hope you've learned something. We've been practicing modularity - the process of breaking steps into functions. In programming there is a principal called [The Single Responsibility Principal](http://en.wikipedia.org/wiki/Single_responsibility_principle) which describes that objects (and functions) should have one responsibility. Notice that had we not had the `getDressed()` function isolated on its own, we would have needed to repeat logical steps in the two places that needed that logic. Creating it as a separate function allows us to reuse functionality without repeating ourselves.

## More Cows

Let's make the problem a little more difficult by adding even more cows. What if we had a group of cows we needed to milk. How do we do "groups" or "lists" in programming? We do them with arrays:

```php
function getDressed() {
    echo 'Get dressed <br>';
}

function getBucket() {
    echo 'Get a bucket <br>';
}

function milkCow($name) {
    getDressed();
    getBucket();
    echo 'Milk cow: ' . $name . ' <br>';
}

$cows = ['Sally', 'Betsy', 'Bell'];

foreach ($cows as $cow) {
    milkCow($cow);
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

```php
function getDressed() {
    echo 'Get dressed <br>';
}

function getBucket() {
    echo 'Get a bucket <br>';
}

function milkCow($name) {
    echo 'Milk cow: ' . $name . ' <br>';
}

function milkCows($cowNames) {
    getDressed();
    getBucket();
    
    foreach ($cowNames as $cow) {
        milkCow($cow);
    }
}

$cows = ['Sally', 'Betsy', 'Bell'];
milkCows($cows);
```

Ok, now this is better! This time we're passing the whole array of cow names to a function called `milkCows()`. Notice it's plural. This function knows that we only have to get dressed and get a bucket once. Then it loops over each cow name and calls off to the milk cow function.

It's such a happy farm!