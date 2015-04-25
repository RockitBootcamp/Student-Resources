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

- Create an `Animal` class with `$legs` and `$color` properties. Instantiate two different animals
- Create a `Furniture` class with `$seatCount`. Instantiate two different pieces of furniture.
- Create a `Computer` class with `$memorySize`, `$cpuCount`, `$diskSize`. Instantiate two different computers.
- Create a `Vehicle` class with `$fuelAmount` as a property and `$honk()` as a method. When `honk()` is called respond with `"Honk honk I have {fuelAount} left"`
 - Add a constructor to `Vehicle` that adds a `$mpg` property to vehicle.
 - Add a `drive($distance)` method to the `Vehicle` class. Where distance is the number of miles driven. Reduce the the fuel by distance / mpg. (fuel = fuel - distance / mpg)

## Details Exercises

- [Zookeeper](practice_zookeeper.md)
- [Wargame](practice_wargame.md)
