# Exercises using the $users array

### $users exercise #1: create a ul of users whose name starts with m, display key and value
The PHP code:
```php
$items = '';
foreach($users as $key=>$user) {
    if(substr($user, 0,1) == 'm') {
        $items .= '<li>user #' . $key . ': ' . $user . "</li>\n";
    }
}
```
The HTML code:
```html
<ul><?= $items ?></ul>
```

### $users exercise #2 create a dropdown that shows the name but has the key as the value
The PHP code:
```php
$options = '';
foreach($users as $key=>$user) {
    $options .= '<option value="' . $key . '">' . $user . "</option>\n";
}
```
The HTML code:
```html
<select name="" id="">
    <?= $options ?>
</select>
```

### $users exercise #3: wrap #2 with a form and display the selected user's name when submitted
The PHP code:
```php
$msg = '';
if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $msg = 'Hello ' . $users[$user_id];
}

$options = '';
foreach($users as $key=>$user) {
    $options .= '<option value="' . $key . '">' . $user . "</option>\n";
}
```
The HTML code:
```html
<?php if($msg) { ?>
<h2><?= $msg ?></h2>
<?php } ?>

<form action="">
    <select name="user_id">
        <?= $options ?>
    </select>
    <button>go</button>
</form>
```

### $users exercise #4: same as #3 but only include names that start with 'b' and don't have length 4
The PHP code:
```php
$msg = '';
if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $msg = 'Hello ' . $users[$user_id];
}

$options = '';
foreach($users as $key=>$user) {
    if(strlen($user) != 4 && substr($user, 0, 1) == 'b') {
        $options .= "<option value=\"$key\" selected >$user</option>\n";
    }
}
```
The HTML code:
```html
<?php if($msg) { ?>
<h2><?= $msg ?></h2>
<?php } ?>

<form action="">
    <select name="user_id">
        <?= $options ?>
    </select>
    <button>go</button>
</form>
```

### $users exercise #5: same as #4 but pre-select the option for the user that was previously selected
The PHP code:
```php

```
The HTML code:
```html
$msg = '';
$user_id = null;
if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $msg = 'Hello ' . $users[$user_id];
}

$options = '';
foreach($users as $key=>$user) {
    if(strlen($user) != 4 && substr($user, 0, 1) == 'b') {
        if($key == $user_id) {
            $options .= "<option value=\"$key\" selected >$user</option>\n";
        } else {
            $options .= "<option value=\"$key\" >$user</option>\n";
        }
    }
}
```
Below are 3 different ways to implement the loop above using the ?: (ternary) operator
```php
foreach($users as $key=>$user) {
    if(strlen($user) != 4 && substr($user, 0, 1) == 'b') {
        $selected = ($key === $user_id) ? 'selected' : '';
        $options .= "<option value=\"$key\" $selected >$user</option>\n";
    }
}
```

```php
foreach($users as $key=>$user) {
    if(strlen($user) != 4 && substr($user, 0, 1) == 'b') {
        $options .= ($key === $user_id) ?
            "<option value=\"$key\" selected >$user</option>\n" :
            "<option value=\"$key\" >$user</option>\n";
    }
}

```

```php
foreach($users as $key=>$user) {
    if(strlen($user) != 4 && substr($user, 0, 1) == 'b') {
        $options .= "<option value=\"$key\" " .
            ($key === $user_id) ? 'selected' : '' . " >$user</option>\n";
    
}

```

### $users exercise #6: create a new array where name starts with 'r' and the new array has the keys and values flipped
The PHP code:
```php
$a2 = [];
foreach($users as $key=>$user) {
    if(substr($user, 0, 1) == 'r') {
        $a2[$user] = $key;
    }
}

print_r($a2);
```

