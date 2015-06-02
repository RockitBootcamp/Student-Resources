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

## Pre Study

Here is the proper syntax for a form with two fields inside:

```html
<form action="process.php" method="POST">
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name" placeholder="Smith">
</form>
```

Some main points:

- The `action` attribute is the filename of the server-side script (such as a PHP file) that the form submits to. In this case the action is `process.php`, but it could be any server-side programming language
- The `method` attribute is the HTTP method we wish to use (typically `POST` or `GET`)
 - Note that `GET` is the default method of forms, so if you want a form to use `GET`, you can omit the method attribute altogether
- Input fields (such as first and last name in this case) must have a `name` attribute to properly submit to the server-side script 
- You can use a `placeholder` attribute to provide a short hint or example of what should be placed in the field, as shown above with the last name. It should not replace the label, however. 

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

If the `value` attribute is not provided, it will default to "on" when checked and no value when not checked. We can also give the same name to each checkbox and a different value. For example:

```html
<form action="/process.php">
    Water: <input type="checkbox" name="drink" value="water">
    Soda: <input type="checkbox" name="drink" value="soda">
</form>
```

If this second example were submitted with both checkboxes checked, the URL would end up being: `process.php?drink=water&drink=soda`. 

### Radios

Radio Buttons also use the `<input>` tag, just with a `type="radio"`. 

```html
<form action="/process.php">
    Water: <input type="radio" name="drink" value="water">
    Soda: <input type="radio" name="drink" value="soda">
</form>
```

Similar to before, but now we're using radio instead of checkboxes. This means the user can only choose one choice. We tell the browser that these two fields are related by giving them the same name. In a sense, this makes them the same field. Then we give each `input` a different value.

If this form were submitted with water selected, the URL would end up being: `process.php?drink=water`. 

### Label element

The `<label>` element is used to define a label for an `<input>` element and can be used two ways. You can either nest the `<input>` element within the `<label>` element or use the `for` attribute, with a value equal to the input's `id`, to connect the label with the appropriate input. Let's use the `<label>` element in our first example for First Name and Last Name. We'll use the two different types to show how it works, but you will want to be consistent and use the same type when creating your own form.

```html
<form action="process.php" method="POST">
    <label>First Name: <input type="text" name="first_name"></label>
    <label for="last_n">Last Name: </label><input type="text" id="last_n" name="last_name">
</form>
```

Using the `<label>` element does not look any different to the user, but it adds a new behavior. When the `<label>` element is used, the user can click on the text for the label and it will put the cursor in the connected input field. 

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

Select fields are similar to text fields but they don't let the users type whatever they want. There is a pre-made list of choices (or options). Note that the `<select>` field only lets the user choose one option (by default) and it bears the `name` attribute for the field, not the options. Then when an option is chosen, the option's text is the value that get's submitted in the form. If this form were submitted with Arizona selected, the URL would end up being: `process.php?state=Arizona`. 

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

Something we're missing from the forms above is a submit button. Let's redo the first form, but with a button:

```html
<form action="process.php" method="POST">
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name">
    <button>Submit</button>
</form>
```

Note that, ordinarily, buttons don't do anything. Unlink links, buttons have nothing similar to an `href` attribute which takes the button somewhere when clicked. There are two primary ways buttons can get their behaviors. The first is to program the button's behavior with JavaScript (which is not the topic of this lesson), and the second way is to have the button nested in a form. By having a button in a form, like this, it will automatically establish the button as a submit button.

Although buttons can have types, too, just like input fields:

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

This is an older way of doing buttons that isn't used as much anymore, but just know that these will create the same buttons as their respective `<button>` elements. Also note that since the `<input>` tag is an empty tag, we use the `value` attribute to denote the visible words of the button.


## Practice 

Create the following forms. [See Solution](solution.md)

## Form 1
Create a form with a method of `GET` and input fields for first and last name. Also remember to create a submit button using a `button` tag.

## Form 2
Create a login form with a method of `POST` and an action of `login.php`. Create two fields (one for email and one for password). Create a button with and `input` tag for the button.

## Form 3
Create a form with a method of `GET` and an action of `view_products.php`. Create a dropdown field with three products to choose from plus a stub (blank) option in the beginning. Also create a number field with a name of 'quantity' with a default quantity of 10. Include a submit button.
