# Lesson 3: Basic Logic

Identifier   | Objectives
-------------|------------
PHP: 3.1     | Demonstrate `if` and `if else` statements
PHP: 3.2     | Demonstrate use of logic operators
             | &bull; `&&` AND operator
             | &bull; `||` OR operator
PHP: 3.3     | Demonstrate use of comparison operators
             | &bull; `==` Equal value
             | &bull; `===` Equal value and type
             | &bull; `!=` Not equal value
             | &bull; `<>` Not equal value
             | &bull; `!==` Not equal value or type
             | &bull; `>` Greater than
             | &bull; `<` Less than
             | &bull; `>=` Greater than or equal to
             | &bull; `<=` Less than or equal to

## Resources
- __W3 Schools__ [PHP If and If Else](http://www.w3schools.com/php/php_if_else.asp)


## Extra Study

Programming languages have "Control Structures". A control structure is a way for the developer to control the flow of their program. If-Statements are basic control structures that allow us to make decisions, which is sometimes called logic.

### If-Statement Syntax

```php
$x = 5;

if ($x == 5) {
    echo 'The x variable is set to five';
}
```

If-Statements sometimes make use of the "comparison operator" which is a `==` double equal sign (with no space between). The comparison operator is very different from the single equal sign `=` assignment operator. The assignment operator will assign values to variables, in this case assigning `5` to `$x` on the first line above. In the If-Statement, it might look like we're assigning `5` to `$x` again but since we're using the comparison operator, it's not an assignment but rather a question. The If-Statement is asking "If `$x` is equal to `5`".

If-Statements use curly braces to define an area of code that will execute if the If-Statement results in true. The code within the "curlies" will only execute if the If-Statement evaluates to true. The code within the curlies will be skipped otherwise.

```php
$x = 5;

if ($x == 6) {
    $y = 3;
}

$z = 4;
```

In this example, `$y` is never set to `3` because the line of code that sets `$y` to `3` only runs if the If-Statement is true. In this case it's not true. However, `$z` will be set to `4` because this line of code is outside of the If-Statement (therefore the If-Statement doesn't apply).

### Else

```php
$x = 5;

if ($x == 6) {
    $y = 3;
} else {
    $y = 9;
}
```

This code is similar to before but now it uses an `else` with the If-Statement. Know that these are actually not two different statements but one statement together. Also, note that each opening curly brace is accompanied by a closing curly brace. The curly before the `else` is closing off the If-Statement. The opening curly after the `else` starts the new block that applies to the `else`. Doing this code creates two distinct "blocks" where it's only possible for either the `if` or the `else` block to run. `$y` will either be assigned `3` or `9`. This depends on the part that's between the parenthesis. In English this code says "If $x is  equal to 6, then set $y to 3, otherwise (else) set $y to 9".

## Practice

### Eggs and Bacon

Let's decide how we should make breakfast today. Our choices are "Cereal", "Eggs and Bacon", and "Skipping Breakfast". We'll make one of these three decisions based on these circumstances:

- Am I hungry?
- Am I lazy?

We'll do this first one together. We'll need to decide how to break down this problem. Did you notice that all the choices are either 1. to eat, or 2. to not eat? Let's start there since that breaks our problem in half. Start by creating our circumstances variable for "hungry" and then an If-Statement that breaks our problem in half:

```php
$hungry = true;

if ($hungry == true) {
    // Eat
} else {
    // Skip Breakfast
}
```

By the way, since `$hungry` is a Boolean, we don't need to compare it to `true` or `false`. Let's rewrite it this way which not only works, it's considered to be a better way:

```php
$hungry = true;

if ($hungry) {
    // Eat
} else {
    // Skip Breakfast
}
```

It practically reads like an English sentence. "If we're hungry, then eat, else skip breakfast". The "eat" area is where we're going to put all the code for our two eating choices: "Cereal" or "Eggs and Bacon".

Let's add our other circumstance variables and fill in the eat logic:

```php
$hungry = true;
$lazy = false;

if ($hungry) {

    if ($lazy) {
        // Eat Cereal
    } else {
        // Eat Eggs and Bacon
    }

} else {
    // Skip Breakfast
}
```

Now that we have the basic framework for our logic, let's make a variable that holds our decision.

```php
$hungry = true;
$lazy = false;
$decision = '';

if ($hungry) {

    if ($lazy) {
        $decision = 'Eat Cereal';
    } else {
        $decision = 'Eat Eggs and Bacon';
    }

} else {
    $decision = 'Skip Breakfast';
}

echo $decision;
```

We start the decision as being empty because we don't know what decision will be made until the logic completes. So what will the output be based on our circumstances? As you can see we'll be eating Eggs and Bacon. Sorry vegans.

When you practice writing code, it's not enough to just write it and look at it or read it in a blog, __YOU SHOULD RUN IT!__ Run this code. Then change the variables at the top and see what different outcomes you get.

### Let's move

Now let's practice some logic for deciding how we'll travel to school. Your choices are "small car", "pickup truck", "bike", or "buss".

The circumstances are:

- Do I want to own a vehicle?
- Is school close?
- Do I like to go off-roading?

Of these circumstances, which one cuts our problem in half the best? I would say it's "Do I want to own a vehicle". If that is yes, then we'll need a car or truck. If no, then bike or buss. Let's see if you can do the logic to complete this problem.

### Cat or dog

Let's decide if you're a cat person or a dog person (or neither). Write some logic that shows which one you are. Feel free to come up with your own circumstances but some options might be:

- Do I travel a lot?
- Do I like to take walks?
- Do I want my face trampled on in the morning?
- Do I want to teach my pet tricks?
- Am I crazy?

You won't need all these circumstances, maybe just a few.
