# CSS Basic Selector Strategy Solution

## One

```css
div nav li:first-child {}
```

Considerations:
- We don't need to include `ul` to get to our target
- `div li:first-child` would also select "three"
- `nav li:first-child` would also select "four"

## Two

```css
div nav li:last-child {}
```

## Three

```css
div > ul li {}
```

Considerations
- We need to go after the first child `ul` of `div` so we leave out the one that's in `nav`

## Four

```css
body > nav li:first-child {}
```

Considerations
- "four" doesn't exist in `div` but does in `nav`. So what is unique about this `nav` that we can select that is not true of the other ones; it is the only `nav` that is a direct child of `body`