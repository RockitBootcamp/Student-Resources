# Lesson 15: CommonJS (with Browserify)

Identifier   | Objectives
-------------|------------
JS: 15.1     | Demonstrate defining a module
JS: 15.2     | Demonstrate using the `require()` function
JS: 15.3     | Explain the difference between packages and modules
             | &bull; Explain where packages exist

## Resources

- [Modules Reference](https://nodejs.org/api/modules.html)

## Pre Study

> **What is a module?**

A module is a part of an application or a library that provides a distinct set of features or functionality. Generally, modules should be as small as possible–meaning that they should only include the minimum functionality to achieve a particular goal.

For example, a "dropdown" module would contain functionality for creating dropdown components and controlling the dropdown behavior. The module would **not** contain any code related to interacting with other page components such as form elements.

### 14.1 Defining a module

With CommonJS style modules, special Objects are provided for exporting the module's functions.

#### 14.1.1 `exports`

This Object is used to export functions from your module individually

```js
exports.multiply = function multiply() {
  
};

exports.divide = function divide() {
  
};
```

This method exports your module as an Object with the defined functions. If you inspected it, it would look like

```js
{
  multiply: function multiply() {},
  divide: function divide() {}
}
```

#### 14.1.2 `module.exports`

This Object allows you to directly assign the module's root. The following would be equivalent to the previous method:

```js
module.exports = {
  multiply: function multiply() {},
  divide: function divide() {}
};
```

You can also export a function directly using `module.exports`:

```js
module.exports = function multiply() {
  
};
```

### 14.2 Requiring a module

To use a module, simply assign the return value of `require()` to a variable. 

> Note that the file extension is optional. Additionally, if the path is a directory `require()` will attempt to load `index.js` from the directory by default.

```js
var maths = require('./maths');

console.log(maths.multiply(3, 4)); // => 12
```

An example module that exports a function directly with `module.exports`:

```js
var multiply = require('./multiply');

console.log(multiply(2, 3)); // => 6
```

### 14.3 Requiring a package

When a value is given that isn't a path to a file, `require()` assumes it's a package name and will attempt to load it from the `node_modules` directory.

```js
var _ = require('lodash');
var $ = require('jquery');
```
