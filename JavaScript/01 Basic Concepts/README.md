# Lesson 1: Basic Concepts

Identifier   | Objectives
-------------|------------
JS: 1.1      | Explain how to use the script element
             | &bull; For Embedded JavaScript
             | &bull; For External JavaScript
JS: 1.2      | Explain how JavaScript loads in serial
JS: 1.3      | Demonstrate use of the Assignment Operator `=`
JS: 1.4      | Demonstrate use of strings
             | &bull; Enclosed in double or single quotes
JS: 1.5      | Demonstrate use of console.log();
JS: 1.6      | Use JavaScript Comments
             | &bull; One-line
             | &bull; Multi-line
JS: 1.7      | Explain the importance of consistency
             | &bull; Style guides
             | &bull; Following convention

## Resources

- [Syntax](http://www.tutorialspoint.com/javascript/javascript_syntax.htm)
- [`<script>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script)
- [String type](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#String_type)
- [Developer Console](https://developer.mozilla.org/en-US/docs/Tools/Web_Console)
- [Comments](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Lexical_grammar#Comments)
- [Popular style convention][popular convention]

## Pre Study

### `<script>`

Script elements are HTML markup that describe a JavaScript script file or inline-code that should be loaded for the containing resource (i.e. web page).

The basic structure of a script element is as follows:

```html
<script></script>
```

With the above form, inline-code can be placed between the `script` tags, like so:

```html
<script>
  'Hello world!'
</script>
```

The code between the tags will be interpreted as JavaScript, unless otherwise specified.

Script elements also have some attributes available to alter the default behavior, listed below.

Attribute  | Details
-----------|--------
`src`      | Defines the **source** for an external script (the opposite of inline code). External scripts can be loaded from any valid HTTP resource, such as a relative path on the origin server, or a remote host, such as a CDN.
`type`     | Defines the language, i.e. [MIME-type](), of the code. By default the browser will interpret code as `text/javascript`, so this attribute isn't needed for most use-cases.
`async`    | A *boolean* attribute which determines if a script should be loaded **asynchronously**. This means other scripts on the page can start executing, even before this script has finished loading.
`defer`    | *(not yet implemented)* Tells the browser to load this script after the document has been parsed.

Following is an example of a script tag loaded from an external source:

```html
<!-- A script on the same origin (same domain) -->
<script src="scripts/views.js"></script>

<!-- A script on a remote host -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- A script using async -->
<script src="scripts/template.js" async></script>
```

Scripts are parsed (and subsequently interpreted) *in the order they appear in the markup*. For this reason, libraries should almost always come before any application code (the code written specifically for your application).

### The Assignment Operator

The assignment operator, or `=`, is used to **assign** a value to a variable. Variables can be declared without an assignment and assigned a value at a later time.

```js
// This variable is declared, but no value has been assigned
var foo;

console.log(foo); // => undefined

// We can define foo at any time
foo = 'bar';

console.log(foo); // => "bar"

// We can also assign a value immediately when declaring
var beep = 'boop';
```

Variables can be assigned the result of *any* or expression that produces a value.

```js
function boop() {
  return 'boop';
}

var beep = boop();

console.log(beep); // => "boop"
```

### Strings

Strings are a sequence of characters that represent text. Strings in JavaScript are one of the primitive values. However, strings in JavaScript are also wrapped by a `String` object, which provides some helpful methods.

```js
'This is a string'
```

and

```js
"This is also a string"
```

Strings, are bounded by quotes, as shown above. Either double (`"`) or single (`'`) quotes are allowe, however the popular convention is to always use single quotes `'`. Regardless of which you prefer **pick one style and stick to it**, preferably whatever style is already established in the project. Some developers hate `"` for strings, others prefer `"`, but **all** developer hate seeing them mixed.

```js
"This is a string using double quotes"
'This is a string using single quotes'
```

And this is the ensuing nerd rage from your coworker upon seeing that you mixed quote styles:

![](nerdrage.gif)

### The `console` object

The `console` object is a useful construct for developers, but has no useful purpose for end-users. It's primary function is to allow developers to send message to the Dev Tools console, for inspection while debugging.

For the most part, you will be using `console.log()` as seen previously on this page, but there are other methods available for more advanced usage.

```js
console.log('This text will appear on the console');

console.log(myVariable);
```

In the second usage of `console.log()` above, you will see the **value** of `myVariable` written to the console.

[Click here to see what other methods are available](https://developer.mozilla.org/en-US/docs/Web/API/console)—feel free to play around with them in your spare time to familiarize yourself.

### Commenting

Comments are lines of code that *do not get processed* by the interpreter. This allows developers to annotate their code, which is useful for conveying meaning to other developers when the code by itself isn't sufficiently or easily understood, and so on.

Comments come in two flavors, single-line and multi-line. Most developers use *single*-line comments, even for multiple lines. Generally you should follow whatever convention the rest of your team is already using.

```js
// This is a single line comment. This entire line will be ignored by the interpreter, regardless of what else is on the line

var notAComment = 'This is not commented out';

/* This is a mult-line comment
I can include as many lines as I want until the "end comment" 
even "code"!
function wontExecute() {
  console.log('Nothing happened!');
}
Everything will be ignored by the interpreter until it sees: */

var alsoNotAComment = 'The interpreter has resumed its duties';
```

As you can see, single line comments are *any text* that *follows* a double slash `//`. Bear in mind that they can exist on the same line as code as well, as seen here:

```js
var foo = 'bar'; // this comment follows my variable statement
```

Multi-line comments are any text *wrapped* by `/*` and `*/`. They can also appear anywhere in the line, but unlike single-line comments, they can have code following them as well, as seen here:

```js
/* I don't know why anyone would do this, though */ var foo = 'bar';
```

### Style guides and convention

Style guides are documents that describe the conventions that should be followed, usually instituted by a company or project owner, in order to maintain code consistency. 

Style consistency is incredibly important for developers who work together in a collaborative environment such as a team or as a contributor to an open source project. The reason it's important is to maintain the highest level of readability in the code base. If the style (conventions used) is inconsistent, it becomes difficult and tiresome to read the source. Inconsistencies can also lead to missing important potential problems with the code, because too much of your attention is focused on interpreting a style that keeps changing from line to line or from one file to another. Likewise, very consistent code makes it easy to point out potential problems because they can often be easily spotted due to it creating an inconsistency in the coding style.

Style consistency should be maintained across the entire project or organization, even if other developers aren't working on the same file as you. It's also a very good idea to follow [popular conventions][popular convention] even when you are working alone, because a popular coding style will attract like-minded developers. So if you follow the popular conventions, you maximize the likelyhood that a potential contributor will be comfortable with the coding style you use.

Some organizations even strictly enforce style rules, either through code reviews or automatic checkers (known as linters), and often both.

If you follow popular conventions and adhere to specific style rules (e.g. a style guide), your code will be beautiful, and potential employers will notice this. If you are inconsistent and don't follow popular conventions, your code will be a mess, and you'll look like a lazy slob—employers will notice this also.

[Standard JavaScript][standard] aspires to become the *defacto* style guide for JavaScript.

## Exercises

For practice, try the following exercises in your editor:

- Write an inline script element
- Write a external script element
- Write a variable named "foo" with the value "bar"
  - first by declaring foo without a value
  - then by declaring foo with its value in the same statement
- Write a statement that would log the text "Hello world" to the console
- Write a statement that would log the "foo" variable
- Write a single line comment
- Write a multi-line comment

[popular convention]: http://sideeffect.kr/popularconvention/#javascript
[standard]: https://github.com/feross/standard "Standard JavaScript"
