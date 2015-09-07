# Exercises using strings

### exercise #0: implement implode()
```php
function my_implode($items, $glue='') {
    $output = '';
    for($i=0; $i < count($items); $i++) {
        if($i > 0) {
            $output .= $glue;
        }
        $output .= $items[$i];
    }
}
```

### exercise #1: implement a function that will return the nth character of the string (1-based, not 0-based)
```php
function nth_char($input, $n) {
    return substr($input, $n-1, 1);
}
```

### exercise #2: implement strlen()
```php
function my_strlen($input) {
    $length = 0;
    while(substr($input, $length, 1)) {
        $length++;
    }
    return $length;
}
```

### exercise #3: implement substr()
```php
// does not support negative values for $start or $length
function my_substr($input, $start, $length) {
    $output = false;
    $chars = str_split($input);
    for($i = $start; $i < count($chars) && $i < $start+$length; $i++) {
        $output .= $chars[$i];
    }
    return $output;
}
```

### exercise #4: implement strrev()
```php
function my_strrev($input) {
    $output = '';
    for($i = strlen($input)-1; $i >= 0; $i--) {
        $output .= substr($input, $i, 1);
    }
    return $output;
}
```

### exercise #5: implement strpos
```php
function my_strpos($input, $find, $start=0) {
    $last_start = strlen($input) - strlen($find);
    for($i=$start; $i <= $last_start; $i++) {
        if(substr($input, $i, strlen($find)) == $find) {
            return $i;
        }
    }
    return false;
}
```


