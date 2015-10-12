# Lesson 15: Templating with Handlebars

Identifier   | Objectives
-------------|------------
JS: 15.1     | Demonstrate Handlebars syntax
JS: 15.2     | Demonstrate use of `<script>` tag to house template markup
JS: 15.3     | Demonstrate `Handlebars.compile()` method
JS: 15.4     | Demonstrate use of function returned by `Handlebars.compile()`
JS: 15.5     | Demonstrate use of Handlebars escaping

## Resources

- [handlebars](http://handlebarsjs.com)

## Pre Study

Handlebars is a templating engine (if you haven't guessed), in fact one of many. The reason templating libraries keep springing up (for just about every programming language, especially those that deal with HTML) is because building complex strings is *difficult* and time-consuming, it's also not a very good separation of concerns. So libraries like Handlebars trade some of that complexity for convenience. By separating the *structure* from the *content* (and flow-control), the developer can focus on one thing at a time, and helps maintain that good *separation of concern*.

## Exercises

- Challenge 1: **Create a MADLIBS form**
  - Do a Google Image Search for "madlibs" and pick one you like
  - Create a template from the text, using handlebars
  - Create a form to ask for the relevant information
  - On form submit, print the completed puzzle to the page

- Challenge 2: **Create an anchor with a template string**
  - Create a new Template as a string `"<li><a href=???>???</li>"`
  - Create an anchor with an href and text
  - Execute the template and add it to the body

- Challenge 3: **Create an anchor with a template from a script element**
  - Create a new template with Script element
  - Use jQuery to get template string
  - Compile template from string
  - Create an object with an href and text
  - Execute the template and add it to the body

- Challenge 4: **Add three links to a `<ul>`**
  - Modify the previous template
  - Loop over the items using Handlebars
  - Create an array of objects (each should have an href and text property)
  - Execute the template and add it to the body
