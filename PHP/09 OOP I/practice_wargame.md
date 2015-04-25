# Wargame

## Person
- Create a `Person` class with `$health`, `$name` properties. And a method to `speak()`. When `speak()` is called, respond with `"Hi my name is ____"`. (But use the person's name)
 - Add a constructor to the `Person` class. Pass the `$name` into the constructor when a person is instantiated.
 - Add an `attack($person)` method to the `Person` class. When a person is attacked, reduce health by 10%.
  - This one is tricky. The idea is something like this: `$bob->attack($james)`. So this is instructing Bob to attack James. Even though we're calling Bob's attack method, it's James who is attacked and who has their health reduced.
 - Add an `eat()` method to the `Person` class. When the person eats, set the health to 100%.


## Bonus Exercises

- Create a `Weapon` class with `$damageAmount` as a property. Instantiate two different weapons with different damage amounts.
- Add a `$weapon` property to the `Person` class. Instantiate two different people with different weapons. (You'll have to create instances of weapons and pass them into the constructor for `Person`)
- Update the `attack($person)` method so when a person is attached, the health is reduced health to person by 10% + the attackers weapon damage amount.