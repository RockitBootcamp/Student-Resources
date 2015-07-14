# Lesson 1: Router

Identifier     | Objectives
---------------|------------
Backbone: 1.1  | Explain the general purpose of a Router
Backbone: 1.2  | Demonstrate creating a router "class"
               | &bull; `var Router = Backbone.Router.extend();`
Backbone: 1.3  | Demonstrate creating a router "instance"
               | &bull; `var router = new Router();`
Backbone: 1.4  | Demonstrate creating routes
               | &bull; `var Router = Backbone.Router.extend({ routes: ... });`
               | &bull; `var router.on('route', function() { ... })`;
Backbone: 1.5  | Explain the default route
Backbone: 1.6  | Explain dynamic routes
Backbone: 1.7  | Use `Backbone.history.start();`

## Resources

- [Backbone.Router](http://backbonejs.org/#Router)
- [What is a router](http://backbonetutorials.com/what-is-a-router/)

## Pre Study

Since the advent of AJAX, the concept of "Single-Page Applications" (SPA) have proliferated. Early on, SPAs suffered from a major drawback. Different views within the SPA were not indexable (they couldn't be crawled by search engines, nor bookmarked, etc). An early solution to this was "hash routes", which look something like the following:

```
http://somesite.com/#users/1/profile
```

This "hash route" would tell the app to load the profile view for user `1`.

With modern advances in HTML (specifically the [History API](https://developer.mozilla.org/en-US/docs/Web/API/History)), we are now able to drop the hash and use direct routing, e.g.

```
http://somesite.com/users/1/profile
```

Backbone's `Router` "class" provides this functionality in Backbone applications. Using `Backbone.Router` we can define the actions we want to be triggered for specific routes.

An example implementation would look something like this:

```js
var AppRouter = Backbone.Router.extend({

  routes: {
    'contact': 'contact', // site.com/contact
    'search/:id/info': 'user', // site.com/user/1/info
    'user/:id': 'user'  // site.com/user/1
  },

  contact: function() {
    // ...
  },

  user: function(id) {
    // ...
  }

})
```
