# Lesson 1: Basic Selectors

Identifier   | Objectives
-------------|------------
CSS 1.1      | Define: Declaration, Declaration block, rule set, property, value, and selector
CSS 1.2      | Use Tag, Class, and ID selectors
             | &bull; Use individual and combination selectors
CSS 1.3      | Use Multiple Selectors (separated by commas)
CSS 1.4      | Use Descendant selectors
CSS 1.5      | Demonstrate Child selectors

## Resources
- __W3 Schools__ [CSS Tutorial](http://www.w3schools.com/css/default.asp)
- [Getting to know CSS](http://learn.shayhowe.com/html-css/getting-to-know-css/)
- __CSS Tricks__ [Little CSS stuff newcomers get confused about](http://css-tricks.com/little-css-stuff-newcomers-get-confused-about/ )
- [CSS Desgin](http://teacherjohn.com/ucscextension/cssdesign/ex02.html)

## Extra Study

Complex selectors are generally broken down into tags, classes, and IDs. Let's look at a few:

```css
/* Select all paragraphs that are in navs that are in divs */
div nav p {}

/* Select all elements with a class of `.selected` that are in headers that are in elements with a class of `.user` */
.user header .selected {}

/* Select anchors in classes of `.bar` in the ID of `#foo` */
#foo .bar a {}
```

An important thing to know is that selectors can make any combination of tags, classes, and IDs. All of the the previous examples are "descendant" selectors because of the space that's between the parts. If you want to practice how to read selectors, you should read them from right to left and when you encounter a descendant selector, say "That is a descendant of". For instance

```css
p a span {}
```

This can be read "Select any `span` element __that is a descendant of__ an `a` element __that is a descendant of__ a `p` element". Actually there is a cool project that will explain selectors to you. Type "p a span {}" in the [Direct Input field of this page](http://tux.theopalgroup.com/cgi-bin/css3explainer/selectoracle.py) and get the selector explained to you.

### Descendant vs Child

The `>` "child selector" is like the descendant one except it only selects the direct children of a parent element.

Let's use this HTML:

```html
<div>
	<a href="">Logo</a>
	<nav>
		<a href="">Home</a>
		<a href="">Contact</a>
		<a href="">About</a>
	</nav>
	<a href="">Welcome</a>
</div>
```

```css
/* Selects all five anchors in the div (basically any anchor in div) */
div a {}

/* Selects the logo and the welcome anchors */
div > a {}
```

> Note that the child selector doesn't just select the first child (as in the logo), it selects all direct children that match.

### No Space

Can you tell the difference between these two selectors?

```css
div.foo {}

div .foo {}
```

Remember that the space means "that is a descendant of". So the second selector is selecting `.foo` that is a descendant of `div`. When you see no space (as in the first example), that means the `div` is a `.foo`.

```html
<!-- "div.foo" selects this -->
<div class="foo"></div>

<!-- "div .foo" selects this -->
<div>
	<span class="foo"></span>
</div>
```

### Multiple Classes

Elements can have multiple classes at once, as in the second example:

```html
<div class="user"></div>
<div class="user selected"></div>
<div class="selected"></div>
```

Examine the following selectors

```css
/* This selector selects the first two */
.user {}

/* This selector selects the last two */
.selected {}

/* This selector selects ONLY the second one with .user and .selected */
.user.selected {}
```

Remember to not have a space means they are the same element? `.user.selected` means "Find all the elements that have both"

So again, the space matters. `.user.selected` will select

```html
<div class="user selected"></div>
```

But `.user .selected` with the space will select

```html
<div class="user">
	<div class="selected"></div>
</div>
```

Two very different things.

It's also worth noting that when an element has two classes, it doesn't matter what order they come in. These two elements are identical:

```html
<div class="user selected"></div>
<div class="selected user"></div>
```

Likewise, when it comes to doing CSS selectors, doing `.user.selected` and `.selected.user` are the same thing. It doesn't matter what order they come in. 

This rule is only for the "no space" situations. These two selectors have spaces and therefore are very different...

```css
.foo .bar {}
.bar .foo {}
```

...because the firs says `.bar` must be inside of `.foo`, and the next selector says the opposite.