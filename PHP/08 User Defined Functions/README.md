# Lesson 8: User Defined Functions

Identifier   | Objectives
-------------|------------
PHP: 8.1     | Explain the purpose of making your own functions:
             | &bull; Code reuse
             | &bull; Abstraction of ideas
             | &bull; Making shorter chunks of code
PHP: 8.2     | Demonstrate proper function declaration
             | &bull; Arguments vs Parameters
PHP: 8.3     | Explain and demonstrate the return statement
             | &bull; NULL is returned if there isn't an explicit return statement

## Resources
- __W3 Schools__ [User Defined Functions](http://www.w3schools.com/php/php_functions.asp)
- __PHP For Kids__ [User Defined Functions](http://www.phpforkids.com/php/php-functions-user-defined.php)


## Extra Study

Functions are a way for us to bundle reusable logic together. One analogy is thinking of functions like a recipe. Consider this code:

```php
function add($n1, $n2) {
    echo $n1 + $n2;
}
```

This is a "recipe" for adding two numbers together. One very important thing to know is that functions don't execute on their own, they need to be called. So the above code actally does nothing as of yet.

So let's call the function now:

```php
function add($n1, $n2) {
    echo $n1 + $n2;
}

add(3, 6); // outputs 9
add(1, 2); // outputs 3
```

Now we're calling the function twice. Each time we call the function, we're passing arguments into the function such as `(3, 6)` and `(1, 2)`. When we pass these values in, separated by comma, these values get assigned to the `$n1` and `$n2` variables, called parameters. There are a few key points to know here:

1. The parameters `$n1` and `$n2` are variables that get created each time the function is called. In other words, the first time we call the function, the functions will make `$n1 = 3` and `$n2 = 6`. How does the function know which argument value to assign to which parameter? It's all based on the order that the arguments are stated. The first argument gets assigned to the first parameter etc...
1. Variables created within functions, such as `$n1` and `$n2` in this case, are not available on the outside of the function. This is the subject of "scope" which is documented further down.

Let's do something slightly different now:

```php
function add($n1, $n2) {
    echo $n1 + $n2;
}

$x = 3;
$y = 6;

add($x, $y); // outputs 9
```

Notice in this case we're passing in variables as arguments instead of literal values. But there's a very important point to be made here, which is that we're not actually passing the variables `$x` and `$y` in the function. Instead we're passing the values of `$x` and `$y`. Writing the code this way is exactly the same as what we had before. But it's very important for beginners to know that the variables `$x` and `$y` are only available on the outside of the function, where they were declared, and the variables `$n1` and `$n2` are only available on the inside of the function, where they were declared. The way this code is written, it's like we're assigning the value of `$x` to `$n1`, then the value of `$y` to `$n2`. The variable names **do not have to match.**

### Scope

As stated before, variables created outside of functions are not accessible from inside the function. This code is poor because the function is trying to use the variable `$x` which is outside of it's "scope"

```php
$x = 3;

function foo() {
    echo $x;    // causes an error, $x is undefined.
}

foo(); 
```

Similarly, variables created within a function's scope are not available in the global scope. In this case, we've called the function `foo` which declares a variable `$x` inside itself. Variables that are declared inside functions only live as long as the function is running. This function runs for one line of code: `$x = 7;`. Then the function dies off and the code returns to where the function was called. When the function dies off in this way, all it's variables are reset. But this is only one reason why echoing `$x` at the end wouldn't work. The other major reason is: the two instances of $x in this code are just not in the same scope.


```php
function foo() {
    $x = 7;
}

foo();
echo $x    // causes an error, $x is undefined.
```

Let's test your knowledge further. What do you think the next code will output?

```php
$x = 4

function foo($x) {
    echo $x;
}

foo(5);
```

The answer is `5`. Remember that the function's parameter `$x` has nothing to do with the first line of code. They are in two different scopes. But also the main reason why the output is 5 is because that's what we passed into the function when we called `foo(5)`. Remember that it's what you pass into the function that gets assigned to the functions parameters

### Return

So far we've been creating output within the functions. This is okay for demonstrating how functions work to beginners, but generally functions don't create output. Let's rewrite the `add` function another way:

```php
function add($n1, $n2) {
    $sum = $n1 + $n2;
    return $sum;
}

echo add(3, 6); // outputs 9
```

This time the function is returning a value. Notice I said value? The `$sum` variable has scope which is restricted to inside the function where it was declared. But we can return it's value to the caller. Then notice that the caller can do something with the value, like echoing. Let's rewrite the function another way:

```php
function add($n1, $n2) {
    $sum = $n1 + $n2;
    return $sum;
}

$answer = add(3, 6);
```

Now notice that we are taking the value returned and assigning it to another value. Again it's important to know that `$sum` and `$answer` are in different scopes. What we're doing here is assigning the value that gets returned from the function to `$answer`. It turns out that on the outside of the function (the global scope), we don't really know or care what happens on the inside of the function. As long as we can call `add(3, 6)` and get the right answer back, what do we care what's going on inside the function? Perhaps the function isn't making a `$sum` variable at all:

```php
function add($n1, $n2) {
    return $n1 + $n2;
}

$answer = add(3, 6);
```

This code will produce the exact same result.


### Caller on hold

Another very important thing to know about functions is how the caller must wait for the function to return before the caller can continue. For this example, what is the order that we'll echo the letters:

```php

function foo() {
    echo 'a';
}

echo 'b';
foo();
echo 'c';
```

Keep in mind that even though the function is declared first and has an echo inside it, the function does not execute until it's called. Think of it like a recipe that's on a shelf waiting to be cooked.

For the example, we actually get "bac" for our output. Notice that when the function is called, the next line of code `echo 'c';` has to wait until the function returns. So where is the return? Before we explained the return keyword but this function has no return. In cases where functions don't have a `return` keyword, the function returns when all the lines of code in the function are done. The `return` happens automatically, and actually `null` is returned to the caller.

### Nested Function Calls

It's important to know that the return value a function gives is in fact a value. Take this code for example:

```php
$answer = add(3, 4);
```

The `$answer` variable gets it's value from the function right? So this code is exactly the same as:

```php
$answer = 7;
```

This is important to understand when we're nesting functions. You may have learned that PHP has a built-in function called `strlen()` which takes a string as it's argument and returns the length of characters. So let's nest some function calls:

```php
function add($n1, $n2) {
    return $n1 + $n2;
}

echo add(strlen('hello'), 6); // Outputs 11
```

In this case, we're taking the return value of `strlen('hello')` (which is 5) and passing it in as the first argument. That `5` gets assigned to `$n1` and after that it's business as usual.

Let's take a look at another example. Let's say we have some code that checks to see if the GET variable "age" is set and if it's a number?

```php
if (isset($_GET['age']) && is_numeric($_GET['age'])) {
    ...
}
```

Can these functions be nested?

```php
if (is_numeric(isset($_GET['age']))) {
    ...
}
```

In this case we wouldn't get a PHP error, but our logic isn't exactly sound. When functions are nested, the code executes them from the inside-out. So the first thing to happen here is the `isset($_GET['age']` function call. What does that return? It turns out `isset()` returns a boolean of `true` or `false`. So then it's like we're trying to call `is_numeric(true)`. So in this case `is_numeric()` isn't really checking the value of "age" like we wanted.

Sometimes it just doesn't make sense to nest functions. But let's look at another case when it does:

```php
$checkFor = 'Rob';
$name = $_GET['name'];

if (substr($name, 0, 3) == $checkFor) {
    echo 'The name starts with "Rob"';
}
```

This code just checks to see if the first 3 characters of the GET variable are "Rob". But notice that the number 3 is hard-coded. We chose 3 because that's how many characters "Rob" is. But what if we were to change the `$checkFor` variable to be a different name that's not 3 characters? In that case 3 might not work. Let's make it better:

```php
$checkFor = 'Rob';
$name = $_GET['name'];

if (substr($name, 0, strlen($checkFor)) == $checkFor) {
    echo 'The name starts with "Rob"';
}
```

Now we're not relying on the hard-coded 3. Instead we're cleverly figuring out the length of what the length of `$checkFor` is. Did you notice that this is nested functions? Did you notice that we're taking the value from `strlen()` and passing it in as the last argument of `substr()`?



<hr>

todo next with this document

- functions can call functions, the caller waits for return of control
- nested functions
- singularity principal 


<hr>


## Exercises

```php
// Exercise 1: Write a function that adds two numbers

// Exercise 2: Write a function that adds three numbers

// Exercise 3: Write a function that adds 4 numbers

// Exercise 4: Write a function that returns the absolute value of a number

// Exercise 5: Write a function that concatinates a first and last name

// BONUS Exercise 6: Write a function that checks that a sentance has at least 20 characters, and the first 2 characters are numeric
// "41.67% of people add decimal places to make their statistics look more credible" TRUE
// "Forty-one point sixty-seven per cent of people add decimal places to make their statistics look more credible" FALSE
// "42 owls sing songs" FALSE
// "two owls sing songs" FALSE
```