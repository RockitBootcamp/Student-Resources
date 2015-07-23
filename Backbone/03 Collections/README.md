# Lesson 3: Collections

Identifier     | Objectives
---------------|------------
Backbone: 3.1  | Explain the general purpose of a collection
Backbone: 3.2  | Demonstrate creating a collection "class"
               | &bull; `var PersonList = Backbone.Collection.extend({ model: Person });`
Backbone: 3.3  | Demonstrate creating a collection "instance"
               | &bull; `var personList = new PersonList();`
Backbone: 3.4  | Demonstrate adding a model to a class
               | &bull; `var personList = new PersonList([ person1, person2 ]);`
               | &bull; `personList.add( person3 );`
Backbone: 3.5  | Use the `url` property to designate a server location to fetch models from

## Resources
- [Backbone.Collection](http://backbonejs.org/#Collection)
- [What is a collection](http://backbonetutorials.com/what-is-a-collection/)

## Pre Study

A **Collection** is a *collection* of Models. Pretty self-explanatory, right? But what does that really mean, or what benefit does this provide us?

A Collection provides us an interface to easily populate a collection, access items in the collection, and so on. If you were to use an array to hold all of your items, you would have to write your own loops or functions to get the information you need out of them.

### Creating a Collection

To create a Collection, we extend the `Backbone.Collection` object, just like we do with most other of Backbone's base objects. When you extend the base Collection object, you can provide a Model, otherwise Backbone will use `Backbone.Model`. Whenever a new item is added to the collection, it is created as a new instance of the provided Model.

```js
var DogCollection = Backbone.Collection.extend({
  model: Dog
});
```

This creates the constructor (sometimes called a "class") to build new dog collections. Now, any time we want a new collection of dog objects, we can just instantiate this `DogCollection`.

```js
var dogs = new DogCollection;
```

You can also create a new collection from an array of objects. Backbone will apply the model defined in the collection to each object in the array.

```js
var dogs = new DogCollection([
  {
    color: 'beige',
    size: 'medium',
    ears: 'floppy',
    breed: 'retriever',
    hairLength: 'long'
  },
  ...
]);
```

### Adding items to a Collection

Once we've instantiated, or created, a new collection, we can add items to it.

```js
dogs.add({
  color: 'black',
  size: 'tiny',
  ears: 'pointy',
  breed: 'chihuahua',
  hairLength: 'short'
});
```

### Populating from an API server

We can also populate data from an API server by specifying a URL in the Collection definition. Here's how it works.

```js
var CatCollection = Backbone.Collection.extend({
  model: Cat,
  url: '/api/cats'
});
```

The simplest way, as seen above, is to just specify the relative URL path. This assumes that the API exists at the same domain as the application (page) making the request. This isn't always the case, however. If the API exists elsewhere, you can specify a `urlRoot` property to define the base API URL.

```js
var ReptileCollection = Backbone.Collection.extend({
  model: Reptiles,
  urlRoot: 'http://animals.com'
  url: '/api/repiles'
});
```
