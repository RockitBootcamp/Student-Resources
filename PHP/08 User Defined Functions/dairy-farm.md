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

Ok great, now we went to church on Sunday. Oh wait :/  This is embarrassing, let's fix this:

```php{15}
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