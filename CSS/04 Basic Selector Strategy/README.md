# Lesson 4: Basic Selector Strategy

Identifier   | Objectives
-------------|------------
CSS 4.1      | Demonstrate good judgment for using classes vs tags as selectors
CSS 4.2      | Demonstrate good judgment for class naming
             | &bull; Basics of semantics
CSS 4.3      | Demonstrate basic knowledge of selector optimization for descendant selectors
CSS 4.4      | Demonstrate use of pseudo classes: `:first-child` and `:last-child`

## Resources
- __CSS Tricks__ [Semantic Class Names](http://css-tricks.com/semantic-class-names/)

## Practice

Examine the following HTML. See if you can select specific parts:

```html
<body>
	<div>
		<nav>
			<ul>
				<li>one</li>
				<li>two</li>
			</ul>
		</nav>
		<ul>
			<li>three</li>
		</ul>
	</div>
	<nav>
		<ul>
			<li>four</li>
			<li>five</li>
		</ul>
	</nav>
</body>
```

## one

```css
div nav li:first-child {}
```

Considerations:
- We don't need to include `ul` to get to our target
- `div li:first-child` would also select "three"
- `nav li:first-child` would also select "four"

## two
```css
div nav li:last-child {}
```

## three

```css
div > ul li {}
```

Considerations
- We need to go after the first child `ul` of div so we leave out the one that's in `nav`

## four

```css
body > nav li:first-child {}
```

Considerations
- "four" doesn't exist in `div` but does in `nav`. So what is unique about this `nav` that we can select that is not true of the other ones; it is the only `nav` that is a direct child of `body`