# Lesson 9: OOP I

Identifier   | Objectives
-------------|------------
PHP: 9.1     | Demonstrate making a class:
             | &bull; Enclosing class structure
             | &bull; Defining methods
             | &bull; Defining attributes
PHP: 9.2     | Demonstrate making a constructor
PHP: 9.3     | Demonstrate instantiating a class with the `new` keyword
PHP: 9.4     | Demonstrate use of the `this` keyword
PHP: 9.5     | Explain Encapsulation
PHP: 9.6     | Use of visibility keywords:
             | &bull; `public`
             | &bull; `private`

 ## Resources
 - [Object Oriented Thinking](http://www.universocomputacao.com/object-oriented-thinking/)
 - [Object Oriented for Beginners](http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762) 
 - __PHP.net__ [PHP Basics](http://php.net/manual/en/language.oop5.basic.php)

## Exercises


### Random
- Create an `Animal` class with `$legs` and `$color` properties. Instantiate two different animals
- Create a `Furniture` class with `$seatCount`. Instantiate two different pieces of furniture.
- Create a `Computer` class with `$memorySize`, `$cpuCount`, `$diskSize`. Instantiate two different computers.

### Vehicle
- Create a `Vehicle` class with `$fuelAmount` as a property and `$honk()` as a method. When `honk()` is called respond with `"Honk honk I have {fuelAount} left"`
 - Add a constructor to `Vehicle` that adds a `$mpg` property to vehicle.
 - Add a `drive($distance)` method to the `Vehicle` class. Where distance is the number of miles driven. Reduce the the fuel by distance / mpg. (fuel = fuel - distance / mpg)

### Person
- Create a `Person` class with `$health`, `$name` properties. And a method to `speak()`. When `speak()` is called, respond with `"Hi my name is ____"`. (But use the person's name)
 - Add a constructor to the `Person` class. Pass the `$name` into the constructor when a person is instantiated.
 - Add an `attack($person)` method to the `Person` class. When a person is attacked, reduce health by 10%.
  - This one is tricky. The idea is something like this: `$bob->attack($james)`. So this is instructing Bob to attack James. Even though we're calling Bob's attack method, it's James who is attacked and who has their health reduced.
 - Add an `eat()` method to the `Person` class. When the person eats, set the health to 100%.


## Bonus Exercises

- Create a `Weapon` class with `$damageAmount` as a property. Instantiate two different weapons with different damage amounts.
- Add a `$weapon` property to the `Person` class. Instantiate two different people with different weapons. (You'll have to create instances of weapons and pass them into the constructor for `Person`)
- Update the `attack($person)` method so when a person is attached, the health is reduced health to person by 10% + the attackers weapon damage amount.
