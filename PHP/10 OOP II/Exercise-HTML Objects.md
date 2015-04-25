# Exercise: Create a Set of Classes to Represent HTML Form Tags

## Contents:
- Introduction
- Challenge #1: Create a class for input tags
- Challenge #2: Create a class (or two...?) for select and option tags
- Challenge #3: Create a new parent class that extends from HtmlElement
- Challenge #4: Create subclasses of Input for different input types: radio, checkbox, password, email, etc...
- Challenge #5: Update the base class to handle the class and id attributes
- Challenge #6: Keep going...

## Introduction

In this exercise you will create a set of classes to represent HTML for tags. As we have seen it can be pretty ugly to mix HTML and PHP code. Whether we do it in the PHP section or in the HTML section it is still **ugly**. To help alleviate this ugliness we can create a set of classes that represent the HTML elements. Let's look at how such a set of classes might be used. In the PHP section we could create an initialize tag object like this:

```php
<?php
$email_input = new HtmlInput('text', 'email');

if(isset($_POST['email'])) {
    $email_input->value = $_POST['email'];
}
?>
```

And then in the HTML section, inject the tag into the HTML like this:
```html
<form>
  <?php echo $email_input->render(); ?>
</form>
```

This would make for much cleaner code, no?

I will provide a basic HtmlElement class that you can use as a base class and then we will start simply and build up in this order:
- create a class for input tags
- create a class for select and option tags
- update the base class to accommodate the class attribute
- create classes for more tags

Here is a simple starting point for a base class:
```php
class HtmlElement {
    protected $tag_name;
    protected $contents;

    protected function tagAttributes() {
        return '';
    }

    protected function startTag() {
        return '<' . $this->tag_name . ' ' . $this->tagAttributes() . '>';
    }

    protected function endTag() {
        return "</$this->tag_name>";
    }

    public function render() {
        return $this->startTag() . $this->contents . $this->endTag();
    }
}
```

Below is one way you could create a class for the a (anchor) tag:
```php
class AnchorTag extends HtmlElement{
    private $href;

    public function __construct($href, $link) {
        $this->href = $href;
        $this->contents = $link;
    }

    protected function tagAttributes() {
        return 'href="' . $this->href . '"';
    }
}

// create an anchor tag
$a_tag = new AnchorTag('http://popurls.com', 'PopURLs');
```

Then down in the HTML section use it like this:
```html
<p>You ought to check the awesome articles at <?php echo $a_tag->render(); ?></p>
```

### Notes:
- At any point during this exercise, if you find that you are putting repetitive functionality in your sub-classes I encourage you to stop and see if it would make sense to move that functionality up to the parent class.
- Make sure that you are using your classes in a test page and verifying that the correct HTML is being produced and that it looks correct in the browser.

Ready to get at it?

## Challenge #1: Create a class for input tags
In this challenge create a class called InputTag that subclasses HtmlElement. It should be able to handle the common input attributes: name & value.

## Challenge #2: Create a class or two to handle select boxes and the option tags that it contains.
You should create a class called SelectTag, but then you have a choice:
- create a class OptionTag that handles the options inside the select
- just let Select handle and create the option tags itself

Either way will work but I'm sure you will find some pros and cons to each method.

Your SelectTag class **should** be able to make a given option the selected one.

## Challenge #3: Create a new parent class that extends from HtmlElement
At this point you will have probably noticed that there are some similarities between the input and select classes. For instance they both have a name attribute. What a pain to have to handle that over and over!!! Create a class called GenericInputTag that inherits from HtmlElement that encapsulates the name attribute and then update your InputTag and SelectTag to extend from GenericInputTag instead of HtmlElement.

## Challenge #4: Create subclasses of Input for different input types: radio, checkbox, password, email, etc...
While all of these inputs are created with an "input" tag, some of them behave similarly and some of them don't. Create some InputTag subclasses to take into account these similarities and differences.

## Challenge #5: Update the HtmlElement class to handle the class and id attributes

## Challenge #6: Keep going...




