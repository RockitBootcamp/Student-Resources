# Lesson 1: Basic Concepts

Identifier   | Objectives
-------------|------------
PHP: 1.1     | Demonstrate opening and closing tag syntax
PHP: 1.2     | Use basic PHP Variables
             | &bull; Assignment Operator `=`
PHP: 1.3     | Demonstrate use of strings
             | &bull; Enclosed in double or single quotes
             | &bull; Escaping quotes in strings
PHP: 1.4     | Demonstrate use of the echo construct
PHP: 1.5     | Use PHP Comments
             | &bull; One-line
             | &bull; Multi-line
PHP: 1.6     | Demonstrate modularization with...
             | &bull; `include` and `include_once`
             | &bull; `require` and `require_once`

## Resources
- __W3 Schools__ [PHP Syntax](http://www.w3schools.com/php/php_syntax.asp) 
- __W3 Schools__ [PHP Variables](http://www.w3schools.com/php/php_variables.asp) 
- __W3 Schools__ [PHP Echo and Print](http://www.w3schools.com/php/php_echo_print.asp) 
- __W3 Schools__ [Inlcude vs Include Once](http://www.wallpaperama.com/forums/difference-between-include-vs-include-once-in-php-t6883.html)

## Practice

What makes a PHP file? Simply create a file with a `.php` extension is technically all it takes. However, in order to execute PHP code within the file, you'll also need to designate an area of the file with opening and closing tags as follows:

Filename: `index.php`
```php
<?php
// Code goes here
?>
```

Start a block of PHP by using the opening tag: `<?php`. In some documentation you might see alternatives, but this is the official syntax that works the best across servers.

The section that reads "Code goes here" is in a comment. There are two main ways to do comments in PHP, one is to start a line of code with two forward-slashes. Another way to do comments is with `/*` and `*/`, as in:

```php
<?php
/* Code goes here */
?>
```

> Notice the asterisks go on the inside of the forward slashes

Then to end your code, use `?>`. Note that this closing tag is optional in some cases, and there are some cases when it is discouraged to use. We'll go over those later, for now just always use it.

## Variables and Assignments

Programming is largely about creating data stored in variables. To store data in a variable simply create the variable as follows:

```php
<?php

$x = 5;

?>
```

This code creates a variable `$x` with the value of `5`. Variables must follow these rules:

- Starts with the `$` sign, followed by the name of the variable
- Variable name must start with a letter or the underscore character
- Variable name cannot start with a number
- Variable name can only contain alpha-numeric characters and underscores (A-Z, 0-9, and `_` )
- Variable names are case-sensitive ($age and $AGE are two different variables)

> All programming languages have rules similar (not necessarily the exact same) to these for making variables.

The equal sign is actually called an "operator", specifically the assignment operator. There are more operators we'll learn about later.

The `5` is the integer value we're assigning to the variable, and the semicolon is what ends our "statement";

## Strings

Strings in programming are how we hold text based data. In the example above, we stored a number in our variable, but in order for the programming language to differentiate text from code, we'll need to use quotation marks:

```php
<?php

$first_name = 'Dave';
$last_name = "Smith";

?>
```

The use of quotation marks makes strings. Notice the use of single quotes vs double quotes. In PHP, you can use either single or double, as long as you end the string with the same type of quote you started with. 

### Escaping

Since the quotation marks are significant in making the string, we need to take extra consideration when we want to use quotation marks within the string. Consider this sentence: `The code doesn't work`. Let's write some code:

```php
<?php

$text = 'The code doesn't work'; // causes error

?>
```

The problem here is that the first quote starts the string, but which quote ends it? This code will confuse PHP and cause an error. What we need is a way to tell PHP that the single quote in `don't` is actually a part of the string and not the end of the string. To do this we need "escaping".

```php
<?php

$text = 'The code doesn\'t work'; // escaping

?>
```

Escaping is when we use backslashes to indicate that we want this character (in this case a quotation mark) to literally be a part of the string. Note that the backslash is not going to become a part of the string, it's just there to instruct PHP of what's going on. The string we produced is going to be `The code doesn't work`.

It's important to know that we only needed this escaping concept in this case because there was a conflict with wanting to use single quotes to define the string and also use single quote in the string. Had we used double quotes to make the string, there would have been no need to escape:


```php
<?php

$text = "The code doesn't work";

?>
```

In this case, we don't have to escape because PHP knows that double quotes are significant for making the string. Therefore single quotes aren't confusing to PHP.

So what if we want to use double quotes in the string that's defined with double quotes? Then we need escaping again:

```php
<?php

$text = "And then he said, \"I'm ready to go\" to the clerk";

?>
```

With the above example, we're using double quotes to define the string. Therefore, double quotes have the potential to confuse PHP if we don't escape them, so we do. Notice that the single quote in this case doesn't need to be escaped. Let's do the same sentence defined with single quotes:

```php
<?php

$text = 'And then he said, "I\'m ready to go" to the clerk';

?>
```

Now because the single quotes are used to define the string, the single quote in the string needs to be escaped and the double quotes don't need to be.

So, as you can see, you have the choice of using either single quotes or double quotes to make strings, but just be aware of escaping for your choice.

So which one is better? It depends. Most developers prefer to use single quotes most the time unless there's a good reason to use double quotes. Imagine our PHP variable is going to hold HTML code:

```php
<?php

$html = '<a href="index.html" class="home-link">Home</a>';

?>
```

Since PHP is used to create dynamic HTML, and HTML often has double quotes, it would be nice if we didn't have to escape the double quotes. So maybe it makes sense to use single quotes as we just did. If we had used double quotes to make this string, it would look like this:

```php
<?php

$html = "<a href=\"index.html\" class=\"home-link\">Home</a>";

?>
```

This took extra work for us to escape, therefore, the first way was probably better.

## Output

So far we've created variables, but we haven't produced any output. Generally PHP role is to create HTML output for the browser. Simply making variables, as we've been doing, doesn't create any output. The PHP will run and the variables will be created, but since the output isn't created, the page will be blank.

One common way to create output is to use the `echo` construct.

```php
<?php

$html = '<a href="index.html" class="home-link">Home</a>';
echo $html;

?>
```

In this case we are echoing the variable we created. This totally works! But we could have simply echoed the text without creating a variable:

```php
<?php

echo '<a href="index.html" class="home-link">Home</a>';

?>
```

Notice that we're not using an equal sign. That's because `echo` isn't a variable and we're not assigning something to `echo`. `echo` is simply looking for something after the `echo` construct that is a value. That value can come from a variable as in the first case or can literally be a string.

## Comments

Comments in programming are a means of documentation. It's not "code" so it doesn't get executed by the PHP parser. These two examples show the two different ways of making comments:


```php
<?php

// This is the person's age
$age = 40;

/* This is the person's gender */
$gender = 'female';

?>
```

In the first case, we're using two double forward-slashes to make a comment. This is known as a "single line comment". It's called that because the double forward-slashes need to be applied to every single line you want to comment:

```php
<?php

// This
// is the person's
// age
$age = 40;

?>
```

Not that you could write a comment this way, but imagine if you had lots of text for your comment. Using single-line comments requires the forward-slashes on each line.

Using the forward slash with the `*` asterisk makes a multiple line comment:

```php
<?php

/* This
   is the person's
   gender
*/
$gender = 'female';

?>
```

Notice with this style of comment we can have a multi-line sentence without extra comment characters. This style comment just needs the `/*` at the beginning and the `*/` at end of the comment.

Some programmers like to "beautify" their comments. They might do something like this:

```php
<?php

/**
 * This is the person's
 * gender
 */
$gender = 'female';

?>
```

Notice that this is the same multi-line comment that that we had before, it just has some extra stuff. That extra stuff is just there to make the comment look more pleasant. The extra asterisks are meaningless to making the comment. As long as `/*` is at the beginning and `*/` is at the end, then we have the freedom to put anything in the middle.
