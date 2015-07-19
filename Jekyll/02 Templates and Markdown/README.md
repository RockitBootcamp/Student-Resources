# Lesson 2: Templates and Markdown

Identifier   | Objectives
-------------|------------
Jekyll: 2.1  | Demonstrate basic markdown syntax
             | &bull; How to make headers
             | &bull; How to make paragraphs
             | &bull; How to make links
             | &bull; How to make bullet and numbered lists
Jekyll: 2.2  | Demonstrate YAML syntax
Jekyll: 2.3  | Explain template hierarchies with the `layout` property in YAML
Jekyll: 2.4  | Explain the use of the `{{ content }}` directive
Jekyll: 2.5  | Demonstrate how to use includes with `{% include [filename] %}`


## Resources

- [GitHub Flavored Markdown (GFM)](https://help.github.com/articles/github-flavored-markdown/)
- [Jekyll Template Documentation](http://jekyllrb.com/docs/templates/)

## Pre Study

### Headers

`# Example Header` analogous to an `<h1>` tag
`## Example Header` analogous to an `<h2>` tag
`###### Example Header` analogous to an `<h6>` tag

### Paragraphs

One or more lines of consecutive text followed by one or more blank lines

```md
This is a paragraph

This is another paragraph
```

### Links

```md
[Example Link](http://www.example.com)
```

### Lists

#### Unordered Lists

Denoted using `*` or `-`

```md
* Banana
* Apple
* Kiwi
```

#### Ordered Lists
```md
1. Item one
2. Item two
3. Item three
```

#### Nesting
Indent two spaces to nest lists:

```md
1. Item one
  * Subitem
  * Subitem
  * Subitem
2. Item two
3. Item three
```

## YAML Syntax

```yaml
---
vehicle:
  make: Subaru
  model: Sidekick
  year: 1991
  safetyFeatures: [ABS, 4-Wheel Drive, Turn Signals]
---
```

### Data Types

```yaml
---
a: 123                     # integer
b: example                 # string
c: "123"                   # string, disambiguated by quotes
d: 123.0                   # float
e: !!float 123             # float, explicit using !!
f: !!str 123               # string, explicit using !!
g: !!str Yes               # string, explicit using !!
h: Yes                     # boolean True
i: No					   # boolean False
---
```
