# Exercises w/ $colors

### #1: Create an ordered list of all the colors

The PHP code:
```php
$items = '';
foreach($colors as $color) {
    $items .= "<li>$color</li>"; // or $items .= '<li>' . $color . '</li>'
}
```

The HTML code:
```html
<ul><?= $items ?></ul>
```

### #2: Create a ul that displays 1-based number of the color and its value

The PHP code:
```php
$items = '';
foreach($colors as $idx=>$color) {
    $items .= '<li>color ' . ($idx+1) . ': ' . $color . '</li>';
}
```

The HTML code:
```html
<ul><?= $items ?></ul>
```

### #3: Create a dropdown list of all the colors
The PHP code
```php
$options = '';
foreach($colors as $color) {
    $options .= '<option>' . $color . '</color>';
}
```

The HTML code
```html
<select name="">
    <?= $options ?>
</select>
```

### #4: Create a form with dropdown from #3
The PHP code
```php
$msg = '';
$color_id = '';
if(isset($_GET['color'])) {
    $color_id = $_GET['color'];

    if(isset($colors[$color_id])) {
        $msg = 'you selected : ' . $colors[$color_id];
    }
}

$options = '';
foreach($colors as $idx=>$color) {
    $options .= '<option value="' . $idx . '">' . $color . '</option>';
}
```

The HTML code
```html
<?php if($msg)  { ?>
    <h3><?= $msg ?></h3>
<?php } ?>

<form action="">
    <select name="color">
        <?= $options ?>
    </select>
    <button>go</button>
</form>
```

### #5: Same as #4 but only include colors whose name is longer than 4
The PHP code:
```php
$msg = '';
$get_color = '';
if(isset($_GET['color'])) {
    $get_color = $_GET['color'];
    if(isset($colors[$get_color])) {
        $msg = 'you selected : ' . $colors[$get_color];
    }
}

$options = '';
foreach($colors as $idx=>$color) {
    if(strlen($color) > 4) {
        $options .= '<option value="' . $idx . '">' . $color . '</option>';
    }
}
```

The HTML code:
```html
<?php if($msg)  { ?>
    <h3><?= $msg ?></h3>
<?php } ?>

<form action="">
    <select name="color">
        <?= $options ?>
    </select>
    <button>go</button>
</form>
```

### #6: like #5 but only include colors whose index is odd
The PHP code:
```php
$msg = '';
$get_color = '';
if(isset($_GET['color'])) {
    $get_color = $_GET['color'];
    if(isset($colors[$get_color])) {
        $msg = 'you selected : ' . $colors[$get_color];
    }
}

$options = '';
foreach($colors as $idx=>$color) {
    if($idx % 2 == 1) {
        $options .= '<option value="' . $idx . '">' . $color . '</option>';
    }
}
```

The HTML code:
```html
<?php if($msg)  { ?>
    <h3><?= $msg ?></h3>
<?php } ?>

<form action="">
    <select name="color">
        <?= $options ?>
    </select>
    <button>go</button>
</form>

```

### #7: create a new array of colors which only contains colors whose length is <= 4
The PHP code
```php
$new_array = [];
foreach($colors as $color) {
    if(strlen($color) <= 4) {
        $new_array[]= $color;
    }
}

print_r($new_array);
```

### #8: create a new array of colors which only contains colors whose index is a multple of 3
The PHP code
```php
$new_array = [];
foreach($colors as $idx=>$color) {
    if($idx % 3 == 0) {
        $new_array[]= $color;
    }
}

print_r($new_array);
```
