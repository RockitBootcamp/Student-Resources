# Lesson 10: OOP II

Identifier   | Objectives
-------------|------------
PHP: 10.1    | Explain purpose of Inheritance
             | &bull; Code reuse
             | &bull; Abstraction
             | &bull; Modularity
PHP: 10.2    | Demonstrate Inheritance
PHP: 10.3    | Demonstrate Method Overriding
PHP: 10.4    | Use of visibility keyword:
             | &bull; `protected`

## Resources
- __Video__ [Object Oriented Programming (OOP) for Beginners](https://www.youtube.com/watch?v=w3XUG6oyINI)

## Pre Study

In programming we strive to minify our efforts to write code. We don't repeat ourselves if possible and we make abstractions where we can. Object Oriented Programming allows us to group functionality into classes, but sometimes we might need the same functionality across similar classes. This is where Inheritance comes in.

Imagine we want to make classes that describe the two types of products we have: Cars and Trucks. We might write our code like this:

```php
class Car {
    public $vin;
    public $color;
    $sedan = true;
    
    public function __construct($vin, $color) {
        $this->vin = $vin
        $this->color = $color;
    }

    public isSedan() {
        return $this->isSedan;
    }

    public function getColor() {
        return $this->color;
    }
}

class Truck {
    public $vin;
    public $color;
    public $bedSize = 'small';

    public function __construct($vin, $color) {
        $this->vin = $vin
        $this->color = $color;
    }

    public function getBedSize() {
        return $this->bedSize;
    }

    public function getColor() {
        return $this->color;
    }
}
```

We have two very similar classes and it might be tempting to make one class that has all the methods for both cars and trucks. But that wouldn't be good. We shouldn't have a method called `getBedSize()` for cars - that's a truck thing. So what can we do about the parts that are repetitive?

This is where we can make a parent class `Vehicle`:

```php
class Vehicle {
    public $vin;
    public $color;
    
    public function __construct($vin, $color) {
        $this->vin = $vin
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

class Car extends Vehicle {
    $sedan = true;
    
    public isSedan() {
        return $this->isSedan;
    }
}

class Truck extends Vehicle {
    public $bedSize = 'small';

    public function getBedSize() {
        return $this->bedSize;
    }
}
```

Notice now that `Car` and `Truck` are extending the `Vehicle` class? This creates a relationship between Car and Vehicle. It also creates a relationship between Truck and Vehicle. But note that it does not create a relationship between Car and Truck. Let's show some code to explain:

```php
$myCar = new Car('k2j3h4', 'red');
```

This code will create a new `Car` object. The object is made from the Car and the Vehicle class. So any method in the Vehicle class is available from our `$myCar` object:

```
echo $myCar->getColor() // Output's 'red'
```

Also notice that our `Car` class doesn't have a constructor but the `Vehicle` one does. When we try to access methods of our object `$myCar`, PHP will first look at the child class for the method. If it doesn't find it, it will look for the parent class. So in this case, the constructor on the `Vehicle` is used when we make new cars.

The constructor on the `Vehicle` is also used when we make new trucks. This is an important lesson. When we have a method that is the same for both child classes, we should put that method in the parent class so they can share - as in the constructor and the `getColor()` methods. However, if a method should only belong to one class, then it goes in the child class.

Remember when we stated earlier that Cars are not related to Trucks with this code? Let's examine that more?

```php
$myCar = new Car('k2j3h4', 'red');
$myCar->getBedSize(); // Method not found

$myTruck = new Truck('wqwdfg94', 'blue');
$myTruck->getBedSize(); // Outputs: 'small'
```

This code shows that when we make a Car object, we don't have access to methods in the Vehicle class. And we don't want to! A car object is strictly made of the `Car` and `Vehicle` class. Just as the a truck object is strictly made of the `Truck` and `Vehicle` class

## Overriding

Let's assume we have this code:

```php
class User {
    public $admin = false;

    public function canCreateUsers() {
        return $this->admin;
    }
}

class Admin extends User {
    public $admin = true;
}

$user = new User;
$user->canCreateUsers() // false

$admin = new Admin;
$admin->canCreateUsers() // true
```

The code shows that both `User` and `Admin` classes have the `$admin` property (indicating if the user is an admin). When we make a `$user` object, naturally that object will use the local `$admin` property found in the `User` class. But then notice when we make a `$admin` object and call the `canCreateUsers()` method, the `Admin` class has no such method so the parent one is used. Then that method asks for `$this->admin` but the important lesson to learn here is that the `Admin` class' version of the `$admin` variable is used. In other words. Your child classes have the opportunity to "override" properties from the parent class.

The same is true for methods:

```php
class ParentFoo {
    
    public function doIt() {
        echo 'Parent';
    }

}

class ChildFoo extends ParentFoo {
    
    public function doIt() {
        echo 'Child';
    }

}

$foo = new ChildFoo();
$foo->doIt(); // Output's: Child
```

In this case, it would seem that both the parent and child have the same method. Notice it's the child one that wins.

So what if we want to cal the parent one?

```php
class ParentFoo {
    
    public function doIt() {
        echo 'Parent ';
    }

}

class ChildFoo extends ParentFoo {
    
    public function doIt() {
        parent::doIt();
        echo 'Child';
    }

}

$foo = new ChildFoo();
$foo->doIt(); // Output's: Parent Child
```

In this case, we still call the child version of `doIt()` first. But that child method calls the parent's version of `doIt()`. Notice the new syntax `parent::doIt()`. We'll talk about this syntax in another lesson later, but for know just remember it's how a child method accesses a parent method.

What if we wanted the child method's code to run first before the parent's code? That's easy, we just decide to call the parent method later:

```php
class ParentFoo {
    
    public function doIt() {
        echo 'Parent';
    }

}

class ChildFoo extends ParentFoo {
    
    public function doIt() {
        echo 'Child ';
        parent::doIt();
    }

}

$foo = new ChildFoo();
$foo->doIt(); // Output's: Child Parent
```

Notice the output is now "Child Parent" instead of the other way around.
