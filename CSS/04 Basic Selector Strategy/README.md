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

Try to select
- `<li>one</li>`
- `<li>two</li>`
- `<li>three</li>`
- `<li>four</li>`

Try first, then [see the solution](solution.md)

### Design a page

Use the contents at "[Design a page](design-a-page)" and edit the `design.css` file until every box has a unique color