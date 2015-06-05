# Lesson 6: Resets

Identifier   | Objectives
-------------|------------
CSS: 6.1     | Explain the general purpose of a CSS reset
CSS: 6.2     | Explain CSS inheritance
CSS: 6.3     | Explain Erik Meyer's CSS Reset
CSS: 6.4     | Explain Normalize.css

## Resources
- [What is a CSS Reset](http://www.cssreset.com/what-is-a-css-reset/)
- [Erik Meyer's CSS Reset](http://meyerweb.com/eric/tools/css/reset/index.html)
- __GitHub__ [Normalize.css](https://github.com/necolas/normalize.css/)

## Good CSS Organization

CSS should be organized by the role in plays in your project. There are many philosophies and patterns to good CSS organization. As a beginner, start thinking of all CSS as falling into one of these four roles:

- Reset (Normalize)
- Defaults
- Layout
- Components

When you create your CSS file, you might want to separate these roles with big comment blocks:

```css
/****************************************
  Reset
*****************************************/

...


/****************************************
  Layout
*****************************************/

... etc.
```

## Inherited Styles

In the olden days, CSS developers made resets that looked like this:

```css
* {
    margin: 0;
    padding: 0;
    font-family: Arial;
    etc...
}
```

The problem with using the `*` universal selector this way is that it ruins the "cascade". A better way to apply reset values is to apply properties to the `html` tag then use `*` to inherit the properties from the `html` tag.

An example could be like this:

```css
html {
    font-family: Arial;
}

* {
    font-family: inherit
}
```

While popular resets like **normalize.css** do a lot of great things for you, it might be necessary to add your own reset CSS after you bring in theirs. For example, **normalize.css** doesn't setup box-sizing which might be something you want. Further, a reset won't have an opinion on what font should be applied to your project by default. 

Here is an example of what you might want to do at the top of your CSS file. This assumes you just brought in normalize.css

```css
html {
    box-sizing: border-box;
    color: #444;
    font: 12pt 'Open Sans', Arial;
    font-weight: normal;
}

*, *::before, *::after {
    box-sizing: inherit;
    color: inherit;
    font: inherit;
}
```

See https://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ for further reading