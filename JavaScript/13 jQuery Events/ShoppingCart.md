# Objective
Create a simple shopping cart using HTML, JavaScript and JQuery.

You will have two sections
- List of Inventory Items
- List of Shopping Cart Items

# Requirements
- Items in the Inventory list have an `Add` Button
- Clicking on an Inventory Item will add it to the Shopping cart
- Clicking on an Item more than once will add the item a second time
- Items in the Shopping Cart have a `Remove` Button
- Clicking on the Remove item will remove the item from the shopping cart

# Example HTML


```html
<!-- Inventory Section -->
<ul class="inventory">
	<li><span>Cat</span><button>Add</button></li>
	<li><span>Dog</span><button>Add</button></li>
	<li><span>Bird</span><button>Add</button></li>
</ul>

<!-- Shopping Cart Section -->
<ul class="cart"></ul>
```

# Output
If you click Cat, Dog, Bird, Dog. You will have

```html
<!-- Inventory Section -->
<ul class="inventory">
	<li><span>Cat</span><button>Add</button></li>
	<li><span>Dog</span><button>Add</button></li>
	<li><span>Bird</span><button>Add</button></li>
</ul>

<!-- Shopping Cart Section -->
<ul class="cart">
    <li><span>Cat</span><button>Remove</button></li>
	<li><span>Dog</span><button>Remove</button></li>
	<li><span>Bird</span><button>Remove</button></li>
	<li><span>Dog</span><button>Remove</button></li>
</ul>
```