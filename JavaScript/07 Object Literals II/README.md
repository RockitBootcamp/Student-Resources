# Lesson 7: Object Literals II

Identifier   | Objectives
-------------|------------
JS: 7.1      | Explain nested Object Literals
JS: 7.2      | Explain methods
JS: 7.3      | Use `this` to access parts of an object

## Resources

- [JavaScript Objects](http://www.w3schools.com/js/js_object_definition.asp)
- [Understand JavaScript's "this" With Clarity, and Master It](http://javascriptissexy.com/understand-javascripts-this-with-clarity-and-master-it/)

## Pre Study

In previous lectures, we learned how to make objects like this person object:

```js
var person = {
  firstName: "Bruce",
  lastName: "Wayne
}
```

In programming, objects contain data and functionality. So far we've only made objects that contain data. But to add functionality, we need to add functions:

```js
var person = {
  firstName: "Bruce",
  lastName: "Wayne",
  getFullName: function() {

  }
}
```

Just as we can assign functions to variables, we can assign functions to the keys of our object. Also, when a function exists inside an object as it does in the example, we refer to it as being a "method".

So you might say, the person object has two properties (`firstName`, and `lastName`) and has one method (`getFullName`)

So why put methods inside objects? The purpose is to provide functionality to our object. For instance, we can finish the method to look like this:

```js
var person = {
  firstName: "Bruce",
  lastName: "Wayne",
  getFullName: function() {
    return this.firstName + ' ' + this.lastName;
  }
}

console.log( person.getFullName() ); // Outputs: Bruce Wayne
```

There are a few things going on here. For starters, let's focus on the `console.log` line. Notice that in order to call our function (which is a method), we need to state the object name followed by a dot, followed by the method name. Then since methods are essentially functions, we need to have the opening and closing parenthesis to "call" the method.

Now let's consider the method `getFullName` and it's use of the term `this`. As it turns out, the term `this` is a special reserved word in many programming languages. The term `this` and it's meaning changes depending on context, but in the case of objects, `this` refers to the object itself.

Still confused? Consider this code:

```js
var person = {
  name: "Dave"
  getName: function() {
    console.log(this.name)
  }
}

console.log( person.name ); // Outputs: Dave
person.getName();           // Outputs: Dave
```

We have two lines of code that will ultimately output "Dave". The first should be review. If we want to access the `name` property, we can access it by mentioning the object name first, then a dot, then the property. So far so good? If not, go back and review how basic object literals work from the previous lecture.

Now look at the last line of code: `person.getName()`. This line calls our method. Inside the method (which is inside our object), notice that we don't access the object's name by typing `person.name`. Instead we type `this.name`. The term `this` is used inside the object to refer to the object. But outside the object we have to use the object's name, which is "person"

