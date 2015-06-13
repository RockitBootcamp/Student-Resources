# Lesson 14: AMD (with RequireJS)

Identifier   | Objectives
-------------|------------
JS: 14.1     | Demonstrate defining a module
JS: 14.2     | Demonstrate using `require()` function
JS: 14.3     | Demonstrate RequireJS configuration
JS: 14.4     | Explain using jQuery with AMD


## Resources

- [RequireJS API Docs][requirejs docs]
- [Using RequireJS with jQuery][requirejs jquery]
- [RequireJS `define`][requirejs define]

## Pre Study

> **What is a module?**

A module is a part of an application or a library that provides a distinct set of features or functionality. Generally, modules should be as small as possible–meaning that they should only include the minimum functionality to achieve a particular goal.

For example, a "dropdown" module would contain functionality for creating dropdown components and controlling the dropdown behavior. The module would **not** contain any code related to interacting with other page components such as form elements.

### File and folder structure

When using AMD, best practice dictates that code should be separated into individual files per module. This helps keep your code organized and separated.

### Defining a module

In AMD, module definitions generally follow this pattern

```js
define(function () {

});
```

The name of the module is automatically determined based on the filename in which it is defined. So for example, if this file is in `js/modules/dropdown.js` in your project, the module will be internally referenced as "dropdown".

The code inside the module definition will be handed off to any part of your application that requires it in using the `require()` function. Your module definition **must** `return` whatever you want to export.

A module that returns nothing is meaningless and not useful.

Here's an example multiplication module (multiply.js):

```js
define(function () {
	return function multiply() {
		var n = arguments[0];
		var ns = [].slice.call(arguments, 1);

		if (!ns.length) return n;
		return n * multiply.apply(this, ns)
	};
});
```

### Requiring a module

In order to use an AMD module somewhere in your application, you'll need to require it in.

Using the multiplication module we defined above, here's an example of how to require it:

```js
requirejs(['multiply'], function(multiply) {

});
```

By breaking the signature down into its parts, we can understand what is going on.

The first argument `['multiply']` is an Array that describes which **dependencies** you need. "Dependency" is just a way of saying "the code here needs this module to function". In other words, in the function above, any code within it needs the multiply module.

The second argument `function(multiply) {...}` is your callback function. This function will be called once all of the dependencies are finished loading. You can see here the first parameter is named after the first dependency listed.

So putting that all together, we can see how we can now access the multiplication module:

```js
requirejs(['multiply'], function(multiply) {
	var result = multiply(2, 3, 4); 
	console.log(result); // => 24
});
```

> Module **definitions** can also include dependencies by passing a dependency array as the first argument: `define(['bar'], function (bar) {...});`

### Configuring RequireJS

RequireJS has many configuration options available for customizing its behavior. Among the many options, you can set a default path prefix ("baseUrl") and define shims.

Using a default path (or "baseUrl") is the most common config used. It will allow you to use more terse naming when specifying dependencies.

```js
// Without "baseUrl" config
requirejs(['js/modules/models/user', 'js/modules/views/users'], function (UserModel, usersview) {

});

// With "baseUrl" config set to "js/modules"
requirejs(['models/user', 'views/users'], function (UserModel, UsersView) {

});
```

The following is an example of how to configure the "baseUrl". This configuration should be placed in your main (entry-point) script file, before any module loading happens.

```js
requirejs.config({
  baseUrl: 'js/modules'
});
```

Shims are useful for older libraries that do not follow an AMD or CommonJS module style (i.e. they do not export something to be used with `require()`). Consider the following library (foo.js):

```js
var Foo = function () {...}
```

The variable `Foo` would end up in the global namespace, so it can't be exported like a module. A shim can work around this:

```js
requirejs.config({
  shim: {
    foo: {
      deps: ['beep', 'boop'],
      exports: 'Foo'
    }
  }
});
```

RequireJS will load Foo's dependencies, then load Foo, then get the global `Foo` variable and export that to any module that depends on Foo.

Refer to the [RequireJS documentation][requirejs docs] for more information about these and other config options.

[requirejs docs]: http://requirejs.org/docs/api.html "RequireJS API Documentation"
[requirejs jquery]: http://requirejs.org/docs/jquery.html
[requirejs define]: http://requirejs.org/docs/api.html#define
