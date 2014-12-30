# General

## API
Application Programming Interface - A specification for how a software component interact with other software components.

## ASCII
ASCII is a character-encoding scheme originally based on the English alphabet that encodes 128 specified characters - the numbers 0-9, the letters a-z and A-Z, some basic punctuation symbols, and a blank space. See more: http://en.wikipedia.org/wiki/ASCII

## Assets
The term assets is commonly refers to the various parts that are needed to make a web page after the initial HTML file has loaded into the browser. Assets commonly include CSS, JavaScript, and Image files.

## Blink 
The [Browser Rendering Engine](#user-content-browser-rendering-engine) of Google Chrome since 2013. Chrome used [Webkit](#user-content-webkit) before 2013. See more: http://en.wikipedia.org/wiki/Blink_(layout_engine)

## Browser Compatibility 
A term that describes how well two browsers align in terms of implementing the [W3C's](#user-content-w3c) recommended standards.

## Browser Rendering Engine
The algorithm within browsers that is responsible for turning HTML, CSS, and JavaScript into [DOM](#user-content-dom) and rendering the page into pixels for the page

## CDN
Content Delivery Networks are systems of distributed servers (network) that deliver webpages and other Web content to a user based on the geographic locations of the user, the origin of the webpage and a content delivery server.

## Client
A piece of software (such as a [User Agent](#user-content-user-agent) / Browser) which receives information from a [server](#user-content-server).

## Design Pattern
A commonly understood solution to a recurring problem

## Directory
Another word for “folder” as seen in Finder (OsX) or Windows Explorer (Microsoft Windows)

## Gecko 
The [Browser Rendering Engine](#user-content-browser-rendering-engine) of Mozilla Firefox. See more: http://en.wikipedia.org/wiki/Gecko_(software)

## GET
An [HTTP](#user-content-http) method used to send request parameters through the URL. GET variables are implemented via a [Query String](#user-content-query-string)

## Graceful Degradation
The thought process that developers should create features for more modern browsers first then apply fixes and polyfills second to bring older browsers up to speed. This thought process is sometimes in conflict with [Progressive Enhancement](#user-content-progressive-enhancement).

## HTTP
Hyper Text Transfer Protocol - A set of rules used to transfer data between [Server](#user-content-server) and [Client](#user-content-client)

## Initiate
To start, usually a body of code

## Instantiate 
To create something from a pattern or template

## Nesting
To place within, as in HTML and Code. See more: http://webdesign.about.com/od/beginningtutorials/a/aa090407.htm

## Node
A single point in a [tree structure](#user-content-tree-structure), such as an [Element](#user-content-element) in [DOM](#user-content-dom)

## Progressive Enhancement
The thought process that developers should create widely accessible features first for older browsers, then add "sugar coated" features second for more modern browsers. This thought process is sometimes in conflict with [Graceful Degradation](#user-content-graceful-degradation).

## Path
A naming structure for accessing [directories](#user-content-directory) and files. The path: `Users/brad/Sites` refers to where the "Sites" folder is under the "Users" and "brad" folder

## Polyfill
Code which supplements features into the browser that are not there by default but should be according to the [W3C](#user-content-w3c) standards. Polyfills can sometimes come in the form of a "Shiv" or "Shim"

## POST
An [HTTP](#user-content-http) method used to send request parameters through the HTTP Headers.

## Query String
The part of a URL (or URI) that passes variables from the [Client](#user-content-client) to the [Server](#user-content-server). Typically these variables come after the "?" Question Mark in the URL. Query String variables are a means to create a [GET](#user-content-get) HTTP request.

## Server
A piece of software that responds with information to a [Client](#user-content-client).

## Tree Structure
A tree structure is a way of representing the hierarchy. See Also: http://en.wikipedia.org/wiki/Tree_structure

## Trident
The [Browser Rendering Engine](#user-content-browser-rendering-engine) of Internet Explorer. See more: http://en.wikipedia.org/wiki/Trident_(layout_engine)

## User Agent
A piece of software that is acting on the behalf of a user to make requests on the Internet. In the web industry, browsers are User Agents, which are also known as [Clients](#user-content-client).

## W3C
World Wide Web Consortium - The standards body that establishes the rules of HTML and CSS among other things.

## Webkit
The [Browser Rendering Engine](#user-content-browser-rendering-engine) developed by Apple (for Safari) and Google (for Chrome). It was used in Chrome until 2013 when Chrome switched to [Blink](#user-content-blink). See also: http://en.wikipedia.org/wiki/WebKit

## Whitespace
[ASCII](#user-content-ascii) characters which have no visual representation except spacing (such as a tabs, spaces,  and hard returns).



# HTML: Hypertext Markup Language

## Anchor
Link's in HTML are created with the anchor tag: `<a>`

## Asynchronous
The process of loading [assets](#user-content-assets) simultaneously. This is in contrast with loading assets in [serial](#user-content-serial).

## Attribute
An attribute is a modification to an HTML element, while also providing additional information about it. Where `<div>` is a tag, the "class" of `<div class="highlight">` is an attribute.

## Body 
A HTML `<body>` tag which encompasses the visual portion of your HTML tags.

## Child Element
An [element](#user-content-element) which is nested inside another element. The term "child" in this case refers to the relationship between two elements where the child element is within the [parent element](#user-content-parent-element).

## Container
See [Parent Element](#user-content-parent-element).

## DOM
Document Object Model - A [tree-stucture-like](#user-content-tree-structure) API which allows JavaScript to interact with [HTML Elements](#user-content-element). Sometimes the entire collection of rendered elements is referred to as DOM.

## Element
An HTML Element is the rendered version of an HTML Tag.

## HREF
Hypertext Reference - An [HTML Attribute](#user-content-attribute) used to refer to other documents. Often used by [anchors](#user-content-anchor) to indicate the location a link should point to. "HREF" is also the name of the turtle in the pond at RockIT as named by class 14.1.

## Parent Element
An [element](#user-content-element) which contains other elements. The term "parent" in this case refers to the relationship between two elements where the parent element is the container for [Child Elements](#user-content-child-element).

## Rendering
A process of reading HTML tags and converting them to be [HTML elements](#user-content-element) in the creation of [DOM](#user-content-dom). See also [Browser Rendering Engine](#user-content-browser-rendering-engine).

## Resources
Another term for [Assets](#user-content-assets).

## Semantics 
Using tag names that describe the meaning of the content they contain.

## Serial
A process of loading [assets](#user-content-assets) in sequence such that one thing must finish before the next is allowed to start. This is in contrast with loading assets [asynchronously](#user-content-asynchronous).

## Sibling Element
Two or more [elements](#user-content-element) that belong to the same [parent element](#user-content-parent-element) in a [tree-structure](#user-content-tree-structure).

## Tag
HTML Tags are a syntax for describing content. Tags use greater-than and less-than characters to denote the tag name. Content will have an opening and a closing tag as follows: `<user>Dave Smith</user>`. Where the tag name is "user" which describes the content within - “Dave Smith”.

## Viewport
The visible portion of a website within the browser

# CSS: Cascading Style Sheets

## Box Model
A set of rules that describes how the content of an [element](#user-content-element), its padding, border, and margin are layers and how those layers interact with other element’s box models.

## Cascade
The process in which child [elements](#user-content-element) inherit their parent’s styles.

## Class
An identifying name given to one or more [elements](#user-content-element) which can then be used with a CSS [selectors](#user-content-selector)

## Declaration Block
A group of properties and values belonging to a single [selectors](#user-content-selector)

## CSS Property
In order to change the visual look of a website, CSS properties describe the variety of changes that can be made. The properties behave like settings for the design. Some examples of properties include: color, background-color, border, padding, margin, and font.

## Reset
A "CSS Reset" is a section at the beginning of one's CSS where they attempt to create a new set of defaults as a base for their CSS

## Responsive Design
A technique used to apply different CSS styles based on the viewport size being used by the user.

## Selector 
Selectors are a set of rules that determine which groups of [CSS properties](#user-content-css-property) should apply to which sections on the website.

## CSS Value
CSS Values describe how [CSS properties](#user-content-css-property) should look or behave. For instance, a property might be "background-color" and its value might be "blue"

## Vendor Prefix
Each browser may have "vendor prefixes" which are special [CSS property](#user-content-css-property) prefixes allowing the browser to adopt the [W3C](#user-content-w3c) specification.



# General Programming

## Argument
The value(s) you pass to a [function](#user-content-function)

## Array
An array is a special variable, which can hold more than one value at a time.

## Boolean
A variable type that can hold one of two possible values: true or false

## Concatenation
The operation of combining two or more [strings](#user-content-string) into one.

## Function
A reusable block of code whose purpose is to accomplish a well-defined task.

## Interpolation
The process of populating a string with variables embedded into the string, without [concatenation](#user-content-concatenation)

## Iterate
To do something again and again, usually in the context of a programatic [loop](#user-content-loop)

## Loop
A programming structure that allows code to be executed in repetitions

## Method 
A method is a [function](#user-content-function), but in the context of an [object](#user-content-object).

## Object
A body of code that combines data and functionality which is all interrelated. 

## Parameter
Defined within a function, it specifies an expectation for a specific [argument](#user-content-argument) to be passed in.

## Recursive
"Recursive" or "recursion" is the process of calling one's self

## String
A variable type used to hold a wide variety of [ASCII](#user-content-ascii) (text) characters

# JavaScript

## AJAX
Asynchronous JavaScript and XML: The combination of these technologies allows the [client](#user-content-client) to create [HTTP](#user-content-http) requests to the [server](#user-content-server) without requiring a page refresh

## XHR
XMLHttpRequest - The underlying technology that allows [AJAX](#user-content-ajax) to be possible



# Unix

## Bash
The command-line interpreter that allows a user to interact with the computer in text-based instructions

## Bash Window
A window, commonly black background and white or green text, that runs bash. Common usage: "open up a bash window"

## Command Line
See [Bash](#user-content-bash)

## Command Prompt
The prompt in [bash](#user-content-bash) where the user types in a command

## Shell Script
A collection of [bash](#user-content-bash) commands, saved into a file, that can be ran all at once

## Terminal
See [Bash Window](#user-content-bash-window)
