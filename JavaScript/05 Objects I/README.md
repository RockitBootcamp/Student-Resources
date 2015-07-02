# Lesson 5: Objects I

Identifier   | Objectives
-------------|------------
JS: 5.1      | Demonstrate Object Literal Creation Syntax
             | &bull; `var x = {};` Empty Object Literal
             | &bull; `var x = { firstName: 'Joe', lastName: 'Smith' };`
JS: 5.2      | Demonstrate adding new properties to objects
             | &bull; `x.age = 50;` Dot Notation
JS: 5.3      | Demonstrate accessing values of object
             | &bull; `var value = x.age` Dot Notation
JS: 5.4      | Explain JSON

## Resources

- __Brad's Gist__ [Objects](https://gist.github.com/bradwestfall/002312c3628eac9cc215)
- [Object Literals](http://www.dyn-web.com/tutorials/object-literal/)
- [Basics of Object Oriented JavaScript](http://code.tutsplus.com/tutorials/the-basics-of-object-oriented-javascript--net-7670)
- [JSON](http://htmldog.com/guides/javascript/intermediate/json/)

## Pre Study

Objects are what you would call a **keyed collection**. That is, they are collections of values using *keys* (known formally as *properties*) to identify each value.

Most programming languages have a `variable` construct to contain a single value. In other words, we can assign Strings, Booleans, and Numbers, etc, to variables. But those variables hold one atomic value. For instance a variable cannot hold a string and a boolean at the same time.

We can assign a string to a variable. Then we can override it to be a boolean:

```js
var name = 'Dave';
name = true;
```

...but at any given moment it can only hold one atomic value. When we *assigned* the value `true`, it *replaced* the original value. We can no longer retrieve the original value.

That is until we start using Arrays and Objects. This lesson is about the latter.

Objects are a *collection of properties*. Objects do a really good job at describing things. But to describe one thing, like a person, we need to describe several characteristics (or *properties*) of that person.

In JavaScript, there are several ways to create objects, and one way is called an **Object Literal**. This is the syntax for creating an *Object Literal*.

```js
var person = { name: 'Dave', teacher: true };
```

A good analogy for an object is that it is a bucket of stuff. If you were carrying a bucket you might say you're holding one thing. But if the bucket had stuff in it, you might say that while you are carrying one thing, the bucket is carrying multiple things.

This is true of how objects work. In our code above, the `name` variable contains one thing because that's all a variable can do in programming. The one thing is the "bucket", the object. The `person` *object* however holds two things:

1. A `name` property equal to the string `"Dave"`
1. A `teacher` property equal to the boolean `true`

This is a special syntax for creating "variables" in objects. Notice that instead of equal signs there are colons (`:`). And also notice that the sets of variables are delimited by commas. Also we use the term "variable" loosely here because the proper term for these variables that are inside an object is **property**.

### Beautiful Object Literal Creation

If you can imagine having a dozen more properties added to this person object might make the line of code really long and hard to read. So as a means of beautification, we can write object literals like this:

```js
var person = {
  name: 'Dave',
  teacher: true,
  age: 30,
  kids: 2,
  hobby: 'Fishing'
};
```

Notice that even with beautification, we still need commas to separate each property and value pair from the next.

### Adding More Properties

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

Using **dot notation**, we can augment an object by stating the object's variable name, then a dot, then a new property name.

Also note that we only use the `property: value` syntax with colons when creating the initial object literal. After the object is created, we use the assignment operator (`=`).

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

### Starting with an empty object

One could make an empty object like this:

```js
var person = {};
```

Then they could add properties like this:

```js
var person = {};

person.name = 'Dave';
person.teacher = true;
person.age = 30;
person.kids = 2;
// etc
```

The end result is the same.

### Accessing Values from the Object

Let's assume we have this object:

```js
var settings = {
  url: '/path/to/thing',
  cache: false
}
```

It doesn't really matter if you don't understand "why would we make an object like this". The main point is that it is an object and it has two properties.

If you were to do a `console.log(settings)` it would log the entire object. However, what if we just want to get the `url` property as a string?

For that, we would use dot notation just as before:

```js
console.log(settings.url);
```

This would log `"/path/to/thing"` to the console. So as you can see, the dot notation is a means of accessing properties for both setting and getting values.

### JSON

JSON stands for **JavaScript Object Notation**. Object literals look strikingly similar to JSON. In fact, JSON was inspired by object literal syntax.

Where Objects only happen in actual JavaScript, JSON uses a similar syntax that can be used to send data from Client to Server or from Server to Server. In other words, it's a *string* of characters that happens to look like this:

```json
{
  "name": "Dave",
  "age": 32
}
```

So imagine if you sent a request to a server for a particular person's details, that server could respond with HTML, or it could respond with JSON like the string above. JSON was built to be a format that serializes data so that JavaScript could understand it.

There are some differences though. For instance JSON's properties must have double-quotes (`"`) around them, and strings must also use double-quotes. Single-quotes are never valid in JSON.

Just know that using quotes around an Object's properties is optional, but they are required for JSON.
