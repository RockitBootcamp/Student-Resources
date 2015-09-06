## Exercises w/ $colors
 coming soon...
 
## Exercises w/ $users
 coming soon...
 
 
## Exercises w/ $pet
### #1: Create ul that has each key/value pair as an li
The PHP code:
```php
$items = '';
foreach($pet as $key=>$value) {
    $items .= "<li>$key: $value</li>";
}
```
The HTML code:
```html
<!-- This -->
<ul><?= $items ?></ul>

<!-- Or This -->
<ul><?php echo $items ?></ul>
```

### #2: Create a form that has a text input for each key in the $pet array
The PHP code:
```php
$inputs = '';
foreach($pet as $key=>$value) {
    $inputs .= '<div>' . $key . ': <input type="text" name="' . $key . '"></div>';
}
```

The HTML code:
```html
<!-- HTML similar to this -->
<form action="" method="get">
    <?= $inputs ?>
    <button>Submit</button>
</form>
```

### #3: update #2 so that inputs display the value from $pets

The PHP code:
```php
$inputs = '';
foreach($pet as $key=>$value) {
    $inputs .= '<div>' . $key .
        ': <input type="text" name="' . $key . '" value="' . $value . '" >';
}
```

The HTML code is the same as for #2

## Exercises w/ strings
 coming soon...
