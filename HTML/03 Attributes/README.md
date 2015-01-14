# Lesson 3: Attributes

Identifier   | Objectives
-------------|------------
HTML: 3.1    | Demonstrate HTML attribute syntax
HTML: 3.2    | Explain universal HTML attributes:
             | &bull; `id`
             | &bull; `class`
             | &bull; `title`
             | &bull; `style`
HTML: 3.3    | Describe Common Attributes:
             | &bull; `src`
             | &bull; `href`
             | &bull; `target`
HTML: 3.4    | Explain multiple class attribute syntax
             | &bull; `<div class="foo bar"></div>`

## Resources

- __W3 Schools__ [HTML Attributes](http://www.w3schools.com/html/html_attributes.asp)

## Extra Study

Attributes must be separated from each other and from the tag name by space:

```html
<!-- wrong -->
<ahref="#"class="foo">link</a>

<!-- correct -->
<a href="#" class="foo">link</a>
```

> Also, while tags and attributes can be uppercase, this is also very unpopular among developers.

While quote marks are optional and either single or double quotes can be used, we always encourage the use of double quotes:

```html
<!-- allowed but not recommended -->
<a href=# class=foo>link</a>

<!-- allowed but not less popular -->
<a href='#' class='foo'>link</a>

<!-- best -->
<a href="#" class="foo">link</a>
```

Attributes are never allowed to be used more than once in a single tag:

```html
<!-- not allowed -->
<a class="foo" class="bar">link</a>
```

Attributes cannot have two values with the exception of the `class`attribute:

```html
<!-- This is not two values for title, but rather one value of "foo bar" -->
<a title="foo bar"></a>

<!-- This is how we represent two classes, with spaces -->
<a class="foo bar"></a>
```

### Class Names

Since `class` attributes use spaces to delimit two or more names, it's not possible to have a classname with a space. If a class name is two words, it is common to use hyphens to separate the words, ie: `is-active` or `current-user`.