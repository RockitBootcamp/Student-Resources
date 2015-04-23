# Lesson 9: OOP I

Identifier   | Objectives
-------------|------------
PHP: 9.1    | Demonstrate making a class:
             | &bull; Enclosing class structure
             | &bull; Defining methods
             | &bull; Defining attributes
PHP: 9.2    | Demonstrate making a constructor
PHP: 9.3    | Demonstrate instantiating a class with the `new` keyword
PHP: 9.4    | Demonstrate use of the `this` keyword
PHP: 9.5    | Explain Encapsulation
PHP: 9.6    | Use of visibility keywords:
             | &bull; `public`
             | &bull; `private`

## Exercises

- Exercise 1. Create an animal class with legs and color. Instantiate two different animals
- Exercise 2. Create a furniture class with seatCount. Instantiate two different pieces of furniture.
- Exercise 3. Create a computer class with memorySize, cpuCount, diskSize. Instantiate two different computers.
- Exercise 4. Create a person class with health, name, and method to speak(). When speak() respond with `"Hi my name is: {name}"`
- Exercise 5. Create a vehicle class with fuelAmount, and honk() method. When honk() respond with "Honk honk i have {fuelAount} left"
- Exercise 6. Add a constructor to the person class. Pass the name into the person class.
- Exercise 7. Add a constructor to vehicle that takes the mpg property to vehicle.
- Exercise 8. Add an eat() method to person. When the person eats, health returns to 100%;
- Exercise 9. Add a drive(distance) method to the vehicle class. Where distance is the number of miles driven. Reduce the the fuel by distance / mpg. (fuel = fuel - distance / mpg)
- Exercise 10. Add an attack(person) to the person class. When attack, reduce health by 10 to the attacked person.

**Bonus**
- Exercise 11. Create a weapon class with damageAmount. Instantiate two different weapons with different damage amount
- Exercise 12. Add weapon property to person class. Instantiate two different people with different weapons.
- Exercise 13. Update attack(person) method. When attack, reduce health to person by 10 + weapon.damageAmount
- Exercise 14. Create an armor class with strengthAmount. Add armor as property to person. During attack, damage amount must be more than armor amount to cause any damage.

**Crazy Bonus**
- Exercise 15. Reduce strength of shield by a percentage if attacked.
- Exercise 16. Create potion class with different healthLevel that a person can eat and restore health.


## Resources
- [Object Oriented Thinking](http://www.universocomputacao.com/object-oriented-thinking/)
- [Object Oriented for Beginners](http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762) 
- __PHP.net__ [PHP Basics](http://php.net/manual/en/language.oop5.basic.php)