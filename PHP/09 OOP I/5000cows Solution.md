# 5000 Cows


## Easy Level

```php
class Cow {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

}

$cows = [];
for ($i = 0; $i < 5000; $i++) {
    $cows[] = new Cow('Betsy');
}
```

## Medium Level


```php
class Cow {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

}

$cowNames = ['Sara', 'Betsy', 'Paula', 'Sue'];

$cows = [];
for ($i = 0; $i < 5000; $i++) {
    $name = $cowNames[rand(0, count($cowNames) - 1)];
    $cows[] = new Cow($name);
}

// Cow 300's name
echo $cows[300]->name;
```



## Difficult Level

```php
class Cow {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

}

class Farmer {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function milkCow($cow) {
        echo "Farmer $this->name milked $cow->name the cow<br>";
    }
}

$cowNames = ['Sara', 'Betsy', 'Paula', 'Sue'];

$cows = [];
for ($i = 0; $i < 5000; $i++) {
    $name = $cowNames[rand(0, count($cowNames) - 1)];
    $cows[] = new Cow($name);
}

// Several Farmers
$john = new John('John');
$bob = new John('Bob');
$joAnne = new John('Jo Anne');

// Milk the first five cows
for ($i = 0; $i < 5; $i++) {
    $john->milkCow($cows[$i]);
}
```

