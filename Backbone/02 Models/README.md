# Lesson 2: Models

Identifier     | Objectives
---------------|------------
Backbone: 2.1  | Explain the general purpose of a model
Backbone: 2.2  | Demonstrate creating a model "class"
               | &bull; `var Person = Backbone.Model.extend({ name: 'Dave' });`
Backbone: 2.3  | Demonstrate creating a model "instance"
               | &bull; `var person = new Person();`
Backbone: 2.4  | Use the `defaults` property
Backbone: 2.5  | Use the `get` and `set` method
Backbone: 2.6  | Use the `initialize` method
Backbone: 2.7  | Use the `fetch` method

## Resources

- [Backbone.Model](http://backbonejs.org/#Model)
- [What is a model?](http://backbonetutorials.com/what-is-a-model/)

## Pre Study

In Backbone, Models are sort of the meat-and-potatoes of your application. They are what give structure to your data and handle things like validation, etc.

Where normally you might use plain-old-objects to store a user, such as

```js
var user = {
  firstName: 'Bruce',
  lastName: 'Wayne'
}
```

In Backbone you would store this information in a **Model**. The benefit is that you would be able to specify default values or validate the values of each property, etc. Here's how you would create a new Model.

```js
var User = Backbone.Model.extend()
```

This creates a constructor function that we can use to create new users. `User` is our Model for users. Any time we need to store new user details, we would call the `User` constructor with the user details.

```js
var batman = new User({ name: 'Bruce Wayne' })
```

Now we have a new user object, which we call an **instance**, complete with all the built-in helpers from Backbone, plus any validation and other extras we may have added (in this case none).

### Default values

In some circumstances we may want to have some defaults for each time a new user is instantiated. To do that, let's rewrite our User model.

```js
var User = Backbone.Model.extend({
  defaults: {
    firstName: '',
    lastName: '',
    age: 18
  }
})
```

### Getting and setting values

To access the properties of this new user object, we need to use the `get` method.

```js
console.log(batman.get('name')) // logs "Bruce Wayne"
```

So you can see how we're just passing the name of the property we want to get as a string.

When you need to update the values of properties, you'll need to use the `set` method.

```js
console.log(batman.set('age', 38))
```

### Initialization

Whenever a new instance is created, we can also define some actions we want to take every time. We can do this by adding an `initialize` method when we create a Model. Let's add an `initialize` method to our user model to log whenever a new model instance is created.

```js
var User = Backbone.Model.extend({
  defaults: {
    firstName: '',
    lastName: '',
    age: 18
  },
  initialize: function () {
    console.log('New user created!' )
  }
})
```

## Exercises

[Try it out](http://jsbin.com/gohexohace/edit?js,console) by creating your own users and adding your own default values. You can also provide more properties than there are defaults.
