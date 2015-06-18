# Lesson 2: jQuery Events

Identifier   | Objectives
-------------|------------
jQuery: 2.1  | Explain how JavaScript/jQuery events work and the these common event types:
             | &bull; `click`
             | &bull; `mouseOver`
             | &bull; `keyDown`
             | &bull; `keyUp`
             | &bull; `focus`
             | &bull; `blur`
             | &bull; `submit`
jQuery: 2.2  | Demonstrate a jQuery events with `.on()` method and with event's specific method:
             | &bull; `$('button').on('click', foo);` (with `on` method)
             | &bull; `$('button).click(foo);` (with event method)
jQuery: 2.3  | Explain the `$(this)` keyword in the context of an event callback function

## Resources

- __W3 Schools__ [Event Methods](http://www.w3schools.com/jquery/jquery_ref_events.asp)
- __W3 Schools__ [Event Methods Syntax](http://www.w3schools.com/jquery/jquery_events.asp)
- [jQuery Events](http://channel9.msdn.com/Series/Javascript-Fundamentals-Development-for-Absolute-Beginners/jQuery-Events-16)
- [jQuery Callbacks](http://www.w3schools.com/jquery/jquery_callback.asp)
- __jQuery.com__ [jQuery Event Basics](http://learn.jquery.com/events/event-basics/)


## Exercises
Setup.
- Create a page with a few div with text inside
- Add a couple of spans mixed in
- Add a few textbox elements
- Add a submit button

**Challenge**
1. When you click a div ... console.log 'Hi'
2. When you click a div ... console.log The text of the div
3. When you move over a span console.log the text of the span
4. When you press down on a key in a textbox, console.log "Keydown fired"
5. When you release a keypress (Keyup) in a textbox, console.log "Keyup fired"
6. When the textbox gains focus, add a fancy class (This style should make it look fancy)
7. When the textbox looses focus (blur), remove the fancy class 
8. When you click the submit button console.log "Submitted"

**Medium**
1. When the textbox gains focus, add a fancy class (This style should make it look fancy)
2. When you type in the textbox ... don't allow the letter 'e'

**Crazy**
- Create a hungry hungry hippos game. In this case, the mouse is the ball, and hippos randomly move around.
  - Your goal is to avoid the hippos and make it to the cave. (When you do a hippo is destroyed)
  - Destroy all hippos and move up a level (More hippos that move a little faster)
