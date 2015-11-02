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
               | &bull; `router.on('route', function() { ... })`;
Backbone: 1.5  | Explain the default route
Backbone: 1.6  | Explain dynamic routes
Backbone: 1.7  | Use `Backbone.history.start();`

## Resources

- [Backbone.Router][router]
- [What is a router][what-is-a-router]

## Pre Study

Since the advent of AJAX, the concept of "Single-Page Applications" (SPA) have proliferated. Early on, SPAs suffered from a major drawback. Different views within the SPA were not indexable (they couldn't be crawled by search engines, nor bookmarked, etc). An early solution to this was "hash routes", which look something like the following:

```
http://somesite.com/#users/1/profile
```

This "hash route" would tell the app to load the profile view for user `1`.

With modern advances in HTML (specifically the [History API][history]), we are now able to drop the hash and use direct routing, e.g.

```
http://somesite.com/users/1/profile
```

Backbone's `Router` "class" provides this functionality in Backbone applications. Using `Backbone.Router` we can define the actions we want to be triggered for specific routes.

An example implementation might look something like this:

```js
var AppRouter = Backbone.Router.extend({
  // Routes
  routes: {
    'contact': 'contact', // site.com/contact
    'users/:id/info': 'userInfo', // site.com/users/1/info
    'users/:id': 'userById'  // site.com/users/1
  },

  // Controllers
  contact: function () {
    // ...
  },

  userById: function (id) {
    // ...
  },

  userInfo: function (id) {
    // ...
  }

})
```

The `:id` part in the route is called a *parameter*. Think of it like a placeholder for a value, or like a variable. The value that takes the place of the param will be sent to the corresponding controller. For example, the number `1` in the route `site.com/#/users/1` will be the `id` in the `userById` controller function.

Routes will be resolved in the order they're defined in if more than one would match. For instance if you have the following two routes, the `usersList` controller would be always called and the `userById` would never get called because the former would always match first. Obviously this example would be an anti-pattern.

```js
  routes: {
    'users/*': 'usersList',
    'users/:id': 'userById'
  },
```

You can define a "catch-all" or in other words default route by defining a route like the following as the last route definition:

```js
  routes: {
    // other routes...
    '*action': 'defaultRoute'
  },
```

This will call the `defaultRoute` controller if no other route matched the current URL. This is useful for displaying a 404 page for instance.

> :fire: PRO-TIP: Allow any route to optionally end in `/` by adding parens `( )` around the trailing `/`, i.e. `'users(/)': 'usersList'`

## Events

The Router will emit events whenever a route is changed in the app. We can attach event listeners to the router instance to perform actions when a route event is triggered. If the route contains any parameters, those will be passed to the event handler function.

```js
var router = new AppRouter()

router.on('route:usersList', function (userId) {

})
```

[router]: http://backbonejs.org/#Router
[what-is-a-router]: http://backbonetutorials.com/what-is-a-router
[history]: https://developer.mozilla.org/en-US/docs/Web/API/History
