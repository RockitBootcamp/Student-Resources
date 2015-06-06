# Lesson 2: Basic Properties

Identifier   | Objectives
-------------|------------
CSS 2.1      | Demonstrate use of Color 
             | &bull; Demonstrate 3 and 6 color hex
             | &bull; Demonstrate named color
             | &bull; Demonstrate `rgba()` and `rgb()`
CSS 2.2      | Use `font` property
CSS 2.3      | Use `background` property
CSS 2.4      | Use `border` property

## Resources
- __W3 Schools__ [CSS Colors](http://www.w3schools.com/cssref/css_colors.asp)
- [Working with typography](http://learn.shayhowe.com/html-css/working-with-typography/)
- __W3 Schools__ [CSS Fonts](http://www.w3schools.com/css/css_font.asp)
- __W3 Schools__ [CSS Backgrounds](http://www.w3schools.com/css/css_background.asp) 
- __W3 Schools__ [CSS Border](http://www.w3schools.com/css/css_border.asp)

## Presentation

- [View Presentation](https://docs.google.com/presentation/d/10tB4ZoyVibNV9IWq2LwEEOgUnO4lO8bDFRojlwtAI4s/edit#slide=id.p)

## Pre Study

### Hex Colors

Colors on the web are historically represented in hexadecimal format (aka "hex" format). The hexadecimal system was not originally designed for expressing colors, but rather is a counting system based on 16 characters. This means we count 0-9 and then A-F. The letter "A" is technically 10, and "B" is 11. 

Let's see example an example:

```
#FF0000
```

Note that the pound sign is just saying we are about to write in hex format. The purpose of having six characters is to utilize the first two for how much Red is in our color, the second pair is how much Green is in our color, and the third pair is how much Blue is in our color. In our case above, we have full red, which is the `FF` and no green and no blue. With 256 possible values of red, 256 or green, and 256 of blue, there are roughly 16 million possible colors that can be expressed with a six character color hex code. While the one above is easy to predict because we know `FF` means full red,most colors are not as easy to predict. Take a look at this one:

```
#FA76BB
```

`FA` is our amount of red, `76` is our amount of green, and `BB` is our amount of blue. With this combination, who knows what color it produces. Just know that if it's six characters of 0-9 and A-F, then it is valid hex and it is a valid color.

Take note that `#000000` is Black and `#FFFFFF` is white. 

If you see the same character in repetition, that will always be a shade of gray: `#777777` or `#AAAAAA`

It's also worth noting that hex is case-insensitive. So `#FA76BB` is the same as `#fa76bb` 

#### Shorthand

Hex colors can be written in a short-hand (three-character) mode in certain cases. Take this color: `#FA5`. If you see the three-character format, just know that every character is meant to be written twice. So `#FA5` is the same as `#FFAA55`

#### Colors in HTML

Colors in HTML can be expressed with hex format as follows:

```css
div {
    color: #ff0000;
    background-color: #99AB11;
}
```

Colors can also be written with their color name words:

```css
div {
    color: blue;
    background-color: magenta;
}
```

### RGB

As a more recent feature of how colors work in the browser, the can be expressed in a new format called RGB. Hex colors were also expressed in Red, Green, Blue format (using hex values), but when we say we're using RGB colors in CSS, we're talking about this format:

```css
div {
    color: rgb(12, 233, 255);
}
```

With the `rgb()` function, we can pass in three values (comma separated) where each value ranges from 0-255. In this case, 0 is Black and 255 is white. 

Note that the same amount of colors can be expressed in either hex or rgb format, the choice is up to you.

### RGBA

RGBA format works almost exactly like RGB format, except for that letter A which stands for Alpha-Transparency. Here's an example of the color red in `rgb()`, then with `rgba()`:

```css
div {
    color: rgb(255, 0, 0);
    color: rgba(255, 0, 0, 0.5);
}
```

Note that the first one in `rgb()` is solid red. The second one in `rgba()` is also red, but it's 50% transparent (that's what alpha-transparency means). While the first three values of this function (the RGB part) can have a range of 0-255, the Alpha part ranges from 0-1 where 0 is completely transparent and 1 is completely opaque (solid)

### `Font` Property

CSS obviously allows you to change aesthetics on the design like fonts and colors. To apply a specif font-family to a DOM element, use the `font-family` property:

```css
h1 {
    font-family: Arial;
}

h2 {
    font-family "Times Roman";
}
```

Note that quote marks are only needed for font names that have spaces, otherwise they can be omitted. 

There are some other common things you can do with fonts as well including their weight and size:

```css
h1 {
    font-family: Arial;
    font-weight: bold;
    font-size: 12pt;
    color: red;
}
```

Note that there is no "font-color" property, it's just "color" instead.

#### Font Weight

Font weights can be expressed as words, such as `normal` or `bold`. They can also be expressed as numbers like `100`, `200`, `300`, `400`, `500`, `600`, `700`, `800`, and `900`.

Note that a font weight of `400` is "normal" and `700` is "bold".

#### Font Size

Font sizes are typically expressed in point (`pt`) or Em (`em`) units. Most people are familiar with points if they've been around computers for a while. Ems are the height of the letter "M" for the respective font size. You can express font sizes in pixels, but that's not normally useful. 

### Font Shorthand

Most CSS properties that use hyphens (like font-weight, font-family, etc.) can be reduced and written in a shorthand mode as follows:

```css
h1 {
    font: bold 20pt Arial;
}
```

Note that sometimes the order matters. It does in the above example for fonts. But there are some other properties (not font) where it doesn't matter as much.

_todo: finish this doc_
