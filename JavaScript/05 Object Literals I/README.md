# Lesson 5: Object Literals I

Identifier   | Objectives
-------------|------------
JS: 5.1      | Demonstrate Object Literal Creation Syntax
             | &bull; `var x = {};` Empty Object
             | &bull; `var x = {firstName: 'Joe', lastName: 'Smith'};`
JS: 5.2      | Demonstrate adding new members to objects
             | &bull; `x.age = 50;` Dot Syntax
JS: 5.3      | Demonstrate accessing values of object
             | &bull; `var value = x.age` Dot Syntax
JS: 5.4      | Explain JSON

## Resources

- __Brad's Gist__ [Objects](https://gist.github.com/bradwestfall/002312c3628eac9cc215)
- [Object Literals](http://www.dyn-web.com/tutorials/object-literal/)
- [Basics of Object Oriented JavaScript](http://code.tutsplus.com/tutorials/the-basics-of-object-oriented-javascript--net-7670)
- [JSON](http://htmldog.com/guides/javascript/intermediate/json/)

## Pre Study

Every programming language has an ability to hold primitive data types, in other words, we can store Strings, Booleans, and Numbers into variables. But those variables hold one atomic value. For instance a variable cannot hold a string and a boolean at the same time.

We can assign a string to a variable. Then we can override it to be a boolean:

```js
var name = 'Dave';
var name = true;
```

...but at any given moment it time it can only hold one atomic value.

That is until we start using Arrays and Objects.

This lesson is about the latter. Objects are a way to describe something. Actually objects do a really good job at describing one thing. But to describe one thing, like a person, we need to describe several characteristics of that person. In other words we need to describe that person's properties.

In JavaScript, there are several ways to create objects, and one way is called an **Object Literal:**

```js
var person = {name: 'Dave', teacher: true};
```

This is the syntax for creating an object literal. A good analogy for an object is that it is a bucket of stuff. If you were carrying a bucket you might say you're holding one thing. But if the bucket had stuff in it, you might say that while you are carrying one thing, the bucket is carrying multiple things.

This is true of how objects work. In our code above, the `person` variable is holding one thing because that's all a variable can do in programming. The one thing is the "bucket", the object. The object however holds two things:

1. A **name** variable equal to the string `Dave`
1. A **teacher** variable equal to the boolean `true`

This is a special syntax for creating "variables" in objects. Notice that instead of equal signs there are colons. And also notice that the sets of variables are delimited by commas. Also we use the term "variable" loosely here because the proper term for these variables that are inside an object is the term **Property**.

### Beautiful Object Literal Creation

If you can imagine, having a dozen more properties added to this person object might make the line of code really long and hard to read. So as a means of beautification, we can write object literals like this:

```js
var person = {
    name: 'Dave',
    teacher: true,
    age: 30,
    kids: 2,
    hobby: 'Fishing'
    };
```

> Often times when we take a long line of code and write it on multiple lines, it's common to use tabs to indicate it's a continuation of the same line of code.

Notice that even with beautification, we still need those commas to separate each property and value pair.

## Adding More Properties

Let's say we want to add some properties to an object assuming the object has already been created:

```js
var person = {
    name: 'Dave',
    teacher: true,
    age: 30,
    kids: 2,
    hobby: 'Fishing'
    };

person.state = 'Montana';
```

Using what's called "dot syntax", we can augment an object by stating the object's variable name, then a dot, then a new property name. **Note that you cannot have spaces around the dot**

Also note that we only use the `property: value` syntax with colons when creating the initial object literal. After the object is created, we use equal signs again.

The above code does the same thing as if we had the `state` property all along:

```js
var person = {
    name: 'Dave',
    teacher: true,
    age: 30,
    kids: 2,
    hobby: 'Fishing',
    state: 'Montana'
    };
```

## Starting with an empty object

One could make an empty object like this:

```js
var person = {};
```

Then they could add properties like this:

```js
var person = {};

var person.name = 'Dave';
var person.teacher = true;
var person.age = 30;
var person.kids = 2;
etc...
```

The end result is all the same

## Accessing Values from the Object

Let's assume we have this object:

```js
var settings = {
    url: '/path/on/server',
    cache: false
}
```

It doesn't really matter if you don't understand "why would we make an object like this". The main point is that it is an object and it has two properties.

If you were to do a `console.log(settings)` of this object you would get the consoles interpretation of the values. However, what if we just want to get the `url` property as a string?

For that, we would use dot syntax just as before:

```js
console.log( settings.url );
```

This would output "/path/on/server" to the console. So as you can see, the dot syntax is a means of getting inside the object for both setting and getting properties.

## JSON

JSON stands for **JavaScript Object Notation**

Object literals look strikingly similar to JSON. In fact, JSON was inspired by object literals.

Where Object Literals only happen in actual JavaScript, JSON is a similar syntax that can be used to send data from Client to Server or from Server to Server. In other words, it's a string of characters that happens to look like this:

```json
{"name": "Dave", "age": 32}
```

So imagine if you sent a request to a server for a particular person's details, that server could respond with HTML, or it could respond with JSON like the string above. JSON was built to be a string format that serializes data so that JavaScript could understand it.

There are some differences though. For instance JSON's properties must have double quotes around them

Just know that using single or double quotes around Object Literal properties is actually optional as well, but they are required for JSON.