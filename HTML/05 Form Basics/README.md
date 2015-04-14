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
<form action="/server-side/page/to/accept/form" method="POST">
    First Name: <input type="text" name="first_name">
    Last Name: <input type="text" name="last_name">
</form>
```

Some main points:

- The `action` attribute is the filename of the server-side script (such as a PHP file) that the form submits to.
- The `method` attribute is the HTTP method we wish to use (typically `POST` or `GET`)
 - Note that `GET` is the default method of forms, so if you want a form to use `GET`, you can ommit the method attribute alltogether
- Input fields (such as first and last name in this case) must have a `name` attribute to properly submit to the server-side script 


## Practice 

Create the following forms. [See Solution](solution.md)

## Form 1
Create a form with a method of `GET` and input fields for first and last name. Also remember to create a submit button using a `button` tag.

## Form 2
Create a login form with a method of `POST` and an action of `login.php`. Create two fields (one for email and one for password). Create a button with and `input` tag for the button.

## Form 3
Create a form with a method of `GET` and an action of `view_products.php`. Create a dropdown field with three products to choose from plus a stub option in the beginning. Also create a number field with a name of 'quantity' with a default quantity of 10. Include a submit button.
