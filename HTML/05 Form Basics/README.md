# Lesson 5: Form Basics

Identifier   | Objectives
-------------|------------
HTML: 5.1    | Explain form syntax with common attributes:
             | &bull; `action`
             | &bull; `method`
HTML: 5.2    | Demonstrate use of `<input>` the element and its HTML4 types:
             | &bull; `<input type="text">`
             | &bull; `<input type="checkbox">`
             | &bull; `<input type="radio">`
             | &bull; `<input type="password">`
             | &bull; `<input type="button">`
             | &bull; `<input type="hidden">`
HTML: 5.3    | Demonstrate how to use the `radio` input field type...
             | &bull; With the `name` attribute to group radio buttons
HTML: 5.4    | Demonstrate how to use `checkbox` input field type
HTML: 5.5    | Demonstrate how to use the `<label>` element...
             | &bull; With the `for` attribute and an `id` on the input field, or...
             | &bull; Wrapped around the input field
HTML: 5.6    | Demonstrate use of the `<select>` element (dropdown field)
             | &bull; With the `<option>` element
HTML: 5.7    | Demonstrate use of the `<button>` element and its various types:
             | &bull; `<button></button>`
             | &bull; `<button type="button"></button>`
             | &bull; `<button type="submit"></button>`
             | &bull; `<button type="reset"></button>`
HTML: 5.8    | Demonstrate the `placeholder` attribute
             | &bull; This is not a substitute for labels 

## Resources

- __W3 Schools__ [HTML Forms](http://www.w3schools.com/html/html_forms.asp)
- __W3 Schools__ [Input Types](http://www.w3schools.com/html/html_form_input_types.asp)

## Extra Study

Here is the proper syntax for a form with two fields inside:

```html
<form action="process.php" method="POST">
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name">
</form>
```

Some main points:

- The `action` attribute is the filename of the server-side script (such as a PHP file) that the form submits to. In this case the action is `process.php`, but it could be any server-side programming language
- The `method` attribute is the HTTP method we wish to use (typically `POST` or `GET`)
 - Note that `GET` is the default method of forms, so if you want a form to use `GET`, you can ommit the method attribute alltogether
- Input fields (such as first and last name in this case) must have a `name` attribute to properly submit to the server-side script 

### Checkboxes

Checkboxes also use the `<input>` tag, just with a `type="checkbox"`. 

```html
<form action="/process.php">
    Water: <input type="checkbox" name="water" value="1">
    Soda: <input type="checkbox" name="soda" value="1">
</form>
```

This form asks the user to choose from a variety of drink choices. But note that since we chose to use checkboxes, the user will be able to select both water and soda.

If this form were submitted with both checkboxes checked, the URL would end up being: `process.php?water=1&soda=1`. 


### Radios

Radio Buttons also use the `<input>` tag, just with a `type="radio"`. 

```html
<form action="/process.php">
    Water: <input type="radio" name="drink" value="water">
    Soda: <input type="radio" name="drink" value="soda">
</form>
```

Similar to before, but now we're using radio instead of checkboxes. This means the user can only choose one choice. We tell the browser that these two fields are related by giving them the same name. In a sense, this makes then the same field. Then we give each `input` a different value.

If this form were submitted with water selected, the URL would end up being: `process.php?drink=water`. 

### Dropdown Menus (Select)

To make a dropdown menu, use the `<select>` tag:

```html
<form action="/process.php">
    State:
    <select name="state">
        <option>Arizona</option>
        <option>California</option>
        <option>Texas</option>
    </select>
</form>
```

Select fields are similar to text fields but they don't let the user type whatever they want. There is a premade list of choices (or options). Note that the `<select>` field only lets the user choose one option (by default) and it bears the `name` attribute for the field, not the options. Then when an option is chosen, the option's text is the value that get's submitted in the form. If this form were submitted with Arizona selected, the URL would end up being: `process.php?state=Arizona`. 

But what if we wanted to show the user the full names of the states, while submitting something different over HTTP?

```html
<form action="/process.php">
    State:
    <select name="state">
        <option value="az">Arizona</option>
        <option value="ca">California</option>
        <option value="tx">Texas</option>
    </select>
</form>
```

By using the `value` attribute on the options, we can ensure that a different value gets sent over HTTP vs. what the user sees.

### Buttons

Something we're missing from the forms above is a submit button. Let's redo the first form but with a button:

```html
<form action="process.php" method="POST">
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name">
    <button>Submit</button>
</form>
```

Note that ordinarily, buttons don't do anything. Unlink links, buttons have nothing similar to an `href` attribute which takes the button somehwere which clicked. There are two primary ways buttons can get their behaviors. The first is to program the button's behavior with JavaScript (which is not the topic of this lesson), and the second way is to have the button nested in a form. By having a button in a form like this will automatically establish the button as a submit button.

Although buttons can have types too, just like input fields:

```html
<button type="button">Generic Button</button>
<button type="submit">Submit</button>
<button type="reset">Reset</button>
```

The `type="button"` one seems a little silly because of the redundancy, but just think of all button elements as being `type="button"` by default. This is true except when the button is in a `<form>`, then the button takes on the `type="submit"` role.

So when would we ever want to do `<button type="button"></button>`?

Let's imagine we had a form with two buttons:

```html
<form action="process.php" method="POST">
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name">
    <button>Submit</button>
    <button type="button">Cancel</button>
</form>
```

In this case, even though the second button says `Cancel`, it would actually be a submit button if we didn't give it a `type="button"` attribute. Having that attribute value means it's not a submit button anymore (and we'll need to program it with JavaScript to get it to do something)

Buttons with `type="reset"` (when placed in a form) will reset all the fields in the form.

### Input Buttons

Input fields can also have these three types:

```html
<input type="button" value="Generic Button">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
```

This is an older way of doing buttons which isn't used as much anymore, but just know that these will create the same buttons as their respective `<button>` elements. Also note that since the `<input>` tag is an empty tag, we use the `value` attribute to denote the visible words of the button.


## Practice 

Create the following forms. [See Solution](solution.md)

## Form 1
Create a form with a method of `GET` and input fields for first and last name. Also remember to create a submit button using a `button` tag.

## Form 2
Create a login form with a method of `POST` and an action of `login.php`. Create two fields (one for email and one for password). Create a button with and `input` tag for the button.

## Form 3
Create a form with a method of `GET` and an action of `view_products.php`. Create a dropdown field with three products to choose from plus a stub option in the beginning. Also create a number field with a name of 'quantity' with a default quantity of 10. Include a submit button.
